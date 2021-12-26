<?php /* Smarty version Smarty-3.1.15, created on 2017-03-13 18:57:25
         compiled from "D:\xampp\htdocs\araam\presentation\templates\adminheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2869356e10a39b2b6e6-59349870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2eace9658eaebcd17bd9586cff0c1f9de493020e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\adminheader.tpl',
      1 => 1459484794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2869356e10a39b2b6e6-59349870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e10a39beec16_47450803',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e10a39beec16_47450803')) {function content_56e10a39beec16_47450803($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.png">

        <title><?php echo $_smarty_tpl->getConfigVariable('site_title');?>
 - Admin</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/web/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/web/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/web/css/main.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/web/css/main-admin.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/web/css/offcanvas.css" rel="stylesheet">
        
        <link href='https://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../../assets/js/html5shiv.js"></script>
          <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        <a href="#"><img src="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/web/img/logo.png" /></a>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="welcome">
                        <?php if (isset($_SESSION['adminname'])) {?>
                            Welcome <?php echo $_SESSION['adminname'];?>
 | <a href="index.php?admin/admin&action=logout">Logout</a>
                        <?php } else { ?>
                            Please login
                        <?php }?>
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!--div class="navbar">
                        <nav class="nav nav-inline">
                            
                            Admin Panel : 
                            <?php if (isset($_SESSION['adminname'])) {?>
                                <a class="nav-link" href="index.php?admin/main">Home</a>
                                <a class="nav-link" href="index.php?admin/requests">Requests/Query</a>
                                <a class="nav-link" href="index.php?admin/contractor">Contractors</a>
                                <a class="nav-link" href="index.php?admin/customer">Customer</a>
                                <a class="nav-link" href="index.php?admin/pages">Pages</a>
                                
                                <a class="nav-link" href="index.php?admin/area">Area</a>
                                <a class="nav-link" href="index.php?admin/subarea">Sub Area</a>
                                <a class="nav-link" href="index.php?admin/service">Service</a>
                                <a class="nav-link" href="index.php?admin/subservice">Sub Service</a>
                                
                                
                                
                                <a class="nav-link" href="index.php?admin/questions">Service Questions</a>

                                <a href="index.php?admin/admin&action=logout">Logout</a>

                            <?php } else { ?>
                                <a href="index.php?admin/admin&action=login">Login</a>
                            <?php }?>
                            





                        </nav>

                    </div-->

                </div>
            </div><?php }} ?>
