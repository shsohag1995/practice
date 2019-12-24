@extends('layouts.auth')

@section('content')
<div class="" style="padding-top: 20px;" ></div>
<section id="main">
      <div class="container-fluid">
        <div class="row">
          @include('partials.auth.homenav')
          <div class="col-md-10">
            <!-- Website Overview -->
            <div class="container">
		<!-- main row starts here -->
		<div class="row main-row">
			<!-- profile picture section starts here -->
			<div class="col-md-4 first-col">
				<div class="profile-picture">
					<img src="images/profile-picture.jpg" alt="Profile Picture">
				</div>
				<div  class="full-name">Khalid Hossain Akash &nbsp; &nbsp;<a href="#" class="btn btn-info btn-xs"><i class="fas fa-pencil-alt"></i> </a>
				</div>
				<div class="store-details">
					<strong>Store Name:</strong>&nbsp; &nbsp;WebShop &nbsp; &nbsp;<a href="#" class="btn btn-info btn-xs"><i class="fas fa-pencil-alt"></i> </a>
				</div>
				<div class="store-id"><strong>Store Id:</strong>&nbsp; &nbsp;0wb98</div>
			</div>
			<!-- profile picture section ends here -->


			<!-- profile details section starts here -->
			<div class="col-md-8 second-col">
				<ul>
					<li>
						<strong>User Id:</strong><span class="userid"> 0k1h65</span>
					</li>
					<li>
						<strong>Username: </strong><span class="username"> Khalid Hossain</span> &nbsp; &nbsp;<a href="#" class="btn btn-info btn-xs"><i class="fas fa-pencil-alt"></i> </a>
					</li>
					<li>
						<strong>Email: </strong><span class="email"> khalidhossain727@gmail.com</span> &nbsp; &nbsp;<a href="#" class="btn btn-info btn-xs"><i class="fas fa-pencil-alt"></i> </a>
					</li>
					<li>
						<strong>Mobile: </strong><span class="mobile"> +8801721383596</span> &nbsp; &nbsp;<a href="#" class="btn btn-info btn-xs"><i class="fas fa-pencil-alt"></i> </a>
					</li>
					<li>
						<strong>Balance Bdt: </strong><span class="b-bdt"> 1600 &nbps; &nbsp;
							<i class="fas fa-money-check-alt"></i></span>
					</li>
					<li>
						<strong>Balance CGC: </strong><span class="b-cgc"> 100 &nbps; &nbsp;<i style="color: #e5f20e" class="fas fa-coins"></i></span>
					</li>
					<li>
						<strong>Balance Usd: </strong><span class="b-usd"> 20 &nbps;&nbsp;<i class="fas fa-dollar-sign"></i></span>
					</li>
					<li>
						<strong>Address: </strong>
						<ul class="address">
							<li>
								<strong>Country: </strong><span class="country"> Bangladesh</span> &nbsp; &nbsp;<a href="#" class="btn btn-info btn-xs"><i class="fas fa-pencil-alt"></i> </a>
							</li>
							<li>
								<strong>State: </strong><span class="state"> Khulna</span> &nbsp; &nbsp;<a href="#" class="btn btn-info btn-xs"><i class="fas fa-pencil-alt"></i> </a>
							</li>
							<li>
								<strong>District: </strong><span class="district"> Kushtia</span> &nbsp; &nbsp;<a href="#" class="btn btn-info btn-xs"><i class="fas fa-pencil-alt"></i> </a>
							</li>
						</ul>
					</li>
					<li>
						<strong>Bith Date:</strong><span class="birth-date"> 01/01/2000</span> &nbsp; &nbsp;<a href="#" class="btn btn-info btn-xs"><i class="fas fa-pencil-alt"></i> </a>
					</li>
					<li>
						<strong>Blood Group:</strong><span class="blood"> A+</span> &nbsp; &nbsp;<a href="#" class="btn btn-info btn-xs"><i class="fas fa-pencil-alt"></i> </a>
					</li>
				</ul>
			</div>
			<!-- profile details section ends here -->

		</div>
		<!-- main-row ends here -->
	</div>
              
              
                
                
             
             
           

              

          </div>
        </div>
      </div>
    </section>

 
@endsection
