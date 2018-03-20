
<?php
    $path = "";
    include "header.php";
	$city_name = array();
	$city_name = ['Panvel','Mumbai','Pune','Bangalore','Munnar','Kochi'];
	$state_name = array();
	$state_name = ['Maharashtra','Kerala','Tamil Nadu','Karnataka'];

?>
  <div class="row">
        
        <div class="col-md-12" style="padding-left:15%;padding-top:2%;padding-right:15%;padding-bottom:5%">
        
           <div class="panel panel-default">
                <div class="panel-heading">
                    <center><h3>Exhibition Details</h3></center>
                </div>
                <div class="panel-body">
<form action="form_process.php" method="post">
<div class="form-group">
<label>Exhibition name:</label>

<input type="text" name="ex_Name" id="ex_Name" class="form-control">
    </div>
    <div class="form-group">
<label>Start Date:</label>
<input type="date" name="startDate" id="startDate" class="form-control">
    </div>
<div class="form-group">
<label>End Date:</label>
<input type="date" name="endDate" class="form-control">
    </div>
<div class="form-group">
<label>Place:</label>
<input type="text" name="place_var" class="form-control">
    </div>
<div class="form-group">
<label>City:</label>
<select name='city_var' name='city_var' id='city_var' class="form-control">
<?php
  foreach($city_name as $value) {
  echo "<option value='"; echo $value; echo "'>"; echo $value; echo "</option>";
	}
?>
</select>
    </div>
<div class="form-group">
<label>State:</label>
<select name='state_var' name='state_var' id='state_var' v>
<?php
  foreach($state_name as $value) {
  echo "<option value='"; echo $value; echo "'>"; echo $value; echo "</option>";
	}
?>
</select>
    </div>
<div class="form-group">
<label>Organizer:</label>
<input type="text" name="organizer_var" class="form-control">
    </div>
<div class="form-group">
<label>Description:</label>
<textarea rows="4" cols="50" name="desc" id="desc" class="form-control">
</textarea>
    </div>
<div class="form-group">
<label>Latitude:</label>
<input type="text" name="lat" id="lat" class="form-control">
    </div>
<div class="form-group">
<label>Longitude:</label>
<input type="text" name="long" id="long" class="form-control">
    </div>


<input type="submit" class="btn btn-success">

</form>
    </div>
            </div>
        </div>
    </div>
<?php
include "footer.php";
?>