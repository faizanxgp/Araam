<?php

//define path
define('SERVER_ROOT' , BASEPATH);

date_default_timezone_set('Asia/Karachi');



// db settings
// I'm using a separate config file. so pull in those values 
require(BASEPATH . "/includes/db/config.inc.php"); 

// pull in the file with the database class 
require(BASEPATH . "/includes/db/Database.singleton.php");

// create the $db object 
$db = Database::obtain(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE); 

// connect to the server 
$db->connect(); 

require(BASEPATH . "/includes/sitepath.php"); /* sitepath string */

require(BASEPATH . "/includes/Smarty/libs/Smarty.class.php");

require(BASEPATH . "/includes/data.php");

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

$smarty->template_dir = BASEPATH . "/presentation/templates";
$smarty->compile_dir  = BASEPATH . "/presentation/templates_c";
$smarty->config_dir   = BASEPATH . "/presentation/configs";


require_once BASEPATH . "/includes/functions/functions.php";
require_once BASEPATH . "/includes/functions/functions_user.php";