<?php
ERROR_REPORTING(0);

include('login/login_main.php');
//$path = "../";

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
        <link href="<?php echo htmlspecialchars($path);?>aroundyou/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Custom Theme Style  -->
        <link href="<?php echo htmlspecialchars($path);?>aroundyou/build/css/custom2.css" rel="stylesheet">
        <!-- Aditi ends -->
        <title>DesiBdesi</title>
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
                new google.translate.TranslateElement({
                    pageLanguage: 'en'
                    , includedLanguages: 'bn,hi,ml,mr,pa,ta,te'
                    , layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
                }, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </head>

    <body>
        <div class="navbar navbar-inverse set-radius-zero">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="<?php echo ($path);?>index.php">

                    <img src="<?php echo htmlspecialchars($path);?>assets/img/try3.png" style="height:42px"><span : height=42px> DesiBdesi </span>
                </a> </div>
                <div class="right-div" >
                    <div class="row">
                    <div id="google_translate_element"></div>
                    </div>
                    <div class="row">

                        <?php

                    if(isset($_SESSION["user_name"]))
                    {
                        $name=$_SESSION["user_name"];
                        $type=$_SESSION["type"];

                        echo '<div class="row">
                        <a href="#" class="btn btn-default">'.$name.'</a>

                        <a href="'.$path.'logout.php" class="btn btn-success">Log Out</a>
                    </div>';
                    }

                    else{
                        echo '
                         <div class="row">
                        <a href="'.$path.'login/user_buyer_shg.php" class="btn btn-default">LOGIN</a>
                        <a href="'.$path.'registration/buyer_reg.php" class="btn btn-success">REGISTER </a>
                    </div>';

                    }

                    ?> </div>
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

                        if(isset($_SESSION["type"]))
                        {
                          if($_SESSION["type"]=="buyer")
                          {
                            echo '
                                    <li><a href="'.$path.'buyer/order_start.php"> Advertisement </a></li>


                                    <li><a href="'.$path.'buyer/buyer_views_orders.php"> View Orders </a></li>
                                     '; }

                            else if($_SESSION["type"]=="shg")
                        { echo '
                                    <li><a href="'.$path.'flashsale/flashsale_form.php"> Flash Sale Form </a></li>
                                    <li><a href="'.$path.'aroundyou/index.php"> Around You </a></li>
                                    <li><a href="'.$path.'shg/shg_homepage.php"> Orders Available </a></li>
                                    <li><a href="'.$path.'shg/shg_searched.php"> Search Advertisments</a></li> ';
                        }

                                else if($_SESSION["type"]=="supplier")
                        { echo '
                                    <li><a href="'.$path.'supplier/view_requests_from_shgs.php"> View Raw Material Requests</a></li>
                                   ';

                        }



                        } ?>


                                    <li><a href="<?php echo $path;?>flashsale/sale_display.php"> Flash Sale</a></li>
                                   <li><a href="<?php echo $path;?>exhibition_form.php"> Add Exhibitions</a></li>
                                   <li><a href="<?php echo $path;?>exhibitionMap.php"> View Exhibitions</a></li>
                                    <li><a href="<?php echo $path;?>nodal_officers/load_nodal_officers.php"> View SSEs</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
