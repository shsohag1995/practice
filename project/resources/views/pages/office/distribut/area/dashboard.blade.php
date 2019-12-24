@extends('layouts.distribut')

@section('content')
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="index.html" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                    </a>
                    <a href="order.php" class="list-group-item">Order</a>
                    <!--drop down pending and checked   -->
                    <a href="pages.html" class="list-group-item">Employeer</a>


                </div>
            </div>
            <div class="col-md-9">
                <!-- Website Overview -->
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Website Overview</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 5</h2>
                                <h4>New Order</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 5</h2>
                                <h4>pending Order</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 5</h2>
                                <h4>Complete Order</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-open" aria-hidden="true"></span> 3</h2>
                                <h4>Employeers</h4>
                            </div>
                        </div>
                       <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 5</h2>
                                <h4>Shops</h4>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>



@endsection