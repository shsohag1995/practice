@extends('layouts.shopmanage')
@section('content')
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                
                      <div class="col-md-12 text-center"> <strong>{{$shop->name}}</strong></div>
                
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>Shipping address:</strong>
                        <br>
                        Customer:{{$order->customer_name}}
                        <br>
                        
                        {{$order->payment_method}}
                        <br>
                        <abbr >Contact:{{$order->contact_info}}</abbr>
                        <p>
                        <em> Address:{{$order->address}}</em>
                        </p>
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    {{--<address>
                        <strong>Shop address:</strong>
                        <br>
                        Customar name:Elf Cafe
                        <br>
                        2135 Sunset Blvd
                        <br>
                        Los Angeles, CA 90026
                        <br>
                        <abbr title="Phone">P:</abbr> (213) 484-6829
                    </address>--}}
                    
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h4>Receipt ID:#<em>{{$order->order_id}}</em></h4>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                         @php $total=0; $productcounter=0; $deliverycost=30; $kgcounter=1; $totalkg=0; @endphp
                        @foreach($orderproducts as $orderproduct)
                        <tr>
                            <td class="col-md-9"><em>{{$orderproduct->product_slug}}</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> {{$orderproduct->quantity}} </td>
                            <td class="col-md-1 text-center">{{$orderproduct->price}}</td>
                            <td class="col-md-1 text-center">{{$orderproduct->price * $orderproduct->quantity}}</td>
                        </tr>

                        @php 
                        $total=$total+($orderproduct->price * $orderproduct->quantity);
                        $productcounter=$productcounter+1;
                        $totalkg=$totalkg+$orderproduct->quantity;
                        @endphp

                        @endforeach
                       
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong>Subtotal: </strong>
                            </p>
                            <p>
                                <strong>Charge: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong>{{$total}}</strong>
                            </p>
                            <p>
                                <strong>0.00</strong>
                            </p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>{{$total +00.0}}</strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
  
@endsection
