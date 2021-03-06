@extends('layouts.shop')

<!-----------------PRODUCTS----------------------->
@section('content')

@if($shop->type=='Public')

                <div class="container-fluid">
                <div class="row">
                  
                    <div class="col-md-12">
                      @if($success)
                       <h2 >{{$success}}</h2>
                    @endif
             <form class="form-horizontal" style=" margin: 20px;" action="/product/store" method="POST" enctype="multipart/form-data">
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
                          <input type="radio" required name="action" value="Show"checked>Show
                        </label>
                        <label class="radio-inline navbar-brand" >
                          <input type="radio" required name="action" value="Hide">Hide
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
                 
                  <label class="control-label col-sm-2">Price:</label>
                  <div class="col-sm-2">          
                    <input type="number" class="form-control" name="export_price" placeholder="Selling price">
                    <button class="btn btn-success" type="submit" class="btn btn-default" name="create" value="create">Upload</button>
                  </div>
                </div>
               </form>

              </div>
             
              </div>
              
@endif
    <!-- Modals -->

@endsection