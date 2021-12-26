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
if (isset($getVars["action"])) {
    $action = $getVars["action"];
}

$message = "";
$contractor_id = $_SESSION["contractorid"];

switch ($action) {
    case 'update':

        if (isset($_POST['submit01'])) {

            $d2 = $_POST;

            $d["contact_person"] = safe($d2["contact_person"]);
            $d["phone"] = safe($d2["phone"]);
            $d["mobile"] = safe($d2["mobile"]);
            $d["email"] = safe($d2["email"]);

            $d["company_name"] = safe($d2["company_name"]);
            $d["registration"] = safe($d2["registration"]);
            $d["address"] = safe($d2["address"]);
            $d["city"] = safe($d2["city"]);
            $d["postcode"] = safe($d2["postcode"]);

            $email = $d["email"];
            $pass1 = safe($d2["pass1"]);
            $pass2 = safe($d2["pass2"]);

            /*
              if ($username == "") {
              $error = 1;
              $message .= "Please enter your username<br />";
              }
              if ($password == "") {
              $error = 1;
              $message .= "Please enter password<br />";
              }
             */

            // email unique
            $sql = "select id from providers where email = '$email' and id <> '$contractor_id' ";
            $result = $db->query_first($sql);

            if ($db->affected_rows > 0) {
                $error = 1;
                $message .= "Email already exists <br />";
            }


            if ($pass1 <> $pass2) {
                $error = 1;
                $message .= "Passwords do not match, please try again <br />";
            }

            if ($error == 0) {



                $result = contractordata();

                // update password only when requested
                unset($d2['pass1']);
                unset($d2['pass2']);
                if ($pass1 <> "") {

                    $d['cryptpass'] = crypt($pass1, "araam");
                }



                $db->update('providers', $d, "id='$contractor_id'");
                $rowcount = $db->affected_rows;

                if ($rowcount == 1) {
                    // login successful
                    $smarty->assign("message", "Your details have been updated.");
                    $result = contractordata();

                    $smarty->assign("d", $result);
                    $smarty->assign("gr_city", $gr_city);
                    $smarty->display('contractor/update.tpl');
                    //header("Location: index.php?myaccount");
                } else {
                    $smarty->assign("message", "Nothing to update.");
                    $result = contractordata();

                    $smarty->assign("d", $result);
                    $smarty->assign("gr_city", $gr_city);
                    $smarty->display('contractor/update.tpl');
                    //header("Location: index.php?myaccount");
                }
            } else {
                // errors
                // passwords are not same, error
                $smarty->assign("message", "");
                $result = contractordata();
                $smarty->assign("d", $result);



                $result = contractordata();
                $smarty->assign("d", $result);

                $smarty->assign("message", $message);
                $smarty->assign("gr_city", $gr_city);
                $smarty->display('contractor/update.tpl');
            }
        } else {
            // process template

            $result = contractordata();

            $smarty->assign("d", $result);
            $smarty->assign("gr_city", $gr_city);
            $smarty->assign("message", '');
            $smarty->display('contractor/update.tpl');
        }
        break;

    case 'updatearea':
        
        $message = "";
        if (isset($_POST["submit01"])) {

            $areas = $_POST["areas"];

            $sql = "delete from providerareas where provider_id = '$contractor_id' ";
            $db->query($sql);

            foreach ($areas as $k => $v) {
                $dd["provider_id"] = $contractor_id;
                $dd["area_id"] = $v;
                $db->insert("providerareas", $dd);
            }
            $message = "Updated";
        }
        
        
        // list of selected areas
        $sql2 = "SELECT `area_id` FROM `providerareas` WHERE `provider_id` = '$contractor_id' ORDER BY `area_id` ";
        $sareas = $db->fetch_array($sql2);
        $temp = array();
        foreach ($sareas as $k => $v) {
            $temp[] = $v["area_id"];
        }
        $selectedareas = $temp;

        // list of all areas
        // $sql3 = "SELECT a . * , sa.id AS sid, sa.subarea, sa.status AS sstatus FROM `area` a LEFT OUTER JOIN subarea sa ON sa.area_id = a.id WHERE 1";
        $sql3 = "SELECT id, area, status FROM `area` a WHERE status = 'active' ";
        
        $dareas = $db->fetch_array($sql3);
        $areas = array();
        $oldarea = "";
        foreach ($dareas as $k => $v) {
            $id = $v["id"];
            $area = $v["area"];
            //$city = $v["area"];
            $areas[$id] = $area;
        }
        $smarty->assign("areas", $areas);
        $smarty->assign("selectedareas", $selectedareas);

        $smarty->assign("message", $message);
        $smarty->display('contractor/updatearea.tpl');
        break;

    case 'updateservice':
        $message = "";
        if (isset($_POST["submit01"])) {


            $services = $_POST["services"];

            $sql = "delete from providerservices where provider_id = '$contractor_id' ";
            $db->query($sql);

            foreach ($services as $k => $v) {
                $dd["provider_id"] = $contractor_id;
                $dd["subservice_id"] = $v;
                $db->insert("providerservices", $dd);
                
            }
            $message = "Updated";
        }
        // list of selected services
        $sql2 = "SELECT `subservice_id` FROM `providerservices` WHERE `provider_id` = '$contractor_id' ORDER BY `subservice_id` ";
        $sservices = $db->fetch_array($sql2);
        $temp = array();
        foreach ($sservices as $k => $v) {
            $temp[] = $v["subservice_id"];
        }
        $selectedservices = $temp;

        // list of all services
        $sql3 = "SELECT a . * , sa.id AS sid, sa.subservice, sa.status AS sstatus FROM `service` a LEFT OUTER JOIN subservice sa ON sa.service_id = a.id WHERE 1 ";
        $dservices = $db->fetch_array($sql3);
        $services = array();
        $oldservice = "";
        foreach ($dservices as $k => $v) {
            $id = $v["sid"];
            $service = $v["subservice"];
            $city = $v["service"];
            $services[$city][$id] = $service;
        }
        $smarty->assign("services", $services);
        $smarty->assign("selectedservices", $selectedservices);

        $smarty->assign("message", $message);
        $smarty->display('contractor/updateservice.tpl');
        break;

    default:
        $smarty->assign("message", '');
        $smarty->display('contractor/main.tpl');
        break;
}

function contractordata() {
    global $db, $contractor_id;
    $sql3 = "select * from providers where id = '$contractor_id' limit 1";
    $result = $db->query_first($sql3);
    return $result;
}
