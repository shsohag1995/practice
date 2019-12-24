@extends('layouts.shop')

@section('content')
@if($payment=='bkash')
<div class="container">
    <div class="row">
    	<div class="col-xs-12 col-md-4">
    	</div>
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                    <div class="checkbox">

                        <label>
                            BKASH Number :
                        </label>
                        <label>
                            01856279041  (Personal)
                        </label>
                        <br/>
                 <ul class="nav nav-pills nav-stacked">
                   @php $sum=0 ; @endphp
                     @foreach($total as $total)
                <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon "></span>@php $sum = $total->total; @endphp {{$total->total}} </span> Final Sent money</a>
                </li>
                   @endforeach
            </ul>
            
                    </div>
                </div>
                <div class="panel-body">
                    <form role='form' action="/shop/order/complete" method="GET" enctype="multipart/form-data"> 
                         <input type="hidden" class="form-control"  name="shop_id" value="{{$shop->id}}" required >
                          <input type="hidden" class="form-control"  name="sum" value="{{$sum}}" required >
                    	<input type="hidden" class="form-control"  name="customer_name" value="{{$orderaddress->customer_name}}" required >
                    	<input type="hidden" class="form-control"  name="contact_info" value="{{$orderaddress->contact_info}}" required >
                    	<input type="hidden" class="form-control"  name="payment_method" value="{{$payment}}" required >
                    	<input type="hidden" class="form-control"  name="payment_amount" value="" required >
                    	<input type="hidden" class="form-control"  name="shiping_address" value="{{$orderaddress->shiping_address.', '.$orderaddress->city.', '.$orderaddress->district.', '.$orderaddress->state.', '.$orderaddress->country}}" required >
                                  {{ csrf_field() }}
                    	               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group"> 
                                            <label>Your Bkash account number:</label>  
                                                <input type="account_number" class="form-control" placeholder="enter bkash account number" name="account_number" value="" required >
                                            </div>
                                        </div>
                                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group"> 
                                            <label>TrxID:</label>  
                                                <input type="text" class="form-control" placeholder="transection ID" name="trxid" value="" required >
                                            </div>
                                        </div>
                       <input name="submit" type="submit" value="Pay" class="btn btn-success btn-lg btn-block">
                    </form>
                </div>
            </div>
            
            
        </div>
        <div class="col-xs-12 col-md-4">
    	</div>
    </div>
</div>
@elseif($payment=='rocket')
<div class="container">
    <div class="row">
    	<div class="col-xs-12 col-md-4">
    	</div>
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                    <div class="checkbox">

                        <label>
                            Rocket Number :
                        </label>
                        <label>
                            018562790410  (Personal)
                        </label>
                        <br/>
                 <ul class="nav nav-pills nav-stacked">
                    @php $sum=0 ; @endphp
                     @foreach($total as $total)
                <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon "></span>@php $sum = $total->total; @endphp {{$total->total}} </span> Final Sent money</a>
                </li>
                   @endforeach
            </ul>
            
                    </div>
                </div>
                <div class="panel-body">
                    <form role='form' action="/shop/product/order/complete" method="GET" enctype="multipart/form-data"> 
                         <input type="hidden" class="form-control"  name="shop_id" value="{{$shop->id}}" required >
                          <input type="hidden" class="form-control"  name="sum" value="{{$sum}}" required >
                    	<input type="hidden" class="form-control"  name="customer_name" value="{{$orderaddress->customer_name}}" required >
                    	<input type="hidden" class="form-control"  name="contact_info" value="{{$orderaddress->contact_info}}" required >
                    	<input type="hidden" class="form-control"  name="payment_method" value="{{$payment}}" required >
                    	<input type="hidden" class="form-control"  name="payment_amount" value="" required >
                    	<input type="hidden" class="form-control"  name="shiping_address" value="{{$orderaddress->shiping_address.', '.$orderaddress->city.', '.$orderaddress->district.', '.$orderaddress->state.', '.$orderaddress->country}}" required >
                                  {{ csrf_field() }}
                    	               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group"> 
                                            <label>Your rocket account number:</label>  
                                                <input type="account_number" class="form-control" placeholder="enter rocket account number" name="account_number" value="" required >
                                            </div>
                                        </div>
                                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group"> 
                                            <label>TrxID:</label>  
                                                <input type="text" class="form-control" placeholder="enter transection number" name="trxid" value="" required >
                                            </div>
                                        </div>
                          <input name="submit" type="submit" value="Pay" class="btn btn-success btn-lg btn-block">
                    </form>
                </div>
            </div>
            
            
        </div>
        <div class="col-xs-12 col-md-4">
    	</div>
    </div>
</div>
@endif

@endsection