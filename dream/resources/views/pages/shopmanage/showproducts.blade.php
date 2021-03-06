@extends('layouts.shopmanage')
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
          <th width="5%%">Product number</th>
          <th width='15%'>Title</th>
          <th width="5%">Category</th>
          <th width="5%">Type</th>
          <th width="5%">Brand</th>
          <th width="10%">Price</th>
           <th width="5%">Quantity</th>
           <th width="5%">Unit</th>
           <th width="5%">Minimum Order</th>
          <th width="25%">Action</th>
        </tr>
        @php $i=1; @endphp
        @foreach($products as $product)
        <tr>
          <td>{{$i}}</td>
          <td><img  src="{{Storage::url($product->image)}}" width="55" height="45" alt="..." class="img-responsive"/></td>
          <td>{{$product->sp_counter_number}}</td>
          <td>{{$product->title}}</td>
          <td>{{$product->category}}</td>
          <td>{{$product->type}}</td>
          <td>{{$product->brand}}</td>
          <td>{{$product->price_bdt}}</td>
          <td>{{$product->quantity}}</td>
          <td>{{$product->unit}}</td>
          <td>{{$product->minimum_order}}</td>
           <td  class="actions">
               
               @if($shop->type=='Public')
              <a href="/shopmanage/{{$shop->id}}/product/{{$product->sp_counter_number}}/Public/destroy" class="btn btn-danger btn-sm badge">Delete</a>
              @else
               <a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/edit" class="btn btn-info btn-sm badge">Edit</a>
               <a href="/shop/{{$shop->id}}/product/{{$product->sp_counter_number}}/hide" class="btn btn-primary btn-sm badge">Hide</a>
              <a href="/shopmanage/{{$shop->id}}/product/{{$product->sp_counter_number}}/private/destroy" class="btn btn-danger btn-sm badge">Delete</a>
              @endif
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
