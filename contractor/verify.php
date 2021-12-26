<?php

defined("BASEPATH") or die("");

// check access
//if ($auth == 0) {
//    //header('location: login.php');
//}
$error = 0;
// check for variables from url
//if ($action == 'logout') {
//    session_destroy();
//    header("Location: login.php");
//}
// java script for delete confirmation
// posted data

$action = "";
if (isset($getVars["action"])) {
    $action = $getVars["action"];
}
$id = "";
if (isset($getVars["id"])) {
    $id = $getVars["id"];
}

$message = "";

// email unique
$sql = "select id, contact_person, cryptpass from providers where id = '$id' ";
$result = $db->query_first($sql);

$contractor_id = $id;
$contractor_name = $result["contact_person"];

if ($db->affected_rows == 0) {
    $error = 1;
    $message .= "Not Found <br />";
}

if ($error == 0) {
    $pass = md5($result["cryptpass"]);

    
    if ($pass == $action) {
        $d["status"] = "active";
        $d["email_verified"] = 1;
        $db->update('providers', $d, "id='$id'");

        $smarty->assign("message", 'Email Verified');
        //$smarty->assign("messagetitle", 'Welcome to Araam.PK');
        //$smarty->assign("messagedetails", '<p>Your email is verified, please login and proceed by purchasing credits.</p>');
        //$smarty->display('messages.tpl');

        $sessid = session_id();
        $_SESSION["contractorid"] = $contractor_id;
        $_SESSION["contractorname"] = $contractor_name;
        $_SESSION["contractorlevel"] = 1;
        $_SESSION["contractorlogin"] = $sessid; // session id
        // redirect to dashboard
        // TODO
        
        
        sleep(1);
        header("Location: " . SITE_ROOT . "contractor/main");
        break;
    } else {

        $smarty->assign("message", '');
        $smarty->assign("messagetitle", 'There is some problem.');
        $smarty->assign("messagedetails", '<p>Please contact with administrator.</p>');
        $smarty->display('messages.tpl');
        break;
    }
} else {
    header("Location: " . SITE_ROOT . "contractors/ac-login");
}