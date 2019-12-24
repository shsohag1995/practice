@extends('layouts.ceo')

@section('content')
<div style="padding-top: 30px;"></div>
<section id="dashboard">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="list-group">
              <a href="{{route('ceo.dashboard')}}" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="{{route('ceo.ptrshops')}}" class="list-group-item"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>Ptr Shops <span class="badge">33</span></a>
                
              <a href="{{route('ceo.shops')}}" class="list-group-item"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Shops <span class="badge">33</span></a>
              
              <a href="{{route('ceo.workers')}}" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Workers <span class="badge">203</span></a>
                
            </div>
            <div class="well" >
             <a href="">Make Officer</a>
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
                    40%
            </div>
          </div>
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
                    <h4><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 203</h4>
                   <a href="order.php"><h4>New Order</h4></a> 
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 203</h4>
                    <a href="order.php"><h4>Pending order</h4></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 203</h4>
                    <a href="order.php"><h4>Completed Order</h4></a>
                 </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 203</h4>
                    <a href="connected_user.php"><h4>Users</h4></a>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon glyphicon-list" aria-hidden="true"></span> 33</h4>
                    <a href="products.php"><h4>Ptr Products</h4></a>
                  </div>
                </div>
               
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon glyphicon-list" aria-hidden="true"></span> 33</h4>
                    <a href="products.php"><h4>Products</h4></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 12,334</h4>
                    <a href="visitors.php"><h4>Visitors</h4></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon ">12,33445</span>BDT</h4>
                    <a href="import.php"><h4>estimated</h4></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon" aria-hidden="true">12,333</span>BDT </h4>
                    <a href="export.php"><h4>Pending</h4></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon " aria-hidden="true">12,33</span>BDT</h4>
                    <a href="profit.php"><h4>Profit</h4></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon " aria-hidden="true">Developing</span></h4>
                    <a href="developing.php"><h4>Go</h4></a>
                  </div>
                </div>

              </div>
              </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Latest Shops</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Shop name</th>
                        <th>Country</th>
                        <th>State</th>
                        <th>District</th>
                        <th>City</th>
                        <th>Market</th>
                        <th>Time</th>
                      </tr>
                      <tr>
                        <td>Kushtia City shop</td>
                        <td>Bangladesh</td>
                        <td>Khulna</td>
                        <td>Kushtia</td>
                        <td>Kushtia sadar</td>
                        <td>NS road</td>
                        <td>Dec 12, 2016</td>
                      </tr>
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>CEO MD SHARIFUL HASAN SOHAG</p>
    </footer>



@endsection

