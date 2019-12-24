@extends('layouts.shopmanage')
@section('content')
<div class="" style="padding-top: 20px;" ></div>
<section id="main">
      <div class="container-fluid">
        <div class="row">
         
         <div class="col-md-1"></div>

          <div class="col-md-10">
            <!-- Website Overview -->
    
    <p class="btn-info">If you see action checked please pack the customer product . </p>
    <div class="shopping-details table-responsive">
      <table id="cart" class="table table-hover table-condensed">
        <tr>
          <th width="10%">Order Id</th>
          <th width="20%">Customer name</th>
          <th width='5%'>Payment method</th>
          <th width="30%">Address</th>
           <th width="15%">date</th>
          <th width="20%">Action</th>
        </tr>
        @foreach($orders as $order)
        <tr>
          <td>{{$order->order_id}}</td>
          <td>{{$order->customer_name}}</td>
          <td>{{$order->payment_method}}</td>
          <td>{{$order->address}}</td>
          <td>{{$order->created_at}}</td>
           <td  class="actions">
             <a href="/shopmanage/{{$shop->id}}/order/{{$order->order_id}}/view" class="btn btn-info btn-sm ">view</a>
             @if($order->action=='checked')
             <a  class="btn btn-success btn-sm ">checked</span></a>
             @else
              <a class="btn btn-primary btn-sm ">pending</a>
              @endif
                        
           </td>
        </tr>
        @endforeach

      </table>
       {{$orders->links()}}
    </div>
              
              

          </div>
        </div>
      </div>
    </section>
  
@endsection
