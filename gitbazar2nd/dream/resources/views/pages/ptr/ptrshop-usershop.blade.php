@extends('layouts.ptrshopu')

<!-----------------PRODUCTS----------------------->
@section('content')


 <hr style="margin: 5px;">
 

<div class="container">    
  <div class="row">
<div class="select-search-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <form class="navbar-form " role="search">
                    <div class="form-group">
                        <select name="" id="" class="form-control">
                            <option value="">Country</option>
                            <option value="">Bangladesh</option>
                            <option value="">India</option>
                            <option value="">Pakisthan</option>
                            <option value="">Nepal</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Latest Shop</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Name</th>
                                <th>Product number</th>
                                <th>Distribution area</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Jill Smith</td>
                                <td>jillsmith</td>
                                <td>Dec 1</td>
                                <td><a class="btn btn-default" href="">More</a> <a class="btn btn-info" href="#">+10</a></td>
                            </tr>
                            <tr>
                                <td>Eve Jackson</td>
                                <td>ejackson@</td>
                                <td>ejackson@</td>
                                <td><a class="btn btn-default" href="">More</a> <a class="btn btn-info" href="#">+10</a></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


  </div>
</div>


@endsection
