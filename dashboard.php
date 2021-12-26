<?php

defined("BASEPATH") or die("");

if (!isset($_SESSION["userid"])) {
    header("Location: " . SITE_ROOT . "user/ac-login");
}

$smessage = "";
if (isset($_SESSION["smessage"])) {
    $smessage = $_SESSION["smessage"];
}
$_SESSION["smessage"]="";


$action = "";
if (isset($getVars["action"])) {
    $action = $getVars["action"];
}
$message = "";
$message2 = "";
if (isset($getVars["message"])) {
    $message2 = $getVars["message"];
}
$user_id = $_SESSION["userid"];


switch ($action) {
    case 'view':
        // view bid
        break;

    case 'quotes':

        // project id
        $pid = $getVars["id"];

        if (isset($_POST["submit02"])) {


            $d["project_id"] = $_POST["p_id"];
            $d["user_id"] = $user_id;
            $d["provider_id"] = $_POST["r_id"];
            $d["messageby"] = "user";
            $d["message"] = $_POST["message"];
            $primary_id = $db->insert("messages", $d);

            $provider_id = $_POST["r_id"];
            $message = $_POST["message"];
            // send message to contractor 
            // TODO
            $sql = "SELECT `contact_person` , `company_name`, `email` FROM `providers` WHERE `id` = '$provider_id' ";
            $dprovider = $db->query_first($sql);

            $sql = "SELECT `customername` , `email` FROM `customers` WHERE `id` = '$user_id' ";
            $dcustomer = $db->query_first($sql);

            $messagefrom = $dcustomer["customername"];
            $messagetoname = $dprovider["contact_person"];
            $messagetoemail = $dprovider["email"];

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

        // all realted quotes
        $sql = "SELECT b . * , p.contact_person, p.company_name, sr.id, sr.approved, b.id as bidid FROM `bids` b LEFT OUTER JOIN providers p ON b.provider_id = p.id left outer join servicerequest sr on sr.id = '$pid'  WHERE `servicerequest_id` = '$pid' LIMIT 0 , 30"; 
        $data1 = $db->fetch_array($sql);
        $smarty->assign("data1", $data1);

        // messages

        $sql2 = "select * from messages where project_id = '$pid' order by provider_id, datecreated";

        $data2 = $db->fetch_array($sql2);
        $smarty->assign("data2", $data2);


        // new
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

//  areas
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
        /*
          $sql1 = "SELECT sr.* FROM `servicerequest` sr JOIN providerservices ps ON sr.subservice_id = ps.subservice_id JOIN providerareas pa ON sr.area_id = pa.area_id WHERE ps.provider_id = '$contractor_id' AND pa.provider_id = '$contractor_id' and sr.id = '$rid' LIMIT 0 , 1";

          $data1 = $db->query_first($sql1); */



        $sql3 = "SELECT sr.* FROM `servicerequest` sr WHERE sr.id = '$pid' LIMIT 0 , 1";

        $data3 = $db->query_first($sql3);
        $smarty->assign("d", $data3);



        $q["1"] = $data3["question_1"];
        $q["2"] = $data3["question_2"];
        $q["3"] = $data3["question_3"];
        $q["4"] = $data3["question_4"];
        $q["5"] = $data3["question_5"];
        $q["6"] = $data3["question_6"];
        $smarty->assign("q", $q);

        $sr_id = $data3["id"];
        // TODO
        $user_id = $data3["user_id"];
        $service_id = $data3["subservice_id"];

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
        /*
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
         */
        $smarty->assign("sr_id", $pid); //project id
        //
            //$smarty->assign("contractor_id", $contractor_id);
        $smarty->assign("user_id", $user_id);


        //$smarty->assign("amount", $amount);
        //$smarty->assign("cmessage", $cmessage);
        //$smarty->assign("btype", $btype);
        //$smarty->assign("points", $points);
        $smarty->assign("gr_quotetype", $gr_quotetype);
        $smarty->assign("travel", $gr_contactpref);
        
        $smarty->assign("message", '');
        $smarty->assign("message2", '');
        //$smarty->display('contractor/controlpanel.tpl');        
        // end new

        $smarty->assign("message", "");
        $smarty->assign("message2", "");
        $smarty->display('viewquotes.tpl');

        break;

    case 'messages':

        // quote id
        $qid = $getVars["id"];
        /*
          if (isset($_POST["submit01"])) {

          $d["project_id"] = $_POST["r_id"];
          $d["user_id"] = $user_id;
          $d["provider_id"] = $_POST["p_id"];
          $d["messageby"] = "user";
          $d["message"] = $_POST["message"];
          $primary_id = $db->insert("messages", $d);
          }

          $sql = "select provider_id, servicerequest_id from bids where id = '$qid' ";
          $bids = $db->query_first($sql);

          $provider_id = $bids["provider_id"];
          $sr_id = $bids["servicerequest_id"];

          $sql = "select user_id from servicerequest where id = '$sr_id'";
          $request = $db->query_first($sql);

          $user_id = $request["user_id"];

          $sql = "select contact_person, company_name from providers where id = '$provider_id' ";
          $provider = $db->query_first($sql);
          $pname = $provider["contact_person"] . " " . $provider["company_name"];

          $sql1 = "SELECT * FROM `messages` WHERE `project_id` = '$sr_id' AND `user_id` = '$user_id' AND `provider_id` = '$provider_id' LIMIT 0 , 30";

          $data1 = $db->fetch_array($sql1);
          $smarty->assign("data1", $data1);
          $smarty->assign("messagedata", $data1);

          $smarty->assign("q_id", "$qid");
          $smarty->assign("r_id", "$sr_id");
          $smarty->assign("p_id", "$provider_id");
          $smarty->assign("pname", "$pname");

          $smarty->assign("message", "");
          $smarty->assign("message2", "");
          $smarty->display('quotemessages.tpl'); */

        break;

    case 'cancel':

        // project id
        $pid = $getVars["id"];


        if (isset($_POST["submit01"])) {

            $pid2 = $_POST["id"];
            $cancelreason = $_POST["cancelreason"];

            if ($pid == $pid2) {
                $dd2["approved"] = "cancelled";
                $dd2["cancelreason"] = $cancelreason;
                $db->update("servicerequest", $dd2, "id=$pid");
            }

            header("Location: " . SITE_ROOT . "dashboard");
        } else {

            $smarty->assign("message", "");
            $smarty->assign("message2", "");
            $smarty->assign("id", $pid);
            $smarty->assign("gr_cancelreason", $gr_cancelreason);
            $smarty->display('cancelrequest.tpl');
        }
        break;

    case 'hire':
        // bid id
        $bid = $getVars["id"];

        $sql = "select servicerequest_id from bids where id = '$bid' ";
        $result = $db->query_first($sql);
        $sr_id = $result["servicerequest_id"];

        $sql = "UPDATE `bids` SET `status` = 'selected' WHERE `id` = '$bid'";
        $result = $db->query($sql);

        $sql = "UPDATE `servicerequest` SET `approved` = 'awarded' WHERE `id` = '$sr_id'";
        $result = $db->query($sql);

        // send email to both
        // TODO
        $sql = "SELECT b.id, p.contact_person, p.email FROM `bids` b left outer join providers p on b.provider_id = p.id WHERE b.id = '$bid' ";
        $bdata = $db->query_first($sql);

        $pname = $bdata["contact_person"];
        $pemail = $bdata["email"];

        // send email
        // get template
        $string = getfile(BASEPATH . "/includes/email_hire.txt");

// replace variables

        $patterns = array();
        $patterns[0] = '/%provider_name%/';
        //$patterns[1] = '/%provider_email%/';


        $replacements = array();
        $replacements[0] = $pname;
        //$replacements[1] = $pemail;


        $string2 = preg_replace($patterns, $replacements, $string);
        //$string2 = nl2br($string2);

        $subj = "Congratulations, You are hired at Araam.PK";

        send_email($pemail, $subj, $string2, $globalemailaddress);

        $_SESSION["smessage"] = "Thanks for selecting provider";
        
        header("Location: " . SITE_ROOT . "dashboard");

        //$smarty->assign("message", "");
        //$smarty->assign("message2", "");
        //$smarty->assign("messagetitle", 'Thanks for selecting provider');
        //$smarty->assign("messagedetails", '<p>Thanks for selecting provider, an email has been sent and your can share your details with each other.</p>');
        //$smarty->display('messages.tpl');


        break;

    case 'hirex':
        // bid id
        $bid = $getVars["id"];

        $sql = "select servicerequest_id from bids where id = '$bid' ";
        $result = $db->query_first($sql);
        $sr_id = $result["servicerequest_id"];

        $sql = "UPDATE `bids` SET `status` = 'selected' WHERE `id` = '$bid'";
        $result = $db->query($sql);

        $sql = "UPDATE `servicerequest` SET `approved` = 'awarded' WHERE `id` = '$sr_id'";
        $result = $db->query($sql);

        // send email to both
        // TODO

        //$smarty->assign("message", "");
        //$smarty->assign("message2", "");
        //$smarty->assign("messagetitle", 'Thanks for selecting provider');
        //$smarty->assign("messagedetails", '<p>Thanks for selecting provider, an email has been sent and your can share your details with each other.</p>');
        //$smarty->display('contractor/messages.tpl');


        break;

    case 'complete':
        // mark complete
        // project id
        $sr_id = $getVars["id"];
        if (isset($_POST["submit01"])) {
            $sql = "UPDATE `servicerequest` SET `approved` = 'completed' WHERE `id` = '$sr_id'";
            $result = $db->query($sql);


            $rating = $_POST["rating"];
            $review = $_POST["review"];


            $sql = "update bids set rating = '$rating', review = '$review', status = 'completed' where servicerequest_id = '$sr_id' and status = 'selected';";
            $result = $db->query($sql);

            $sql = "select bids.id from bids where servicerequest_id = '$sr_id' and status = 'completed' ";
            $biddata = $db->query_first($sql);
            $bid = $biddata["id"];

            // send email to both
            // TODO
            $sql = "SELECT b.id, p.contact_person, p.email FROM `bids` b left outer join providers p on b.provider_id = p.id WHERE b.id = '$bid' ";
            $bdata = $db->query_first($sql);

            $pname = $bdata["contact_person"];
            $pemail = $bdata["email"];

            // send email
            // get template
            $string = getfile(BASEPATH . "/includes/email_complete.txt");

// replace variables

            $patterns = array();
            $patterns[0] = '/%provider_name%/';
            //$patterns[1] = '/%provider_email%/';


            $replacements = array();
            $replacements[0] = $pname;
            //$replacements[1] = $pemail;


            $string2 = preg_replace($patterns, $replacements, $string);
            //$string2 = nl2br($string2);

            $subj = "Congratulations, Your project is complete at Araam.PK";

            send_email($pemail, $subj, $string2, $globalemailaddress);





            header("Location: " . SITE_ROOT . "dashboard");
        } else {

            // mark project as completed
            // ask for review before completion
            $smarty->assign("message", "");
            $smarty->assign("message2", "");
            $smarty->assign("sr_id", $sr_id);
            $smarty->assign("gr_review", $gr_review);
            $smarty->display('completerequest.tpl');
        }
        break;


    case 'profile':
        // provider id
        $pid = $getVars["id"];

        $sql = "select * from profiles where provider_id = '$pid'";
        $profile = $db->query_first($sql);

        $sql2 = "SELECT ps . * , ss.subservice FROM `profileservices` ps LEFT OUTER JOIN subservice ss ON ps.service_id = ss.id WHERE ps.provider_id = '$pid' order by ps.service_id";
        $profileservices = $db->fetch_array($sql2);
        $smarty->assign("message", "");
        $smarty->assign("message2", "");
        $smarty->assign("id", $pid);
        $smarty->assign("profile", $profile);
        $smarty->assign("profileservices", $profileservices);
        $smarty->display('viewprofile.tpl');


        break;

    default:
        // show dashboard

        $sql1 = "SELECT sr . * , ps.subservice, pa.area as city FROM `servicerequest` sr JOIN subservice ps ON sr.subservice_id = ps.id JOIN area pa ON sr.area_id = pa.id WHERE sr.user_id = '$user_id' LIMIT 0 , 30";
        $data1 = $db->fetch_array($sql1);
        $smarty->assign("data1", $data1);

        $sql2 = "SELECT sr . * , ps.subservice, pa.area as city FROM `servicerequest` sr JOIN subservice ps ON sr.subservice_id = ps.id JOIN area pa ON sr.area_id = pa.id WHERE sr.user_id = '$user_id' AND sr.approved = 'completed' LIMIT 0 , 30";
        $data2 = $db->fetch_array($sql2);
        $smarty->assign("data2", $data2);


        $smarty->assign("message", "");
        $smarty->assign("message2", "");
        $smarty->assign("smessage", $smessage);
        $smarty->display('dashboard.tpl');
        break;
}