<?php /* Smarty version Smarty-3.1.15, created on 2016-04-01 09:58:08
         compiled from "D:\xampp\htdocs\araam\presentation\templates\contractorheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:457856e0fb4fa2ff12-01530417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd4ca81792682910f4dccce2e368713511e81660' => 
    array (
      0 => 'D:\\xampp\\htdocs\\araam\\presentation\\templates\\contractorheader.tpl',
      1 => 1459485160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '457856e0fb4fa2ff12-01530417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56e0fb4fb936f2_21854145',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e0fb4fb936f2_21854145')) {function content_56e0fb4fb936f2_21854145($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.png">

        <title><?php echo $_smarty_tpl->getConfigVariable('site_title');?>
 - Contractor</title>

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
                        <a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractors"><img src="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/web/img/logo.png" /></a>
                    </p>
                </div>
                <div class="col-md-6">
                    <!--p class="welcome">
                        <?php if (isset($_SESSION['contractorname'])) {?>
                            Welcome <?php echo $_SESSION['contractorname'];?>
 | <a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractors/ac-logout">Logout</a>
                        <?php } else { ?>
                            Please login
                        <?php }?>
                    </p-->
                    
                    <nav class = "navbar navbar-default pull-right" role = "navigation">
   
   <div class = "navbar-header">
      <button type = "button" class = "navbar-toggle" 
         data-toggle = "collapse" data-target = "#example-navbar-collapse">
         <span class = "sr-only">Toggle navigation</span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
      </button>
		
      <!--a class = "navbar-brand" href = "#"></a-->
   </div>
   
   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
	
      <ul class = "nav navbar-nav">
          		
         <li class = "dropdown">
            <?php if (isset($_SESSION['contractorname'])) {?> 
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
               <span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['contractorname'];?>

               <b class = "caret"></b>
            </a>
            
            <ul class = "dropdown-menu">
               <li><a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/main">Contractor Home</a></li>
               <li class = "divider"></li>
               <li><a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractors/ac-logout">Logout</a></li>
            </ul>
            <?php } else { ?>
                Please login
            <?php }?>
         </li>
         
			
      </ul>
   </div>
   
</nav>
                    
                    
                    
                    
                    

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar">
                        <nav class="nav nav-inline">
                            Contractor Panel : 
                            <?php if (isset($_SESSION['contractorname'])) {?>
                                <a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/main">Main</a>
                                
                                <a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/update/ac-update"> Account</a>
                                <a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/profile/ac-update"> Profile</a>
                                
                                
                                <a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/update/ac-updateservice"> Services</a>
                                <a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractor/update/ac-updatearea"> Areas</a>
                                <a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractors/ac-logout">Logout</a>
                            <?php } else { ?>

                                <a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractors/ac-signup">Signup</a>
                                <a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractors/ac-login">Login</a>
                                
                                <a href="<?php echo $_smarty_tpl->getConfigVariable('site_root');?>
/contractors/ac-forgot">Forgot password</a>

                            <?php }?>

                        </nav>
                    </div>

                </div>
            </div><?php }} ?>
