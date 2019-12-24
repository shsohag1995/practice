@extends('layouts.accounting')

@section('content')
<section id="breadcrumb">
      <div class="container">
        <h3 class="well text-center">Accounting Department</h3>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="pages.html" class="list-group-item"> Exchange</a>
              <a href="pages.html" class="list-group-item"> Investment </a>
              <a href="pages.html" class="list-group-item"> Withdraw </a>
              <a href="pages.html" class="list-group-item"> Deposit </a>
              <a href="pages.html" class="list-group-item"> Order </a>
            </div>

        
          </div>
          <div class="col-md-10">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Accounting Overview</h3>
              </div>
              <div class="panel-body">
              	<div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> 5</h2>
                    <a href="" style="text-decoration: none;"><h4>Exchange</h4></a>     
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> 5</h2>
                    
                    <a href="" style="text-decoration: none;"><h4>Investment</h4></a>  
                  </div>
                </div>
                 <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-open" aria-hidden="true"></span> 3</h2>
                    
                    <a href="" style="text-decoration: none;"><h4>Withdraw</h4></a>  
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> 2</h2>
                    
                    <a href="" style="text-decoration: none;"><h4>Deposit</h4></a>  
                  </div>
                </div>
                 <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 2</h2>
                   
                    <a href="" style="text-decoration: none;"><h4>Order</h4></a>  
                  </div>
                </div>

              </div>

             
             
            </div>

        </div>
      </div>
    </section>



  
@endsection