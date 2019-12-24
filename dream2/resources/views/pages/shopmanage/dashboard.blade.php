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
              <a href="" class="list-group-item"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Products <span class="badge">33</span></a>
              @if($shop->mode=='Premium')
              <a href="admin.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Admins <span class="badge">20</span></a>
               @endif
               <a href="order.php" class="list-group-item"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Orders <span class="badge"></span></a>
              <a href="/shop/{{$shop->id }}/product/create" class="list-group-item"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add my product </a>
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
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
            <h4>Bandwidth Used </h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    {{$storage}}%
            </div>
          </div>
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
                    <h2><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></h2><span style="font-size: 24px">6</span>
                   <a href="order.php"><h4> Orders</h4></a> 
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h2><span style="font-size: 24px">{{$shop->connected}}</span>
                    <a href=""><h4>Connected User</h4></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></h2><span style="font-size: 24px">{{$storage + 1000000000}}</span>
                    <a href="../../advertisement.php"><h4>Create Ads</h4></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list" aria-hidden="true"></span></h2><span style="font-size: 24px">6</span>
                    <a href="products.php"><h4>Products</h4></a>
                  </div>
                </div>
                 <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list" aria-hidden="true"></span></h2><span style="font-size: 24px">6</span>
                    <a href="products.php"><h4>Hide Products</h4></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></h2><span style="font-size: 24px">{{$shop->view}}</span>
                    <a href="visitors.php"><h4>View</h4></a>
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
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                       <tr>
                        <th>Id</th>
                        <th>Order id</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Total</th>
                        <th>Time</th>
                        <th>Action</th>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>221</td>
                        <td>Jill Smith</td>
                        <td>01645343323</td>
                        <td>this is a address hfhdsfhsdfu hfbsdh hsdfshf hsfhsfhjh 40040b b fdsb</td>
                        <td>5000 bdt</td>
                        <td>Dec 12, 2016</td>
                        <td>view delete

                        </td>
                      </tr>
                      
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Modals -->

   
@endsection
