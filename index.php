<?php

define("BASEPATH", dirname(__FILE__));
session_start();

require 'includes/config.php';

//fetch the passed request
$request = $_SERVER['QUERY_STRING'];

//parse the page request and other GET variables
$parsed = explode('&' , $request);

//the page is the first element
$page = array_shift($parsed);

//the rest of the array are get statements, parse them out.
$getVars = array();
foreach ($parsed as $argument)
{
	//split GET vars along '=' symbol to separate variable, values
	list($variable , $value) = split('=' , $argument);
	$getVars[$variable] = $value;
}
//echo $request; die;

//
//this is a test , and we will be removing it later
// print "The page your requested is '$page'";
// print '<br/>';
// $vars = print_r($getVars, TRUE);
// print "The following GET vars were passed to the page:<pre>".$vars."</pre>";

######################
/* / cart variable
if (isset($_SESSION["cart"])) {
    $ucart = unserialize($_SESSION["cart"]);
    $_SESSION["ucart"] = $ucart;
}
// cart variable - mini mart
if (isset($_SESSION["mcart"])) {
    $umcart = unserialize($_SESSION["mcart"]);
    $_SESSION["umcart"] = $umcart;
}*/
if (isset($_SESSION["location"])) {
    
}

if ($page == "") $page = "main";
$page = $page . '.php';
if (file_exists($page)) {
    include_once($page);
} else {
    include_once("main.php");
}
