<?php

$url = "";
if (isset($getVars["url"])) {
    $url = $getVars["url"];
}

$sql = "select * from pages where url = '$url' limit 0,1";
$result = $db->query_first($sql);

$result["body"] = stripcslashes($result["body"]);

$smarty->assign("message", "");
$smarty->assign("page", $result);
$smarty->display('page.tpl');

?>
