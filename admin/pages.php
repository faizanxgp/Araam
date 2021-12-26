<?php

if (!isset($_SESSION["adminid"]))
    header("Location: index.php");

$action = "";
if (isset($getVars["action"])) {
    $action = $getVars["action"];
}
if ($action == "")
    $action = "display";

$table = "pages";

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
        $smarty->display('admin/pages.tpl');



        break;

    case 'add':
        if (isset($_POST["submit01"])) {
            $d = $_POST;
            $d["body"] = stripslashes($d["body"]);
            unset($d['submit01']);
            $primary_id = $db->insert($table, $d);
            header("Location: index.php?admin/pages");
        } else {
            $d["id"] = "0";
            $d["url"] = "pageurl";
            $d["page_title"] = "Page Title";
            $d["keywords"] = "";
            $d["description"] = "";
            $d["body"] = "";
            $d["status"] = "active";
            $smarty->assign('d', $d);
            $smarty->assign('path', "add");
            $smarty->assign("gr_status", $gr_status);
            $smarty->assign("message", "");
            $smarty->display('admin/pagesupdate.tpl');
        }
        break;
    case 'edit':
        if (isset($_POST["submit01"])) {
            $d = $_POST;

            $id = $_POST["id"];
            
            $d["body"] = stripslashes($d["body"]);
                    

            unset($d['id']);
            unset($d['submit01']);

            $db->update($table, $d, "id='$id'");
            header("Location: index.php?admin/pages");
        } else {
            $id = $getVars["id"];
            $sql = "select * from `$table` where id = '$id'";
            $d = $db->query_first($sql);

            $smarty->assign('d', $d);
            $smarty->assign('path', "edit");
            $smarty->assign("gr_status", $gr_status);
            $smarty->assign("message", "");
            $smarty->display('admin/pagesupdate.tpl');
        }
        break;

    case 'delete':
        break;

    default:
        break;
}
