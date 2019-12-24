@extends('layouts.appnew')

@section('content')
<div class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h1 class="m-0 text-dark">Welcome</h1>
                      </div><!-- /.col -->
                      <div class="col-sm-6">
                          
                      </div><!-- /.col -->
                  </div><!-- /.row -->
              </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

          <!-- Main content -->
          <div class="content">
              <div class="container-fluid" style="min-height: 960px;">
            
               
                  <div class="one_shop_slider">
                      <div class="row">
                        @foreach($allshops as $shop)

                       @if($shop->type=='Private'||$shop->agent=='agent')
                          <div class="col-md-6">
                              <div class="card">
                                  <div class="card-header d-flex justify-content-between p-1">
                                      <h6 class=" btn-sm bg-info-gradient mb-0 p-2"><i class="fa fa-star"></i> <span class="badge badge-light">@if($shop->type=='Public')
                                      {{$shop->type}}
                                         @else
                                     {{$shop->star}}
                                      @endif</span></h6>
                                      <a href="/shop/{{$shop->slug}}"><h6 class="btn btn-sm btn-outline-info mb-0 p-2 text-uppercase text-bold">{{$shop->name}}</h6></a>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="">
                                      <div id="{{$shop->slug}}" class="carousel slide carousel-fade" data-ride="carousel">
                                          <ol class="carousel-indicators">
                                              <li data-target="#{{$shop->slug}}" data-slide-to="0" class="active"></li>
                                              <li data-target="#{{$shop->slug}}" data-slide-to="1"></li>
                                              <li data-target="#{{$shop->slug}}" data-slide-to="2"></li>
                                              <li data-target="#{{$shop->slug}}" data-slide-to="3"></li>
                                          </ol>
                                          <div class="carousel-inner">
                                              <div class="carousel-item active">
                                                <a href="/shop/{{$shop->slug}}"><img class="d-block w-100" src="{{ Storage::url($shop->front_image)}}" alt="First slide"></a>
                                                  
                                              </div>
                                              <div class="carousel-item">
                                                <a href="/shop/{{$shop->slug}}"><img class="d-block w-100" src="{{ Storage::url($shop->right_image)}}" alt="Second slide"></a>
                                                  
                                              </div>
                                              <div class="carousel-item">
                                                <a href="/shop/{{$shop->slug}}"><img class="d-block w-100" src="{{ Storage::url($shop->center_image)}}" alt="Third slide"></a>
                                                  
                                              </div>
                                              <div class="carousel-item">
                                                <a href="/shop/{{$shop->slug}}"><img class="d-block w-100" src="{{ Storage::url($shop->left_image)}}" alt="Four slide"></a>
                                                  
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                                  <!-- /.card-body -->
                                  <div class="d-flex justify-content-between">
                                      <a href="/shop/{{$shop->id}}/like/1" class="btn btn-app">
                                          <span class="badge badge-primary">{{$shop->like}}</span>
                                          <i class="fa fa-thumbs-up text-primary"></i>
                                      </a>
                                      <a href="/shop/{{$shop->id}}/like/0" class="btn btn-app">
                                          <span class="badge bg-warning">{{$shop->unlike}}</span>
                                          <i class="fa fa-thumbs-down text-danger"></i>
                                      </a>
                                      <a href="/shop/{{$shop->slug}}/comment" class="btn btn-app">
                                          <span class="badge bg-info">{{$shop->comment}}</span>
                                          <i class="fa fa-comments text-info"></i>
                                      </a>
                                      <a href="/shop/{{$shop->id}}/connecte" class="btn btn-app mr-3">
                                          <span class="badge bg-success">{{$shop->connected}}</span>
                                          <i class="fa fa-heart text-warning"></i>
                                      </a>
                                  </div>
                              </div>
                              <!-- /.card -->
                          </div>
                          <!-- /.col -->
                 @elseif($shop->type=='Public')
                          <div class="col-md-6">
                              <div class="card">
                                  <div class="card-header d-flex justify-content-between p-1">
                                      <h6 class=" btn-sm bg-info-gradient mb-0 p-2"><i class="fa fa-star"></i> <span class="badge badge-light">@if($shop->type=='Public')
                                      {{$shop->type}}
                                         @else
                                     {{$shop->star}}
                                     @endif
                                   </span></h6>
                                      <a href="/shop/{{$shop->slug}}"><h6 class="btn btn-sm btn-outline-info mb-0 p-2 text-uppercase text-bold">{{$shop->name}}</h6></a>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="">
                                      <div id="{{$shop->slug}}" class="carousel slide carousel-fade" data-ride="carousel">
                                          <ol class="carousel-indicators">
                                              <li data-target="#{{$shop->slug}}" data-slide-to="0" class="active"></li>
                                              <li data-target="#{{$shop->slug}}" data-slide-to="1"></li>
                                              <li data-target="#{{$shop->slug}}" data-slide-to="2"></li>
                                          </ol>
                                          <div class="carousel-inner">
                                              <div class="carousel-item active">
                                                  <img class="d-block w-100" src="img/slider1.jpg" alt="First slide">
                                              </div>
                                              <div class="carousel-item">
                                                  <img class="d-block w-100" src="img/slider2.jpg" alt="Second slide">
                                              </div>
                                              <div class="carousel-item">
                                                  <img class="d-block w-100" src="img/slider3.jpg" alt="Third slide">
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                                  <!-- /.card-body -->
                                  <div class="d-flex justify-content-between">
                                      <a href="/shop/{{$shop->id}}/like/1" class="btn btn-app">
                                          <span class="badge badge-primary">{{$shop->like}}</span>
                                          <i class="fa fa-thumbs-up text-primary"></i>
                                      </a>
                                      <a href="/shop/{{$shop->id}}/like/0" class="btn btn-app">
                                          <span class="badge bg-warning">{{$shop->unlike}}</span>
                                          <i class="fa fa-thumbs-down text-danger"></i>
                                      </a>
                                      <a href="/shop/{{$shop->slug}}/comment" class="btn btn-app">
                                          <span class="badge bg-info">{{$shop->comment}}</span>
                                          <i class="fa fa-comments text-info"></i>
                                      </a>
                                      <a href="/shop/{{$shop->id}}/connecte" class="btn btn-app mr-3">
                                          <span class="badge bg-success">{{$shop->connected}}</span>
                                          <i class="fa fa-heart text-warning"></i>
                                      </a>
                                  </div>
                              </div>
                              <!-- /.card -->   
                          </div>
                          <!-- /.col -->
                          @endif
                         @endforeach
                      </div>


                  </div><!-- /.container-fluid -->
              

         


            </div>
              </div><!-- /.container-fluid -->
{{$allshops->links()}}
          </div>
          <!-- /.content -->
          
@endsection