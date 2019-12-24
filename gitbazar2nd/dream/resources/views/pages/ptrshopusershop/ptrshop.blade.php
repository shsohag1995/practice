@extends('layouts.ptrshopusershop')

<!-----------------PRODUCTS----------------------->
@section('content')


 <hr style="margin: 5px;">
 

<div class="container">    
  <div class="row">
<div class="select-search-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center text-primary">Industry Name</h1>
            </div>
        </div>
    </div>
</div>

<div class="notice-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="well">
                    <h3>Catagory</h3>
                    <hr>
                    <h4>Male</h4>
                    <h4>Female</h4>

                </div>
            </div>
            <div class="col-lg-8">
                <div class="well">
                    <h2 class="text-center">Notice</h2>
                    <ul class="nav  nav-stacked">
                        <li class="active bg-info">
                            <a href="#">
                                <span class="badge pull-right">10 items now</span>
                                The new product is here
                            </a>
                        </li>
                        <h3></h3>
                        <li class="bg-info">
                            <a href="#">
                                <span class="badge pull-right">3 days left</span>
                                App market is commin soon
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="well">
                    <h3>Address</h3>
                    <hr>
                    <h4>Dhaka</h4>
                    <h4>Bangladesh</h4>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="googlemap-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="{{asset('images/shop/s2.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.6634055310155!2d89.14894751498086!3d23.723711184602553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39feeb0d36323c41%3A0x4c170899846e8597!2z4KaH4Ka44Kay4Ka-4Kau4KeAIOCmrOCmv-CmtuCnjeCmrOCmrOCmv-CmpuCnjeCmr-CmvuCmsuCmr-CmvA!5e0!3m2!1sbn!2sbd!4v1554202270268!5m2!1sbn!2sbd"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
            <div class="col-lg-3">
                <div class="thumbnail">
                    <img src="{{asset('images/shop/s2.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="thankpage breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <h1 class="text-center">Thanks for visit our industry namae page</h1>
            </div>
        </div>
    </div>
</div>


  </div>
</div>


@endsection
