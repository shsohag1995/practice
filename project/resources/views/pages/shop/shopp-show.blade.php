@extends('layouts.shop')

<!-----------------PRODUCTS----------------------->
@section('content')

  
<div class="col-md-2">
  <div class="row">
  <div class="col-md-12">
              
                <div class="left-navigation">
                    <ul class="list">
                        <h5><strong>Categories</strong></h5>
                       
           @foreach($categories as $category)
                        <li> <div class="dropdown dropdown-inline">
            <a  class=" dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn zoomIn zoomIn zoomIn">{{$category->category}}</a>
            <ul class="dropdown-menu" role="menu">
              @foreach($categorytypes as $categorytype)
              @if($category->category==$categorytype->category)
              <li class="dropdown">
                <a href="/shop/{{$shop->slug}}/category/{{$categorytype->category}}/type/{{$categorytype->type}}">{{$categorytype->type}}       <span class="glyphicon badge">{{$categorytype->total}}</span></a>
              </li>
              <br>
              @endif
              @endforeach
              </ul>
             </div></li>
             <br>
             @endforeach       
                    </ul>
                </div>      
     </div>
     </div>
     <div class="row">
     <div  class="col-md-10-12 "style="padding-top: 10px;"> 
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="{{asset('images/products/t6.jpg')}}" class="img-responsive" style="width:100%; max-height:100px;" alt="Image"></div>
        <div class="panel-footer">Buy NOW</div>
      </div>
    </div>
    </div>
</div>
<div class="col-md-10">
  

<!-----------------Start Shop header------------------------------------------>
@if($shop->agent=='agent')
@include('partials.shop.shopctb-header')
@else
 @include('partials.shop.shop_header')
@endif
  <!---------------------end shope header--------------------->
 <hr style="margin:10px;">
 

<div class="container">    
  <div class="row">

@foreach($products as $product)

<div class="col-sm-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="container-fluid">
            <div class="row">
              <div  class="col-sm-10"style="float: left; ">{{$product->title}} </div>
              <div class="col-sm-2"style="float: left; ">
               
                <a href="/shop/{{$shop->slug}}/product/{{$product->sp_counter_number}}/name/{{$product->slug}}" class="">
                  <span class="glyphicon badge">More</span></a>
               
              </div>
              
            </div>
            
          </div> 
        </div>
        <div class="panel-body"><img src="{{Storage::url($product->image)}}" class="img-responsive" style="width:100%;max-height: 180px;" alt="Image"></div>
        <div class="panel-footer">
          <div class="container-fluid">
            <div class="row">
              
              @if(Auth::check()&&(Auth::user()->id==$product->user_id ||$ok==1))
              <div  class="col-sm-1"style="float: left;"><a  class=" btn-sm"><span class="glyphicon  badge">{{$product->price_bdt }}৳</span></a></div>
              @else
                <div  class="col-sm-3"><a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/wishlist" class=" btn-sm"><span class="glyphicon glyphicon-shopping-cart badge">Add</span></a></div>
                 
                 <div  class="col-sm-4"style="float: left;"><a  class=" btn-sm"><span class="glyphicon  badge">{{$product->price_bdt }}৳</span></a></div>
             
                
                <div  class="col-sm-3"style="float: left;"><a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/order" class=" btn-sm"><span class="glyphicon glyphicon-shopping-cart badge">Order</span></a></div>
               
              @endif
              
              
              @if(Auth::check())
              
              @if(Auth::user()->id==$product->user_id || $ok==1)
               
                <button class="btn btn-success dropdown-toggle"type="button" data-toggle="dropdown" style="float: right; padding: 3px;">
                       <span class="caret"></span></button>
                        <ul id="shop_handelar" class="dropdown-menu">
                              <li><a class="btn btn-info btn-sm " href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/edit">Edit</a></li>
                                 <li><a class="btn btn-warning btn-sm " href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/hide">Hide</a></li>
                                    <li><a href="/shopmanage/{{$shop->id}}/product/{{$product->sp_counter_number}}/Public/destroy" class="btn btn-danger btn-sm ">Delete</a></li>
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
</div>

@endsection