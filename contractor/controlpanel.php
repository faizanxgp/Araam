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

if (isset($getVars["id"])) {
    $rid = $getVars["id"];
} else {

    $rid = 0;
}

$message = "";
$contractor_id = $_SESSION["contractorid"];

switch ($action) {
    case 'bid':
        if (isset($_POST["submit01"])) {
            $d = $_POST;

            $sr_id = $d["servicerequest_id"];

            // userid
            $sql4 = "SELECT customername, email FROM customers where customers.id in (select user_id from `servicerequest` WHERE servicerequest.id = '$sr_id') ";
            $data4 = $db->query_first($sql4);
            
            $customername = $data4["customername"];
            $customeremail = $data4["email"];

            // points required
            $sql3 = "SELECT points FROM `service` WHERE id = ( SELECT service_id FROM servicerequest WHERE id = $sr_id )";
            $data3 = $db->query_first($sql3);
            $points = $data3["points"];

// bid if any
            $sql2 = "select id, amount, btype, message from bids where provider_id = '$contractor_id' and servicerequest_id = '$sr_id' ";

            $data2 = $db->query_first($sql2);

            if (isset($data2) and $data2["id"] > 0) {
// updated
                
                $id = $data2["id"];
                $d["provider_id"] = $contractor_id;
                $d["points"] = $points;
                unset($d['submit01']);
                unset($d["id"]);
                $db->update('bids', $d, "id='$id'");

                
            } else {
                // new bid

                $d["provider_id"] = $contractor_id;
                $d["points"] = $points;
                unset($d['submit01']);
                $primary_id = $db->insert("bids", $d);
                
                // send email 
                // TODO
               
                // get template
                $string = getfile(BASEPATH . "/includes/email_newquote.txt");

// replace variables

                $patterns = array();
                $patterns[0] = '/%user_name%/';
                $patterns[1] = '/%user_email%/';
                //$patterns[2] = '/%url%/';
                //$patterns[3] = '/%email%/';
                //$patterns[4] = '/%pass%/';

                $replacements = array();
                $replacements[0] = $customername;
                $replacements[1] = $customeremail;
                //$replacements[2] = $url;
                //$replacements[3] = $email;
                //$replacements[4] = $pass;
                
                $email = $customeremail;

                $string2 = preg_replace($patterns, $replacements, $string);
                //$string2 = nl2br($string2);

                $subj = "You get a new quote at Araam.PK";

                send_email($email, $subj, $string2, $globalemailaddress);
                
            }
            
            $_SESSION["smessage"] = "Awesome! You have submitted a quote";
            
            header("Location: " . SITE_ROOT . "contractor/main");
            //$smarty->assign("message", '');
            //$smarty->assign("messagetitle", 'Quote Submitted');
            //$smarty->assign("messagedetails", '<p>Thanks for submitting your quote. You will get an email if approved.</p>');
            //$smarty->display('contractor/messages.tpl');
            
            
            
            
            
            break;
        } else {

            // for message update
            if (isset($_POST["submit02"])) {
                $d = $_POST;

                $sr_id = $d["servicerequest_id"];

                $d2["project_id"] = $d["servicerequest_id"];
                $d2["user_id"] = $d["u_id"];
                $d2["provider_id"] = $contractor_id;
                $d2["message"] = $d["message"];
                $d2["messageby"] = "provider";
                $primary_id = $db->insert("messages", $d2);

                $user_id = $d["u_id"];
                $message = $d["message"];



                // send message to contractor 
                // TODO
                $sql = "SELECT `contact_person` , `company_name`, `email` FROM `providers` WHERE `id` = 'contractor_id' ";
                $dprovider = $db->query_first($sql);

                $sql = "SELECT `customername` , `email` FROM `customers` WHERE `id` = '$user_id' ";
                $dcustomer = $db->query_first($sql);

                $messagefrom = $dprovider["contact_person"];
                $messagetoname = $dcustomer["customername"];
                $messagetoemail = $dcustomer["email"];

                // send email
                // get template
                $string = getfile(BASEPATH . "/includes/email_message.txt");

// replace variables

                $patterns = array();
                $patterns[0] = '/%sender_name%/';
                $patterns[1] = '/%receive_name%/';
                $patterns[2] = '/%receive_email%/';
                $patterns[3] = '/%message%/';

                $replacements = array();
                $replacements[0] = $messagefrom;
                $replacements[1] = $messagetoname;
                $replacements[2] = $messagetoemail;
                $replacements[3] = $message;

                $string2 = preg_replace($patterns, $replacements, $string);
                //$string2 = nl2br($string2);

                $subj = "You have a new message - Araam.PK";

                send_email($messagetoemail, $subj, $string2, $globalemailaddress);
            }


            // sub services
            $sql11 = "SELECT id, subservice  FROM `subservice` WHERE `status` = 'active' order by id";
            $subservices = array();
            $data11 = $db->fetch_array($sql11);
            foreach ($data11 as $k => $v) {
                $id = $v["id"];
                $title = $v["subservice"];
                $subservices[$id] = $title;
            }
            $smarty->assign("subservices", $subservices);

// sub areas
            $sql12 = "SELECT id, area  FROM `area` WHERE `status` = 'active' order by id";
            $data12 = $db->fetch_array($sql12);
            $areas = array();

            foreach ($data12 as $k => $v) {
                $id = $v["id"];
                $title = $v["area"];
                $areas[$id] = $title;
            }
            $smarty->assign("areas", $areas);

            // requests / project
            $sql1 = "SELECT sr.* FROM `servicerequest` sr left outer JOIN providerservices ps ON sr.subservice_id = ps.subservice_id left outer JOIN providerareas pa ON sr.area_id = pa.area_id WHERE ps.provider_id = '$contractor_id' AND pa.provider_id = '$contractor_id' and sr.id = '$rid' LIMIT 0 , 1";

            $data1 = $db->query_first($sql1);

            $smarty->assign("d", $data1);
            $q["1"] = $data1["question_1"];
            $q["2"] = $data1["question_2"];
            $q["3"] = $data1["question_3"];
            $q["4"] = $data1["question_4"];
            $q["5"] = $data1["question_5"];
            $q["6"] = $data1["question_6"];
            $smarty->assign("q", $q);

            $sr_id = $rid; //$data1["id"];
            $service_id = $data1["subservice_id"];
            $user_id = $data1["user_id"];


// points for service
            $sql3 = "SELECT points FROM `service` WHERE id = ( SELECT service_id FROM servicerequest WHERE id = $sr_id )";
            $data3 = $db->query_first($sql3);
            $points = $data3["points"];
// question text

            $sql4 = "SELECT question_number, question_text FROM `servicequestions` WHERE service_id = '$service_id' ORDER BY question_number LIMIT 0 , 6";
            $data4 = $db->fetch_array($sql4);
            $questions = array();

            foreach ($data4 as $k => $v) {
                $id = $v["question_number"];
                $title = $v["question_text"];
                $questions[$id] = $title;
            }
            $smarty->assign("questions", $questions);
// bid detail
            $sql2 = "select id, amount, btype, message from bids where provider_id = '$contractor_id' and servicerequest_id = '$sr_id' ORDER BY id desc ";

            $data2 = $db->query_first($sql2);
            if (count($data2) > 0) {
                $amount = $data2["amount"];
                $cmessage = $data2["message"];
                $btype = $data2["btype"];
            } else {
                $amount = 0;
                $cmessage = "";
                $btype = "Fixed";
            }

            // messages

            $sql5 = "select * from messages where project_id = '$sr_id' and provider_id = '$contractor_id' ";

            $data5 = $db->fetch_array($sql5);
            $smarty->assign("messagedata", $data5);
            $smarty->assign("sr_id", $sr_id);
            $smarty->assign("contractor_id", $contractor_id);
            $smarty->assign("user_id", $user_id);


            $smarty->assign("amount", $amount);
            $smarty->assign("cmessage", $cmessage);
            $smarty->assign("btype", $btype);
            $smarty->assign("points", $points);
            $smarty->assign("gr_quotetype", $gr_quotetype);
            $smarty->assign("message", '');
            $smarty->assign("message2", '');
            $smarty->display('contractor/controlpanel.tpl');
        }
        break;

    default:

        break;
}