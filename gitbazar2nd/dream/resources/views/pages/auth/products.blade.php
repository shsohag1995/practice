@extends('layouts.auth')

@section('content')
<div class="" style="padding-top: 20px;" ></div>
<section>
      <div class="container-fluid">
        <div class="row">
         
            @include('partials.auth.homenav')
         
     <div class="col-md-10">
     <div class="shopping-details table-responsive">
      <table id="cart" class="table table-hover table-condensed">
        <tr>
          <th width="5%">Counter</th>
          <th width='10%'>Title</th>
          <th width="5%">Product image</th>
          <th width="5%%">Product number</th>
          <th width='10%'>Shop name</th>
          <th width="5%">Category</th>
          <th width="5%">Type</th>
          <th width="5%">Brand</th>
          <th width="5%">Price</th>
           <th width="5%">Quantity</th>
           <th width="5%">Minimum Order</th>
           <th width="5%">Unit</th>
          <th width="30%">Action</th>
        </tr>
       @php $i=1; @endphp
        @foreach($products as $product)
        <tr>
          <td>{{$i}}</td>
          <td><a href="/shop/{{$product->shop_slug}}/product/{{$product->sp_counter_number}}/name/{{$product->slug}}">{{$product->title}}</a></td>
          <td><img  src="{{Storage::url($product->image)}}" width="55" height="25" alt="..." class="img-responsive"/></td>
          <td>{{$product->sp_counter_number}}</td>
          <td><a href="/shop/{{$product->shop_slug}}">{{$product->shop_name}}</a> </td>
          <td>{{$product->category}}</td>
          <td>{{$product->type}}</td>
          <td>{{$product->brand}}</td>
          <td>{{$product->price_bdt}}tk</td>
          <td>{{$product->quantity}}</td>
          <td>{{$product->minimum_order}}</td>
          <td>{{$product->unit}}</td>
           <td  class="actions">
               <a href="/shop/{{$product->shop_slug}}/product/{{$product->sp_counter_number}}/name/{{$product->slug}}" class="btn btn-info btn-sm ">View</a>
               <a href="/shop/{{$product->shop_id}}/product/{{$product->sp_counter_number}}/edit" class="btn btn-primary btn-sm ">Edit</a>
               @if($product->action=='show')
               <a href="/shop/{{$product->shop_id}}/product/{{$product->sp_counter_number}}/hide" class="btn btn-warning btn-sm b">Hide</a>
               @else
               <a href="/shop/{{$product->shop_id}}/product/{{$product->sp_counter_number}}/show" class="btn btn-success btn-sm ">Show</a>
               @endif
              <a href="/shop/{{$product->shop_id}}/product/{{$product->sp_counter_number}}/public/destroy" class="btn btn-danger btn-sm ">Delete</a>
              
           </td>
        </tr>
         @php $i++; @endphp
        @endforeach
         {{$products->links()}}
      
      </table>
      
    </div>
    <div >
      
      <hr>
       
    </div>
  </div>
        
       
              
              <hr>
</div>
              <!-- Latest Users -->
              <div class="panel panel-default">
                
                <div class="panel-body">
                  <img src="{{asset('images/products/t6.jpg')}}" class="img-responsive" style="width:100%; max-height:100px;" alt="Image">
                </div>
              </div>

          </div>
        </div>
      </div>
    </section>

 
@endsection