<html lang="zxx" class="js-focus-visible" data-js-focus-visible=""><head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- For Search Engine Meta Data  -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="yoursite.com">
 
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/pool/favi.png') }}" />

    <title>Login</title>

    <!-- Main structure css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
      <!-- Preloader End -->
      
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-7 col-md-5 col-lg-4 authfy-panel-left">
            <!-- brand-logo start -->
            <div class="brand-logo text-center">
                <a class="lnk-toggler" href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/pool/logo.png') }}" width="150" alt="brand-logo" style="width: 67px;">
                </a>
            </div><!-- ./brand-logo -->
            <!-- authfy-login start -->
            <div class="authfy-login">
              <!-- panel-login start -->
              <div class="authfy-panel panel-login text-center active">
                <div class="authfy-heading">
                  <h3 class="auth-title">Login to your account</h3>
                  <p>Don’t have an account? <a class="lnk-toggler" href="{{ route('register') }}">Sign Up Free!</a></p>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    @if(session()->has('error'))
                       <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif                    
                    <form name="loginForm" class="loginForm" method="POST" action="{{ route('login') }}">
                      @csrf
                      <div class="form-group wrap-input">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email address" autocomplete="email" autofocus>
                        <span class="focus-input"></span>
                      </div>
                      @error('email')
                        <div class="invalid-feedback alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                       @enderror                     
                      <div class="form-group wrap-input">
                        <div class="pwdMask">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" autocomplete="current-password">
                        <span class="focus-input"></span>
                        <span class="fa fa-eye-slash pwd-toggle"></span>                      
                        </div>
                        @error('password')
                        <div class="invalid-feedback alert alert-danger" role="alert">
                              <strong>{{ $message }}</strong>
                        </div>
                        @enderror 
                      </div>
                      <div class="row remember-row">
                        <div class="col-xs-6 col-sm-6">
                          <label class="checkbox text-left">
                            <input type="checkbox" name="rememberMe" value="1"><span class="label-text">Remember me</span>
                          </label>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                          <p class="forgotPwd">
                            <a class="lnk-toggler" data-panel=".panel-forgot" href="#">Forgot password?</a>
                          </p>
                        </div>
                      </div> <!-- ./remember-row -->
                      <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
  
            </div> <!-- ./authfy-login -->
          </div> <!-- ./authfy-panel-left -->
          <div class="col-md-7 col-lg-8 authfy-panel-right hidden-xs hidden-sm">
            <div class="hero-heading">
              <div class="headline">
                <h3>Welcome to Pool City Account</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            
          </div>
        </div> <!-- ./row -->
      </div> <!-- ./container -->
      
      <!-- Javascript Files -->
  
      <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script><!-- JQUERY.MIN JS -->
      <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->

  </body>
  </html>