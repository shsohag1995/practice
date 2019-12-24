@extends('layouts.shop')

<!-----------------PRODUCTS----------------------->
@section('content')

<!-----------------Start Shop header------------------------------------------>
 @include('partials.shop.shop_header')
  <!---------------------end shope header--------------------->
 <hr style="margin: 5px;">
 

<div class="container">    
  <div class="row">

    <div class="col-sm-2">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="container-fluid">
            <div class="row">
              <div >Category</div>
            </div>
          </div> 
        </div>
        <div class="panel-body"><a href=""><img src="{{asset('images/products/t1.jpg')}}" class="img-responsive" style="width:100%;max-height: 120px;" alt="Image"></a></div>
        <div class="panel-footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-2"style="float: left; "><a href="#" class=""><span class="glyphicon badge">Go</span></a></div>
              <button class="btn btn-success dropdown-toggle"type="button" data-toggle="dropdown" style="float: right; padding: 3px;">
                       <span class="caret"></span></button>
                        <ul id="shop_handelar" class="dropdown-menu">
                           <li><a href="#">Edit</a></li>
                           <li><a href="#">Hide</a></li>
                           <li><a href="#">Delete</a></li>
                          </ul>

            </div>
          </div>
       </div>
      </div>
    </div>

    <div class="col-sm-2">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="container-fluid">
            <div class="row">
              <div>Male</div>
            </div>
          </div> 
        </div>
        <div class="panel-body"><a href=""><img src="{{asset('images/products/t1.jpg')}}" class="img-responsive" style="width:100%;max-height: 120px;" alt="Image"></a></div>
        <div class="panel-footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-2"style="float: left; "><a href="#" class=""><span class="glyphicon badge">Go</span></a></div>
              <button class="btn btn-success dropdown-toggle"type="button" data-toggle="dropdown" style="float: right; padding: 3px;">
                       <span class="caret"></span></button>
                        <ul id="shop_handelar" class="dropdown-menu">
                           <li><a href="#">Edit</a></li>
                           <li><a href="#">Hide</a></li>
                           <li><a href="#">Delete</a></li>
                          </ul>

            </div>
          </div>
       </div>
      </div>
    </div> 
<!-----------------------------sllide show  Start------------->
    <div class="col-sm-2">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="container-fluid">
            <div class="row">
              <div>Male</div>
            </div>
          </div> 
        </div>
        <div class="">

         <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
          <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

    <!-- Wrapper for slides -->
        <div class="carousel-inner">

         <div class="item active">
        <img src="{{asset('images/products/t1.jpg')}}" alt="Los Angeles" style="width:100%; max-height: 120px;">
        <div class="carousel-caption">
          <a href="" style="text-decoration: none;"><p>Shart</p></a>
      </div>
           </div>

      <div class="item">

        <img src="{{asset('images/products/t1.jpg')}}" alt="Chicago" style="width:100%; max-height: 120px;">
        <div class="carousel-caption">
           <a href="" style="text-decoration: none;"><p>Pant</p></a>
      </div>
        
      </div>
    
      <div class="item">
        <img src="{{asset('images/products/t1.jpg')}}" alt="New York" style="width:100%; max-height: 120px;">
        <div class="carousel-caption">
          <a href="" style="text-decoration: none;"><p>T-Shart</p></a>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
          

        </div>
        <div class="panel-footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-2"style="float: left; "><a href="#" class=""><span class="glyphicon badge">Go</span></a></div>
              <button class="btn btn-success dropdown-toggle"type="button" data-toggle="dropdown" style="float: right; padding: 3px;">
                       <span class="caret"></span></button>
                        <ul id="shop_handelar" class="dropdown-menu">
                           <li><a href="#">Edit</a></li>
                           <li><a href="#">Hide</a></li>
                           <li><a href="#">Delete</a></li>
                          </ul>

            </div>
          </div>
       </div>
      </div>
    </div> 

 

  </div>
</div>



@endsection

<!-----------------PRODUCTS END----------------------->
