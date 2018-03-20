<?php

include('connect.php');
$path='../';
include('../header.php');

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Buyer's Registration</title>
    </head>

    <body>

    <div class="row">

        <div class="col-md-12" style="padding-left:15%;padding-top:5%;padding-right:15%;padding-bottom:5%">

           <div class="panel panel-primary">
                <div class="panel-heading">
                    Buyer Registration
                </div>
                <div class="panel-body">
                    <form role="form" action="buyer_reg_main.php" method="post">
                        <div class="form-group">
                            <label>Enter Name</label>
                            <input class="form-control" type="text" name="name"/>

                        </div>
                        <div class="form-group">
                            <label>Enter Email</label>
                            <input class="form-control" type="email" name="email" />

                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" ></input>
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="company_name" class="form-control" ></input>
                        </div>
                        <div class="form-group">
                            <label>Aadhar</label>
                            <input type="text" name="aadhar" class="form-control" ></input>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" ></input>
                        </div>
                        <div class="form-group">
                            <label>Street</label>
                            <input type="text" name="street" class="form-control" ></input>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" ></input>
                        </div>
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" name="state" class="form-control" ></input>
                        </div>
                        <div class="form-group">
                            <label>PIN Code</label>
                            <input type="text" name="zip" class="form-control" ></input>
                        </div>
                        <button type="submit" class="btn btn-primary">Register </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>

    </html>

<?php
include('../footer.php');
?>
