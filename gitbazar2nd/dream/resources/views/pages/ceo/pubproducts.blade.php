@extends('layouts.ceo')

@section('content')
<section>
      <div class="container-fluid">
        <div class="row">
         
     <div class="col-md-12">
     <div class="shopping-details table-responsive">
      <table id="cart" class="table table-hover table-condensed">
        <tr>
          <th width="5%">Counter</th>
          <th width="10%">Product image</th>
          <th width="10%%">Product id</th>
          <th width='15%'>Title</th>
          
          <th width="10%">Price</th>
           <th width="5%">Quantity</th>
           <th width="10%">Unit</th>
           <th width="5%">Minimum Order</th>
          <th width="30%">Action</th>
        </tr>
        @php $i=1; @endphp
        @foreach($priproducts as $product)
        <tr>
          <td>{{$i}}</td>
          <td><img  src="{{Storage::url($product->image)}}" width="55" height="45" alt="..." class="img-responsive"/></td>
          <td>{{$product->sp_counter_number}}</td>
          <td>{{$product->title}}</td>
          <td>{{$product->price_bdt}}</td>
          <td>{{$product->quantity}}</td>
          <td>{{$product->unit}}</td>
          <td>{{$product->minimum_order}}</td>
           <td  class="actions">
              <a href="/shop/{{$product->shop_slug}}/product/{{$product->sp_counter_number}}/name/{{$product->slug}}" class="btn btn-info btn-sm ">View</a>
                <a href="/shop/{{$product->shop_slug}}/product/{{$product->sp_counter_number}}/edit" class="btn btn-primary btn-sm ">Edit</a>
                @if($product->action=='show')
               <a href="/shop/{{$product->shop_slug}}/product/{{$product->sp_counter_number}}/hide" class="btn btn-warning btn-sm ">Hide</a>
               @else
               <a href="/shop/{{$product->shop_slug}}/product/{{$product->sp_counter_number}}/show" class="btn btn-success btn-sm ">Show</a>
               @endif
               
              <a href="/shop/{{$product->shop_id}}/product/{{$product->sp_counter_number}}/public/destroy" class="btn btn-danger btn-sm ">Delete</a>
              
           </td>
        </tr>
         @php $i++; @endphp
        @endforeach
         {{$priproducts->links()}}
      
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
