@extends('layouts.appnew')

@section('content')
<div class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h1 class="m-0 text-dark">Git Bazar</h1>
                      </div><!-- /.col -->
                      <div class="col-sm-6">
                          
                      </div><!-- /.col -->
                  </div><!-- /.row -->
              </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

          <!-- Main content -->
          <div class="content">
             <div class="container-fluid">
              <div class="container-fluid" style="min-height: 960px;">
            
               <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-info card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                         src="images/logo.png"
                                         alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">{{Auth::user()->user_name}}</h3>

                                <p class="text-muted text-center">Software Engineer</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>USD</b> <a class="float-right">{{Auth::user()->balance_usd}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>BDT</b> <a class="float-right">{{Auth::user()->balance_bdt}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>CGC</b> <a class="float-right">{{Auth::user()->balance_cgc}}</a>
                                    </li>
                                </ul>
                                 @if(Auth::user()->type=='Unverified')
                                <a href="" class="btn btn-info btn-block text-capitalize"><b>{{ Auth::user()->type }}</b></a>
                                @else
                                <a  class="btn btn-success btn-block text-capitalize"><b>{{ Auth::user()->type }}</b></a>
                                @endif
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">About Me</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fa fa-book mr-1"></i> Education</strong>

                                <p class="text-muted">
                                    B.S. in Computer Science from the University of Tennessee at Knoxville
                                </p>

                                <hr>

                                <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>

                                <p class="text-muted">Malibu, California</p>

                                <hr>

                                <strong><i class="fa fa-pencil mr-1"></i> Skills</strong>

                                <p class="text-muted">
                                    <span class="tag tag-danger">UI Design</span>
                                    <span class="tag tag-success">Coding</span>
                                    <span class="tag tag-info">Javascript</span>
                                    <span class="tag tag-warning">PHP</span>
                                    <span class="tag tag-primary">Node.js</span>
                                </p>

                                <hr>

                                <strong><i class="fa fa-file-text-o mr-1"></i> Notes</strong>

                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills ">
                                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#my-product-list" data-toggle="tab">My product list</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">

                                    <div class="active tab-pane" id="timeline">
                                        <div class="row">
                                            <!-- All products  1 -->
                                            @foreach($products as $product)
                                            <div class="col-lg-4 col-sm-6">

                                                <!-- Specific Product area structure -->
                                                <div class="product_image">
                                                    <div class="card product_all_section border-0 shadow">
                                                        <div class="text-center ">
                                                            <a href="/shop/{{$product->shop_slug}}" class="btn btn-outline-info w-100 btn-sm border-0 text-uppercase text-bold">{{$product->shop_name}}</a>
                                                        </div>
                                                        <div class="product_image_head  mt-1 d-flex">
                                                            <div>
                                                                <h5 class="card-title  pt-1">{{$product->title}}</h5>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="/shop/{{$product->shop_slug}}/product/{{$product->sp_counter_number}}/name/{{$product->slug}}" class="">
                                                                    <button class="btn btn-info btn-sm">Details</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product_image_in mt-1">
                                                            <img src="{{ Storage::url($product->image)}}" class="card-img-top d-block" alt="...">
                                                            <a href="" class="product_buy">
                                                                <button class="btn btn-primary "><i class="fa fa-shopping-cart"></i></button>
                                                            </a>

                                                            <a href="" class="product_convert ">
                                                                <button class="btn btn-success"><i class="fa fa-heart"></i></button>
                                                            </a>
                                                            
                                                        </div>

                                                        <div class="discunt-prices text-center">
                                                            <strike class="text-muted">Tk {{$product->price_bdt}}</strike>
                                                            <span class="">Tk {{$product->price_bdt}}</span>
                                                        </div>

                                                        <div class="product_like" style="overflow: hidden">
                                                            <div class="d-flex justify-content-between">
                                                                <a class="btn btn-app">
                                                                    <i class="fa fa-thumbs-up text-primary"></i>
                                                                    <span class="badge badge-primary">1</span>
                                                                </a>
                                                                <a class="mt-2">
                                                                    <i class="card-title text-success  px-3 ">{{$product->price_bdt}} ৳</i>
                                                                </a>
                                                                <a class="btn btn-app bg-success rounded ">
                                                                    <i class="fa text-white"> Order</i>
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>  <!-- End specific product area -->

                                            </div> <!-- End coloum -->
                                       @endforeach
                                        </div> <!-- /.row -->

                                    </div>
                                    <!-- /.tab-pane -->
                                      <!--My product list -->
                                      <div class=" tab-pane" id="my-product-list">
                                        <div class="row">
                                            <!-- All products  1 -->
                                            <div class="shopping-details table-responsive">
      <table id="cart" class="table table-hover table-condensed">
        <tr>
          <th width="3%">No</th>
          <th width='7%'>Title</th>
          <th width="5%">Product image</th>
          <th width="5%%">Product ID</th>
          <th width='8%'>Shop name</th>
          <th width="5%">Category</th>
          <th width="5%">Type</th>
          <th width="5%">Brand</th>
          <th width="5%">Price</th>
           <th width="5%">Quantity</th>
           <th width="5%">Minimum Order</th>
           <th width="5%">Unit</th>
          <th width="37%">Action</th>
        </tr>
       @php $i=1; @endphp
        @foreach($products as $product)
        <tr>
          <td>{{$i}}</td>
          <td><a href="/shop/{{$product->shop_slug}}/product/{{$product->sp_counter_number}}/name/{{$product->slug}}">{{$product->title}}</a></td>
          <td><img  src="{{Storage::url($product->image)}}" width="55" height="25" alt="..." class="img-responsive"/></td>
          <td>{{$product->sp_counter_number}}</td>
          <td><a href="/shop/{{$product->shop_slug}}">{{$product->shop_name}}</a> </td>
          <td>{{$product->category}}</td>
          <td>{{$product->type}}</td>
          <td>{{$product->brand}}</td>
          <td>{{$product->price_bdt}}tk</td>
          <td>{{$product->quantity}}</td>
          <td>{{$product->minimum_order}}</td>
          <td>{{$product->unit}}</td>
           <td  class="actions">
               <a href="/shop/{{$product->shop_slug}}/product/{{$product->sp_counter_number}}/name/{{$product->slug}}" ><i class="fa fa-eye btn-info "></i></a>
               <a href="/shop/{{$product->shop_id}}/product/{{$product->sp_counter_number}}/edit" ><i class="fa fa-edit btn-primary"></i></a></a>
               @if($product->action=='show')
               <a href="/shop/{{$product->shop_id}}/product/{{$product->sp_counter_number}}/hide" ><i class="fa fa-eye-slash btn-warning "></i></a></a>
               @else
               <a href="/shop/{{$product->shop_id}}/product/{{$product->sp_counter_number}}/show"><i class="fa fa-eye btn-info "></i></a></a>
               @endif
              <a href="/shop/{{$product->shop_id}}/product/{{$product->sp_counter_number}}/public/destroy" ><i class="fa fa-trash btn-danger "></i></a>
              
           </td>
        </tr>
         @php $i++; @endphp
        @endforeach
         {{$products->links()}}
      
      </table>
      
    </div>
    
                                        </div> <!-- /.row -->

                                    </div>
                                    <!-- /.tab-pane -->
                                      <!--My product list-->
                                    <div class="tab-pane" id="settings">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="inputName" class="col-sm-2 control-label">Name</label>

                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName2" class="col-sm-2 control-label">Name</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                                <div class="col-sm-10">
                                                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
                </div>
                 <!--row-->
               </div>

          
              
              </div><!-- /.container-fluid -->
          </div>
          <!-- /.content -->
          
@endsection