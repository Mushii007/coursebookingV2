@extends('adminlayouts.adminapp-login')

@section('content')
<div class="container login-box">
  
      
            <div class="login-logo">
                <div class="text-center"><a href="{{ url('/') }}"><img src="{{ asset('public/img/logo.png') }}" alt="Login"></a></div>
                </div>
                <div class="login-box-body">

                  <p class="login-box-msg">Login to your account</p>

                   <form class="" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
<!--                             <label>E-Mail Address</label>
 -->
                            
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                       



                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                            

                            
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label class>
              <input type="checkbox" name="remember"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>


                        <!-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-0">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                    <a class="btn btn-link col-md-2 pull-right" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                </div>
                            </div>
                        </div> -->

                       <!--  <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                 <a class="btn btn-link col-md-2 pull-r" href="{{ url('/password/reset') }}">Forgot Your Password?</a> 
                            </div>
                        </div> -->
                    </form>
                    <div class="social-auth-links text-center">
                      <p>- OR -</p>
                      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                        Facebook</a>
                      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                        Google+</a>
                    </div>

                      <!-- /.social-auth-links -->

                      <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
                      <a href="{{ url('/register') }}" class="text-center">Register a new membership</a>


                </div>
    
  
</div>
@endsection
