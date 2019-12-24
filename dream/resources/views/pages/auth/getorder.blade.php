@extends('layouts.auth')

@section('content')
<div class="" style="padding-top: 20px;" ></div>
<section id="main">
      <div class="container-fluid">
        <div class="row">
          @include('partials.auth.homenav')
         

          <div class="col-md-10">
            <!-- Website Overview -->
    
    <p class="btn-info">If you get order  please go to  the  nearest office with your products. </p>
    <div class="shopping-details table-responsive">
      <table id="cart" class="table table-hover table-condensed">
        <tr>
          <th width="10%">Order Id</th>
          <th width="10%">Customer name</th>
          <th width='5%'>Payment method</th>
          <th width="30%">Address</th>
           <th width="10%">date</th>
          <th width="30%">Action</th>
        </tr>
        @foreach($orders as $order)
        <tr>
          <td>{{$order->order_id}}</td>
          <td>{{$order->customer_name}}</td>
          <td>{{$order->payment_method}}</td>
          <td>{{$order->address}}</td>
          <td>{{$order->created_at}}</td>
           <td  class="actions">
             <a href="/getorder/{{$order->order_id}}/view" class="btn btn-info btn-sm ">view</a>
             @if($order->action=='pending')
              <a  class="btn btn-primary btn-sm ">pending</a> 
              @elseif($order->action=='checked')   
               <a href="" class="btn btn-success btn-sm ">checked</span></a>
               @elseif($order->action=='recive')  
              <a  class="btn btn-warning btn-sm ">recive</a>  
               @elseif($order->action=='recived')
                <a href="" class="btn btn-success btn-sm ">recived</a> 
               @endif       
           </td>
        </tr>
        @endforeach
        
      </table>
      {{$orders->links()}}
    </div>
  
  @endsection   