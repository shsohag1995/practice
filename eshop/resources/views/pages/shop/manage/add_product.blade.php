<?php
include("includes/header.php");
?>
            <div class="container">
                <div class="row">
                    
             
             <form class="form-horizontal" style=" margin: 20px;" action="" method="POST">
                
                <div class="form-group">
                  <label class="control-label col-sm-2">Upload Product Image:</label>
                  <div class="col-sm-4">          
                    <input type="file" class="form-control" name="product_image">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" >Product Name:</label>
                  <div class="col-sm-4">          
                    <input type="text" class="form-control" name="product_name" placeholder="Enter product name" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Product Type:</label>
                  <div class="col-sm-4">          
                    <input type="text" class="form-control" name="product_type" placeholder="Enter Product Type" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" >Product catagory:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="product_catagory" placeholder="Enter product catagory" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" >Brand Name:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="brand_name" placeholder="Enter Brand Name" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" >Product Quantity:</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control" name="product_quantity" placeholder=" " value="1" >
                  </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 ">Condition:</label>
                    <div class="col-sm-4">
                        <label class="radio-inline navbar-brand">
                          <input type="radio" name="condition" value="New"checked>New
                        </label>
                        <label class="radio-inline navbar-brand" >
                          <input type="radio" name="condition" value="Old">Old
                        </label>  
                   </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-2">Product details:</label>
                    <div class="col-sm-4">
                       <textarea class="form-control" name="product_details"  rows="6"></textarea>
                    </div>
                   
                    </div> 
                    <div class="form-group">
                   <label class="control-label col-sm-2">Import price:</label>
                   <div class="col-sm-2">          
                    <input type="text" class="form-control" name="password" placeholder="Buying price">
                  </div>
                </div> 
                <div class="form-group">
                 
                  <label class="control-label col-sm-2">Export price:</label>
                  <div class="col-sm-2">          
                    <input type="text" class="form-control" name="password" placeholder="Selling price">
                    <button class="btn btn-success" type="submit" class="btn btn-default" name="submit">Upload</button>
                  </div>
                </div>
               </form>
           </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>