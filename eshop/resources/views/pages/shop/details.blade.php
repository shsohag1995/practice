@extends('layouts.shop')

@section('content')
 <div class="pld">
         <div class="product-simple-area">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                     <div class="container-fluid">
                     <div class="row">
                     <div class="single-product-image-inner">
                        <!-- Tab panes -->
                        <div class="tab-content">
                           <div role="tabpanel" class="tab-pane " id="one">
                              <img src="image/bt3.jpg" alt="" style="max-width: 350px;max-height: 450px;">
                           </div>
                           <div role="tabpanel" class="tab-pane" id="two">
                              <img src="image/bt1.jpg" alt=""style="max-width: 350px;max-height: 450px;
                              ">
                           </div>
                           <div role="tabpanel" class="tab-pane active" id="three">
                              <img src="image/bt2.jpg" alt=""style="max-width: 350px;max-height: 450px;">
                           </div>
                            <div role="tabpanel" class="tab-pane" id="four">
                              <img src="image/bt4.jpg" alt=""style="max-width: 350px;max-height: 450px;">
                           </div>
                            <div role="tabpanel" class="tab-pane" id="five">
                              <img src="image/gt1.jpg" alt=""style="max-width: 350px;max-height: 450px;">
                           </div>
                        </div>
                        </div>
                         </div>
                      
                        <div class="container-fluid">
                        <div class="row">
                        <ul class="row" role="">
                           <li  class=""><a href="#one" aria-controls="one" role="tab" data-toggle="tab"><img src="image/bt3.jpg" alt=""style="width: 60px;height:80px;float: left; "></a></li>
                           <li ><a href="#two" aria-controls="two" role="tab" data-toggle="tab"><img src="image/bt1.jpg" alt=""style="width: 60px;height:80px;float: left; "></a></li>
                           <li  class="active"><a href="#three" aria-controls="three" role="tab" data-toggle="tab"><img src="image/bt2.jpg" alt="" style="width: 60px;height:80px;float: left; "></a></li>
                           <li ><a href="#four" aria-controls="four" role="tab" data-toggle="tab"><img src="image/bt4.jpg" alt="" style="width: 60px;height:80px;float: left; "></a></li>
                           <li ><a href="#five" aria-controls="five" role="tab" data-toggle="tab"><img src="image/gt1.jpg" alt="" style="width: 60px;height:80px;float: left; "></a></li>
                        </ul>
                        </div>
                      </div>
                     </div>
                  </div>
                  <div class="clearfix visible-xs"></div>
                  <div class="col-md-offset-1 col-md-5 col-sm-6">
                     <div class="single-product-details">
                        <div class="list-pro-rating">
                         
                        </div>
                        <div >
      <h1>Product ID:1234567890</h1>
      <h2>Men's Footwear</h2>
      <h4>in stock</h4>
        <h3> Type:Female</h3>
        <h3> catagory:Tshart</h3>
        <h3>Brand :smart</h3>
        <h3>Condition:New</h3>
        <h5>Product Price:1000TK</h5>
                      <p class="single-shop-select">
                           <label>color</label>
                           <select>
                              <option>First</option>
                              <option>Second</option>
                              <option>Third</option>
                              <option>Fourth</option>
                              <option>Fifth</option>
                              
                           </select>
                        </p>
                        <p class="single-shop-select">
                           <label>Size</label>
                           <select>
                              <option>S</option>
                              <option>M</option>
                              <option>X</option>
                              <option>XL</option>
                              <option>2X</option>
                              <option>3X</option>
                           </select>
                        </p>
        
       <form>
         <label>Quantity:</label>
          <input class="form-group" type="number" value="1" name=""><span>Piece(400 Pieces available)</span> 
          <div>
          <button class="btn btn-success " type="submit" name="Submit" >Buy Now</button>
          <button class="btn btn-info" type="submit">Add To Chart</button>
          </div>
       </form>
        
       
       
