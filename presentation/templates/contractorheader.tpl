<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.png">

        <title>{#site_title#} - Contractor</title>

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
                        <a href="{#site_root#}/contractors"><img src="{#site_root#}/web/img/logo.png" /></a>
                    </p>
                </div>
                <div class="col-md-6">
                    <!--p class="welcome">
                        {if isset($smarty.session.contractorname)}
                            Welcome {$smarty.session.contractorname} | <a href="{#site_root#}/contractors/ac-logout">Logout</a>
                        {else}
                            Please login
                        {/if}
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
            {if isset($smarty.session.contractorname)} 
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
               <span class="glyphicon glyphicon-user"></span> Welcome {$smarty.session.contractorname}
               <b class = "caret"></b>
            </a>
            
            <ul class = "dropdown-menu">
               <li><a href="{#site_root#}/contractor/main">Contractor Home</a></li>
               <li class = "divider"></li>
               <li><a href="{#site_root#}/contractors/ac-logout">Logout</a></li>
            </ul>
            {else}
                Please login
            {/if}
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
                            {if isset($smarty.session.contractorname)}
                                <a href="{#site_root#}/contractor/main">Main</a>
                                
                                <a href="{#site_root#}/contractor/update/ac-update"> Account</a>
                                <a href="{#site_root#}/contractor/profile/ac-update"> Profile</a>
                                
                                
                                <a href="{#site_root#}/contractor/update/ac-updateservice"> Services</a>
                                <a href="{#site_root#}/contractor/update/ac-updatearea"> Areas</a>
                                <a href="{#site_root#}/contractors/ac-logout">Logout</a>
                            {else}

                                <a href="{#site_root#}/contractors/ac-signup">Signup</a>
                                <a href="{#site_root#}/contractors/ac-login">Login</a>
                                
                                <a href="{#site_root#}/contractors/ac-forgot">Forgot password</a>

                            {/if}

                        </nav>
                    </div>

                </div>
            </div>