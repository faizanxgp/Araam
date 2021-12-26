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
//if (isset($_SESSION["contractorid"]))
//    header("Location: index.php?contractor/contractor?action=login");

$action = "";
if (isset($getVars["action"])) {
    $action = $getVars["action"];
}
$message = "";

switch ($action) {
    case 'login':
        if (isset($_POST['usersubmit'])) {
            $username = $_POST['contractoremail']; // name is different than field
            $password = $_POST['contractorpassword'];

            if ($username == "") {
                $error = 1;
                $message .= "Please enter your username<br />";
            }
            if ($password == "") {
                $error = 1;
                $message .= "Please enter password<br />";
            }

            if ($error == 0) {
                $mpassword = crypt($password, "araam");


                $sql = "select * from providers WHERE `email` = '$username' AND `cryptpass` = '$mpassword' AND status = 'active' ";
                $result = $db->query_first($sql);

                if ($db->affected_rows > 0) {

                    $contractor_id = $result["id"];
                    $contractor_name = $result["contact_person"];
                    $contractor_level = 1; //$result[contractor_level];

                    $sessid = session_id();
                    $_SESSION["contractorid"] = $contractor_id;
                    $_SESSION["contractorname"] = $contractor_name;
                    $_SESSION["contractorlevel"] = $contractor_level;
                    $_SESSION["contractorlogin"] = $sessid; // session id
//$sql = "update providers set last_login = now() where `id` = '$contractor_id' limit 0,1";
//$result = $db->query($sql);

                    $location = SITE_ROOT . "contractor/main";
                    header("Location: " . $location);
                    break;
                } else {
                    $message = "Invalid Username or Password, Try again";
//$smarty->assign('contractor_username', $contractor_username);
                    $smarty->assign("message", $message);
                    $smarty->display('contractor/login.tpl');
                }
            } else {
//$smarty->assign('contractor_username', $contractor_username);

                $smarty->assign("message", $message);
                $smarty->display('contractor/login.tpl');
            }
        } else {
// process template
            $smarty->assign("message", '');
            $smarty->display('contractor/login.tpl');
        }
        break;

    case 'logout':
        unset($_SESSION["contractorid"]);
        unset($_SESSION["contractorname"]);
        unset($_SESSION["contractorlevel"]);
        unset($_SESSION["contractorlogin"]);

        $location = SITE_ROOT . "contractor/main";
        header("Location: " . $location);


    case 'forgot':
        $smarty->assign("message", $message);
        $smarty->display('contractor/forgot.tpl');
        break;

    case 'signup':

        if (isset($_POST["usersubmit"])) {
// process
            $d = $_POST;

            $email = $d["email"];
// validation
// check for duplicate
            $sql = "select id from providers where email = '$email' ";
            $result = $db->query_first($sql);

            if ($db->affected_rows > 0) {
                $error = 1;
                $message .= "Email already exists <br />";
            }

            $pass1 = $d["pass1"];
            $pass2 = $d["pass2"];

            if (empty($pass1) OR $pass1 <> $pass2) {
                $error = 1;
                $message .= "Passwords does not match <br />";
            }

            if ($error == 0) {

                unset($d['pass1']);
                unset($d['pass2']);
                unset($d['usersubmit']);

                $d["cryptpass"] = crypt($pass1, "araam");

                $d["status"] = "active";

// insert in db
                $primary_id = $db->insert("providers", $d);

                $code = md5(crypt($pass1, "araam"));

                $url = SITE_ROOT . "contractor/verify/id-" . $primary_id . "/ac-" . $code;


// send email
// 
                $email = $d["email"];
                $name = $d["contact_person"];
// get template
                $string = getfile(BASEPATH . "/includes/email_newcontractor.txt");

// replace variables

                $patterns = array();
                $patterns[0] = '/%user_name%/';
                $patterns[1] = '/%user_email%/';
                $patterns[2] = '/%url%/';
                $patterns[3] = '/%password%/';
                
                $replacements = array();
                $replacements[0] = $name;
                $replacements[1] = $email;
                $replacements[2] = $url;
                $replacements[3] = $pass1;
                

                $string2 = preg_replace($patterns, $replacements, $string);

                //$string2 = nl2br($string2);

                $subj = "Welcome to Araam.PK ";

                send_email($email, $subj, $string2, $globalemailaddress, "araampk@gmail.com");

// auto login 
                $contractor_id = $primary_id;
                $contractor_name = $name;
                $contractor_level = 1; //$result[contractor_level];

                $sessid = session_id();
                $_SESSION["contractorid"] = $contractor_id;
                $_SESSION["contractorname"] = $contractor_name;
                $_SESSION["contractorlevel"] = $contractor_level;
                $_SESSION["contractorlogin"] = $sessid; // session id
                // redirect to dashboard

                header("Location: " . SITE_ROOT . "/contractor/main");

                /*
                  $smarty->assign("message", 'Account Created');
                  $smarty->assign("messagetitle", 'Welcome to Araam.PK');
                  $smarty->assign("messagedetails", '<p>Thanks for signing up with Araam.PK. Our staff will review your application and get back to you. <br /><br />An email has been sent to verify your email address.</p>');
                  $smarty->display('messages.tpl'); */
            } else {
                $smarty->assign("gr_city", $gr_city);
                $smarty->assign("message", $message);
                $smarty->display('contractor/signup.tpl');
            }
        } else {
            $smarty->assign("gr_city", $gr_city);
            $smarty->assign("message", '');
            $smarty->display('contractor/signup.tpl');
        }
        break;

    default:
        $smarty->assign("message", '');
        $smarty->display('contractor/login.tpl');
        break;
}