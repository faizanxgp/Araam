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

$table = "subservice";
$message="";
switch ($action) {
    case 'display':
        /* pagination vars */
        $page = isset($getVars['page']) ? (int) $getVars['page'] : 1;
        $perpage = 30;
        $start_from = $page == 1 ? 0 : (($page - 1) * ($perpage - 1));

        $sql = "SELECT ms . * , mc.service AS servicename
            FROM  `subservice` ms
            LEFT OUTER JOIN service mc ON ms.service_id = mc.id
            ORDER BY ms.service_id";




        $sql2 = "SELECT COUNT(DISTINCT id) as count FROM  `subservice` ms ";

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
        $smarty->display('admin/subservice.tpl');



        break;

    case 'add':
        $sql3 = "SELECT id, service FROM  `service` WHERE status =  'active' ORDER BY service";
        $dservices = $db->fetch_array($sql3);
        $services = array();
        foreach ($dservices as $k => $v) {
            $id = $v["id"];
            $service = $v["service"];
            $services[$id] = $service;
        }


        if (isset($_POST["submit01"])) {
            $d = $_POST;
            unset($d['submit01']);
            $primary_id = $db->insert($table, $d);

            header("Location: index.php?admin/subservice");
        } else {
            $d["id"] = "0";
            $d["service_id"] = "";
            $d["subservice"] = "add here";
            //$d["orderby"] = "0";
            $d["status"] = "active";
            $smarty->assign('d', $d);
            $smarty->assign('path', "add");
            $smarty->assign("services", $services);
            $smarty->assign("gr_status", $gr_status);
            $smarty->assign("message", "");
            $smarty->display('admin/subserviceupdate.tpl');
        }
        break;
    case 'edit':
        $sql3 = "SELECT id, service FROM  `service` WHERE status =  'active' ORDER BY service";
        $dservices = $db->fetch_array($sql3);
        $services = array();
        foreach ($dservices as $k => $v) {
            $id = $v["id"];
            $service = $v["service"];
            $services[$id] = $service;
        }
        if (isset($_POST["submit01"])) {
            $d = $_POST;

            $id = $_POST["id"];

            unset($d['id']);
            unset($d['submit01']);

            $db->update($table, $d, "id='$id'");
            header("Location: index.php?admin/subservice");
        } else {
            $id = $getVars["id"];
            $sql = "select * from `$table` where id = '$id'";
            $d = $db->query_first($sql);

            $smarty->assign('d', $d);
            $smarty->assign('path', "edit");
            $smarty->assign("services", $services);
            $smarty->assign("gr_status", $gr_status);
            $smarty->assign("message", "");
            $smarty->display('admin/subserviceupdate.tpl');
        }
        break;

    case 'delete':
        break;

    default:
        break;
}
?>
