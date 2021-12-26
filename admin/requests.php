<?php

defined("BASEPATH") or die("");

if (!isset($_SESSION["adminid"]))
    header("Location: index.php?admin/admin&action=login");

$action = "";
if (isset($getVars["action"])) {
    $action = $getVars["action"];
}
if ($action == "")
    $action = "display";

$table = "servicerequest";
$message = "";
switch ($action) {
    case 'display':
        /* pagination vars */
        $page = isset($getVars['page']) ? (int) $getVars['page'] : 1;
        $perpage = 10;
        $start_from = $page == 1 ? 0 : (($page - 1) * ($perpage - 1));

        $sql = "SELECT sr.*, subservice.subservice, area.area as city FROM  `$table` sr left outer join subservice on sr.subservice_id = subservice.id left outer join area on sr.area_id = area.id order by id desc ";
        $sql2 = "SELECT COUNT(DISTINCT id) as count FROM  `$table` order by id desc";

        $sql .= " LIMIT " . $start_from . "," . $perpage;

        $data = $db->fetch_array($sql);
        $smarty->assign("data", $data);

        /* pagination */
        $result2 = $db->query_first($sql2);
        $totalrows = $result2["count"];
        $pages = ceil($totalrows / $perpage);

        $pagination["pages"] = $pages;
        $pagination["page"] = $page;
        $pagination["cat"] = (isset($getVars["cat"]) ? $getVars["cat"] : "");
        $smarty->assign("pagination", $pagination);

        $smarty->assign("message", "");
        $smarty->display('admin/request.tpl');



        break;
    
    case 'search':
        
        $searchtext = trim($_POST["searchtext"]);
        
        $sql = "SELECT sr.*, subservice.subservice, area.area as city FROM  `$table` sr left outer join subservice on sr.subservice_id = subservice.id left outer join area on sr.area_id = area.id WHERE requestby like '%$searchtext%' OR mobile like '%$searchtext%' or email like '%$searchtext%' ORDER BY id DESC limit 0,100";
        
        $data = $db->fetch_array($sql);
        $smarty->assign("data", $data);
        
        $smarty->assign("message", "");
               
        $pagination["pages"] = 1;
        $pagination["page"] = 1;
        $pagination["cat"] = "";
        $smarty->assign("pagination", $pagination);
        
        $smarty->display('admin/request.tpl');
        break;

    case 'add':
        if (isset($_POST["submit01"])) {
            $d = $_POST;
            unset($d['submit01']);
            $primary_id = $db->insert($table, $d);

            header("Location: index.php?admin/requests");
        } else {
            $sql3 = "SELECT id, subservice FROM  `subservice` WHERE status =  'active' ORDER BY subservice";
            $dservices = $db->fetch_array($sql3);
            $services = array();
            foreach ($dservices as $k => $v) {
                $id = $v["id"];
                $service = $v["subservice"];
                $services[$id] = $service;
            }

            $sql3 = "SELECT id, area FROM  `area` WHERE status =  'active' ORDER BY area";
            $dareas = $db->fetch_array($sql3);
            $areas = array();
            foreach ($dareas as $k => $v) {
                $id = $v["id"];
                $area = $v["area"];
                $areas[$id] = $area;
            } 


            $d["id"] = "0";
            $d["subservice_id"] = "0";
            $d["subarea_id"] = "0";
            $d["question_1"] = "";
            $d["question_2"] = "";
            $d["question_3"] = "";
            $d["question_4"] = "";
            $d["question_5"] = "";
            $d["question_6"] = "";
            $d["expected_date"] = "";
            $d["estimated_date"] = "";
            $d["service_description"] = "";
            $d["budget"] = "";
            $d["requestby"] = "";
            $d["email"] = "";
            $d["mobile"] = "";
            $d["promocode"] = "";
            $d["approved"] = "approved";
            $d["datecreated"] = "";
            
            $smarty->assign('d', $d);
            $smarty->assign('path', "add");
            $smarty->assign("services", $services);
            $smarty->assign("areas", $areas);
            $smarty->assign("gr_reqstatus", $gr_reqstatus);
            $smarty->assign("message", "");
            $smarty->display('admin/requestupdate.tpl');
            
            //header("Location: index.php?admin/requests");
        }
        break;
    case 'edit':
        if (isset($_POST["submit01"])) {
            $d = $_POST;

            $id = $_POST["id"];

            unset($d['id']);
            unset($d['submit01']);

            $db->update($table, $d, "id='$id'");
            header("Location: index.php?admin/requests");
            break;
        } else {

            $sql3 = "SELECT id, subservice FROM  `subservice` WHERE status =  'active' ORDER BY subservice";
            $dservices = $db->fetch_array($sql3);
            $services = array();
            foreach ($dservices as $k => $v) {
                $id = $v["id"];
                $service = $v["subservice"];
                $services[$id] = $service;
            }

            $sql3 = "SELECT id, area FROM  `area` WHERE status =  'active' ORDER BY area";
            $dareas = $db->fetch_array($sql3);
            $areas = array();
            foreach ($dareas as $k => $v) {
                $id = $v["id"];
                $area = $v["area"];
                $areas[$id] = $area;
            }


            $id = $getVars["id"];
            $sql = "select * from `$table` where id = '$id'";
            $d = $db->query_first($sql);

            $smarty->assign('d', $d);
            $smarty->assign('path', "edit");
            $smarty->assign("services", $services);
            $smarty->assign("areas", $areas);
            $smarty->assign("gr_reqstatus", $gr_reqstatus);
            $smarty->assign("message", "");
            $smarty->display('admin/requestupdate.tpl');
            
            //header("Location: index.php?admin/requests");
        }
        break;

    case 'delete':
        break;


    case 'approve':
        $id = $getVars["id"];
        $sql = "update `$table` set approved = 'approved' where id = '$id'";
        $d = $db->query($sql);

        // get contents
        $sql = "select * from `$table` where id = '$id'";
        $d = $db->query_first($sql);


        // send email

        $name = $d["requestby"];
        $email = $d["email"];

        $subservice_id = $d["subservice_id"];
        $area_id = $d["area_id"];


// get template
        $string = getfile(BASEPATH . "/includes/email_adminapproverequest.txt");

// replace variables

        $patterns = array();
        $patterns[0] = '/%user_name%/';
        $patterns[1] = '/%user_email%/';

        $replacements = array();
        $replacements[0] = $name;
        $replacements[1] = $email;

        $string2 = preg_replace($patterns, $replacements, $string);

        $subj = "Your project is approved - Araam.PK";

        send_email($email, $subj, $string2, $globalemailaddress);



        // now inform all contractors

        $sql = "SELECT id, contact_person, email
FROM `providers` p
WHERE p.id
IN (

SELECT provider_id
FROM providerareas
WHERE area_id = '$area_id'
)
AND p.id
IN (

SELECT provider_id
FROM providerservices
WHERE subservice_id = '$subservice_id'
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

            $replacements = array();
            $replacements[0] = $name;
            $replacements[1] = $email;

            $string2 = preg_replace($patterns, $replacements, $string);

            $subj = "Your project is approved - Araam.PK";

            send_email($email, $subj, $string2, $globalemailaddress);
        }

        header("Location: index.php?admin/requests");
        break;
        
        
    case 'bids':
        $id = $getVars["id"];
        $sql = "SELECT b . * , p . * FROM `bids` b LEFT OUTER JOIN providers p ON b.provider_id = p.id WHERE b.servicerequest_id = '$id' LIMIT 0 , 30";
        $data = $db->fetch_array($sql);
        $smarty->assign('data', $data);
            
            
            $smarty->assign("message", "");
            $smarty->display('admin/bids.tpl');
        
        break;

    default:
        break;
}