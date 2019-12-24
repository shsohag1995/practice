<?php 
include("includes/headers/user_header.php");
?>
<?php 
include("includes/headers/markets_header.php");
?>

<nav class="navbar navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand " href="search.php">All</a>
      <a class="navbar-brand " href="search.php">Shops</a>
      <a class="navbar-brand " href="search.php">people</a>
      <a class="navbar-brand " href="search.php">Shops type</a>
      <a class="navbar-brand " href="search.php">Markets</a>
    </div>
  </div>
</nav>

 <div class="col-lg-6 col-sm-6" style="max-height: 250px; margin-top: 10px;">     
    <div class="card hovercard grad1">
        <div class="card-background ">
          <div class="row">
            <div class="col-lg-3 col-sm-3" style="float: left;">
              <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star badge" aria-hidden="true">5</span>
                        
                    </button>
               </div>
            </div>
                <div class="col-lg-9 col-sm-9" style="float: left;">
                  <a href=""><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-sign-up"></span> IU FOOD PARK</button></a>
                </div>
          </div>
            <img class="card-bkimg" alt="" src="image/shop2.jpg" style="width: 100%;height:200px;" >
          
        </div>
    </div>
      <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">

         <a href="#" class="btn btn-success btn-sm">
          <span class="glyphicon glyphicon-thumbs-up badge">15001</span>
      </a>
        <a href="#" class="btn btn-danger btn-sm">
          <span class="glyphicon glyphicon-thumbs-down badge">15001</span>
        </a>
        <a href="#" class="btn btn-info btn-sm">
          <span class="glyphicon glyphicon-comment badge">150014444</span>
      </a>
        <a href="#" class="btn btn-primary btn-sm">
          <span class="glyphicon glyphicon-plus badge">1500144</span>
        </a> 
       </div>
 </div>


     <div class="col-md-3">
      <div ><a href="includes/iframe/shop_list.php" ><p style="text-align: center; padding: 0px;margin: 0px;"> Hotel Kushtia</p> </a> </div>
      <iframe src="includes/iframe/markets_shop_list.php"></iframe>
     </div>

   
     <div class="col-md-3">
      <div ><a href="includes/iframe/shop_list.php" ><p style="text-align: center; padding: 0px;margin: 0px;">Kushtia city shops</p> </a> </div>
      <iframe src="includes/iframe/markets_shop_list.php"></iframe>
     </div>

     <div class="col-md-3">
      <div ><a href="includes/iframe/shop_list.php" ><p style="text-align: center; padding: 0px;margin: 0px;"> NS Road Kushtia </p> </a> </div>
      <iframe src="includes/iframe/markets_shop_list.php"></iframe>
     </div>