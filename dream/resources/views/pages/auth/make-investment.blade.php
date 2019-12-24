@extends('layouts.auth')

@section('content')
<div style="padding-top: 30px;"></div>
<section id="dashboard">
			<div class="container">
				<div class="row">
					@include('partials.auth.homenav')

					<div class="col-md-10">
						<!-- Website Overview -->
						<h1 class="well text-center text-uppercase">Add Investor</h1>
                <form role="form">

                    <div class="form-group">
                        <label for="forccategory">Select Category</label>
                        <select class="form-control" id="forccategory">
                            <option>Select Currency</option>
                            <option>Cloth</option>
                            <option>Books</option>
                            <option>Fish</option>
                            <option>Hotel</option>
                            <option>Others</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="forcurrency">Select Currency</label>
                        <select class="form-control" id="forcurrency">
                            <option>Select Currency</option>
                            <option>Taka</option>
                            <option>$ Doller</option>
                            <option>Rupi</option>
                            <option>others</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="bankname">Balance</label>
                        <input type="text" class="form-control" id="bankname" placeholder="Please write your balance">
                    </div>

                    <div class="form-group">
                        <label for="formethod">Payment Method</label>
                        <select class="form-control" id="formethod">
                            <option>Select Payment Method</option>
                            <option>Bikas</option>
                            <option>Rocket</option>
                            <option>M Cash</option>
                            <option>I cash</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary  btn-lg btn-block text-uppercase">Invest Now</button>
                </form>
						 
					</div>
					<div class="col-md-12">
					 
						<img src="">
					</div>
				</div>
			</div>
		</section>

@endsection