@extends('layouts.auth')

@section('content')
<div class="" style="padding-top: 20px;" ></div>
<section id="main">
      <div class="container-fluid">
        <div class="row">
          @include('partials.auth.homenav')
          <div class="col-md-10">
            <!-- Website Overview -->
  <div class="container">
   
     <div class="shopping-details table-responsive">
      <table id="cart" class="table table-hover table-condensed">
        <tr>
          <th width="10%">Product image</th>
          <th width="10%">Product nmae</th>
          <th width='20%'>Shop name</th>
          <th width="5%">Product number</th>
          <th width="10%">price</th>
           <th width="5%">quantity</th>
           <th width="5%">unit</th>
           <th width="10%">subtotal</th>
          <th width="25%">Action</th>
        </tr>
        @php $total=0; $productcounter=0; $deliverycost=35; $kgcounter=1; $totalkg=0; @endphp
        @foreach($wishlists as $wishlist)
        <tr>
          <td><img  src="{{Storage::url($wishlist->image)}}"  width="45" height="25" alt="..." class="img-responsive"/></td>
          <td><a href="/shop/{{$wishlist->shop_slug}}/product/{{$wishlist->sp_counter_number}}/name/{{$wishlist->product_slug}}">{{$wishlist->product_slug}}</a></td>
          <td><a href="/shop/{{$wishlist->shop_slug}}">{{$wishlist->shop_slug}}</a></td>
          <td>{{$wishlist->sp_counter_number}}</td>
          <td>{{$wishlist->price}}</td>
          <td>{{$wishlist->quantity}}</td>
          <td>{{$wishlist->unit}}</td>
          <td>{{$wishlist->price * $wishlist->quantity}}</td>
           <td  class="actions">
              <a href="/shop/{{$wishlist->shop_slug}}/product/{{$wishlist->sp_counter_number}}/name/{{$wishlist->product_slug}}" class="btn btn-info btn-sm ">View</a>
              <a href="/shop/{{$wishlist->shop_id}}/product/{{$wishlist->sp_counter_number}}/order" class="btn btn-primary btn-sm ">Order</a>
              <a href="/user/{{$wishlist->shop_id}}/{{$wishlist->sp_counter_number}}/wishlist/destroy" class="btn btn-danger btn-sm ">Delete</span></a>           
           </td>
        </tr>
        
        @php 
        $total=$total+($wishlist->price * $wishlist->quantity);
        $productcounter=$productcounter+1;
        $totalkg=$totalkg+$wishlist->quantity;
         @endphp
         
         {{--@if($totalkg>12)
         $kgcounter=$totalkg/12;
         $deleverycost=$kgcounter*30;
         @elseif($totalkg>20)
         $kgcounter=$totalkg/20;
         $deleverycost=$kgcounter*30;
         @elseif($totalkg>50)
          $kgcounter=$totalkg/50;
         $deleverycost=$kgcounter*50;
         @endif --}}
        @endforeach
        {{--<tr>
          <td><img  src="{{asset('images/shop/s1.jpg')}}" alt="..." class="img-responsive"/></td>
          <td>hasan</td>
          <td>dbbl </td>
          <td>3345345.345</td>
          <td>3345345.345</td>
          <td>kushtia sadar kushtia</td>
          <td>kg</td>
          <td>20-12-2019</td>
           <td  class="actions">
             <a href="" class="btn btn-info btn-sm ">View</a>
             <a href="" class="btn btn-primary btn-sm ">Booking</a>
              <a href="" class="btn btn-danger btn-sm ">Delete</a>            
           </td>
        </tr>--}}
      </table>
      
    </div>
    <div >
      <div class="row">
        <div class="col-md-8 "><span class="f-right">Total {{$productcounter}} products from {{$shopcounter}} shops price with delivery={{$shopcounter*15}}+{{($deliverycost)}} tk </span></div>
        <div class="col-md-1 "><span class="f-left">{{($shopcounter*10)+(($deliverycost)+$total)}}tk</span></div>
        <div class="col-md-1">
         <a href="/user/order" class="btn btn-success btn-sm">Order</a>
            
            
      </div>
      <hr>
       
    </div>
  </div>
              
              
              <hr>

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
