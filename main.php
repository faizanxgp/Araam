<?php

defined("BASEPATH") or die("");

$action = "";
if (isset($getVars["action"])) {
    $action = $getVars["action"];
}
$message = "";
$message2 = "";
if (isset($getVars["message"])) {
    $message2 = $getVars["message"];
}



switch ($action) {
    case 'page2':

        $data = $_POST;

        if (isset($_POST["subservice_id"]) and isset($_POST["area_id"])) {

            $d["services"] = $_POST["services"];
            $d["areas"] = $_POST["areas"];
            $d["subservice_id"] = $_POST["subservice_id"];
            $d["area_id"] = $_POST["area_id"];

            $subservice_id = $d["subservice_id"];
            $sql = "select service_id from subservice where id = $subservice_id";
            $subservice = $db->query_first($sql);
            $service_id = $subservice["service_id"];
            // pick questions related with service

            $sql = "SELECT `question_number`, `question_text`, `question_type`, `question_choices`, `question_others` FROM `servicequestions` WHERE `service_id` = '$subservice_id' ORDER BY `question_number` LIMIT 0 , 6";
            $questions = $db->fetch_array($sql);

            if ($db->affected_rows == 0) {
                $sql = "SELECT `question_number`, `question_text`, `question_type`, `question_choices`, `question_others` FROM `servicequestions` WHERE `service_id` = '1' ORDER BY `question_number` LIMIT 0 , 6";
                $questions = $db->fetch_array($sql);
            }

            // details of request
            $smarty->assign('questions', $questions);
            $smarty->assign('d', $d);
            $smarty->assign('gr_contactpref', $gr_contactpref);
            $smarty->assign("message", "");
            $smarty->display('page2.tpl');
        } else {
            // main page
            $areaquery = "SELECT area.id, area.area FROM `area` where area.status = 'active' ORDER BY area.id ";
            $areadata = $db->fetch_array($areaquery);
            $smarty->assign("areadata", $areadata);

            $servicequery = "SELECT subservice.id, subservice.subservice, service.service FROM `subservice` LEFT OUTER JOIN service ON subservice.service_id = service.id where subservice.status = 'active' ORDER BY subservice.service_id  ";
            $servicedata = $db->fetch_array($servicequery);
            $smarty->assign("servicedata", $servicedata);

            $smarty->assign("message", "Please select Area and Service from List");
            $smarty->assign("message2", "");
            $smarty->display('main.tpl');
        }
        break;

    case 'page3':
        $d = $_POST;

        unset($d['services']);
        unset($d['areas']);
        unset($d['usersubmit']);

        // file upload 
        $valid_formats = array("jpg", "png", "gif", "jpeg", "bmp");
        $max_file_size = 1024 * 1024 * 2; //2MB 
        $path = "requestuploads/"; // Upload directory
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
                            if ($count > 5)
                                break;
                            $key = "attach" . $count;
                            $d[$key] = $path . $name;
                        }
                    }
                }
            }
        }

