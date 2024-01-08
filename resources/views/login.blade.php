<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login/Signup</title>
    <link rel="stylesheet" href="{{asset('admin-template/css/login.css')}}">
</head>
<body>
    
    @if(session()->has('RegSuccess') || session()->has('RegError'))
        <div class="alert {{ session()->has('RegSuccess') ? 'alert-success' : 'alert-danger' }}">
            @if(session()->has('RegSuccess'))
                {{ session()->get('RegSuccess') }}
            @else
                {{ session()->get('RegError') }}
            @endif
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        </div>
    @endif

<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <h4 class="options"><span class="login">Log In </span><span>Sign Up</span></h4>
                      <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                      <label for="reg-log"></label>
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <form action="{{url('login')}}" method="post">
                                            @csrf
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>	
                                            <div class="form-group mt-2" id="pass">
                                                <input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <input type="submit" class="btn mt-4">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-back">
                                            
                                   <div class="center-wrap">
                                        <div class="section text-center">
                                            <form action="{{url('/signup')}}" method="post">
                                                @csrf
                                                    <h4 class="mb-4 pb-3">Sign Up</h4>
                                                    <div class="form-group">
                                                        <input type="text" name="username" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off">
                                                        <i class="input-icon uil uil-user"></i>
                                                    </div>	
                                                    <div class="form-group mt-2">
                                                        <input type="email" name="email" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                                        <i class="input-icon uil uil-at"></i>
                                                    </div>	
                                                    <div class="form-group mt-2" id="pass">
                                                        <input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                                        <i class="input-icon uil uil-lock-alt"></i>
                                                    </div>
                                                    <input type="submit" value="submit" class="btn mt-4">
                                            </form>
                                        </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
    </div>
</div>
<script src="admin-template/vendor/jquery/jquery.min.js"></script>
<script src="admin-template/vendor/popper.js/umd/popper.min.js"> </script>
<script src="admin-template/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="admin-template/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="admin-template/vendor/chart.js/Chart.min.js"></script>
<script src="admin-template/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="admin-template/js/charts-home.js"></script>
<script src="admin-template/js/front.js"></script>
</body>
</html>