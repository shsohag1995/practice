<?php 
include("includes/headers/user_header.php");
?>
  <!MAIN BODY FORTHIS PAGE>
  <section style="background-color: #eeeeee;">
  	
<div class="container-fluid text-center">    
  <div class="row ">
    <div class="col-sm-3 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
    <! SIGN UP FORM>
    <div class="col-sm-7 text-left"> 
    	<h1>Create a new account</h1>
      <div class="container-fluid">
      		​<form class="form-horizontal" action="includes/signup_inc.php" method="POST">
      			<div class="form-group">
			      <label class="control-label col-sm-2">FirstName:</label>
			      <div class="col-sm-10">          
			        <input type="text" class="form-control" name="user_first_name"  placeholder="Enter FirstName">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" >LastName</label>
			      <div class="col-sm-10">          
			        <input type="text" class="form-control" name="user_last_name" placeholder="Enter LastName" >
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2">UserName:</label>
			      <div class="col-sm-10">          
			        <input type="text" class="form-control" name="user_uid" placeholder="Enter UserName" >
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" >Email:</label>
			      <div class="col-sm-10">
			        <input type="email" class="form-control" name="email" placeholder="Enter email or phone" >
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2">Password:</label>
			      <div class="col-sm-10">          
			        <input type="password" class="form-control" name="password" placeholder="Enter password">
			      </div>
			    </div>
			    
			    <div class="form-group">
			      <label class="control-label col-sm-2" >BirthDay:</label>
			      <div class="col-sm-10">          
			        <input type="date" class="form-control" name="birthday" placeholder="Date of Birth">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" >Country</label>
			      <div class="col-sm-10"> 
			      <select class="control-label col-sm-6"  name="country">
 			      	<option>Select Country</option>
			      	<option>Bangladesh</option>
			      	<option>India</option>
			      </select>         
			      </div>
			    </div>
			     
			    <div class="form-group">
			    	<label class="control-label col-sm-2 ">Gender:</label>
			    	<div class="col-sm-10">
			    		<label class="radio-inline navbar-brand">
					      <input type="radio" name="gender" value="male"  checked>Male
					    </label>
					    <label class="radio-inline navbar-brand" >
					      <input type="radio" name="gender" value="female">Female
					    </label>
					    <label class="radio-inline navbar-brand">
					      <input type="radio" name="gender" value="other">Other
					    </label>
			       </div>
			    	</div>  
			      <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button type="submit" class="btn btn-default" name="submit">Submit</button>
			      </div>
			    </div>
      		
      	</form>
      	<!ADVERTISE MENT SECTION>
      </div>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<?php 
include("includes/headers/user_footer.php");
?>