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
             <form class="form-horizontal" style=" margin: 20px;" action="/shop/public/product/store" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                  <label class="control-label col-sm-2">Upload Product Image:</label>
                  <div class="col-sm-4">          
                    <input type="file" class="form-control" name="image">
                  </div> 
                </div>
                
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
                        <label class="radio navbar-brand" >
                          <input checked type="radio" required name="category_condition" value="category">
                        </label>  
                        <select name="old_category" style="padding-top: 10px;">
                      <option value="">select category</option>
                      <option value="piece">Piece</option>
                      <option value="kilogram">Kilogram</option>
                      <option value="kilogram">Meter</option>
                      <option value="kilogram">Centimeter</option>
                    </select>
                  </div>

                </div>
                
                <div class="form-group">
                  <label class="control-label col-sm-2" ></label>
                  <div class="col-sm-4">
                        <label class="radio navbar-brand" >
                          <input  checked type="radio" required name="category_condition" value="new">New
                        </label>  
                        <span class="col-sm-8" ><input type="text" class="form-control " required name="category" placeholder="If you want new category" ></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Product Type:</label>
                  <div class="col-sm-4">          
                    <input type="text" class="form-control"  name="type" placeholder="Enter Product Type" >
                  </div>
                </div>
               
                <div class="form-group">
                  <label class="control-label col-sm-2" >Brand Name:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control"  name="brand" placeholder="Enter Brand Name" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" >Product Quantity:</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" required name="quantity" placeholder=" " value="1" >
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
                 {{--
                    <div class="form-group">
                    <label class="control-label col-sm-2">Product details:</label>
                    <div class="col-sm-4">
                       <textarea class="form-control"  name="description"  rows="5"></textarea>
                    </div>
                   
                    </div> 
                    <div class="form-group">
                    <label class="control-label col-sm-2">Using info:</label>
                    <div class="col-sm-4">
                       <textarea class="form-control"  name="Using_info"  rows="5"></textarea>
                    </div>
                   
                    </div> 
                       --}}
                    <div class="form-group">
                   <label class="control-label col-sm-2">Price BDT:</label>
                   <div class="col-sm-2">          
                    <input type="text" class="form-control"  name="price_bdt" placeholder="Buying price">
                  </div>
                </div> 
             {{--   <div class="form-group">
                   <label class="control-label col-sm-2">Price CGC:</label>
                   <div class="col-sm-2">          
                    <input type="hidden" class="form-control" name="price_cgc" placeholder="Buying price">
                  </div>
                </div> 
                <div class="form-group">
                 
                  <label class="control-label col-sm-2">Price USD:</label>
                  <div class="col-sm-2">          
                    <input type="hidden" class="form-control" name="price_usd" placeholder="Selling price">
                    <button class="btn btn-success" type="submit" class="btn btn-default" name="create" value="create">Upload</button>
                  </div>--}}
                </div>
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