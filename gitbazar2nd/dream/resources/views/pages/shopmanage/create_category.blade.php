@extends('layouts.shopmanage')
@section('content')

@include('partials.shopmanage.nav2')
   
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="list-group">
              <a href="/shop/{{$shop->id }}/shopmanage/{{$shop->id }}" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Shop Profile </a>
              <a href="products.php" class="list-group-item"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Products <span class="badge">33</span></a>
              @if($shop->mode=='Premium')
              <a href="admin.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Admins <span class="badge">20</span></a>
               @endif
               <a href="order.php" class="list-group-item"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>My Order <span class="badge">20</span></a>
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
                    40%
            </div>
          </div>
            </div>
          </div>
          <div class="col-md-10">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Create category</h3>
              </div>
              <div class="panel-body">
                <div class="container">
                <div class="row">
                    @if($success)
                       <h2 >{{$success}}</h2>
                    @endif
              <form class="form-horizontal" style=" margin: 20px;" action="/product/store" method="POST">
                {{ csrf_field() }}
                
                  <div class="form-group">
                  <label class="control-label col-sm-2" >Category Name:</label>
                  <div class="col-sm-4">          
                    <input type="text" class="form-control" required name="title" placeholder="Enter product title" >
                  </div>
                  </div>
                   <div class="col-sm-2">          
                    <button class="btn btn-success" type="submit" class="btn btn-default" name="create" value="create">Upload</button>
                  </div>
                
               </form>
              
           </div>
            <h3>Shop Category</h3>
               <div>
                  <table class=" table table-hover">
                      <tr>
                        <th>Catagory</th>
                        <th>Published</th>
                        <th>Created</th>
                        <th></th>
                      </tr>
                       
                     
                      <tr>
                        <tr>
                        <td>Follower</td>
                        <td>Dec 12, 2016</td>
                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                      </tr>
                      <tr>
                         
                    </table>
               </div>

</div>

              </div>
              </div>

              <!-- Latest Users -->
      </div>
    </section>

    <!-- Modals -->
 
@endsection

