
<?php
    $path = "../";
    include "../header.php";
?>
  <div class="row">
        
        <div class="col-md-12" style="padding-left:15%;padding-top:2%;padding-right:15%;padding-bottom:5%">
        
           <div class="panel panel-default">
                <div class="panel-heading">
                    <center><h3>Flash Sale</h3></center>
                </div>
                <div class="panel-body">
<form action="form_process.php" method="post">
<div class="form-group">
<label>Product Name:</label>
<input type="text" name="pro_Name" id="pro_Name" class="form-control">
    </div>
    <div class="form-group">
    <label>SHG Name:</label>
<input type="text" name="shg_Name" id="shg_Name" class="form-control">
    </div>
    <div class="form-group">
    <label>Contact Details:</label>
<input type="text" name="contact" id="contact" class="form-control">
    </div>
    <div class="form-group">
<label>End Date:</label>
<input type="date" name="endDate" id="endDate" class="form-control">
    </div>
    
<div class="form-group">
<label>Image:</label>
<input type="file" id="files" name="files" >
 Image Preview:
    <img id="image" src="#" alt="image" height="100px"/>
    <script>
    document.getElementById("files").onchange = function () {
      var reader = new FileReader();

      reader.onload = function (e) {
          // get loaded data and render thumbnail.
          document.getElementById("image").src = e.target.result;
      };

      // read the image file as a data URL.
      reader.readAsDataURL(this.files[0]);
  };
</script>
</div> S
<div class="form-group">
<label>Discounted Price:</label>
<input type="text" name="discounted_price" class="form-control">
</div>
<div class="form-group">
<label>Currency:</label>
<select id="currency" name="currency"  class="form-control">
    <option value="$">Dollars</option>
    <option value="Rs.">Rupees</option>
</select>
<div class="form-group">
<label>Description:</label>
<textarea rows="4" cols="50" name="desc" id="desc" class="form-control">
</textarea>
</div>
<div class="form-group">
<label>Delievery Charges:</label>
<select id="charges" name="charges"  class="form-control">
    <option value="free">Free of Cost</option>
    <option value="applicable">Applicable</option>
</select>
</div>



<input type="submit" class="btn btn-success">

</form>
    </div>
            </div>
        </div>
    </div>
<?php
include "../footer.php";
?>