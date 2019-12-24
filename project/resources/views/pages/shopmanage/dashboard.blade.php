@extends('layouts.shopmanage')

@section('content')

@include('partials.shopmanage.nav2')
    
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="list-group">
              <a href="/shopmanage/{{$shop->id}}" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="/shopmanage/{{$shop->id}}/profile" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Shop Profile </a>
              <a href="/shopmanage/{{$shop->id}}/products" class="list-group-item"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> @if($shop->shop_type=='hotel') Rooms @else Products @endif <span class="badge">{{$productscount}}</span></a>
              @if($shop->mode=='Premium')
              <a href="" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Admins <span class="badge">20</span></a>
               @endif
               <a href="/shopmanage/{{$shop->id}}/order" class="list-group-item"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> @if($shop->shop_type=='hotel') Booking @else Orders @endif <span class="badge">{{count($orders)}}</span></a>
               @if($shop->type=='Private')
              <a href="/shopmanage/{{$shop->id}}/product/create" class="list-group-item"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> @if($shop->shop_type=='hotel') Add new room @else Add my product @endif </a>
              @else
              <a href="/shop/{{$shop->slug}}/public/product/create" class="list-group-item"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add my product </a>
              @endif
            </div>
            @if($shop->mode=='Premium')
            <div class="well" >
             <a href="">Make Admin</a>
           </div>
           @endif
           <div class="well" >
             <a href="">Make Premium</a>
           </div>
            <div class="well">
              <a href="">Incress disk space</a>
              <h4>Disk Space Used</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{($shop->storage*100)/$shop->storage_limit}}%;">
                      {{($shop->storage*100)/$shop->storage_limit}}%
              </div>
            </div>
           {{-- <h4>Bandwidth Used </h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: {{($shop->storage*100)/$shop->storage_limit}}%;">
                    {{($shop->storage*100)/$shop->storage_limit}}%
            </div>
          </div> --}}
            </div>
            
            <div class="panel panel-primary">
        <div class="panel-body"><img src="{{asset('images/products/t6.jpg')}}" class="img-responsive" style="width:100%; max-height:100px;" alt="Image"></div>
        
         </div>

          </div>
          <div class="col-md-10">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon " aria-hidden="true"></span>Tk</h2><span style="font-size: 24px">{{$shop->balance_bdt}}</span>
                   <a href="order.php"><h4>BDT</h4></a> 
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon " aria-hidden="true"></span>Cgc</h2><span style="font-size: 24px">{{$shop->balance_cgc}}</span>
                   <a href="order.php"><h4>CGC</h4></a> 
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon glyphicon-usd" aria-hidden="true"></span></h2><span style="font-size: 24px">{{$shop->balance_usd}}</span>
                   <a href="order.php"><h4>USD</h4></a> 
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></h2><span style="font-size: 24px">{{count($orders)}}</span>
                   <a href="/shopmanage/{{$shop->id}}/order"><h4> @if($shop->shop_type=='hotel') Booking @else Orders @endif </h4></a> 
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h2><span style="font-size: 24px">{{$shop->connected}}</span>
                    <a ><h4>Connected User</h4></a>
                  </div>
                </div>
                <!--  <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></h2><span style="font-size: 24px">12</span>
                    <a href="../../advertisement.php"><h4>Create Ads</h4></a>
                  </div>
                </div> -->
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list" aria-hidden="true"></span></h2><span style="font-size: 24px">{{$showproductscount}}</span>
                    <a href="/shopmanage/{{$shop->id}}/showproducts"><h4>@if($shop->shop_type=='hotel') Rooms @else Products @endif</h4></a>
                  </div>
                </div>
                 <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list" aria-hidden="true"></span></h2><span style="font-size: 24px">{{$hideproductscount}}</span>
                    <a href="/shopmanage/{{$shop->id}}/hideproducts"><h4>@if($shop->shop_type=='hotel') Hide rooms @else Hide products @endif</h4></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></h2><span style="font-size: 24px">{{$shop->view}}</span>
                    <a ><h4>View</h4></a>
                  </div>
                </div>
              @if($shop->mode=='Premium')
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></h2>
                    <a href="add_product.php"><h4> Connected Shop</h4></a>
                  </div>
                </div>
              	 <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></h2>
                    <a href="add_product.php"><h4> Other  Products</h4></a>
                  </div>
                </div>
                 
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 203</h2>
                   <a href="order.php"><h4>Other Order</h4></a> 
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 203</h2>
                    <a href="order.php"><h4>Pending order</h4></a>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 203</h2>
                    <a href="order.php"><h4>Completed Order</h4></a>
                 </div>
                </div>
                
               
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-usd " aria-hidden="true"></span></h2>
                    <a href="profit.php"><h4>Earning Info</h4></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon " aria-hidden="true">Developing</span></h2>
                    <a href="developing.php"><h4>Go</h4></a>
                  </div>
                </div>
              @endif
              </div>
              </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Latest Order</h3>
                </div>
              </div>
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
               
                      
                        
                      
           
          </div>
        </div>
      </div>
    </section>

    <!-- Modals -->

   
@endsection
