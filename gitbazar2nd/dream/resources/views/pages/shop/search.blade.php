@extends('layouts.shop')

<!-----------------PRODUCTS----------------------->
@section('content')

<!-----------------Start Shop header------------------------------------------>
 @include('partials.shop.shop_header')
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
                @if($shop->type=='Public')
               <a href="/shop/{{$shop->slug}}/product/{{$product->sp_counter_number}}/name/{{$product->slug}}" class="">
                  <span class="glyphicon badge">More</span></a>
                @elseif($product->ptrshop_id && $product->ptr_sp_counter_number)
                 <a href="/shop/{{$shop->slug}}/ptrshop/{{$product->ptrshop_id}}/{{$product->slug}}" class="">
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
               
                 <div  class="col-sm-4"style="float: left;"><a  class=" btn-sm"><span class="glyphicon  badge">{{$product->price_bdt }}৳</span></a></div>
             
               <div class="col-sm-3">
                
              </div>
              <div class="col-sm-3">
                <div  class="col-sm-3"style="float: left;"><a href="#" class=" btn-sm"><span class="glyphicon glyphicon-shopping-cart badge">Order</span></a></div>
              </div>
              
              @elseif($shop->shop_type=='hotel')
               <div class="col-sm-3" style="float: left;"><a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/like" class=" btn-sm">
               <span class="glyphicon glyphicon-thumbs-up badge">{{$product->like}}</span></a></div>

               <div  class="col-sm-4"style="float: left;"><a  class=" btn-sm"><span class="glyphicon  badge">{{$product->price_bdt }}৳</span></a></div>
             
                <div  class="col-sm-3"style="float: left;"><a href="#" class=" btn-sm"><span class="glyphicon glyphicon-shopping-cart badge">Booking</span></a></div>
             
              @else
               <div class="col-sm-3" style="float: left;"><a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/like" class=" btn-sm btn-sm-success">
               <span class="glyphicon glyphicon-thumbs-up badge">{{$product->like}}</span></a></div>
               
              
                <div  class="col-sm-4"style="float: left;"><a  class=" btn-sm"><span class="glyphicon  badge">{{$product->price_bdt }}৳</span></a></div>
             
              
    
              <div  class="col-sm-3"style="float: left;"><a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/wishlist" class=" btn-sm"><span class="glyphicon glyphicon-shopping-cart badge">Add</span></a></div>
              
              @endif
              <div class="col-sm-2">
                
              </div>
              
            </div>
          </div>
       </div>
      </div>
    </div> 
@endforeach

  </div>
</div>


@endsection