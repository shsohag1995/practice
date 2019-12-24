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

<div class="col-sm-3" style="float: left; ">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="container-fluid">
            <div class="row">
              <div  class="col-sm-10"style="float: left; ">{{$product->title}} </div>
              <div class="col-sm-2"style="float: left; ">
                
                @if($product->ptrshop_id && $product->ptr_sp_counter_number)
                 <a href="/shop/{{$shop->slug}}/ptrshop/{{$product->ptrshop_id}}/product/p/{{$product->slug}}" class="">
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
               
               <div class="col-sm-3" style="float: left;"><a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/like" class=" btn-sm btn-sm-success">
               <span class="glyphicon glyphicon-thumbs-up badge">{{$product->like}}</span></a></div>
               
              
                <div  class="col-sm-4"style="float: left;"><a  class=" btn-sm"><span class="glyphicon  badge">{{$product->price_bdt }}৳</span></a></div>
             
              <div  class="col-sm-3"style="float: left;"><a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/wishlist" class=" btn-sm"><span class="glyphicon glyphicon-shopping-cart badge">Add</span></a></div>
              
              
              @if(Auth::check())
              @if($shop->type=='Private')
              @if($ok==1)
              <button class="btn btn-success dropdown-toggle"type="button" data-toggle="dropdown" style="float: right; padding: 3px;">
                       <span class="caret"></span></button>
                        <ul id="shop_handelar" class="dropdown-menu">
                              <li><a class="btn btn-info btn-sm " href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/edit">Edit</a></li>
                                 <li><a class="btn btn-warning btn-sm " href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/hide">Hide</a></li>
                                 <li><a href="/shopmanage/{{$shop->id}}/product/{{$product->sp_counter_number}}/private/destroy" class="btn btn-danger btn-sm ">Delete</a></li>
                        </ul>
                        
               @endif
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


@endsection