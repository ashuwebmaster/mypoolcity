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
    <link rel="icon" href="{{ asset('assets/images/home/favi2.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/pool/favi.png') }}" />

    <title>Register</title>
  
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/images/favicon-16x16.png') }}">
     
    <!-- Main structure css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
      <!-- Preloader End -->
      
      <div class="container-fluid rtegisters">
        <div class="row">
          <div class="col-xs-12 col-sm-7 col-md-5 col-lg-4 authfy-panel-left">
            <!-- brand-logo start -->
            <div class="brand-logo text-center">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/pool/logo.png') }}" width="150" alt="brand-logo" style="width: 47px;">
                </a>
            </div><!-- ./brand-logo -->
            <!-- authfy-login start -->
            <div class="authfy-login">
              <!-- panel-login start -->
              <div class="authfy-panel panel-login text-center active">
                <div class="authfy-heading">
                  <h3 class="auth-title">Register for create account</h3>
                  <p>Have an account? <a class="lnk-toggler" href="{{ route('login') }}">Login!</a></p>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    @if(session()->has('error'))
                       <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif   
                    @if(session()->has('success'))
                       <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif                                           
                    <form name="loginForm" class="loginForm" action="{{ Route('register') }}" method="POST">
                      @csrf
                      <div class="form-group wrap-input">
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" name="first_name" placeholder="First Name">
                        <span class="focus-input"></span>
                        @error('first_name')
                        <div class="text-left alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror          
                      </div>

                      <div class="form-group wrap-input">
                        <input type="text" class="form-control  @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" name="last_name" placeholder="Last Name">
                        <span class="focus-input"></span>
                        @error('last_name')
                        <div class="text-left alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror                          
                      </div>
  
                      <div class="form-group wrap-input">
                        <input type="email" class="form-control email" name="email" placeholder="Email address">
                        <span class="focus-input"></span>
                        @error('email')
                        <div class="text-left alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror                         
                      </div>

                      <div class="form-group wrap-input">
                        <div class="pwdMask">
                        <input type="password" class="form-control password" name="password" placeholder="Password">
                        <span class="focus-input"></span>
                        <span class="fa fa-eye-slash pwd-toggle"></span>
                        @error('password')
                        <div class="text-left alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror                         
                        </div>
                      </div>  

                      <div class="form-group wrap-input">
                        <input type="text" class="form-control email" name="phone" placeholder="Phone">
                        <span class="focus-input"></span>
                        @error('phone')
                        <div class="text-left alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror                           
                      </div>
                      
                      <div class="row remember-row">
                        <div class="col-xs-12 col-sm-12">
                          <label class="checkbox text-left">
                            <input type="checkbox" value="remember-me"><span class="label-text">I Agree With Terms & Conditions</span>
                          </label>
                        </div>
                      </div> <!-- ./remember-row -->
                      <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
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