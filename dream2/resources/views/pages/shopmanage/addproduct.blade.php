@extends('layouts.shopmanage')
@section('content')

<header id="header">
      <div class="container"style="padding-top: 15px;">
        <div class="row">
          <div class="col-md-10" >
          	<span class="active">Dashboard  /  </span>
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span><small>Manage Your shop</small>
          </div>
          <div class="col-md-2">

            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                @if($shop->user_id==Auth::user()->id||$ok==1)
                <li><a href="/shopmanage/{{$shop->id}}/category/create">Create category</a></li>
                <li><a href="/shopmanage/{{$shop->id}}/type/create">Create type</a></li>
                @endif
                @if($shop->user_id==Auth::user()->id)
                <li><a href="/shop/{{$shop->id}}/contact/{{$shop->id}}/edit">Add Contact</a></li>
                <li><a href="/shop/{{$shop->id}}/notice/{{$shop->id}}/edit">Add Notice</a></li>
                <li><a href="/shop/{{$shop->id}}/address/{{$shop->id}}/edit">Add Location</a></li>
                @endif
                @if($shop->mode=='Premium')
                <li><a href="/shop/{{$shop->id}}/address/{{$shop->id}}/edit">Add Admin</a></li>
                @endif
              </ul>
            </div>

          </div>
        </div>
      </div>
    </header>
    
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
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body">
              	<div class="container">
                <div class="row">
                    @if($success)
                       <h2 >{{$success}}</h2>
                    @endif
             <form class="form-horizontal" style=" margin: 20px;" action="/product/store" method="POST">
                {{ csrf_field() }}
                <!--<div class="form-group">
                  <label class="control-label col-sm-2">Upload Product Image:</label>
                  <div class="col-sm-4">          
                    <input type="file" class="form-control" name="product_image">
                  </div> 
                </div>-->
                
                <input type="hidden" id="mode" required name="mode" value="{{$shop->type}}">
                <input type="hidden" id="sp_counter" required name="sp_counter" value="{{$shop->sp_counter}}">
                <input type="hidden" id="shop_id" required name="shop_id" value="{{$shop->id}}">
                <div class="form-group">
                  <label class="control-label col-sm-2" >Product Title:</label>
                  <div class="col-sm-4">          
                    <input type="text" class="form-control" required name="title" placeholder="Enter product title" >
                  </div>
                </div>
                @if($shop->type =='Public')
                <div class="form-group">
                  <label class="control-label col-sm-2" >Product category:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" required name="category" placeholder="Enter product category" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Product Type:</label>
                  <div class="col-sm-4">          
                    <input type="text" class="form-control" required name="type" placeholder="Enter Product Type" >
                  </div>
                </div>
                @elseif($shop->type =='Private')
                <div class="form-group">
                  <label class="control-label col-sm-2">Select Category</label>
                  <div class="col-sm-4">
                <select  id="country" name="category" class="btn btn-default" style="padding: 3px; margin: 1px;max-width: 125px;">
                    <option >--Category--</option>
                     
                    <option value="category" >category</option>
                     
               </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Select Type</label>
                  <div class="col-sm-4">
               <select  id="state" name="type" class="btn btn-default"  style="padding: 3px; margin: 1px; max-width: 110px; ">
                    <option >--type--</option>
                    
                    <option  value="type"  data-chained="category">type</option>
                  
                    
               </select>
               </div>
              </div>
                @endif
                <div class="form-group">
                  <label class="control-label col-sm-2" >Brand Name:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" required name="brand" placeholder="Enter Brand Name" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" >Product Quantity:</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control" required name="quantity" placeholder=" " value="1" >
                  </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 ">Condition:</label>
                    <div class="col-sm-4">
                        <label class="radio-inline navbar-brand">
                          <input type="radio" required name="condition" value="New"checked>New
                        </label>
                        <label class="radio-inline navbar-brand" >
                          <input type="radio" required name="condition" value="Old">Old
                        </label>  
                   </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-2 ">Action:</label>
                    <div class="col-sm-4">
                        <label class="radio-inline navbar-brand">
                          <input type="radio" required name="action" value="Hide"checked>Hide
                        </label>
                        <label class="radio-inline navbar-brand" >
                          <input type="radio" required name="action" value="Show">Show
                        </label>  
                   </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-2 ">Payment info:</label>
                    <div class="col-sm-4">
                        <label class="radio-inline navbar-brand">
                          <input type="radio" required name="payment_info" value="Hand To Hand"checked>Hand to hand
                        </label>
                        <label class="radio-inline navbar-brand" >
                          <input type="radio" required name="payment_info" value="Online">Online
                        </label>  
                   </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2">Product details:</label>
                    <div class="col-sm-4">
                       <textarea class="form-control"  name="description"  rows="10"></textarea>
                    </div>
                   
                    </div> 
                    <div class="form-group">
                   <label class="control-label col-sm-2">Import price:</label>
                   <div class="col-sm-2">          
                    <input type="number" class="form-control" required name="import_price" placeholder="Buying price">
                  </div>
                </div> 
                <div class="form-group">
                 
                  <label class="control-label col-sm-2">Export price:</label>
                  <div class="col-sm-2">          
                    <input type="number" class="form-control" name="export_price" placeholder="Selling price">
                    <button class="btn btn-success" type="submit" class="btn btn-default" name="create" value="create">Upload</button>
                  </div>
                </div>
               </form>
           </div>
</div>

              </div>
              </div>

              <!-- Latest Users -->
      </div>
    </section>

    <!-- Modals -->
 
@endsection
