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

// this page may be access without login
//if (isset($_SESSION["adminid"]))
//    header("Location: index.php?admin/admin&action=login");

$action = "";
if (isset($getVars["action"])) {
    $action = $getVars["action"];
}
$message="";
switch ($action) {
    case 'login':
        if (isset($_POST['usersubmit'])) {
            $username = $_POST['adminemail']; // name is different than field
            $password = $_POST['adminpassword'];

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

                $sql = "select * from admin_table WHERE `email` = '$username' AND `cryptpass` = '$mpassword'";
                $result = $db->query_first($sql);
                
                if ($db->affected_rows > 0 or 1) {

                    $admin_id = $result["id"];
                    $admin_name = $result["name"];
                    $admin_level = 1; //$result[admin_level];

                    $sessid = session_id();
                    $_SESSION["adminid"] = $admin_id;
                    $_SESSION["adminname"] = $admin_name;
                    $_SESSION["adminlevel"] = $admin_level;
                    $_SESSION["adminlogin"] = $sessid; // session id

                    //$sql = "update admin_table set last_login = now() where `id` = '$admin_id' limit 0,1";
                    //$result = $db->query($sql);

                    header("Location: index.php?admin/main");
                } else {
                    $message = "Invalid Username or Password, Try again";
                    //$smarty->assign('admin_username', $admin_username);
                    $smarty->assign("message", $message);
                    $smarty->display('admin/login.tpl');
                }
            } else {
                //$smarty->assign('admin_username', $admin_username);
                
                $smarty->assign("message", $message);
                $smarty->display('admin/login.tpl');
            }
        } else {
            // process template
            $smarty->assign("message", '');
            $smarty->display('admin/login.tpl');
        }
        break;

    case 'logout':
        unset($_SESSION["adminid"]);
        unset($_SESSION["adminname"]);
        unset($_SESSION["adminlevel"]);
        unset($_SESSION["adminlogin"]);

        header('location: index.php');


    case 'forgot':
        break;
    
    

    default:
        
        
        
        
        $smarty->assign("message", '');
        $smarty->display('admin/login.tpl');
        break;
}
?>