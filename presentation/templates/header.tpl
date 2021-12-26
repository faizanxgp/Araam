<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="araam.pk is the most Convenient and Safest Solution for all your Entertainment Needs. Buy Movies, Shows & Dramas with Free Delivery within Karachi & Shipping countrywide.">
        <meta name="author" content="">

        <link rel="shortcut icon" href="{#site_root#}/web/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="{#site_root#}/web/img/favicon.ico" type="image/x-icon">

        <title>{#site_title#}</title>

        <!-- Bootstrap core CSS -->
        <link href="{#site_root#}/web/css/bootstrap.css" rel="stylesheet">
        <link href="{#site_root#}/web/css/jquery-ui.min.css" rel="stylesheet">

        <!--
        <link href="{#site_root#}/web/css/bootstrap-responsive.css" rel="stylesheet">
        -->
        <link href='https://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

        <!--
        <link rel="stylesheet" href="{#site_root#}/web/css/themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="{#site_root#}/web/css/themes/light/light.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="{#site_root#}/web/css/themes/dark/dark.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="{#site_root#}/web/css/themes/bar/bar.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="{#site_root#}/web/css/nivo-slider.css" type="text/css" media="screen" />
        -->

        <!--
        <link rel="stylesheet" href="{#site_root#}/web/css/nivo-style.css" type="text/css" media="screen" />
        -->
        <!--
                <link href="{#site_root#}/web/css/flexslider.css" type="text/css" rel="stylesheet" media="screen" />
        -->
        <link href="{#site_root#}/web/css/tip-yellow/tip-yellow.css" rel="stylesheet" type="text/css" />

        <link href="{#site_root#}/web/css/main.css" rel="stylesheet">


        <link href="{#site_root#}/web/css/style-autocomplete.css" rel="stylesheet" type="text/css" media="all" >

        <!-- Custom styles for this template -->
        <link href="{#site_root#}/web/css/offcanvas.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../../assets/js/html5shiv.js"></script>
          <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <header>
            <!--div id="top-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 social"></div>
                        <div class="col-md-4 floatcenter">
                            <img src="{#site_root#}/web/img/phone-icon.png" /> Phone Orders: <span style="font-size:16px"><strong>0800-12345</strong></span> (9am - 9pm)
                        </div>
                        <div class="col-md-4">
                            <a href="login">Login</a>
                            
                        </div>
                    </div>
                </div>
            </div-->
            <div id="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="logo">
                                <a href="{#site_root#}" class="brand"><img src="{#site_root#}/web/img/logo.png" /></a>
                            </div>
                        </div>
                        <div class="col-md-8 align-right">
                            <!--div class="nav-coverx">
                                <div class="navbar">
                                    <div class="navbar-inner">
                                        <div class="nav-collapse2 collapse2 navbar-responsive-collapse">
                                            <ul class="nav nav-menu pull-right">

                                                <li>
                                                    <a href="{#site_root#}/user/ac-login">Customer Login</a>
                                                </li>
                                                <li>
                                                    <a href="{#site_root#}/contractors/ac-signup">Contractor Signup</a>
                                                </li>
                                                <li>
                                                    <a href="{#site_root#}/contractors/ac-login">Contractor Login</a>
                                                </li>

                                                {if isset($smarty.session.username)}
                                                    <li>Welcome {$smarty.session.username} | <a href="{#site_root#}/dashboard">Dashboard</a> | <a href="{#site_root#}/user/ac-logout">Logout</a>
                                                    {else}

                                                    {/if}

                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">s
                                                        <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{#site_root#}/user/ac-login">Customer Login</a></li>
                                                        <li><a href="{#site_root#}/contractors/ac-login">Contractor Login</a></li>
                                                        <li><a href="{#site_root#}/contractors/ac-signup">Contractor Signup</a></li>
                                                    </ul>
                                                </li>


                                                <li class=""><a data-toggle="dropdown" href="#" class="dropdown-toggle">Login <strong class="caret"></strong></a>
                                                    <div style="padding: 15px; padding-bottom: 0px;" class="dropdown-menu">
                                                        Welcome home


                                                    </div>
                                                </li>







                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>-->

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
         
	 {if isset($smarty.session.username)}
         <li class = "dropdown">
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
               <span class="glyphicon glyphicon-user"></span> {$smarty.session.username}
               <b class = "caret"></b>
            </a>
            
            <ul class = "dropdown-menu">
               <li><a href="{#site_root#}/dashboard">Dashboard</a></li>
               <li class = "divider"></li>
               <li><a href="{#site_root#}/user/ac-logout">Logout</a></li>
               
               
            </ul>
            
         </li>    
             
         {else}
         <li class = "dropdown">
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
               <span class="glyphicon glyphicon-user"></span> Members
               <b class = "caret"></b>
            </a>
            
            <ul class = "dropdown-menu">
               <li><a href="{#site_root#}/user/ac-login">Customer Login</a></li>
               <li class = "divider"></li>
               <li><a href="{#site_root#}/contractors/ac-login">Contractor Login</a></li>
               <li><a href="{#site_root#}/contractors/ac-signup">Contractor Signup</a></li>
               
            </ul>
            
         </li>
         {/if}
         
            
         
			
      </ul>
   </div>
   
</nav>



                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="content-wrapper">
            <!-- Modal -->
            <div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Message</h4>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>

                    </div>
                </div>
            </div>
            <div id="contents" class="container">