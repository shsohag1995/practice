                                               @foreach($products as $product)

                                                <div class=" col-sm-6 col-lg-4">

                                                <!-- Specific Product area structure -->
                                                <div class="product_image">
                                                    <div class="card product_all_section border-0 shadow">
                                                        <div class="text-center ">
                                                            <button class="btn btn-outline-info w-100 btn-sm border-0 text-uppercase text-bold">{{$product->shop_name}}</button>
                                                        </div>
                                                        <div class="product_image_head  mt-1 d-flex">
                                                            <div>
                                                                <h5 class="card-title  pt-1">{{$product->title}}</h5>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <a href="" class="">
                                                                    <button class="btn btn-info btn-sm">Details</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product_image_in mt-1">
                                                            <img src="{{Storage::url($product->image)}}" class="card-img-top d-block" alt="...">
                                                            <a href="" class="product_buy">
                                                                <button class="btn btn-primary "><i class="fa fa-shopping-cart"></i></button>
                                                            </a>

                                                            <a href="" class="product_convert ">
                                                                <button class="btn btn-success"><i class="fa fa-heart"></i></button>
                                                            </a>
                                                            <div class="d-flex justify-content-between mt-1">
                                                                <div class="">
                                                                    <button type="button" class="btn btn-primary btn-sm">
                                                                        <span class="glyphicon glyphicon-thumbs-up"></span> <span class="badge badge-light">12</span>
                                                                    </button>
                                                                </div>
                                                                <div class="">$1000</div>
                                                                <div class="">
                                                                    <button type="button" class="btn btn-info btn-sm">
                                                                        <span class="glyphicon glyphicon-plus"></span> <span class="glyphicon glyphicon-shopping-cart"></span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="discunt-prices text-center">
                                                            <strike class="text-muted">Tk 500</strike>
                                                            <span class="">Tk 677</span>
                                                        </div>

                                                        <div class="product_like" style="overflow: hidden">
                                                            <div class="d-flex justify-content-between">
                                                                <a class="btn btn-app">
                                                                    <i class="fa fa-thumbs-up text-primary"></i>
                                                                    <span class="badge badge-primary">50</span>
                                                                </a>
                                                                <a class="mt-2">
                                                                    <i class="card-title text-success  px-3 ">6557 ৳</i>
                                                                </a>
                                                                <a class="btn btn-app bg-success rounded ">
                                                                    <i class="fa text-white"> Order</i>
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>	<!-- End specific product area -->

                                            </div> <!-- End coloum -->

                                        @endforeach