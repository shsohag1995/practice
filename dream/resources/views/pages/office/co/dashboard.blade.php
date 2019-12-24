@extends('layouts.co')
   
@section('content')
    <section id="breadcrumb">
      <div class="container">
        <h3 class="well text-center">Central Office Control</h3>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="pages.html" class="list-group-item"> Accounting <span class="badge">12</span></a>
              <a href="pages.html" class="list-group-item"> Developing <span class="badge">42</span></a>
              <a href="pages.html" class="list-group-item"> Order <span class="badge">21</span></a>
              <a href="pages.html" class="list-group-item"> Distribution <span class="badge">23</span></a>
              <a href="pages.html" class="list-group-item"> Service <span class="badge">24</span></a>
              <a href="pages.html" class="list-group-item"> Marketing <span class="badge">18</span></a>

            </div>

        
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 203</h2>
                    <h4>Users</h4>
                  </div>
                </div>
                 <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 12</h2>
                    <h4>Shops</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> 33</h2>
                    <h4>Employer</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 12,334</h2>
                    <h4>Visitors</h4>
                  </div>
                </div>
              </div>

              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 203</h2>
                    <h4>Products</h4>
                  </div>
                </div>
               
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 33</h2>
                    <h4>Ptr Shop</h4>
                  </div>
                </div>
                
              </div>
             
            </div>

        </div>
      </div>
    </section>


    

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>
@endsection
  