// end of file upload 
        $area_id = $d["area_id"];
        $subservice_id = $d["subservice_id"];

        // get service id using sub service
        $sql = "select service_id from subservice where id = $subservice_id";
        $subservice = $db->query_first($sql);
        $d["service_id"] = $subservice["service_id"];

        /* $subarea_id = $d["subarea_id"];
          $sql = "select area_id from subarea where id = $subarea_id";
          $subarea = $db->query_first($sql);
          $d["area_id"] = $subarea["area_id"];
         */

        //$d["area_id"] = $d["area_id"];
        //$d["area_id"] = 0;
        // combine asnwers and make an string
        if (isset($d["question_1"]) and is_array($d["question_1"])) {
            $d["question_1"] = join(",", $d["question_1"]);
        }
        if (isset($d["question_2"]) and is_array($d["question_2"])) {
            $d["question_2"] = join(",", $d["question_2"]);
        }
        if (isset($d["question_3"]) and is_array($d["question_3"])) {
            $d["question_3"] = join(",", $d["question_3"]);
        }
        if (isset($d["question_4"]) and is_array($d["question_4"])) {
            $d["question_4"] = join(",", $d["question_4"]);
        }
        if (isset($d["question_5"]) and is_array($d["question_5"])) {
            $d["question_5"] = join(",", $d["question_5"]);
        }
        if (isset($d["question_6"]) and is_array($d["question_6"])) {
            $d["question_6"] = join(",", $d["question_6"]);
        }

        $d["approved"] = "approved";

        // process attachements
        unset($d["attach"]);

        $email = $d["email"];
        $name = $d["requestby"];

        // insert in db
        $project_primary_id = $db->insert("servicerequest", $d);
        
        $projurl = SITE_ROOT . "dashboard/id-" . $project_primary_id . "/ac-quotes";

        // check for user 
        $sql = "select * from customers where email = '$email' ";
        $customers = $db->query_first($sql);

        $customerinfo = "";
        if ($db->affected_rows == 0) {
            // new user
            //$customerinfo = "Username :" . $email . "\r\n" .
            //        "Password: " . $pass;
            // insert user
            $cemail = crypt($email, "araam");
            $mcemail = md5($cemail);
            $d2["customername"] = $name;
            $d2["phone"] = $d["mobile"];
            $d2["email"] = $email;
            $pass = unique_id();
            $d2["cryptpass"] = crypt($pass, "araam");
            $customer_primary_id = $db->insert("customers", $d2);

            // assign project to user
            $d3["user_id"] = $customer_primary_id;
            $db->update("servicerequest", $d3, "id=$project_primary_id");

            // url link

            $url = SITE_ROOT . "verify/id-" . $customer_primary_id . "/ac-" . $mcemail;

            // send email
            // get template
            $string = getfile(BASEPATH . "/includes/email_newrequest.txt");

// replace variables

            $patterns = array();
            $patterns[0] = '/%user_name%/';
            $patterns[1] = '/%user_email%/';
            $patterns[2] = '/%url%/';
            $patterns[3] = '/%email%/';
            $patterns[4] = '/%pass%/';

            $replacements = array();
            $replacements[0] = $name;
            $replacements[1] = $email;
            $replacements[2] = $url;
            $replacements[3] = $email;
            $replacements[4] = $pass;

            $string2 = preg_replace($patterns, $replacements, $string);
            //$string2 = nl2br($string2);

            $subj = "Welcome to Araam.PK";

            send_email($email, $subj, $string2, $globalemailaddress);
            
            // inform all
            informall($area_id, $subservice_id, $projurl);

            // auto login for user
            $sessid = session_id();
            $_SESSION["userid"] = $customer_primary_id;
            $_SESSION["username"] = $name;
            $_SESSION["userlogin"] = $sessid; // session id
            // completion of request
            $smarty->assign("message", "");
            //$smarty->assign("messagetitle", "Thanks for sending query");
            //$smarty->assign("messagedetails", "Our staff would review and get back to you");
            
            // current project in box
            
            
            
            $smarty->display('page3.tpl');
        } else {
            // existing user
            // 
            // 
            $customer_primary_id = $customers["id"];


            // assign it to user
            $d3["user_id"] = $customer_primary_id;
            $db->update("servicerequest", $d3, "id=$project_primary_id");

            // no need to send email
            // completion of request
            // send email
            // get template
            $string = getfile(BASEPATH . "/includes/email_newrequest_olduser.txt");

// replace variables

            $patterns = array();
            $patterns[0] = '/%user_name%/';
            $patterns[1] = '/%user_email%/';
            //$patterns[2] = '/%url%/';
            //$patterns[3] = '/%email%/';
            //$patterns[4] = '/%pass%/';

            $replacements = array();
            $replacements[0] = $name;
            $replacements[1] = $email;
            //$replacements[2] = $url;
            //$replacements[3] = $email;
            //$replacements[4] = $pass;

            $string2 = preg_replace($patterns, $replacements, $string);
            //$string2 = nl2br($string2);

            $subj = "Thanks for submitting another project to Araam.PK";

            send_email($email, $subj, $string2, $globalemailaddress);
            
            // inform all
            informall($area_id, $subservice_id, $projurl);
            
            $_SESSION["smessage"] = "Thanks for sending query";
            
            header("Location: " . SITE_ROOT . "dashboard");

            //$smarty->assign("message", "");
            //$smarty->assign("messagetitle", "Thanks for sending query");
            //$smarty->assign("messagedetails", "Our staff would review and get back to you");
            //$smarty->display('messages.tpl');
        }

        break;

    case 'search':
        $mname = safe($_POST["name"]);
        break;

    default:
        // main page
        //$areaquery = "SELECT subarea.id, subarea.subarea, area.area FROM `subarea` LEFT OUTER JOIN area ON subarea.area_id = area.id where subarea.status = 'active' ORDER BY subarea.area_id ";
        $areaquery = "SELECT area.id, area.area FROM `area` where area.status = 'active' ORDER BY area.id ";
        $areadata = $db->fetch_array($areaquery);
        $smarty->assign("areadata", $areadata);

        $servicequery = "SELECT subservice.id, subservice.subservice, service.service FROM `subservice` LEFT OUTER JOIN service ON subservice.service_id = service.id where subservice.status = 'active' ORDER BY subservice.service_id  ";
        $servicedata = $db->fetch_array($servicequery);
        $smarty->assign("servicedata", $servicedata);

        $smarty->assign("message", "");
        $smarty->assign("message2", "");
        $smarty->display('main.tpl');

        break;
}

function unique_id($l = 8) {
    return substr(md5(uniqid(mt_rand(), true)), 0, $l);
}

function informall($area_id, $subservice_id, $url) {
    // now inform all contractors
    global $db, $globalemailaddress;
        $sql = "SELECT id, contact_person, email FROM `providers` p WHERE p.id IN (
SELECT provider_id FROM providerareas WHERE area_id = '$area_id'
)
AND p.id IN ( 
SELECT provider_id FROM providerservices WHERE subservice_id = '$subservice_id'
)
LIMIT 0 , 30";

        $d = $db->fetch_array($sql);

        foreach ($d as $k => $v) {

            $name = $v["contact_person"];
            $email = $v["email"];

            // send email
// get template
            $string = getfile(BASEPATH . "/includes/email_admininvitebids.txt");

// replace variables

            $patterns = array();
            $patterns[0] = '/%user_name%/';
            $patterns[1] = '/%user_email%/';
            $patterns[2] = '/%url%/';

            $replacements = array();
            $replacements[0] = $name;
            $replacements[1] = $email;
            $replacements[2] = $url;

            $string2 = preg_replace($patterns, $replacements, $string);

            $subj = "New Lead - Araam.PK";

            send_email($email, $subj, $string2, $globalemailaddress);
        }
}