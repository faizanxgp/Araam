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


if (!isset($_SESSION["contractorid"])) {
    header("Location: " . SITE_ROOT . "contractors/ac-login");
}
$action = "";
$psid = 0;
if (isset($getVars["action"])) {
    $action = $getVars["action"];
}
if (isset($getVars["id"])) {
    $psid = $getVars["id"];
}

$message = "";
$contractor_id = $_SESSION["contractorid"];

switch ($action) {
    case 'update':

        if (isset($_POST['submit01'])) {

            $d2 = $_POST;
            
            // file upload 
            $valid_formats = array("jpg", "png", "gif", "jpeg", "bmp");
            $max_file_size = 1024 * 1024 * 2; //2MB 
            $path = "logouploads/"; // Upload directory
            $count = 0;
/*
            if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
                // Loop $_FILES to exeicute all files
                //foreach ($_FILES['logo']['name'] as $f => $name) {
                    $name = $_FILES['logo']['name'];
                    if ($_FILES['logo']['error'] == 4) {
                        continue; // Skip file if any error found
                    }
                    if ($_FILES['logo']['error'] == 0) {
                        if ($_FILES['logo']['size'] > $max_file_size) {
                            $message[] = "$name is too large!.";
                            continue; // Skip large files
                        } elseif (!in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats)) {
                            $message[] = "$name is not a valid format";
                            continue; // Skip invalid file formats
                        } else { // No error found! Move uploaded files 
                            if (move_uploaded_file($_FILES["logo"]["tmp_name"], $path . $name)) {

                                $count++; // Number of successfully uploaded file
                                if ($count > 1) break;
                                
                                $d2["business_logo"] = $path . $name;
                            }
                        }
                    }
                //}
            } */

// end of file upload 
            
            
            unset($d2["logo"]);
            unset($d2["submit01"]);

            $d2["provider_id"] = $contractor_id;

            $sql = "select * from profiles where provider_id = '$contractor_id' ";
            $result = $db->query_first($sql);

            if ($db->affected_rows > 0) {
                $p_id = $result["id"];
                $db->update("profiles", $d2, "id='$p_id'");
            } else {
                $primary_id = $db->insert("profiles", $d2);
            }
        }
        // process template

        $result2 = contractordata();

        $smarty->assign("d", $result2);
        $smarty->assign("gr_city", $gr_city);
        $smarty->assign("message", '');
        $smarty->display('contractor/updateprofile.tpl');

        break;


    case 'services':

        $sql3 = "SELECT ps . * , ss.subservice FROM `profileservices` ps LEFT OUTER JOIN subservice ss ON ss.id = ps.service_id WHERE provider_id = '$contractor_id' LIMIT 0 , 30";


        $result3 = $db->fetch_array($sql3);




        $smarty->assign("data1", $result3);
        //$smarty->assign("gr_service", $services);
        $smarty->assign("message", '');
        $smarty->display('contractor/serviceprofile.tpl');

        break;


    case 'updateservice':


        if (isset($_POST['submit01'])) {

            $d2 = $_POST;
            // file upload 
            $valid_formats = array("jpg", "png", "gif", "jpeg", "bmp");
            $max_file_size = 1024 * 1024 * 2; //2MB 
            $path = "serviceuploads/"; // Upload directory
            $count = 0;

            if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
                // Loop $_FILES to exeicute all files
                foreach ($_FILES['attach']['name'] as $f => $name) {
                    if ($_FILES['attach']['error'][$f] == 4) {
                        continue; // Skip file if any error found
                    }
                    if ($_FILES['attach']['error'][$f] == 0) {
                        if ($_FILES['attach']['size'][$f] > $max_file_size) {
                            $message[] = "$name is too large!.";
                            continue; // Skip large files
                        } elseif (!in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats)) {
                            $message[] = "$name is not a valid format";
                            continue; // Skip invalid file formats
                        } else { // No error found! Move uploaded files 
                            if (move_uploaded_file($_FILES["attach"]["tmp_name"][$f], $path . $name)) {

                                $count++; // Number of successfully uploaded file
                                if ($count > 10) break;
                                $key = "image" . $count;
                                $d2[$key] = $path . $name;
                            }
                        }
                    }
                }
            }

// end of file upload 


            unset($d2["attach"]);
            unset($d2["submit01"]);

            $d2["provider_id"] = $contractor_id;

            $sql = "select * from profileservices where id = '$psid' ";

            $result = $db->query_first($sql);

            if ($db->affected_rows > 0) {
                //$p_id = $result["id"];
                $db->update("profileservices", $d2, "id='$psid'");
            } else {
                $primary_id = $db->insert("profileservices", $d2);
            }
            header("Location: " . SITE_ROOT . "contractor/profile/ac-services");

            
        }
        // process template

        $sql3 = "SELECT id, subservice FROM `subservice` WHERE STATUS = 'active' ORDER BY service_id, subservice";
        $result3 = $db->fetch_array($sql3);
        $services = array();
        foreach ($result3 as $k => $v) {
            $id = $v["id"];
            $services[$id] = $v["subservice"];
        }

        $sql4 = "select * from profileservices where id = '$psid'  limit 1";

        $result2 = $db->query_first($sql4);

        if ($db->affected_rows == 0) {
            $result2["id"] = 0;
            $result2["provider_id"] = 0;
            $result2["service_id"] = 0;
            $result2["service_title"] = "";
            $result2["service_description"] = "";
        }

        $smarty->assign("d", $result2);
        $smarty->assign("gr_service", $services);
        $smarty->assign("message", '');
        $smarty->display('contractor/updateserviceprofile.tpl');

        break;

    default:
        $smarty->assign("message", '');
        $smarty->display('contractor/main.tpl');
        break;
}

function contractordata() {
    global $db, $contractor_id;
    $sql3 = "select * from profiles where provider_id = '$contractor_id' limit 1";
    $result = $db->query_first($sql3);
    return $result;
}

function contractordata2() {
    global $db, $id;
    $sql3 = "select * from profileservices where id = '$id'  limit 1";
    $result = $db->query_first($sql3);
    return $result;
}

function contractordata3() {
    global $db, $contractor_id;
    $sql3 = "select * from profileservices where id = '$contractor_id' limit 1";
    $result = $db->query_first($sql3);
    return $result;
}
