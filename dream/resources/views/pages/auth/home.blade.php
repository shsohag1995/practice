@extends('layouts.app')

@section('content')
<div class="" style="padding-top: 20px;" ></div>
<section id="main">
      <div class="container-fluid text-center">
        <div class="row">
         
         
              
              @foreach($products as $product)
                <div class="col-md-3">
          <a href="/shop/{{$product->shop_slug}}"><h4> {{$product->shop_name}}</h4></a>
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="container-fluid">
            <div class="row">
              <div  class="col-sm-10"style="float: left; ">{{$product->title}} </div>
              <div class="col-sm-2"style="float: left; "><a href="/shop/{{$product->shop_slug}}/product/{{$product->sp_counter_number}}/name/{{$product->slug}}" class=""><span class="glyphicon badge">More</span></a></div>
              
            </div>
            
          </div> 
        </div>
        <div class="panel-body"><img src="{{Storage::url($product->image)}}" class="img-responsive" style="width:100%;max-height: 180px;" alt="Image"></div>
        <form> 
        <div class="panel-footer">
          <div class="container-fluid">
            <div class="row">
            
               
              @if(Auth::user()->id==$product->user_id)
               <div  class="col-sm-4"style="float: left;"><a  class=" btn-sm"><span class="glyphicon  badge">{{$product->price_bdt }}৳</span></a></div>
               <div class="col-sm-8">
                <button class="btn btn-success dropdown-toggle"type="button" data-toggle="dropdown" style="float: right; padding: 3px;">
                       <span class="caret"></span></button>
                        <ul id="shop_handelar" class="dropdown-menu">
                          <li><a class="btn btn-info" href="/shop/{{$product->shop_id}}/product/{{$product->sp_counter_number}}/edit">Edit</a></li>
                                 <li><a class="btn btn-warning" href="/shop/{{$product->shop_id}}/product/{{$product->sp_counter_number}}/hide">Hide</a></li>
                                  <li>
                                    <a href="/shop/{{$product->shop_id}}/product/{{$product->sp_counter_number}}/public/destroy" class="btn btn-danger">Delete</a></li>
                                 </ul>
             </div>
             @else
               <div  class="col-sm-4"style="float: left;"><a href="/shop/{{$product->shop_id}}/product/{{$product->sp_counter_number}}/wishlist" class=" btn-sm"><span class="glyphicon glyphicon-shopping-cart badge">Add</span></a></div>
                 
                 <div  class="col-sm-4"style="float: left;"><a  class=" btn-sm"><span class="glyphicon  badge">{{$product->price_bdt }}৳</span></a></div>
              <div  class="col-sm-4"style="float: left;"><a href="/shop/{{$product->shop_id}}/product/{{$product->sp_counter_number}}/order" class=" btn-sm"><span class="glyphicon glyphicon-shopping-cart badge">Order</span></a></div>
              @endif
            </div>
          </div>
       </div>
       </form>
      </div>
    </div> 
          @endforeach  
          <div class="col-md-3">
          <a href="/shop/"><h4> new offer</h4></a>
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="container-fluid">
            <div class="row">
              <div  class="col-sm-10"style="float: left; ">product->title </div>
              
              <div class="col-sm-2"style="float: left; "><a href="" class=""><span class="glyphicon badge">More</span></a></div>
              
            </div>
            
          </div> 
        </div>
        <div class="panel-body"><img src="{{asset('images/products/t1.jpg')}}" class="img-responsive" style="width:100%;max-height: 180px;" alt="Image"></div>
        <form> 
        <div class="panel-footer">
          <div class="container-fluid">
            <div class="row">
             <div class="col-sm-2">
                
              </div>
              <div class="col-sm-4">
                <div  class="col-sm-3"style="float: left;"><a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-shopping-cart badge">Buy now</span></a></div>
              </div>
              <div class="col-sm-4">
                
              </div>
               
              
            </div>
          </div>
       </div>
       </form>
      </div>
    </div> 
    {{$products->links()}}
</div>   
 
@endsection