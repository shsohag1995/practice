@extends('layouts.shop')

<!-----------------PRODUCTS----------------------->
@section('content')


 <hr style="margin: 5px;">
                      <div class="container-fluid">
                        
                          <div class="row">
                            <div class="col-md-3"></div>
                          <div role="tabpanel" class="col-md-6 tab-pane" id="review">
                              <form class="form-horizontal" action="/shop/complain/store" method="POST">
                                {{ csrf_field() }}
                                 <input type="hidden" name="shop_id" value="{{$shop->id}}">
                                 <div id="review"></div>
                                 <h2>Write your  Complain</h2>
                                 <div class="form-group required">
                                    <div class="col-sm-12">
                                       <label class="control-label" for="input-name">Your Name</label>
                                       <input required type="text" name="name" value="" id="input-name" class="form-control">
                                    </div>
                                 </div>
                                 <div class="form-group required">
                                    <div class="col-sm-12">
                                       <label class="control-label" for="input-review">Your Review</label>
                                       <textarea required  name="complain" rows="5" id="input-review" class="form-control"></textarea>
                                    </div>
                                 </div>
                                 <div class="form-group required">
                                    <div class="col-sm-12">
                                       <label class="control-label">Rating</label>
                                       &nbsp;&nbsp;&nbsp; Normal&nbsp;
                                       <input required type="radio" name="rating" value="1">
                                       &nbsp;
                                       <input required type="radio" name="rating" value="2">
                                       &nbsp;
                                       <input required type="radio" name="rating" value="3">
                                       &nbsp;
                                       <input required type="radio" name="rating" value="4">
                                       &nbsp;
                                       <input required type="radio" name="rating" value="5">
                                       &nbsp;High
                                    </div>
                                 </div>
                                 <div class="buttons clearfix">
                                    <div class="pull-right">
                                       <button type="submit" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Submit</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div class="col-md-3"></div>
                          </div>
    </div>
@endsection
