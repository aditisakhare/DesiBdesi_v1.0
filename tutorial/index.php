<?php

    $path = "../";
    include "../header.php";

?>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
           <center> <div class="col-lg-12"><h1>GETTING STARTED - <h4> EASY STEPS TO FOLLOW : </h4>
                </h1> </center>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="images/exhibition.JPG" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>View Exhibitions Near You</h3>
                <h4>MAPS</h4>
                <p> Officers upload data about recent exhibitions. SHGs and Buyers can view the exhibitions being conducted near their area on a map. </p>
                <a class="btn btn-primary" href="../exhibitionMap.php"> View Exhibitions <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="images/flash.JPG" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Flash Sale</h3>

                <p> SHGs can upload their products in bulk when they wish to sell goods at discounted price. Buyers will be able to browse through the products and contact the SHGs, if they wish to buy the items. </p>
                <a class="btn btn-primary" href="../flashsale/saledisplay.php"> View Items for Sale <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="images/quotation.JPG" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Send Quotations for Raw Materials </h3>
               <h4>POOLING FOR RAW MATERIALS</h4>
                <p> Suppliers will be able to send quotations to the SHG groups who are willing to buy raw materials in bulk.SHGs can respond to the quotations with Yes/No and proceed further </p>
                <a class="btn btn-primary" href="../supplier/send_quote.php"> Send Quotation <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Four -->
        <div class="row">

            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="images/rating.JPG" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Rating</h3>

                <p> Buyers can rate the SHGs on the basis of orders completed by them. SHGs who fail to fulfil the orders will be blacklisted by the Buyers. Buyers who receive highest rating will be recommended to users ( Future Scope ) </p>
                <a class="btn btn-primary" href="../buyer/past_orders_ratings.php"> Rate the SHGs <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="images/orders.JPG" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Orders placed by Buyers</h3>

                <p>SHGs can view the orders placed by the Buyers to which they can respond. SHGs who respond will be added to a group where further communiactions will take place</p>
                <a class="btn btn-primary" href="../buyer/buyers_views_orders.php">View Orders <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>
<?php

    $path = "../";
    include "../footer.php";

?>
