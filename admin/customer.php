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

$table = "customers";
$message="";
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
        $smarty->display('admin/customer.tpl');



        break;

    case 'add':
        if (isset($_POST["submit01"])) {
            $d = $_POST;
            unset($d['submit01']);
            $primary_id = $db->insert($table, $d);

            header("Location: index.php?admin/customer");
        } else {
            $d["id"] = "0";
            $d["customername"] = "add here";
            $d["phone"] = "";
            $d["email"] = "";
            $d["status"] = "active";
            $d["datecreated"] = "";
            $d["lastlogin"] = "";
            
            
            
            
            
            $smarty->assign('d', $d);
            $smarty->assign('path', "add");
            $smarty->assign("gr_status", $gr_status);
            $smarty->assign("gr_verified", $gr_verified);
            $smarty->assign("message", "");
            $smarty->display('admin/customerupdate.tpl');
        }
        break;
    case 'edit':
        if (isset($_POST["submit01"])) {
            $d = $_POST;

            $id = $_POST["id"];

            unset($d['id']);
            unset($d['submit01']);

            $db->update($table, $d, "id='$id'");
            header("Location: index.php?admin/customer");
        } else {
            $id = $getVars["id"];
            $sql = "select * from `$table` where id = '$id'";
            $d = $db->query_first($sql);

            $smarty->assign('d', $d);
            $smarty->assign('path', "edit");
            $smarty->assign("gr_status", $gr_status);
            $smarty->assign("gr_verified", $gr_verified);
            $smarty->assign("message", "");
            $smarty->display('admin/customerupdate.tpl');
        }
        break;

    case 'delete':
        break;

    default:
        break;
}
?>
