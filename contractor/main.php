<?php

//$_SESSION["contractorid"] = 1;

defined("BASEPATH") or die("");

if (!isset($_SESSION["contractorid"])) {
    header("Location: " . SITE_ROOT . "contractors/ac-login");
    
}

$smessage = "";
if (isset($_SESSION["smessage"])) {
    $smessage = $_SESSION["smessage"];
}
$_SESSION["smessage"]="";

$message="";

/*if (isset($_POST["submit01"])) {
    $message = $_POST["message"];
    $sql01 = "delete FROM `news`";
    $news01 = $db->query($sql01);
    $sql01 = "insert into `news` (`message`) values ('".$message."')";
    $news01 = $db->query($sql01);
}*/

/*
// number of users
$sql01 = "SELECT * FROM `news` limit 0,1 ";
$news01 = $db->query_first($sql01);
$smarty->assign("news01", $news01);

// number of users
$sql01 = "SELECT count(*) as count FROM `users` WHERE 1 ";
$data01 = $db->query_first($sql01);
$smarty->assign("data01", $data01);
// orders in 
$sql02 = "SELECT count(*) as count, sum(order_total) as total FROM `orders` WHERE orders.status <> 'cancelled' and orders.ordertime >= DATE_SUB(NOW(), INTERVAL 1 DAY)";
$data02 = $db->query_first($sql02);
$smarty->assign("data02", $data02);

$sql03 = "SELECT count(*) as count, sum(order_total) as total FROM `orders` WHERE orders.status <> 'cancelled' and orders.ordertime >= DATE_SUB(NOW(), INTERVAL 7 DAY)";
$data03 = $db->query_first($sql03);
$smarty->assign("data03", $data03);

$sql04 = "SELECT count(*) as count, sum(order_total) as total FROM `orders` WHERE orders.status <> 'cancelled' and orders.ordertime >= DATE_SUB(NOW(), INTERVAL 30 DAY)";
$data04 = $db->query_first($sql04);
$smarty->assign("data04", $data04);

// dispatch
$sql05 = "SELECT count(*) as count FROM `dispatch` where dispatch.dispatchtime >= DATE_SUB(NOW(), INTERVAL 1 DAY) ";
$data05 = $db->query_first($sql05);
$smarty->assign("data05", $data05);

$sql06 = "SELECT count(*) as count FROM `dispatch` where dispatch.dispatchtime >= DATE_SUB(NOW(), INTERVAL 7 DAY) ";
$data06 = $db->query_first($sql06);
$smarty->assign("data06", $data06);

$sql07 = "SELECT count(*) as count FROM `dispatch` where dispatch.dispatchtime >= DATE_SUB(NOW(), INTERVAL 30 DAY) ";
$data07 = $db->query_first($sql07);
$smarty->assign("data07", $data07);
*/


$c_id = $_SESSION["contractorid"];

// services
$sql11 = "SELECT id, subservice  FROM `subservice` WHERE `status` = 'active' order by id";
$subservices = array();
$data11 = $db->fetch_array($sql11);
foreach ($data11 as $k=>$v) {
    $id = $v["id"];
    $title = $v["subservice"];
    $subservices[$id] = $title;
    
}
$smarty->assign("subservices", $subservices);

// areas
$sql12 = "SELECT id, area  FROM `area` WHERE `status` = 'active' order by id";
$areas = array();
$data12 = $db->fetch_array($sql12);
foreach ($data12 as $k=>$v) {
    $id = $v["id"];
    $title = $v["area"];
    $areas[$id] = $title;
    
}
$smarty->assign("areas", $areas);

// requests / new leads
$sql1 = "SELECT sr.*, b.id as bidid FROM `servicerequest` sr JOIN providerservices ps ON sr.subservice_id = ps.subservice_id JOIN providerareas pa ON sr.area_id = pa.area_id left outer join bids b on sr.id = b.servicerequest_id WHERE ps.provider_id = '$c_id' AND pa.provider_id = '$c_id' AND sr.approved = 'approved' AND isnull(b.id) ORDER BY sr.id DESC LIMIT 0 , 30";

$data1 = $db->fetch_array($sql1);
$smarty->assign("data1", $data1);

$sql4 = "SELECT sr.*, b.id as bidid FROM `servicerequest` sr JOIN providerservices ps ON sr.subservice_id = ps.subservice_id JOIN providerareas pa ON sr.area_id = pa.area_id left outer join bids b on sr.id = b.servicerequest_id WHERE ps.provider_id = '$c_id' AND pa.provider_id = '$c_id' AND sr.approved = 'approved' AND b.provider_id = '$c_id' and NOT isnull(b.id) ORDER BY sr.id DESC LIMIT 0 , 30";

$data4 = $db->fetch_array($sql4);
$smarty->assign("data4", $data4);

// awarded
$sql2 = "SELECT sr.*, b.* FROM `servicerequest` sr JOIN providerservices ps ON sr.subservice_id = ps.subservice_id JOIN providerareas pa ON sr.area_id = pa.area_id left outer join bids b on sr.id = b.servicerequest_id WHERE b.provider_id = '$c_id' and b.provider_id = '$c_id' and b.status = 'selected'";

$data2 = $db->fetch_array($sql2);
$smarty->assign("data2", $data2);
// completed
$sql3 = "SELECT sr.*, b.* FROM `servicerequest` sr JOIN providerservices ps ON sr.subservice_id = ps.subservice_id JOIN providerareas pa ON sr.area_id = pa.area_id left outer join bids b on sr.id = b.servicerequest_id WHERE b.provider_id = '$c_id' and b.provider_id = '$c_id' and b.status = 'completed'";

$data3 = $db->fetch_array($sql3);
$smarty->assign("data3", $data3);

$sql = "SELECT sum( points ) as purchased FROM `membership` WHERE provider_id = '$c_id' ";
$points1 = $db->query_first($sql);
$purchased = $points1["purchased"];

$sql = "SELECT sum( points ) as consumed FROM `bids` WHERE provider_id = '$c_id' ";
$points2 = $db->query_first($sql);
$consumed = $points2["consumed"];
$points = $purchased - $consumed;

$smarty->assign("points", $points);

$smarty->assign("message", '');
$smarty->assign("smessage", $smessage);
$smarty->display('contractor/main.tpl');