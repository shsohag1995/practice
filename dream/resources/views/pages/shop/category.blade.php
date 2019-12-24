@extends('layouts.shop')

<!-----------------PRODUCTS----------------------->
@section('content')


@if ($shop->shop_type=='books'||$shop->shop_type=='baby'||$shop->shop_type=='beauty'||$shop->shop_type=='clothes'||$shop->shop_type=='electrical'||$shop->shop_type=='electronice'||$shop->shop_type=='sport'||$shop->shop_type=='shoes'||$shop->shop_type=='medicine'||$shop->shop_type=='grocery'||$shop->type=='Public')
 <!-----------------Start Shop header------------------------------------------>
 <div class="dropdown dropdown-inline">
            <a href="" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">{{$category}}<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                  @foreach($types as $type)
                  <li><a href="/shop/{{$shop->slug}}/category/{{$category}}/type/{{$type->type}}">{{$type->type}}</a></li>
                  <li class="divider"></li>
                  @endforeach
            </ul>
          </div>
  <!---------------------end shope header--------------------->
  @endif
 <hr style="margin: 5px;">
 

<div class="container">    
  <div class="row">
  {{--  @if($shop->type=='Private')
    @foreach($types as $type)
    <div class="col-sm-2">
      <div class="panel panel-primary">
         <a href="/shop/{{$shop->id}}/category/{{$category}}/type/{{$type->type}}">
        <div class=" btn-primary">
              <div class="container-fluid">
              <div class="row" style="text-align: center;">
             <h4 >{{$type->type}}</h4>
            </div>
             </div> 
        </div>
        </a>

         <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
          <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
         
        </ol>

    <!-- Wrapper for slides -->
        <div class="carousel-inner">

         <div class="item active">
        <img src="{{asset('images/products/t1.jpg')}}" alt="Los Angeles" style="width:100%; max-height: 120px;">
        
           </div>

      <div class="item">

        <img src="{{asset('images/products/t1.jpg')}}" alt="Chicago" style="width:100%; max-height: 120px;">
        
        
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
          
        <div class="panel-footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"></div>
              
              <div class="col-md-4"><a href="/shop/{{$shop->id}}/category/{{$category}}/type/{{$type->type}}" class=""><span class="glyphicon badge">More</span></a></div>

              <div class="col-md-4"></div>
              
            </div>
          </div>
       </div>
 </div>
</div> 

 
@endforeach
@elseif($shop->type=='Public')

--}}
@foreach($products as $product)

<div class="col-sm-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="container-fluid">
            <div class="row">
              <div  class="col-sm-10"style="float: left; ">{{$product->title}} </div>
              <div class="col-sm-2"style="float: left; ">
                @if($shop->type=='Public')
               <a href="/shop/{{$shop->slug}}/product/{{$product->sp_counter_number}}/name/{{$product->slug}}" class="">
                  <span class="glyphicon badge">More</span></a>
                @elseif($product->ptrshop_id && $product->ptr_sp_counter_number)
                 <a href="/shop/{{$shop->slug}}/ptrshop/{{$product->ptrshop_id}}/name/{{$product->slug}}" class="">
                  <span class="glyphicon badge">More</span></a>

                 @else
                 <a href="/shop/{{$shop->slug}}/product/{{$product->sp_counter_number}}/name/{{$product->slug}}" class="">
                  <span class="glyphicon badge">More</span></a>
                 @endif
              </div>
              
            </div>
            
          </div> 
        </div>
        <div class="panel-body"><img src="{{Storage::url($product->image)}}" class="img-responsive" style="width:100%;max-height: 180px;" alt="Image"></div>
        <div class="panel-footer">
          <div class="container-fluid">
            <div class="row">
               @if($shop->type=='Public')
               
                @if(Auth::check()&&Auth::user()->id==$product->user_id)
              <div  class="col-sm-1"style="float: left;"><a  class=" btn-sm"><span class="glyphicon  badge">{{$product->price_bdt }}৳</span></a></div>
              @else
                <div  class="col-sm-1"><a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/wishlist" class=" btn-sm"><span class="glyphicon glyphicon-shopping-cart badge">Add</span></a></div>
                 <div class="col-sm-1">
                </div>
                 <div  class="col-sm-1"style="float: left;"><a  class=" btn-sm"><span class="glyphicon  badge">{{$product->price_bdt }}৳</span></a></div>
             
              
              <div class="col-sm-2">
                <div  class="col-sm-3"style="float: left;"><a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/order" class=" btn-sm"><span class="glyphicon glyphicon-shopping-cart badge">Order</span></a></div>
              </div>
              @endif
              @elseif($shop->shop_type=='hotel')
               <div class="col-sm-3" style="float: left;"><a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/like" class=" btn-sm">
               <span class="glyphicon glyphicon-thumbs-up badge">{{$product->like}}</span></a></div>

               <div  class="col-sm-3"style="float: left;"><a  class=" btn-sm"><span class="glyphicon  badge">{{$product->price_bdt }}৳</span></a></div>
             
                <div  class="col-sm-3"style="float: left;"><a href="#" class=" btn-sm"><span class="glyphicon glyphicon-shopping-cart badge">Booking</span></a></div>
             
              @else
               <div class="col-sm-3" style="float: left;"><a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/like" class=" btn-sm btn-sm-success">
               <span class="glyphicon glyphicon-thumbs-up badge">{{$product->like}}</span></a></div>
               
              
                <div  class="col-sm-4"style="float: left;"><a  class=" btn-sm"><span class="glyphicon  badge">{{$product->price_bdt }}৳</span></a></div>
             
              
    
              <div  class="col-sm-3"style="float: left;"><a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/wishlist" class=" btn-sm"><span class="glyphicon glyphicon-shopping-cart badge">Add</span></a></div>
              
              @endif
              <div class="col-sm-2">
                
              </div>
              @if(Auth::check())
              @if($shop->type=='Private')
              @if($ok==1)
              <button class="btn btn-success dropdown-toggle"type="button" data-toggle="dropdown" style="float: right; padding: 3px;">
                       <span class="caret"></span></button>
                        <ul id="shop_handelar" class="dropdown-menu">
                              <li><a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/edit">Edit</a></li>
                                 <li><a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/hide">Hiden</a></li>
                                    
                                 </ul>
                                 @endif
             @elseif($shop->type=='Public'&&Auth::user()->id==$product->user_id || $ok==1)
                <button class="btn btn-success dropdown-toggle"type="button" data-toggle="dropdown" style="float: right; padding: 3px;">
                       <span class="caret"></span></button>
                        <ul id="shop_handelar" class="dropdown-menu">
                              <li><a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/edit">Edit</a></li>
                                 <li><a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/hide">Hiden</a></li>
                                    
                                 </ul>

              @endif
              @endif
            </div>
          </div>
       </div>
      </div>
    </div> 
@endforeach
{{$products->links()}}

  </div>
</div>
<!-----------------------------sllide show  Start------------->
    


@endsection
