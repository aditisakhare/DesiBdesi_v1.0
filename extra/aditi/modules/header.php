<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>UNNATI KENDRA</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo htmlspecialchars($path);?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="<?php echo htmlspecialchars($path);?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo htmlspecialchars($path);?>assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- Aditi -->
    
    <!-- DATATABLE STYLE  -->
    <link href="<?php echo htmlspecialchars($path);?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    
    
    
    <!-- NProgress -->
    <link href="<?php echo htmlspecialchars($path);?>aroundYou/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style  -->
    <link href="<?php echo htmlspecialchars($path);?>aroundYou/build/css/custom2.css" rel="stylesheet"> 
    <!-- Aditi ends -->

</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">

                    <img src="<?php echo htmlspecialchars($path);?>assets/img/logo.png" style="height:42px">
                </a>

            </div>

            <div class="right-div">
                <a href="#" class="btn btn-default pull-right">LOGIN</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index.html" >DASHBOARD</a></li>
                             
                            <li><a href="form.html">FORMS</a></li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">UI ELEMENTS <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="ui.html">UI ELEMENTS</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">EXAMPLE LINK</a></li>
                                </ul>
                            </li>
                            <li><a href="tab.html">TABS & PANELS</a></li>
                            <li><a href="table.html">TABLES</a></li>
                            <li><a href="blank.html" class="menu-top-active">BLANK PAGE</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>