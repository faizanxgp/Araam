<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.png">

        <title>{#site_title#} - Admin</title>

        <!-- Bootstrap core CSS -->
        <link href="{#site_root#}/web/css/bootstrap.css" rel="stylesheet">
        <link href="{#site_root#}/web/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="{#site_root#}/web/css/main.css" rel="stylesheet">
        <link href="{#site_root#}/web/css/main-admin.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{#site_root#}/web/css/offcanvas.css" rel="stylesheet">
        
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
                        <a href="#"><img src="{#site_root#}/web/img/logo.png" /></a>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="welcome">
                        {if isset($smarty.session.adminname)}
                            Welcome {$smarty.session.adminname} | <a href="index.php?admin/admin&action=logout">Logout</a>
                        {else}
                            Please login
                        {/if}
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!--div class="navbar">
                        <nav class="nav nav-inline">
                            
                            Admin Panel : 
                            {if isset($smarty.session.adminname)}
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

                            {else}
                                <a href="index.php?admin/admin&action=login">Login</a>
                            {/if}
                            





                        </nav>

                    </div-->

                </div>
            </div>