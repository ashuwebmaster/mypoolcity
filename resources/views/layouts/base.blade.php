<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from thewebmax.com/spa/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Aug 2020 11:41:03 GMT -->
<head>
	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    @yield('meta')
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/pool/favi.png') }}" />
    <meta name="msapplication-navbutton-color" content="#32639d"/>
    <meta name="theme-color" content="#32639d"/>
    <meta name="apple-mobile-web-app-capable" content="#32639d"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#32639d"/>
    <title>Pool City</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif] -->

    <!-- BOOTSTRAP STYLE SHEET -->
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- FLATICON STYLE SHEET -->

    <link href="{{ asset('assets/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/libs.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon.min.css') }}">
    <!-- ANIMATE STYLE SHEET --> 
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/loader.min.css') }}">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('assets/css/skin/skin-1.css') }}">
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/switcher.css') }}">    

    
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/css/settings.css') }}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/css/navigation.css') }}">
    
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">
    @livewireStyles
</head>

<body id="bg">
 
	<div class="page-wraper"> 
       	
        <!-- HEADER -->
        <header class="site-header header-style-4">
            <div class="mainTopBar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-md-7">
                            <div class="topbar-one__left">
                                <p>24830 S. Tamiami Trail #2300, Bonita Springs, FL 34134 <span>|</span> Call 239.234.2777 <span>|</span> support@mypoolcity.com</p>
                            </div>
                        </div>
                        <div class="col-sm-5 col-md-5">
                            <div class="topbar-one__right">
                                <div class="topbar-one__social">
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-google-plus-g"></a>
                                    <a href="#" class="fab fa-facebook"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-youtube"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        
            <div class="top-bar bg-secondry">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 col-md-2">
                            <div class="logo-header mostion">
                                <a href=" {{ url('/') }}">
                                    <img src="{{ asset('assets/images/pool/logo.png') }}" width="230" height="67" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-8">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="What Are You Looking For?">
                                    <select class=" basic">
                                        <option>All Categories</option>
                                        <option>Chemicals</option>
                                        <option>Equipment</option>
                                        <option>Pools</option>
                                        <option>Maintenance</option>
                                        <option>Lifestyle</option>
                                        <option>Covers</option>
                                        <option>Pool Closing</option>
                                        <option>Parts</option>
                                        <option>Spas</option>
                                    </select>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-2 col-md-2">
                            <div class="cartItem">
                                <a href="#"><i class="fa fa-heart"></i> <b>2</b></a>
                                <a href="cart.html"><i class="fa fa-shopping-cart"></i> <b>2</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar">
                    <div class="container">

                        <div class="responsiveLogo">
                            <a href="index.html">
                                <img src="{{ asset('assets/images/pool/logo.png') }}" width="171" height="49" alt="" />
                            </a>
                        </div>
                            <!-- NAV Toggle Button -->
                            <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                            <!-- MAIN Vav -->
                            <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li class="active">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="" data-placement="bottom" data-toggle="tooltip" title="" data-original-title="Coming Soon">
                                    <a href="shop.html" class="btn-disabled">Products</a>
                                    {{-- <div class="megaMenu">
                                        <div class="megaMenuInner">
                                            <div class="menuBottom">
                                                <ul>
                                                    <li><h3>Category One</h3></li>
                                                    <li><a href="shop.html">Product One</a></li>
                                                    <li><a href="shop.html">Product Two</a></li>
                                                    <li><a href="shop.html">Product Three</a></li>
                                                    <li><a href="shop.html">Product Four</a></li>
                                                </ul>
                                                <ul>
                                                    <li><h3>Category Two</h3></li>
                                                    <li><a href="shop.html">Product One</a></li>
                                                    <li><a href="shop.html">Product Two</a></li>
                                                    <li><a href="shop.html">Product Three</a></li>
                                                    <li><a href="shop.html">Product Four</a></li>
                                                </ul>
                                                <ul>
                                                    <li><h3>Category Three</h3></li>
                                                    <li><a href="shop.html">Product One</a></li>
                                                    <li><a href="shop.html">Product Two</a></li>
                                                    <li><a href="shop.html">Product Three</a></li>
                                                    <li><a href="shop.html">Product Four</a></li>
                                                </ul>
                                                <ul>
                                                    <li><h3>Category Four</h3></li>
                                                    <li><a href="shop.html">Product One</a></li>
                                                    <li><a href="shop.html">Product Two</a></li>
                                                    <li><a href="shop.html">Product Three</a></li>
                                                    <li><a href="shop.html">Product Four</a></li>
                                                </ul>

                                                <div class="buttonBanner">
                                                    <div class="hlp">
                                                        <h3>Need Help</h3>
                                                        <p><i class="fa fa-phone"></i> <span> (123) 456-7890</span></p>
                                                        <strong>OR</strong>
                                                        <p><i class="fa fa-envelope"></i> <span>Email Us</span></p>
                                                    </div>
                                                    <div class="calss">
                                                        <h4>Store & Services</h4>
                                                        <p>With over 900 Stores, find a location near you</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </li>
                                <li class="" data-placement="bottom" data-toggle="tooltip" title="" data-original-title="Coming Soon">
                                    <a href="" class="btn-disabled">Services</a>
                                </li>
                                <li><a href="{{ Route('service.weekly') }}">Weekly Maintenance</a></li>
                                <li data-placement="bottom" data-toggle="tooltip" title="" data-original-title="Coming Soon">
                                    <a href="" class="btn-disabled">Design Your Pool</a>
                                </li>
                                <li data-placement="bottom" data-toggle="tooltip" title="Coming Soon"><a href="" onclick="return false;" class="appiontment btn-disabled">Schedule a Service</a></li>                           
                                <li class="has-child">
                                    @if(session()->has('authenticated') &&  session()->get('authenticated') == true)
                                        @if($auth_user)
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                Hi!  {{ $auth_user['info']['firstName'] }} <span class="caret"></span>
                                            </a><div class=" glyphicon glyphicon-plus submenu-toogle"></div>
                                            <ul class="sub-menu">
                                                <li class=""><a href="#"><i class="mi fa fa-user"></i> Account</a></li>
                                                <li class="">
                                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                                        <i class="mi fa fa-sign-out"></i> Logout
                                                    </a>    
                                                  <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                      {{ csrf_field() }}
                                                  </form>
                                                </li>    
                                            </ul>                                            
                                        @endif
                                    @else
                                        <a href="{{ route('login') }}">Login</a>
                                    @endif
                                </li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
            
        </header>
        <!-- HEADER END -->

        {{$slot}}
        
        <footer class="footer_wrap widget_area scheme_dark">
            <div class="footer_wrap_inner widget_area_inner">
                <div class="container content_wrap">
                    <div class="row columns_wrap">
                        <aside id="text-2" class="col-sm-4 widget_number_1 column-1_3 widget widget_text">
                            <h5 class="widget_title">Address</h5>            
                            <div class="textwidget">
                                <p>24830 S. Tamiami Trail #2300, Bonita Springs, FL 34134</p>
                            </div>
                        </aside>
                        <aside id="text-3" class="col-sm-4 widget_number_2 column-1_3 widget widget_text">
                            <h5 class="widget_title">Follow Us</h5>            
                            <div class="textwidget">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_small" style=" margin-top: 0.7em;">
                                                    <div class="sc_socials_item">
                                                        <a href="https://twitter.com/ancora_themes" target="_blank" class="social_icons social_twitter" rel="noopener noreferrer">
                                                            <span class="fab fa-twitter"></span></a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="https://www.facebook.com/AncoraThemes/" target="_blank" class="social_icons social_facebook" rel="noopener noreferrer">
                                                            <span class="fab fa-facebook-f"></span></a>
                                                    </div>
                                                    <div class="sc_socials_item">
                                                        <a href="https://www.instagram.com/ancora_themes/" target="_blank" class="social_icons social_instagramm" rel="noopener noreferrer">
                                                            <span class="fab fa-instagram"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside id="text-4" class="col-sm-4 widget_number_3 column-1_3 widget widget_text">
                            <h5 class="widget_title">Phone &amp; Email</h5>            
                            <div class="textwidget">
                                <p>Call <a href="tel:239.234.2777">239.234.2777</a><br>
                                    <a href="mailto:support@mypoolcity.com">support@mypoolcity.com</a>
                                </p>
                            </div>
                        </aside>
                    </div>  
                </div> 
            </div>  
            <div class="footerBottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <p>© {{ now()->year }} Pool City. All rights reserved.</p>
                        </div>
                        <div class="col-sm-6 col-md-6">
                         
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <div class="loading">Loading&#8230;</div>

<!-- LOADING AREA  END ====== -->
<!-- JAVASCRIPT  FILES ========================================= --> 
<script   src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script   src="{{ asset('assets/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->

<script   src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script   src="{{ asset('assets/js/jquery.bootstrap-touchspin.min.js') }}"></script><!-- FORM JS -->

<script   src="{{ asset('assets/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->

<script   src="{{ asset('assets/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script   src="{{ asset('assets/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script   src="{{ asset('assets/js/waypoints-sticky.min.js') }}"></script><!-- COUNTERUP JS -->

<script  src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->

<script   src="{{ asset('assets/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->

<script   src="{{ asset('assets/js/stellar.min.js') }}"></script><!-- PARALLAX BG IMAGE   --> 
<script   src="{{ asset('assets/js/scrolla.min.js') }}"></script><!-- ON SCROLL CONTENT ANIMTE   -->

<script   src="{{ asset('assets/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script   src="{{ asset('assets/js/shortcode.js') }}"></script><!-- SHORTCODE FUCTIONS  -->
<script   src="{{ asset('assets/js/switcher.js') }}"></script><!-- SWITCHER FUCTIONS  -->


<!-- REVOLUTION JS FILES -->
<script  src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script  src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script  src="{{ asset('assets/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

<!-- REVOLUTION SLIDER FUNCTION  ===== -->
<script src="{{ asset('assets/js/rev-script-1.js') }}"></script>
<script type="text/javascript" src="https://malsup.github.io/jquery.cycle.all.js"></script>
<script>
$('.sliderInner').cycle({
    prev:'.prev',
    next:'.next'
});
</script>
<script src="{{ asset('assets/js/aos.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script>
AOS.init();

$(document).ready(function() {
    $('.basic').select2();
});
</script>

<script type="text/javascript">
    $(".leftSide li").hover(function(){
    $('.leftSide li.actives').children('ul').css('display','none');
    $(this).children('ul').css('display','block');
    }, function(){
    $(this).children('ul').css('display','none');
    $('.leftSide li.actives').children('ul').css('display','block');
});

</script>

@yield('scripts')

</body>
@livewireScripts
@stack('scripts')
<!-- Mirrored from thewebmax.com/spa/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Aug 2020 11:44:44 GMT -->
</html>
