<?php

include('login/login_main.php');

$type=$_SESSION["type"];
?>




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
        <!-- Aditi -->
    
    <!-- DATATABLE STYLE  -->
    <link href="<?php echo htmlspecialchars($path);?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    
    
    
    <!-- NProgress -->
    <link href="<?php echo htmlspecialchars($path);?>aroundYou/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style  -->
    <link href="<?php echo htmlspecialchars($path);?>aroundYou/build/css/custom2.css" rel="stylesheet"> 
    <!-- Aditi ends -->
    <title>UNNATI KENDRA</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo htmlspecialchars($path);?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="<?php echo htmlspecialchars($path);?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo htmlspecialchars($path);?>assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'bn,hi,ml,mr,pa,ta,te', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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
                <div class="row">
                   <?php
                    
                    if(isset($_SESSION["user_name"]))
                    {
                        $name=$_SESSION["user_name"];
                        
                        echo '<div class="col-md-2">
                        <a href="#" class="btn btn-default">'.$name.'</a></div>
                    <div class="col-md-3">
                        <a href="logout.php" class="btn btn-success">Log Out</a>
                    </div>';
                    }
                    
                    else{
                        echo '
                         <div class="col-md-2">
                        <a href="'.$path.'login/user_buyer_shg.php" class="btn btn-default">LOGIN'.$type.'</a>

                    </div>
                    <div class="col-md-3">
                        <a href="'.$path.'registration/buyer_reg.php" class="btn btn-success">REGISTER </a>
                    </div>';
                        
                    }
                    
                    ?>
                   

                </div>


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
                          <?php
                          if($type=="buyer")
                          {
                            echo '  <li><a href="<?php echo $path;?>index.php"> HOME </a></li>
                                   <li><a href="<?php echo $path;?>buyer/order_start.php"> Advertisement </a></li>
                                   <li><a href="<?php echo $path;?>buyer/buyer_views_orders.php"> View Orders </a></li>
                                   ';
                                  
                              
                          }
                            else if($type=="shg")
                            {
                                
                                
                                 echo '  <li><a href="<?php echo $path;?>index.php"> HOME </a></li>
                                   <li><a href="<?php echo $path;?>shg/shg_homepage.php"> Orders Available </a></li>
                                   <li><a href="<?php echo $path;?>shg/shg_searched.php"> Search Advertisments</a></li>
                                   ';
                                
                            }
                           
                              ?>
                <!--            <li><a href="<?php echo $path;?>index.php"> HOME </a></li>

                          <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Buyer<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $path;?>buyer/order_start.php">Advertisement</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $path;?>buyer/buyer_views_orders.php">View Orders</a></li>
                             
                                </ul>
                            </li>
                          
                          
                           <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">SHG<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $path;?>shg/shg_homepage.php">Orders Available</a></li>
                                    
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $path;?>shg/shg_searched.php">Search Advertisements</a></li>
                                </ul>
                            </li>
                            
                          
                          
                          
                          
                          
                          
                <!--            <li><a href="tab.html">REQUEST RAW MATERIALS</a></li>
                            <li><a href="table.html">EXHIBITIONS</a></li>
                            <li><a href="table.html">EXHIBITIONS</a></li>
                            -->
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">HELP <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="ui.html">NGO CONTACT</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $path;?>nodal_officers/load_nodal_officers.php">NODAL OFFICERS</a></li>
                                      
                                </ul>
                            </li>

                            <li><a href="table.html">AROUND</a></li>
-->
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
