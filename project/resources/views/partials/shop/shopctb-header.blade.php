<!-----------------Start Shop header------------------------------------------>

 <div class="container-fluid text-center">

  @if($shop->type=='Private'||$shop->agent=='agent')
   <div class="col-md-9 col-sm-9" style="max-height: 250px; margin-top: 0px;">    
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
                       @endif
                    </span>
                        
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

        <a href="/shop/{{$shop->slug}}/comment" class="btn btn-info btn-sm">
          <span class="glyphicon glyphicon-comment badge">{{$shop->comment}}</span>
      </a>
        <a href="/shop/{{$shop->id}}/connecte" class="btn btn-primary btn-sm">
          <span class="glyphicon glyphicon-plus badge">{{$shop->connected}}</span>
        </a>
       </div>
 </div>
  @elseif($shop->type=='Public')
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

      
          <!----------shop image------------------>
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
        <a href="/shop/{{$shop->slug}}/comment" class="btn btn-info btn-sm">
          <span class="glyphicon glyphicon-comment badge">{{$shop->comment}}</span>
      </a>
        <a href="/shop/{{$shop->id}}/connecte" class="btn btn-primary btn-sm">
          <span class="glyphicon glyphicon-plus badge">{{$shop->connected}}</span>
        </a>
        
       </div>

 </div>
@endif
    <div  class="col-lg-3 col-sm-3 "style="padding-top: 10px;"> 
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="{{asset('images/products/t6.jpg')}}" class="img-responsive" style="width:100%; max-height:100px;" alt="Image"></div>
        <div class="panel-footer">Buy NOW</div>
      </div>
    </div>
  </div>

  <!---------------------end shope header--------------------->
 <hr style="margin: 5px;">
 