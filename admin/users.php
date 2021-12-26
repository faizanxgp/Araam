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

$table = "users";
$message="";
switch ($action) {
    case 'display':
        /* pagination vars */
        $page = isset($getVars['page']) ? (int) $getVars['page'] : 1;
        $perpage = 30;
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
        $smarty->display('admin/users.tpl');



        break;

    case 'search':
        $search = $_POST["name"];

        /* pagination vars */
        $page = isset($getVars['page']) ? (int) $getVars['page'] : 1;
        $perpage = 250;
        $start_from = $page == 1 ? 0 : (($page - 1) * ($perpage - 1));

        $sql = "SELECT * FROM  `$table`";
        $sql2 = "SELECT COUNT(DISTINCT id) as count FROM  `$table`";

        $sql .= " WHERE firstname like '%$search%' or lastname like '%$search%' or phone like '%$search%' or mobile like '%$search%' ";
        $sql2 .= " WHERE firstname like '%$search%' or lastname like '%$search%' or phone like '%$search%' or mobile like '%$search%' ";

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
        $smarty->display('admin/users.tpl');

        break;

    case 'add':
        if (isset($_POST["submit01"])) {
            $d = $_POST;
            $d["cryptpass"] = crypt($d["cryptpass"], "araam");

            $now = getdate();
            $nowformatted = $now["year"] . "-" . $now["mon"] . "-" . $now["mday"] . " " . $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"];
            $d["register_ts"] = $nowformatted;

            unset($d['submit01']);
            $primary_id = $db->insert($table, $d);

            header("Location: index.php?admin/users");
        } else {
            $d["id"] = "";
            $d["firstname"] = "";
            $d["lastname"] = "";
            $d["fb_userid"] = "";
            $d["email"] = "";
            $d["cryptpass"] = "";
            $d["dob"] = "";
            $d["address"] = "";
            $d["area"] = "";
            $d["city"] = "";
            $d["phone"] = "";
            //$d["phone2"] = "";
            $d["mobile"] = "";
            //$d["mobile2"] = "";
            $d["directions"] = "";
            $d["admin_rights"] = "";
            $now = getdate();
            $nowformatted = $now["year"] . "-" . $now["mon"] . "-" . $now["mday"] . " " . $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"];
            $d["register_ts"] = $nowformatted;

            $d["status"] = "enabled";
            $d["disc_algo"] = "";
            $d["lastlogin"] = "";
            $d["noemail"] = "";
            $d["nosms"] = "";
            $d["nonewsletter"] = "";
            $d["masteronly"] = "";
            $smarty->assign('d', $d);
            $smarty->assign('path', "add");
            $smarty->assign("gr_areas", $gr_areas);
            $smarty->assign("gr_howhear", $gr_howhear);
            $smarty->assign("gr_status", $gr_status);
            $smarty->assign("message", "");
            $smarty->display('admin/userupdate.tpl');
        }
        break;

    case 'addphone':
        if (isset($_POST["submit01"])) {
            $d = $_POST;
            $d["email"] = "noemail@araam.pk";

            $now = getdate();
            $nowformatted = $now["year"] . "-" . $now["mon"] . "-" . $now["mday"] . " " . $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"];
            $d["register_ts"] = $nowformatted;

            unset($d['submit01']);
            $primary_id = $db->insert($table, $d);

            header("Location: index.php?admin/users");
        } else {
            $d["id"] = "";
            $d["firstname"] = "";
            $d["lastname"] = "";
            $d["fb_userid"] = "";
            $d["email"] = "";
            $d["cryptpass"] = "";
            $d["dob"] = "";
            $d["address"] = "";
            $d["area"] = "";
            $d["city"] = "";
            $d["phone"] = "";
            $d["phone2"] = "";
            $d["mobile"] = "";
            $d["mobile2"] = "";
            $d["directions"] = "";
            $d["admin_rights"] = "";
            $d["register_ts"] = "";
            $d["status"] = "";
            $d["disc_algo"] = "";
            $d["lastlogin"] = "";
            $d["noemail"] = "";
            $d["nosms"] = "";
            $d["nonewsletter"] = "";
            $d["masteronly"] = "";
            $smarty->assign('d', $d);
            $smarty->assign('path', "addphone");
            $smarty->assign("gr_areas", $gr_areas);
            $smarty->assign("gr_howhear", $gr_howhear);
            $smarty->assign("gr_status", $gr_status);
            $smarty->assign("message", "");
            $smarty->display('admin/userupdatephone.tpl');
        }
        break;
    case 'edit':
        if (isset($_POST["submit01"])) {
            $d = $_POST;

            $id = $_POST["id"];
            $pass = $_POST["cryptpass"];
            if ($pass == "") {
                unset($d['cryptpass']);
            } else {
                $d["cryptpass"] = crypt($_POST["cryptpass"], "araam");
            }

            unset($d['id']);
            unset($d['submit01']);

            $db->update($table, $d, "id='$id'");
            header("Location: index.php?admin/users");
        } else {
            $id = $getVars["id"];
            $sql = "select * from `$table` where id = '$id'";
            $d = $db->query_first($sql);

            $smarty->assign('d', $d);
            $smarty->assign('path', "edit");
            $smarty->assign("gr_areas", $gr_areas);
            $smarty->assign("gr_howhear", $gr_howhear);
            $smarty->assign("gr_status", $gr_status);
            $smarty->assign("message", "");
            $smarty->display('admin/userupdate.tpl');
        }
        break;

    case 'delete':
        break;

    case 'loginas':

        $id = $getVars["id"];
        $sql = "select * from `$table` where id = '$id'";
        $d = $db->query_first($sql);

        $_SESSION["userid"] = $id;
        $_SESSION["username"] = $d["firstname"];
        $_SESSION["platform"] = "phone";

        header("Location: index.php?admin/users&id=$id&action=edit");
        break;

    default:
        break;

    case 'credit':
        if (isset($_POST["submit01"])) {
            //$d = $_POST;
            $d["user_id"] = $_POST["userid"];
            $d["movement_amount"] = $_POST["amount"];
            $d["description"] = $_POST["reason"];

            $primary_id = $db->insert('credit_movement', $d);
            header("Location: index.php?admin/users");
        } else {
            $id = $getVars["id"];
            $sql = "select * from `$table` where id = '$id'";
            $d = $db->query_first($sql);

            $smarty->assign('d', $d);
            //$smarty->assign('path', "credit");
            //$smarty->assign("gr_status", $gr_status);
            $smarty->assign("message", "");
            $smarty->display('admin/usercredit.tpl');
        }

        break;

    case 'credithistory':

        $userid = $getVars["id"];

        $sql = "SELECT * FROM  `credit_movement` where user_id = '$userid' order by movement_ts DESC";

        $data = $db->fetch_array($sql);
        $smarty->assign("data", $data);

        $smarty->assign("message", "$sql");
        $smarty->display('admin/usercredithistory.tpl');


        break;
}
?>