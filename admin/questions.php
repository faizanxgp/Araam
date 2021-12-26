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

$table = "servicequestions";
$message="";
switch ($action) {
    case 'display':
        /* pagination vars */
        $page = isset($getVars['page']) ? (int) $getVars['page'] : 1;
        $perpage = 10;
        $start_from = $page == 1 ? 0 : (($page - 1) * ($perpage - 1));

        $sql = "SELECT servicequestions.*, subservice.subservice FROM  `$table` left outer join subservice on servicequestions.service_id = subservice.id ";
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
        $smarty->display('admin/question.tpl');



        break;

    case 'add':
        $sql3 = "SELECT id, subservice FROM  `subservice` WHERE status =  'active' ORDER BY subservice";
        $dservices = $db->fetch_array($sql3);
        $services = array();
        foreach ($dservices as $k => $v) {
            $id = $v["id"];
            $service = $v["subservice"];
            $services[$id] = $service;
        }
        if (isset($_POST["submit01"])) {
            $d = $_POST;
            unset($d['submit01']);
            $primary_id = $db->insert($table, $d);

            header("Location: index.php?admin/questions");
        } else {
            $d["id"] = "0";
            $d["service_id"] = 0;
            $d["question_number"] = 0;
            $d["question_text"] = "add here";
            $d["question_type"] = "textbox";
            $d["question_choices"] = "";
            $d["question_others"] = "yes";
            $d["status"] = "active";
            $smarty->assign('d', $d);
            $smarty->assign('path', "add");
            $smarty->assign("services", $services);
            $smarty->assign("gr_questiontype", $gr_questiontype);
            $smarty->assign("gr_yesno", $gr_yesno);
            $smarty->assign("gr_status", $gr_status);
            
            $smarty->assign("message", "");
            $smarty->display('admin/questionupdate.tpl');
        }
        break;
    case 'edit':
        $sql3 = "SELECT id, subservice FROM  `subservice` WHERE status =  'active' ORDER BY subservice";
        $dservices = $db->fetch_array($sql3);
        $services = array();
        foreach ($dservices as $k => $v) {
            $id = $v["id"];
            $service = $v["subservice"];
            $services[$id] = $service;
        }
        if (isset($_POST["submit01"])) {
            $d = $_POST;

            $id = $_POST["id"];

            unset($d['id']);
            unset($d['submit01']);

            $db->update($table, $d, "id='$id'");
            header("Location: index.php?admin/questions");
        } else {
            $id = $getVars["id"];
            $sql = "select * from `$table` where id = '$id'";
            $d = $db->query_first($sql);

            $smarty->assign('d', $d);
            $smarty->assign('path', "edit");
            $smarty->assign("services", $services);
            $smarty->assign("gr_questiontype", $gr_questiontype);
            $smarty->assign("gr_yesno", $gr_yesno);
            $smarty->assign("gr_status", $gr_status);
            $smarty->assign("message", "");
            $smarty->display('admin/questionupdate.tpl');
        }
        break;

    case 'delete':
        break;

    default:
        break;
}
?>