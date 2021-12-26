<?php

defined("BASEPATH") or die("");

$action = "";
if (isset($getVars["action"])) {
    $action = $getVars["action"];
}
$error=0;
$message = "";
$message2 = "";
if (isset($getVars["message"])) {
    $message2 = $getVars["message"];
}

switch ($action) {

    case 'login':
        // customer login
        if (isset($_POST['usersubmit'])) {
            
            $username = $_POST['useremail']; // name is different than field
            $password = $_POST['userpass'];

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

                $sql = "select * from customers WHERE `email` = '$username' AND `cryptpass` = '$mpassword'";
                $result = $db->query_first($sql);
                if ($db->affected_rows > 0) {

                    $user_id = $result["id"];
                    $user_name = $result["customername"];
                    $user_level = 1; //$result[user_level];

                    $sessid = session_id();
                    $_SESSION["userid"] = $user_id;
                    $_SESSION["username"] = $user_name;
                    $_SESSION["userlogin"] = $sessid; // session id

                    //$sql = "update providers set last_login = now() where `id` = '$user_id' limit 0,1";
                    //$result = $db->query($sql);
                    
                    $_SESSION["smessage"] = "";
                    
                    header("Location: " . SITE_ROOT . "dashboard");
                    
                } else {
                    $message = "Invalid Username or Password, Try again";
                    //$smarty->assign('user_username', $user_username);
                    $smarty->assign("message", $message);
                    $smarty->display('login.tpl');
                }
            } else {
                //$smarty->assign('user_username', $user_username);
                
                $smarty->assign("message", $message);
                $smarty->display('login.tpl');
            }
        } else {
            // process template
            $smarty->assign("message", '');
            $smarty->display('login.tpl');
        }
        break;

    case 'logout':
        // customer logout
        unset($_SESSION["userid"]);
        unset($_SESSION["username"]);
        unset($_SESSION["userlogin"]);
        
        $location = SITE_ROOT . "";
        header("Location: " . $location);
       
        break;

    case 'forgot':
        // customer forgot password
        $smarty->assign("message", "");
        $smarty->display('forgot.tpl');
        break;

    case 'update':
        // customer forgot password
        $smarty->assign("message", "");
        $smarty->display('update.tpl');
        break;

    default:
        // main page
        $areaquery = "SELECT `area` FROM area WHERE `status` = 'active' ORDER BY area";
        $areadata = $db->fetch_array($areaquery);
        $smarty->assign("areadata", $areadata);

        $servicequery = "SELECT `subservice` FROM `subservice` WHERE `status` = 'active' order by subservice";
        $servicedata = $db->fetch_array($servicequery);
        $smarty->assign("servicedata", $servicedata);

        $smarty->assign("message", "");
        $smarty->assign("message2", "");
        $smarty->display('main.tpl');

        break;
}