</div>
                        
                        <div class="add-to-wishlist">
                           <a class="wish-btn" href="cart.html?ref=designcollection">
                           <i class="fa fa-heart-o"></i>
                           <span>ADD TO WISHLIST</span>
                           </a>
                        </div>
                        <div class="single-product-categories">
                           <label>Categories:</label>
                           <span>FootwearMen's > FootwearCasual > ShoesClarks > Casual</span>
                           <div class="clear"></div>
                           <label>Services:</label>
                           <span>Cash On Delivery available?</span>
                           <div class="clear"></div>
                           <label>Categories:</label>
                           <span>30 Days Exchange Policy?</span>
                           <div class="clear"></div>
                           <label>Payment Method</label>
                           <span>Safe and Secure Payments. Easy returns.</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-9">
                     <div class="p-details-tab-content section-padding-2">
                        <div class="p-details-tab">
                           <ul class="p-details-nav-tab" role="tablist">
                              <li role="presentation" class="btn btn-default active">
                                 <a href="#more-info" aria-controls="more-info" role="tab" data-toggle="tab">Product Description</a>
                              </li>
                              <li role="presentation" class="btn btn-info"><a href="#review" aria-controls="data" role="tab" data-toggle="tab">Review</a></li>
                              <li role="presentation" class="btn btn-success"><a href="#feedback" aria-controls="data" role="tab" data-toggle="tab">Feedback</a></li>
                           </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="tab-content review">
                           <div role="tabpanel" class="tab-pane active" id="more-info">
                              <p>T his is a good product .</p>
                           </div>
                           <div role="tabpanel" class="tab-pane" id="review">
                              <form class="form-horizontal">
                                 <div id="review"></div>
                                 <h2>Write a review</h2>
                                 <div class="form-group required">
                                    <div class="col-sm-12">
                                       <label class="control-label" for="input-name">Your Name</label>
                                       <input type="text" name="name" value="" id="input-name" class="form-control">
                                    </div>
                                 </div>
                                 <div class="form-group required">
                                    <div class="col-sm-12">
                                       <label class="control-label" for="input-review">Your Review</label>
                                       <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                    </div>
                                 </div>
                                 <div class="form-group required">
                                    <div class="col-sm-12">
                                       <label class="control-label">Rating</label>
                                       &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                       <input type="radio" name="rating" value="1">
                                       &nbsp;
                                       <input type="radio" name="rating" value="2">
                                       &nbsp;
                                       <input type="radio" name="rating" value="3">
                                       &nbsp;
                                       <input type="radio" name="rating" value="4">
                                       &nbsp;
                                       <input type="radio" name="rating" value="5">
                                       &nbsp;Good
                                    </div>
                                 </div>
                                 <div class="buttons clearfix">
                                    <div class="pull-right">
                                       <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div role="tabpanel" class="tab-pane" id="feedback">
                              <blockquote>
                                 <p>Very stylish shoes.I can wear them on any attire or any occasion and also very comfortable.</p>
                                 <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                              </blockquote>
                              <blockquote class="blockquote-reverse">
                                 <p>It has a soft sole inside the shoe which Clarks calls as 'Atsu footbed' which bas several small beads on it.</p>
                                 <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                              </blockquote>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Product Simple Area End -->
         <!--Related Product Area Start-->
         <div class="featured-product-area section-padding-2">
            <div class="container">
               <div class="row">
                  <div class="section-title">
                     <h2>Related  products</h2>
                  </div>
                  <div class="col-lg-3 col-sm-6  hero-feature text-center">
                     <!-- Thumbnail Images -->
                     <div class="thumbnail">
                        <a href="product-detail.html?ref=designcollection" class="link-p"> <img src="image/gt1.jpg" alt=""> </a>
                        <div class="like-heart"><a  data-placement="left"> <i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
                        <!-- Offer Tag-->
                        <span class="offer">New</span>
                        <div class="caption prod-caption">
                           <span class="brand animated fadeInRightShort">Junaid Jamshed&nbsp;</span>
                           <div class="pro-name"><a href="" class="animated fadeInRightShort">Age Of Wisdom Tan Graphic Tee</a></div>
                           <p>
                              <!-- Price & Button -->
                           <div class="btn-group"> <a href="#" class="btn btn-default">$ 122.51</a> <a href="" class="btn btn-primary"> Buy</a> </div>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 hero-feature text-center">
                     <!-- Thumbnail Images -->
                     <div class="thumbnail">
                        <a href="product-detail.html?ref=designcollection" class="link-p"> <img src="image/gt2.jpg" alt=""> </a>
                        <div class="like-heart"><a  data-placement="left"> <i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
                        <!-- Offer Tag-->
                        <span class="offer">New</span>
                        <div class="caption prod-caption">
                           <span class="brand animated fadeInRightShort">Best Dress Top&nbsp;</span>
                           <div class="pro-name"><a href="" class="animated fadeInRightShort">Hot of Windsome Tee</a></div>
                           <p>
                              <!-- Price & Button -->
                           <div class="btn-group"> <a href="#" class="btn btn-default">$ 122.51</a> <a href="" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a> </div>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 hero-feature text-center">
                     <!-- Thumbnail Images -->
                     <div class="thumbnail">
                        <a href="" class="link-p"> <img src="image/gt3.jpg" alt=""> </a>
                        <div class="like-heart"><a  data-placement="left"> <i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
                        <!-- Offer Tag-->
                        <span class="offer">New</span>
                        <div class="caption prod-caption">
                           <span class="brand animated fadeInRightShort">Ven Henson&nbsp;</span>
                           <div class="pro-name"><a href="" class="animated fadeInRightShort">Long Cut Full selle</a></div>
                           <p>
                              <!-- Price & Button -->
                           <div class="btn-group"> <a href="#" class="btn btn-default">$ 122.51</a> <a href="" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a> </div>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 hero-feature text-center">
                     <!-- Thumbnail Images -->
                     <div class="thumbnail">
                        <a href="product-detail.html?ref=designcollection" class="link-p"> <img src="image/gt4.jpg" alt=""> </a>
                        <div class="like-heart"><a  data-placement="left"> <i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
                        <!-- Offer Tag-->
                        <span class="offer">New</span>
                        <div class="caption prod-caption">
                           <span class="brand animated fadeInRightShort">Junaid Jamshed&nbsp;</span>
                           <div class="pro-name"><a href="" class="animated fadeInRightShort">Blue Matching Dress May</a></div>
                           <p>
                              <!-- Price & Button -->
                           <div class="btn-group"> <a href="#" class="btn btn-default">$ 122.51</a> <a href="" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a> </div>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Space bottom -->      <div class="space-bottom"><div align="center">

</div></div>


@endsection