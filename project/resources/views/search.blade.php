@extends('layouts.app')

@section('content')
<hr>
<div class="container-fluid text-center">
    <div  class="col-md-6"style="max-height: 250px; margin-top: 5px;"> 
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="{{asset('images/shop/s1.jpg')}}" class="img-responsive" style="width:100%; max-height:100px;" alt="Image"></div>
        <div class="panel-footer">Buy NOW</div>
      </div>
    </div>

@foreach($allshops as $shop)
@if($shop->type=='Public')
<div class="col-md-6 col-sm-6" style="max-height: 250px; margin-top: 0px;">    
    <div class="card hovercard grad2">
        <div class="card-background ">
           <div class="row">
            <div class="col-lg-1 col-sm-1" style="float: left; padding: 0px;">
              <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star badge" aria-hidden="true">
                       @if($shop->type=='Public')
                       {{$shop->type}}
                       @else
                       {{$shop->star}}
                       @endif
                    </span>
                        
                    </button>
               </div>
            </div>
            
                <div class="col-lg-10 col-sm-10" style="float: left; padding: 0px;margin: 0px;">
                  <a href="/shop/{{$shop->slug}}"><button type="submit" class="btn btn-default">{{$shop->name}}</button></a>
                </div>
                
          </div>

        
                 <div class="col-lg-12 col-sm-12" style="float: left; padding: 0px;margin: 0px;">
                  <h1>Wellcome To</h1>
                </div>
                 <div class="col-lg-12 col-sm-12" style="float: left; padding: 0px;margin: 0px;">
                  <h1>{{$shop->name}}</h1>
                </div>


          <!-------------shop image end------>
        </div> 
    </div>
      <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">

         <a href="/shop/{{$shop->id}}/like/1" class="btn btn-success btn-sm">
          <span class="glyphicon glyphicon-thumbs-up badge">{{$shop->like}}</span>
      </a>
        <a href="/shop/{{$shop->id}}/like/0" class="btn btn-danger btn-sm">
          <span class="glyphicon glyphicon-thumbs-down badge">{{$shop->unlike}}</span>
        </a>
         <a href="/shop/{{$shop->slug}}/comment"  class="btn btn-info btn-sm">
          <span class="glyphicon glyphicon-comment badge">{{$shop->comment}}</span>
      </a>
              <a href="/shop/{{$shop->id}}/connecte" class="btn btn-primary btn-sm">
          <span class="glyphicon glyphicon-plus badge">{{$shop->connected}}</span>
        </a>
       </div>
 </div>

@elseif($shop->type=='Private')
   <div class="col-md-6 col-sm-6" style="max-height: 250px; margin-top: 5px;">    
    <div class="card hovercard grad1">
        <div class="card-background ">

          <div class="row">
            <div class="col-lg-1 col-sm-1" style="float: left; padding: 0px;">
              <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star badge" aria-hidden="true"> 
                      @if($shop->type=='Public')
                       {{$shop->type}}
                       @else
                       {{$shop->star}}
                       @endif</span>
                        
                    </button>
               </div>
            </div>
                <div class="col-lg-10 col-sm-10" style="float: left; padding: 0px;margin: 0px;">
                  <a href="/shop/{{$shop->slug}}"><button type="submit" class="btn btn-default">{{$shop->name}}</button></a>
                </div>
                
          </div>
          <!----------shop image------------------>
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
         </ol>

    <!-- Wrapper for slides -->
        <div class="carousel-inner">

         <div class="item active">
        <img src="{{ Storage::url($shop->front_image)}}" alt="Los Angeles" style="width:100%; max-height: 200px;">
        </div>

        <div class="item">
        <img src="{{ Storage::url($shop->right_image)}}" alt="Chicago" style="width:100%; max-height: 200px;">
        </div>
    
        <div class="item">
        <img src="{{ Storage::url($shop->center_image)}}" alt="New York" style="width:100%; max-height: 200px;">
        </div>
        <div class="item">
        <img src="{{ Storage::url($shop->left_image)}}" alt="New York" style="width:100%; max-height: 200px;">
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


          <!-------------shop image end------>
        </div> 
    </div>
      <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">

         <a href="/shop/{{$shop->id}}/like/1" class="btn btn-success btn-sm">
          <span class="glyphicon glyphicon-thumbs-up badge">{{$shop->like}}</span>
      </a>
        <a href="/shop/{{$shop->id}}/like/0" class="btn btn-danger btn-sm">
          <span class="glyphicon glyphicon-thumbs-down badge">{{$shop->unlike}}</span>
        </a>
        <a href="/shop/{{$shop->slug}}/comment"  class="btn btn-info btn-sm">
          <span class="glyphicon glyphicon-comment badge">{{$shop->comment}}</span>
      </a>
        <a href="/shop/{{$shop->id}}/connecte" class="btn btn-primary btn-sm">
          <span class="glyphicon glyphicon-plus badge">{{$shop->connected}}</span>
        </a>
       </div>
 </div>
@endif
@endforeach


  

   
</div>




     <div class="col-md-4" style="padding-top: 5px;">
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object dp img-circle" src="{{asset('images/shop/s2.jpg')}}" style="width: 100px;height:100px;">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Hardik Sondagar <small> India</small></h4>
                <h5>Software Developer at <a href="http://gridle.in">Gridle.in</a></h5>
                <hr style="margin:8px auto">

                <span class="label label-default">Facebook</span>
                <span class="label label-primary">linkin</span>
                <span class="label label-info">Google+</span>
                <span class="label label-success">Connect</span>
            </div>
        </div>
      </div>

     
     @endsection