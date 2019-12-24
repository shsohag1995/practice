@extends('layouts.shop')

@section('content')

<div style="padding-top: 30px;"></div>
<section id="dashboard">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
					 <img src="">
						
					</div>
	 

					<div class="col-md-10">
						  <div class="row">
                                <form action="/shop/product/booking/payment" method="GET" enctype="multipart/form-data">
                                      {{ csrf_field() }}
                                      <input type="hidden" class="form-control" placeholder="Customer Name" name="shop_id" value="{{$shop->id}}" required >
                                      <input type="hidden" class="form-control" placeholder="Customer Name" name="sp_counter_number" value="{{$spcn}}" required >
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group"> 
                                            <label>Customer Name:</label>  
                                                <input type="text" class="form-control" placeholder="Customer Name" name="customer_name" value="{{$orderaddress->customer_name}}" required >
                                            </div>
                                        </div>
                                        
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                            	 <label>Contact Number:</label>  
                                                <input type="text" name="contact_info" class="form-control" placeholder="Contact number" value="{{$orderaddress->contact_info}}" required>
                                               
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">    
                                            	 <label>Country:</label>  
                                                <input type="text" class="form-control" placeholder="country" name="country" value="{{$orderaddress->country}}" required>
                                                
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                            	 <label>State:</label>  
                                                <input type="text" class="form-control" placeholder="State" name="state" value="{{$orderaddress->state}}" required>
                                                
                                            </div>
                                        </div>

                                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                            	 <label>Ditrict:</label>  
                                                <input type="text" class="form-control" placeholder="District" name="district" value="{{$orderaddress->district}}" required>
                                                
                                            </div>
                                        </div>
                                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                            	 <label>City:</label>  
                                                <input type="text" class="form-control" placeholder="City" name="city" value="{{$orderaddress->city}}" required>
                                                
                                            </div>
                                        </div>

                                         
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                            	 <label>Address:</label>  
                                                <textarea class="form-control" rows="5" placeholder="Enter Your Address" name="shiping_address" value="" >{{$orderaddress->shiping_address}}</textarea>
                                            </div>
                                        </div><!-- end columns -->
                                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                        <label class="control-label col-sm-4" >Arival Date:</label>
                                      <div class="col-sm-8">          
                                       <input type="date" class="form-control" name="arival_date" placeholder="Arrival Date">
                                       </div>
                                     </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                     <label class="control-label col-sm-4" >Exit Date:</label>
                                     <div class="col-sm-8">          
                                      <input type="date" class="form-control" name="exit_date" placeholder="Exit Date">
                                     </div>
                                   </div>
                                        </div>
                                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                               <div class="form-group">
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                               <div class="form-group">
                                               </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <span><i class="fa fa-angle-down"></i></span>
                                                <select name="adults" class="form-control">
                                                <option selected="">Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <span><i class="fa fa-angle-down"></i></span>
                                                <select name="children" class="form-control">
                                                    <option selected="">Children</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <span><i class="fa fa-angle-down"></i></span>
                                                <select name="infants" class="form-control">
                                                    <option  selected="">Infants</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="5" placeholder="Enter your message"></textarea>
                                            </div>
                                        </div><!-- end columns -->
                                      <div class="form-group">
                                       <label>Select Payment Method:</label>
                                       <div class="col-sm-12">
                                       <!-- <label class="radio-inline navbar-brand" >
                                        <input required type="radio" name="payment" value="gitbazar">From my  account
                                           </label> -->
                                       <label class="radio-inline navbar-brand" >
                                        <input required type="radio" name="payment" value="bkash"><img src="{{asset('/images/payment/bkash.jpg')}}" alt=""style="width: 60px;height: 40px;float: left; ">
                                           </label>
                                        <label class="radio-inline navbar-brand" >
                                        <input  type="radio"  required name="payment" value="rocket"><img src="{{asset('/images/payment/rocket.png')}}" alt=""style="width: 60px;height: 40px;float: left; ">
                                           </label>
                                     
                                       </div>
                                        </div>
                                    
                                    <div class="form-group">
                                    	<div class="col-sm-12" style="padding-top: 20px;">
                                   <button class="btn btn-success  " style="float: right;" type="submit" name="submit" value="order" >Next</button>
                               </div>
                                  </div>
                                </div>
                                </form>
                            </div>
                      </div>
                      <div class="col-md-12">
					 
						<img src="">
					</div>
				</div>
			</div>
		</section>

@endsection