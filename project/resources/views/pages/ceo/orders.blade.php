@extends('layouts.ceo')

@section('content')
<div class="" style="padding-top: 20px;" ></div>
<section id="main">
      <div class="container-fluid">
        <div class="row">
         <div class="col-md-1">
         	
         </div>
         

          <div class="col-md-10">
            <!-- Website Overview -->
    
    <p class="btn-info">If you get your product please click the  recive button. </p>
    <div class="shopping-details table-responsive">
      <table id="cart" class="table table-hover table-condensed">
        <tr>
          <th width="10%">Order Id</th>
          <th width="10%">Customer name</th>
          <th width="5%">Contact info</th>
          <th width='5%'>Payment method</th>
          <th width='10%'>Account number</th>
          <th width="5%">Payment amount</th>
          <th width="20%">Address</th>
           <th width="5%">date</th>
          <th width="35%">Action</th>
        </tr>
        @foreach($orders as $order)
        <tr>
          <td>{{$order->id}}</td>
          <td>{{$order->customer_name}}</td>
          <td>{{$order->contact_info}}</td>
          <td>{{$order->payment_method}}</td>
           <td>{{$order->account_number}}</td>
          <td>{{$order->payment_amount}}</td>
          <td>{{$order->address}}</td>
          <td>{{$order->created_at}}</td>
           <td  class="actions">
             
             @if($order->action=='pending')
              <a href="/ceo/order/{{$order->id}}/checked" class="btn btn-primary btn-sm ">check now</a> 
              @elseif($order->action=='checked')
                 
               <a  class="btn btn-success btn-sm ">checked</span></a>
               @elseif($order->action=='recive')  
              <a href="" class="btn btn-warning btn-sm ">recive</a>  
               @elseif($order->action=='recived')
                <a href="" class="btn btn-success btn-sm ">recived</a> 
               @endif
               @if($order->action=='checked')
               <a href="" class="btn btn-primary btn-sm ">reback</a>
               @elseif($order->action=='cancled')
               <a  class="btn btn-danger btn-sm ">cancled</a>
               <a href="/ceo/order/{{$order->id}}/reback" class="btn btn-primary btn-sm ">reback</a>
               @else
               <a href="/ceo/order/{{$order->id}}/cancled" class="btn btn-danger btn-sm ">cancle</a>
               @endif
                     
           </td>
        </tr>
        @endforeach
        {{$orders->links()}}
      </table>
      
    </div>
  </div>
              
              
                
    
             
   
          </div>
        </div>
      </div>
    </section>


@endsection
