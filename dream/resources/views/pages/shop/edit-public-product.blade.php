@extends('layouts.shop')

<!-----------------PRODUCTS----------------------->
@section('content')

@if($shop->type=='Public')

                <div class="container-fluid">
                <div class="row">
                  
                    <div class="col-md-12">
                     
             <form class="form-horizontal" style=" margin: 20px;" action="/shop/public/product/update" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                
                <input type="hidden" id="mode" required name="mode" value="{{$shop->type}}">
                <input type="hidden" id="sp_counter_number" required name="sp_counter_number" value="{{$product->sp_counter_number}}">
                <input type="hidden" id="shop_id" required name="shop_id" value="{{$shop->id}}">
                
                <div class="form-group">
                  <label class="control-label col-sm-2" >Product Title:</label>
                  <div class="col-sm-4">          
                    <input type="text" class="form-control" required name="title" placeholder="Enter product title" value="{{$product->title}}" >
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-sm-2" >Product category:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" required name="category"  value="{{$product->category}}" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Product Type:</label>
                  <div class="col-sm-4">          
                    <input type="text" class="form-control"  name="type"  value="{{$product->type}}" >
                  </div>
                </div>
               
                <div class="form-group">
                  <label class="control-label col-sm-2" >Brand Name:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control"  name="brand" value="{{$product->brand}}" >
                  </div>
                </div>
                  
                <div class="form-group">
                  <label class="control-label col-sm-2" >Product Quantity:</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" required name="quantity"  value="{{$product->quantity}}" >
                  </div>
                   <label class="control-label col-sm-1" >Unit:</label>
                  <div class="col-sm-1" style="padding-top: 10px;">
                    <select name="unit">
                      <option value="piece">Piece</option>
                      <option value="kilogram">Kilogram</option>
                      <option value="kilogram">Meter</option>
                      <option value="kilogram">Centimeter</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 ">Condition:</label>
                    <div class="col-sm-4">
                       <label class="radio-inline navbar-brand" >
                          <input checked type="radio" required name="condition" value="old">Old
                        </label>  
                        <label class="radio-inline navbar-brand">
                          <input type="radio" required name="condition" value="new">New
                        </label>
                       
                   </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-2 ">Action:</label>
                    <div class="col-sm-4">
                        <label class="radio-inline navbar-brand">
                          <input checked type="radio" required name="action" value="show">Show
                        </label>
                        <label class="radio-inline navbar-brand" >
                          <input type="radio" required name="action" value="hide">Hide
                        </label>  
                   </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-2 ">Payment info:</label>
                    <div class="col-sm-4">
                      <label class="radio-inline navbar-brand" >
                          <input checked type="radio" required name="payment_info" value="online">Online
                        </label>  
                        <label class="radio-inline navbar-brand">
                          <input type="radio" required name="payment_info" value="hand to hand">Hand to hand
                        </label>
                        
                   </div>
                    </div>

                   

                    <div class="form-group">
                   <label class="control-label col-sm-2">Price BDT:</label>
                   <div class="col-sm-2">          
                    <input type="text" class="form-control"  name="price_bdt" placeholder="Buying price" value="{{$product->price_bdt}}">
                  </div>
                </div> 
             {
                <div class="form-group">
                  <div class="col-sm-2"></div>
                  
                  
                  <div class="col-sm-2" style="padding: 10px;">  
                    <button class="btn btn-success"  type="submit" class="btn btn-default" name="create" value="create">Upload</button>
                  </div>
                </div>
               
               </form>

              </div>
             
              </div>
              
@endif
    <!-- Modals -->

@endsection