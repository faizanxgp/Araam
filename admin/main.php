<?php

//$_SESSION["adminid"] = 1;

defined("BASEPATH") or die("");

if (!isset($_SESSION["adminid"]))
    header("Location: index.php?admin/admin&action=login");

if (isset($_POST["submit01"])) {
    $message = $_POST["message"];
    $sql01 = "delete FROM `news`";
    $news01 = $db->query($sql01);
    $sql01 = "insert into `news` (`message`) values ('" . $message . "')";
    $news01 = $db->query($sql01);
}
$message = "";
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

$sql1 = "SELECT id, requestby, email, mobile, datecreated, approved FROM `servicerequest` WHERE 1 ORDER BY id DESC LIMIT 0 , 30";
$data1 = $db->fetch_array($sql1);
$smarty->assign("data1", $data1);

$sql2 = "SELECT id, contact_person, phone, mobile, email, city, datecreated, status FROM `providers` WHERE 1 ORDER BY id DESC LIMIT 0 , 30";
$data2 = $db->fetch_array($sql2);
$smarty->assign("data2", $data2);

$smarty->assign("message", '');
$smarty->display('admin/main.tpl');