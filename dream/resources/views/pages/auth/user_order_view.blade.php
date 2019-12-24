@extends('layouts.auth')

@section('content')
<div class="" style="padding-top: 20px;" ></div>
<section>
      <div class="container-fluid">
        <div class="row">
         
            <!-- Website Overview -->
 
      
        <div class="col-md-12">
          <p class="btn-info">If you get your product please click the  recive button. </p>
    <div class="shopping-details table-responsive">
      <table id="cart" class="table table-hover table-condensed">
        
        <tr>
          <th width="10%">Order Id</th>
          <th width="10%">Customer name</th>
          <th width='5%'>Payment method</th>
          <th width='10%'>Account number</th>
          <th width="5%">Payment amount</th>
          <th width="30%">Address</th>
           <th width="10%">date</th>
          <th width="15%">Action</th>
        </tr>
   
        @foreach($order as $order)
         <tr>
          <td>{{$order->id}}</td>
          <td>{{$order->customer_name}}</td>
          <td>{{$order->payment_method}}</td>
           <td>{{$order->account_number}}</td>
          <td>{{$order->payment_amount}}</td>
          <td>{{$order->address}}</td>
          <td>{{$order->created_at}}</td>
           <td  class="actions">
             <a href="/order/{{$order->id}}/view" class="btn btn-info btn-sm ">view</a>
             @if($order->action=='pending')
              <a  class="btn btn-primary btn-sm ">pending</a> 
              @elseif($order->action=='checked')   
               <a  class="btn btn-success btn-sm ">checked</span></a>
               @elseif($order->action=='recive')  
              <a href="" class="btn btn-warning btn-sm ">recive</a>  
               @elseif($order->action=='recived')
                <a  class="btn btn-success btn-sm ">recived</a> 
               @endif       
           </td>
        </tr>
             @endforeach
      </table>
      
    </div>
  </div>
              
   <hr> 
     <div class="col-md-12">
     <div class="shopping-details table-responsive">
      <table id="cart" class="table table-hover table-condensed">
       <tr>
          <th width="10%">Product image</th>
          <th width="15%">Product name</th>
          <th width="5%">Product number</th>
          <th width="10%">price</th>
           <th width="5%">quantity</th>
           <th width="5%">unit</th>
           <th width="5%">info</th>
           <th width="10%">subtotal</th>
          <th width="35%">Action</th>
        </tr>
        @php $total=0; $productcounter=0; $deliverycost=30; $kgcounter=1; $totalkg=0; @endphp
        @foreach($orderproducts as $wishlist)
        <tr>
          <td><img  src="{{Storage::url($wishlist->image)}}" alt="..." class="img-responsive"/></td>
          <td><a href="/shop/{{$wishlist->shop_slug}}/product/{{$wishlist->sp_counter_number}}/name/{{$wishlist->product_slug}}">{{$wishlist->product_slug}}</a></td>
          <td>{{$wishlist->sp_counter_number}}</td>
          <td>{{$wishlist->price}}</td>
          <td>{{$wishlist->quantity}}</td>
          <td>{{$wishlist->unit}}</td>
          <td>{{$wishlist->info}}</td>
          <td>{{$wishlist->price * $wishlist->quantity}}</td>
           <td  class="actions">
              <a href="/shop/{{$wishlist->shop_slug}}/product/{{$wishlist->sp_counter_number}}/name/{{$wishlist->product_slug}}" class="btn btn-info btn-sm ">View</a>
               @if($wishlist->action=='pending')
                <a  class="btn btn-primary btn-sm ">Pending</a> 
                @elseif($wishlist->action=='packed')
                <a  class="btn btn-success btn-sm ">Packed</a> 
                @elseif($wishlist->action=='recive')
                <a href=""  class="btn btn-warning btn-sm ">Recive</a> 
                @elseif($wishlist->action=='recived')
                <a  class="btn btn-success btn-sm ">Recived</a> 
                @endif
                @if($wishlist->action=='cancled')
                <a  class="btn btn-danger btn-sm ">Cancled</span></a>
                @else
                <a href="" class="btn btn-warning btn-sm ">Complain</a>
                @endif          
           </td>
        </tr>
        
        @php 
        $total=$total+($wishlist->price * $wishlist->quantity);
        $productcounter=$productcounter+1;
        $totalkg=$totalkg+$wishlist->quantity;
         @endphp

         @endforeach
  
        
      </table>
     
    </div>
    <div >
       <div class="row">
        <div class="col-md-7"><span class="f-right">Total {{$productcounter}} products   </span></div>
        <div class="col-md-2 "><span class="f-left">{{$total}}tk</span></div>
        
            
      </div>
      
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
