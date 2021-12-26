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

$table = "subarea";
$message="";
switch ($action) {
    case 'display':
        /* pagination vars */
        $page = isset($getVars['page']) ? (int) $getVars['page'] : 1;
        $perpage = 30;
        $start_from = $page == 1 ? 0 : (($page - 1) * ($perpage - 1));

        $sql = "SELECT ms . * , mc.area AS areaname
            FROM  `subarea` ms
            LEFT OUTER JOIN area mc ON ms.area_id = mc.id
            ORDER BY ms.area_id";




        $sql2 = "SELECT COUNT(DISTINCT id) as count FROM  `subarea` ms ";

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
        $smarty->display('admin/subarea.tpl');



        break;

    case 'add':
        $sql3 = "SELECT id, area FROM  `area` WHERE status =  'active' ORDER BY area";
        $dareas = $db->fetch_array($sql3);
        $areas = array();
        foreach ($dareas as $k => $v) {
            $id = $v["id"];
            $area = $v["area"];
            $areas[$id] = $area;
        }


        if (isset($_POST["submit01"])) {
            $d = $_POST;
            unset($d['submit01']);
            $primary_id = $db->insert($table, $d);

            header("Location: index.php?admin/subarea");
        } else {
            $d["id"] = "0";
            $d["area_id"] = "";
            $d["subarea"] = "add here";
            //$d["orderby"] = "0";
            $d["status"] = "active";
            $smarty->assign('d', $d);
            $smarty->assign('path', "add");
            $smarty->assign("areas", $areas);
            $smarty->assign("gr_status", $gr_status);
            $smarty->assign("message", "");
            $smarty->display('admin/subareaupdate.tpl');
        }
        break;
    case 'edit':
        $sql3 = "SELECT id, area FROM  `area` WHERE status =  'active' ORDER BY area";
        
        $dareas = $db->fetch_array($sql3);
        $areas= array();
        foreach ($dareas as $k => $v) {
            $id = $v["id"];
            $area = $v["area"];
            $areas[$id] = $area;
        }
        
        if (isset($_POST["submit01"])) {
            $d = $_POST;

            $id = $_POST["id"];

            unset($d['id']);
            unset($d['submit01']);

            $db->update($table, $d, "id='$id'");
            header("Location: index.php?admin/subarea");
        } else {
            $id = $getVars["id"];
            $sql = "select * from `$table` where id = '$id'";
            $d = $db->query_first($sql);

            $smarty->assign('d', $d);
            $smarty->assign('path', "edit");
            $smarty->assign("areas", $areas);
            $smarty->assign("gr_status", $gr_status);
            $smarty->assign("message", "");
            $smarty->display('admin/subareaupdate.tpl');
        }
        break;

    case 'delete':
        break;

    default:
        break;
}
?>
