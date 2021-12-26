<?php
<?php

$action = "";
if (isset($getVars["action"])) {
    $action = $getVars["action"];
}

$message = "";
$message2 = "";
if (isset($getVars["message"])) {
    $message2 = $getVars["message"];
}


header('location: main');


// get template
$string = getfile(BASEPATH . "/includes/email_test.txt");

// replace variables

$patterns = array();
$patterns[0] = '/%user_name%/';
$patterns[1] = '/%user_email%/';

$replacements = array();
$replacements[2] = 'bear';
$replacements[1] = 'black';

$string2 = preg_replace($patterns, $replacements, $string);

$subj = "test subject";

send_email("aalogic@gmail.com", $subj, $string2);


$smarty->assign("message", "");
$smarty->assign("message2", "");
$smarty->display('temp.tpl');
