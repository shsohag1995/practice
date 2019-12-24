
 @extends('layouts.shop')

<!-----------------PRODUCTS----------------------->
@section('content')


 <hr style="margin: 5px;">
                      <div class="container-fluid">
                         
                          <div class="row">
                          	 <div class="col-md-3"></div>
                          <div role="tabpanel" class="col-md-6 tab-pane" id="review">
                              <form class="form-horizontal" action="/shop/comment/store" method="POST">
                                {{ csrf_field() }}
                              	<input type="hidden" name="shop_id" value="{{$shop->id}}">
                                 <div id="review"></div>
                                 <h2>Write a review</h2>
                                 <div class="form-group required">
                                    <div class="col-sm-12">
                                       <label class="control-label" for="input-review">Your Review</label>
                                       <textarea required name="comment" rows="3" id="input-review" class="form-control"></textarea>
                                    </div>
                                 </div>
                                 <div class="form-group required">
                                    <div class="col-sm-12">
                                       <label class="control-label">Rating</label>
                                       &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                       <input required type="radio" name="rating" value="1">
                                       &nbsp;
                                       <input required type="radio" name="rating" value="2">
                                       &nbsp;
                                       <input required type="radio" name="rating" value="3">
                                       &nbsp;
                                       <input required type="radio" name="rating" value="4">
                                       &nbsp;
                                       <input required type="radio" name="rating" value="5">
                                       &nbsp;Good
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
                          <div class="row">
                          	<div class="col-md-3"></div>
                          	<div class="col-sm-6">
                          		</br>
                            <div class="well">
                            <ul data-brackets-id="12674" id="sortable" class="list-unstyled ui-sortable">
                              @foreach($comments as $comment)
                             <strong class="pull-left primary-font">{{$comment->first_name}}</strong>
                            <small class="pull-right text-muted">
                             <span class="glyphicon glyphicon-time"></span>{{$comment->created_at}}</small>
                             </br>
                            <li class="ui-state-default">{{$comment->comment}} </li>
                              </br>
                              @endforeach
                              {{ $comments->links() }}
                                  </ul>
                               </div>
                          	</div>
                          	<div></div>
                          	
                          </div>
    </div>
@endsection



