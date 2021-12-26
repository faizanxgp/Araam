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

$sql = "select * from customers where id = '$id' ";
$result = $db->query_first($sql);

if ($db->affected_rows == 0) {
    $error = 1;
    $message .= "Not Found <br />";
}

$email = $result["email"];
$user_id = $id;
$user_name = $result["customername"];

if ($error == 0) {
    $token = md5(crypt($email, "araam"));

    if ($token == $action) {

        $name = $result["requestby"];
        $mobile = $result["mobile"];

        //$sql2 = "select id from customers where email = '$email'";
        //$result2 = $db->query_first($sql2);
        //if ($db->affected_rows == 0) {
        //$d2["customername"] = $name;
        //$d2["phone"] = $mobile;
        //$d2["email"] = $email;
        $d2["status"] = "active";
        $d2["email_verified"] = 1;

        //$pass = unique_id();
        //$d2["cryptpass"] = crypt($pass, "araam");
        $primary_id = $db->update("customers", $d2, "id=$id");
    } else {
        $error = 1;
        $message .= "Invalid Token<br />";
    }

    /*
     * 
      // update userid in requests

      $sql = "update servicerequest set user_id = '$primary_id' where email = '$email' and user_id = '0' limit 1";
      $db->query($sql);

      $customerinfo = "Username :" . $email . "\r\n" . "Password: " . $pass;

      // send user name
      // get template
      $string = getfile(BASEPATH . "/includes/email_newcustomerpass.txt");

      // replace variables

      $patterns = array();
      $patterns[0] = '/%user_name%/';
      $patterns[1] = '/%user_email%/';
      $patterns[2] = '/%user_info%/';

      $replacements = array();
      $replacements[0] = $name;
      $replacements[1] = $email;
      $replacements[2] = $customerinfo;

      $string2 = preg_replace($patterns, $replacements, $string);
      //$string2 = nl2br($string2);

      $subj = "Your login details for Araam.PK";

      send_email($email, $subj, $string2, $globalemailaddress);
     */
}

if ($error == 0) {
    
    $sessid = session_id();
                    $_SESSION["userid"] = $user_id;
                    $_SESSION["username"] = $user_name;
                    $_SESSION["userlogin"] = $sessid; // session id
                    
                    
    
    
    
    $smarty->assign("message", 'Your email is verified Now');
    //$smarty->assign("messagetitle", 'Welcome to Araam.PK');
    //$smarty->assign("messagedetails", '<p>Your email is verified now, please proceed with dashboard.</p>');
    //$smarty->display('messages.tpl');
    header("Location: " . SITE_ROOT . "/dashboard");
    
    
    
    
} else {

    $smarty->assign("message", 'Error Processing');
    $smarty->assign("messagetitle", 'There is some problem.');
    $smarty->assign("messagedetails", '<p>Please contact with administrator.</p>');
    $smarty->display('messages.tpl');
}

function unique_id($l = 8) {
    return substr(md5(uniqid(mt_rand(), true)), 0, $l);
}
