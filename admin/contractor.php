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

$table = "providers";
$message = "";
switch ($action) {
    case 'display':
        /* pagination vars */
        $page = isset($getVars['page']) ? (int) $getVars['page'] : 1;
        $perpage = 10;
        $start_from = $page == 1 ? 0 : (($page - 1) * ($perpage - 1));

        $sql = "SELECT * FROM  `$table` ORDER BY id DESC";
        $sql2 = "SELECT COUNT(DISTINCT id) as count FROM  `$table`";

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
        $smarty->display('admin/contractor.tpl');



        break;

    case 'search':

        $searchtext = trim($_POST["searchtext"]);

        $sql = "SELECT * FROM  `$table` WHERE contact_person like '%$searchtext%' OR phone like '%$searchtext%' or mobile like '%$searchtext%' or email like '%$searchtext%' ORDER BY id DESC limit 0,100";

        $data = $db->fetch_array($sql);
        $smarty->assign("data", $data);

        $smarty->assign("message", "");

        $pagination["pages"] = 1;
        $pagination["page"] = 1;
        $pagination["cat"] = "";
        $smarty->assign("pagination", $pagination);

        $smarty->display('admin/contractor.tpl');
        break;

    case 'add':
        if (isset($_POST["submit01"])) {
            $d = $_POST;
            unset($d['submit01']);
            $primary_id = $db->insert($table, $d);

            header("Location: index.php?admin/contractor");
        } else {
            $d["id"] = "";
            $d["contact_person"] = "";
            $d["phone"] = "";
            $d["mobile"] = "";
            $d["email"] = "";

            $d["company_name"] = "";
            $d["registration"] = "";
            $d["address"] = "";
            $d["city"] = "";
            $d["postcode"] = "";
            $d["website"] = "";
            $d["fb"] = "";
            $d["status"] = "active";




            $d["id"] = "0";
            $d["contractor"] = "add here";

            $d["points"] = "0";
            $d["status"] = "active";
            $smarty->assign('d', $d);
            $smarty->assign('path', "add");
            $smarty->assign("gr_status", $gr_contstatus);
            $smarty->assign("gr_verified", $gr_verified);
            $smarty->assign("message", "");
            $smarty->display('admin/contractorupdate.tpl');
        }
        break;
    case 'edit':
        if (isset($_POST["submit01"])) {
            $d = $_POST;

            $id = $_POST["id"];

            unset($d['id']);
            unset($d['submit01']);

            $db->update($table, $d, "id='$id'");



            header("Location: index.php?admin/contractor");
        } else {
            $id = $getVars["id"];
            $sql = "select * from `$table` where id = '$id'";
            $d = $db->query_first($sql);

            $smarty->assign('d', $d);
            $smarty->assign('path', "edit");
            $smarty->assign("gr_status", $gr_contstatus);
            $smarty->assign("gr_verified", $gr_verified);
            $smarty->assign("message", "");
            $smarty->display('admin/contractorupdate.tpl');
        }
        break;

    case 'delete':
        break;

    case 'activate':

        $id = $getVars["id"];
        $sql = "update `$table` set status = 'active' where id = '$id'";
        $d = $db->query($sql);

        $sql = "select * from `$table` where id = '$id'";
        $d = $db->query_first($sql);

        $email = $d["email"];
        $name = $d["contact_person"];

        // send email
        // get template
        $string = getfile(BASEPATH . "/includes/email_adminapprovecontractor.txt");

// replace variables

        $patterns = array();
        $patterns[0] = '/%user_name%/';
        $patterns[1] = '/%user_email%/';

        $replacements = array();
        $replacements[0] = $name;
        $replacements[1] = $email;

        $string2 = preg_replace($patterns, $replacements, $string);

        $subj = "Welcome to Araam.PK";

        send_email($email, $subj, $string2, $globalemailaddress);

        header("Location: index.php?admin/contractor");
        break;

    case 'updatearea':

        $contractor_id = $getVars["id"];

        if (isset($_POST["submit01"])) {
            $contractor_id = $_POST["contractor_id"];
            $areas = $_POST["areas"];

            $sql = "delete from providerareas where provider_id = '$contractor_id' ";
            $db->query($sql);

            foreach ($areas as $k => $v) {
                $dd["provider_id"] = $contractor_id;
                $dd["area_id"] = $v;
                $db->insert("providerareas", $dd);
            }
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
        //$sql3 = "SELECT a . * , sa.id AS sid, sa.subarea, sa.status AS sstatus FROM `area` a LEFT OUTER JOIN subarea sa ON sa.area_id = a.id WHERE 1 ";
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
        $smarty->assign("contractor_id", $contractor_id);
        $smarty->assign("areas", $areas);
        $smarty->assign("selectedareas", $selectedareas);

        $smarty->assign("message", '');
        $smarty->display('admin/updatearea.tpl');
        break;


    case 'points':
        $contractor_id = (isset($getVars["id"]) ? $getVars["id"] : 0);
        // list of selected services

        if ($contractor_id == 0) {
            $sql2 = "SELECT m . * , p . contact_person, p.company_name
FROM `membership` m
LEFT OUTER JOIN providers p ON m.provider_id = p.id WHERE 1 ORDER BY `datecreated` DESC LIMIT 0 , 30";
        } else {

            $sql2 = "SELECT m . * , p . contact_person, p.company_name
FROM `membership` m
LEFT OUTER JOIN providers p ON m.provider_id = p.id WHERE `provider_id` = '$contractor_id' ORDER BY `datecreated` DESC LIMIT 0 , 30";
        }

        $memberships = $db->fetch_array($sql2);
        $smarty->assign("contractor_id", $contractor_id);
        $smarty->assign("data", $memberships);


        $smarty->assign("message", '');
        $smarty->display('admin/membership.tpl');

        break;

    case 'addpoints':


        if (isset($_POST["submit01"])) {


            $id = $_POST["id"];
            if ($id == "0") {

                $d = $_POST;
                unset($d['submit01']);
                $primary_id = $db->insert("membership", $d);
            } else {
                $d = $_POST;
                unset($d['id']);
                unset($d['submit01']);

                $db->update("membership", $d, "id='$id'");
            }
            header("Location: index.php?admin/contractor&id=$id&action=points");
        } else {
            $contractor_id = $getVars["id"];
            $d = array();
            $d["id"] = "0";
            $d["provider_id"] = $contractor_id;
            $d["date"] = date("Y-m-d");
            $d["amount"] = "0";
            $d["mtype"] = "";
            $d["reference"] = "";
            $d["receivedfrom"] = "";
            $d["points"] = "0";
// list of providers for combo
            $sql3 = "SELECT id, company_name, contact_person FROM `providers` order by company_name ";
            $dproviders = $db->fetch_array($sql3);
            $providers = array();

            foreach ($dproviders as $k => $v) {
                $id = $v["id"];
                $cname = $v["company_name"];
                $cperson = $v["contact_person"];
                $providers[$id] = trim($cname) . ' ' . trim($cperson);
            }
            $smarty->assign("providers", $providers);

            $smarty->assign("d", $d);
            $smarty->assign("message", "");
            $smarty->display('admin/points.tpl');
        }
        break;
    case 'editpoints':

        $points_id = $getVars["id"];

        $sql2 = "SELECT * FROM `membership` WHERE `id` = '$points_id' ";
        $data = $db->query_first($sql2);
// list of providers for combo
        $sql3 = "SELECT id, company_name, contact_person FROM `providers` order by company_name ";
            $dproviders = $db->fetch_array($sql3);
            $providers = array();

            foreach ($dproviders as $k => $v) {
                $id = $v["id"];
                $cname = $v["company_name"];
                $cperson = $v["contact_person"];
                $providers[$id] = trim($cname) . ' ' . trim($cperson);
            }
            $smarty->assign("providers", $providers);
            
        $smarty->assign("d", $data);
        $smarty->assign("message", "");

        $smarty->display('admin/points.tpl');
        break;
    case 'updateservice':

        $contractor_id = $getVars["id"];
        if (isset($_POST["submit01"])) {

            $contractor_id = $_POST["contractor_id"];
            $services = $_POST["services"];

            $sql = "delete from providerservices where provider_id = '$contractor_id' ";
            $db->query($sql);

            foreach ($services as $k => $v) {
                $dd["provider_id"] = $contractor_id;
                $dd["subservice_id"] = $v;
                $db->insert("providerservices", $dd);
            }
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
        $smarty->assign("contractor_id", $contractor_id);
        $smarty->assign("services", $services);
        $smarty->assign("selectedservices", $selectedservices);

        $smarty->assign("message", '');
        $smarty->display('admin/updateservice.tpl');
        break;


    default:
        break;
}
