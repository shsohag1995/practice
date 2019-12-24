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
                                <form>
                                    <div class="row">
                                    
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">  
                                            <label>Customer Name:</label>  
                                                <input type="text" class="form-control" placeholder="Customer Name" name="customer_name" value="sf" required >
                                            </div>
                                        </div>
                                        
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                            	 <label>Contact Number:</label>  
                                                <input type="text" name="contact_info" class="form-control" placeholder="Contact number" required>
                                               
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">    
                                            	 <label>Customer Name:</label>  
                                                <input type="email" class="form-control" placeholder="Email" required>
                                                
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                            	 <label>Customer Name:</label>  
                                                <input type="text" class="form-control" placeholder="Phone Number" required>
                                                
                                            </div>
                                        </div><!-- end columns -->
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
			                           <label class="control-label col-sm-2" >Arival Date:</label>
			                           <div class="col-sm-10">          
			                             <input type="date" class="form-control" name="birthday" placeholder="Arrival Date">
			                               </div>
			                             </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
			                           <label class="control-label col-sm-2" >Exit Date:</label>
			                           <div class="col-sm-10">          
			                             <input type="date" class="form-control" name="birthday" placeholder="Exit Date">
			                               </div>
			                             </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">    
                                                <input type="text" class="form-control dpd1" placeholder="Arrival Date" required="">
                                                <span><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control dpd2" placeholder="Exit Date" required="">
                                                <span><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <span><i class="fa fa-angle-down"></i></span>
                                                <select class="form-control">
                                                <option selected="">Adults</option>
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                </select>
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <span><i class="fa fa-angle-down"></i></span>
                                                <select class="form-control">
                                                    <option selected="">Children</option>
                                                    <option>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <span><i class="fa fa-angle-down"></i></span>
                                                <select class="form-control">
                                                    <option selected="">Infants</option>
                                                    <option>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="5" placeholder="Enter Message"></textarea>
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <a href="#" class="btn btn-yellow">Reserve Now</a>
                                        </div><!-- end columns -->
                                        
                                    </div><!-- end row -->
                                </form>
                      </div>
                      <div class="col-md-12">
					 
						<img src="">
					</div>
				</div>
			</div>
		</section>

@endsection