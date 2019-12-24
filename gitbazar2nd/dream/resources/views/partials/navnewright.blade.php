<aside class="control-sidebar card elevation-4">
               <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link btn btn-info active" data-toggle="tab" href="#login">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-info" data-toggle="tab" href="#register">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-info" data-toggle="tab" href="#offers">Offers</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="login" class="container tab-pane active"><br>
      <div class="d-block">
        <div class="d-flex justify-content-start ">
              <h3>Login</h3>
              <h4 class="ml-2">with</h4>
              <h3 class="mx-2"><i class="fa fa-facebook"></i></h3>
              <h3 class="mr-2"><i class="fa fa-google"></i></h3>
          </div>
      </div>
         
      
      <!-- form start -->
              <form  method="POST" action="{{ route('login') }}">
                @csrf

                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">{{ __('E-Mail Address') }}</label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter email">
                          @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">{{ __('Password') }}</label>
                     <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  </div>
                  
                  <div class="form-group ">
                      <div class="">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Login') }}
                          </button>

                          @if (Route::has('password.request'))
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                  {{ __('Forgot Your Password?') }}
                              </a>
                          @endif
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>

              <div class="form-group">
              </div>
              <div class="content">
              <div class="container-fluid">
            
                 <div class=" card card-info">
                  <div class="card-body">
                    <h>This is a new add .</h>
                    <img src="img/logo.png" width="140" height="140">
                  </div>
                 
              
                </div>
              </div>
          </div>
              
    </div>
    <div id="register" class="container tab-pane fade"><br>
      <h3>Register</h3>
       <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="fast name">Fast Name</label>
                    <input type="name" class="form-control" id="fast_name" placeholder="Enter Fast name">
                  </div>
                  <div class="form-group">
                    <label for="last name">Email address</label>
                    <input type="email" class="form-control" id="last_name" placeholder="Enter last name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remamber me</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-info ">Submit</button>
                </div>
              </form>
    </div>
    <div id="offers" class="container tab-pane fade"><br>
      <h3>Offers</h3>
      <p>New client offer.</p>

      <div class="form-group">
              </div>
              <div class="content">
              <div class="container-fluid">
            
                 <div class=" card card-info">
                  <div class="card-body">
                    <h>This is a new add .</h>
                    <img src="img/logo.png" width="140" height="140">
                  </div>
                </div>
              </div>
          </div>
    </div>
        



  </div>
      </aside>