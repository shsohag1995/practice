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
              <a href="{{route('ceo.ptrshops')}}" class="list-group-item"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>Ptr Shops <span class="badge">{{count($ptrshops)}}</span></a>
              <a href="{{route('ceo.ptrproducts')}}" class="list-group-item"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>PtrPro <span class="badge">{{count($ptrproducts)}}</span></a>
                
              <a href="{{route('ceo.shops')}}" class="list-group-item"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Shops <span class="badge">{{count($shops)}}</span></a>
              <a href="{{route('ceo.priproducts')}}" class="list-group-item"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>PriPro <span class="badge">{{count($priproducts)}}</span></a>
              <a href="{{route('ceo.pubshops')}}" class="list-group-item"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> PubShops <span class="badge">{{count($pubshops)}}</span></a>
              <a href="{{route('ceo.pubproducts')}}" class="list-group-item"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>PubPro <span class="badge">{{count($pubproducts)}}</span></a>
              <a href="{{route('ceo.workers')}}" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Employees <span class="badge">{{count($employers)}}</span></a>
                
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
                    <h4><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> {{count($neworders)}}</h4>
                   <a href="/ceo/new-orders"><h4>New Order</h4></a> 
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> {{count($pendingorders)}}</h4>
                    <a href="/ceo/pending-orders"><h4>Pending order</h4></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> {{count($cancledorders)}}</h4>
                    <a href="/ceo/cancled-orders"><h4>Cancled Order</h4></a>
                 </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> {{count($checkedorders)}}</h4>
                    <a href="/ceo/checked-orders"><h4>Checked Order</h4></a>
                 </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> {{count($completeorders)}}</h4>
                    <a href="/ceo/completed-orders"><h4>Completed Order</h4></a>
                 </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{count($employers)}}</h4>
                    <a href="/ceo/workers"><h4>Employees</h4></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{count($users)}}</h4>
                    <a href="/ceo/users"><h4>Users</h4></a>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon glyphicon-list" aria-hidden="true"></span> {{count($ptrproducts)}}</h4>
                    <a href="/ceo/ptrproducts"><h4>Ptr Products</h4></a>
                  </div>
                </div>
               
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon glyphicon-list" aria-hidden="true"></span> {{count($priproducts)}}</h4>
                    <a href="/ceo/priproducts"><h4>Products</h4></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 12,334</h4>
                    <a href=""><h4>Visitors</h4></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon ">12,33445</span>BDT</h4>
                    <a href=""><h4>estimated</h4></a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h4><span class="glyphicon" aria-hidden="true">12,333</span>BDT </h4>
                    <a href=""><h4>Pending</h4></a>
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
                        <th>Type</th>
                        <th>Shop name</th>
                        <th>Country</th>
                        <th>State</th>
                        <th>District</th>
                        <th>City</th>
                        <th>Market</th>
                        <th>Time</th>
                        <th>Action</th>
                      </tr>
                      @php $i=0; @endphp
                      @foreach($shops as $shop)
                      <tr>
                        <td>{{$shop->shop_type}}</td>
                        <td>{{$shop->name}}</td>
                        <td>{{$shop->country}}</td>
                        <td>{{$shop->state}}</td>
                        <td>{{$shop->district}}</td>
                        <td>{{$shop->city}}</td>
                        <td>{{$shop->market}}</td>
                        <td>{{$shop->created_at}}</td>
                        <td>
                          <a href="/shop/{{$shop->slug}}" class="btn btn-info" type="submit" name="submit" value="order" >View</a>
                          
                        </td>
                      </tr>
                      @php $i++;
                        if($i==9){
                        break;
                      }
                       @endphp
                      @endforeach
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p></p>
    </footer>



@endsection

