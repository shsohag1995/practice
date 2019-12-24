@extends('layouts.auth')

@section('content')
<div style="padding-top: 30px;"></div>
<section id="dashboard">
			<div class="container">
				<div class="row">
					@include('partials.auth.homenav')

					<div class="col-md-10">
						<!-- Website Overview -->
						<div class="panel panel-default">
							<div class="panel-heading main-color-bg">
								<h3 class="panel-title">My dashboard Overview</h3>
							</div>
							<div class="panel-body">
								 
								<div class="col-md-3">
									<div class="well dash-box">
										<h4><span class="glyphicon" aria-hidden="true"></span> {{Auth::user()->balance_bdt}}</h4>
									 <a href=""><h4>Total BDT</h4></a> 
									</div>
								</div>
								<div class="col-md-3">
									<div class="well dash-box">
										<h4><span class="glyphicon" aria-hidden="true"></span> {{Auth::user()->balance_cgc}}</h4>
										<a href=""><h4>CGC</h4></a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="well dash-box">
										<h4><span class="glyphicon " aria-hidden="true"></span> {{Auth::user()->balance_usd}}</h4>
										<a href=""><h4>USD</h4></a>
								 </div>
								</div>
								{{--
								<div class="col-md-3">
									<div class="well dash-box">
										<h4><span class="glyphicon " aria-hidden="true">12</span></h4>
										<a href="/diposit"><h4>Diposit </h4></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="well dash-box">
										<h4><span class="glyphicon " aria-hidden="true"></span> 33</h4>
										<a href="/withdrow"><h4>Withdrow able bdt</h4></a>
									</div>
								</div>
							 
								<div class="col-md-3">
									<div class="well dash-box">
										<h4><span class="glyphicon " aria-hidden="true"></span> 33</h4>
										<a href="/shoping-blance"><h4>Shoping blance</h4></a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="well dash-box">
										<h4><span class="glyphicon " aria-hidden="true"></span> 12,334</h4>
										<a href="/estemated-earn"><h4>Estemated earn</h4></a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="well dash-box">
										<h4><span class="glyphicon ">12,33445</span>BDT</h4>
										<a href="/investment"><h4>Investment</h4></a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="well dash-box">
										<h4><span class="glyphicon" aria-hidden="true">12,333</span>BDT </h4>
										<a href="/pending-investment"><h5>Pending Investment</h5></a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="well dash-box">
										<h4><span class="glyphicon " aria-hidden="true">12,33</span>BDT</h4>
										<a href="/investment-profit"><h4>Investment Profit</h4></a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="well dash-box">
										<h4><span class="glyphicon " aria-hidden="true">Make Investment</span></h4>
										<a href="/make-investment"><h4>Go</h4></a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="well dash-box">
										<h4><span class="glyphicon " aria-hidden="true">12,33</span>BDT</h4>
										<a href="/Myshops"><h4>Myshops</h4></a>
									</div>
								</div>
                               --}}

							</div>
							</div>
						 
					</div>
					<div class="col-md-12">
					 
						<img src="">
					</div>
				</div>
			</div>
		</section>

@endsection