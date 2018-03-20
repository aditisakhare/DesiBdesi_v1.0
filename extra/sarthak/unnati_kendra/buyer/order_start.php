<?php

include('connect.php');
$path='../';
include('../header.php');

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Advertisement Creation Form</title>
    </head>

    <body>

    <div class="row">
        
        <div class="col-md-12" style="padding-left:15%;padding-top:5%;padding-right:15%;padding-bottom:5%">
        
           <div class="panel panel-primary">
                <div class="panel-heading">
                	Advertisement Creation Form
                </div>
                <div class="panel-body">
                    <form role="form" action="buyer_reg_main.php" method="post">
                        <div class="form-group">
                            <label>Select Category</label>
                            <select class="form-control" type="text" name="category">
                            	<option value="1">Food</option>
                            	<option value="2">Wooden</option>
                           	</select>
                            
                        </div>
                        <div class="form-group">
                            <label>Select Item</label>
                            <select class="form-control" type="text" name="item">
                            	<option value="1">Pickle</option>
                            	<option value="2">Papad</option>
                           	</select>
                            
                        </div>
                        <div class = "row">
                        	<div class="col-md-6">
                        		<div class="form-group">
                            		<label>Quantity</label>
                            		<input type="text" name="qty" class="form-control" ></input>
                        		</div>  
                        	</div>
                        	<div class="col-md-6">
		                    	<div class="form-group">
			                    	<label>Unit</label>
			                        <select class="form-control" id="disabledInput" type="text" name="unit" disabled="">
			                        	<option value="1">Kgs</option>
			                       	</select>
		                   		</div>
                        	</div>
                        </div> 
                        <div class="form-group">
                            <label>Request Price per Unit</label>
                            <input type="text" name="price" class="form-control" ></input>
                        </div> 
                        <div class="form-group">
                            <label>Order Customization Details</label>
                            <textarea  rows="3" name="company_name" class="form-control" ></textarea>
                        </div>   
                                                  
                        <div class="form-group">
                            <label>Delivery State</label>
                            <select class="form-control" type="text" name="district">
                            	<option value="1">Maharashtra</option>
                            	<option value="2">Kerala</option>
                           	</select>
                        </div>     
                          
                            
                        <div class="form-group">
                            <label>Delivery District</label>
                            <select class="form-control" type="text" name="district">
                            	<option value="1">Mumbai</option>
                            	<option value="2">Thane</option>
                           	</select>
                        </div>         
                        <div class="form-group">
                            <label>Delivery Time (Months)</label>
                            <input type="text" name="delivery_time" class="form-control" ></input>
                        </div>          
                        
                        <button type="submit" class="btn btn-primary"> Publish Advertisement </button>

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