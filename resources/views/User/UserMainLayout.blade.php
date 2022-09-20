

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SFO BLACK RIDE</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('user-asset/images/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('user-asset/images/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('user-asset/images/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('user-asset/images/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('user-asset/images/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('user-asset/images/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('user-asset/images/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('user-asset/images/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('user-asset/images/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('user-asset/images/resources/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('user-asset/images/resources/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('user-asset/images/resources/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('user-asset/images/resources/favicon.png')}}">
    <link rel="manifest" href="{{asset('user-asset/images/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../ms-icon-144x144.html">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{asset('user-asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('user-asset/css/responsive.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="preloader"></div><!-- /.preloader -->
    <div class="page-wrapper">
        <header class="site-header header-two">
            <div class="top-bar">
                <div class="container">
                    <div class="">
                        <div class="row">
                            <div class="col-md-12">
                                 <div class="logo-block d-lg-none">
                            <a href="index.html"><img src="{{asset('user-asset/images/resources/logo.png')}}" alt="Awesome Image" /></a>
                        </div>
                            </div>
                            <div class="col-md-6">
                            <div class="right-block">
                            <ul class="contact-infos">

                                @if (Route::has('login'))
                                <div>
                                    @auth
                                        {{-- <a href="{{ url('/index') }}" >Home</a> --}}
                                        <li><a href="{{ route('userUashboard') }}"><i class="fa fa-home"></i>Dashboard</a>
                                        
                                            <i class="fa fa-lock ml-3" aria-hidden="true"></i><a class="ml-1" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                              Log Out
                                             </a>
        
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                             @csrf
                                         </form>
                                        </li>
                                        
                                    @else
                                        {{-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> --}}
                                    <li class="mr-3"><a href="{{ route('login') }}"><i class="fa fa-user-circle"></i> Customer Sign In</a></li>

                
                                        {{-- @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif --}}
                                    @endauth
                                </div>
                            @endif

                             
                            </ul><!-- /.contact-infos -->
                        </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="contact-infos float-right">
                                    <li class="social-block">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                </ul>
                            </div>
                        </div>
                       <!-- /.logo-block -->
                    <!-- /.right-block -->
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.top-bar -->
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <button class="menu-toggler" data-target="#main-nav-bar">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation" id="main-nav-bar">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                 <div class="logo-block">
                            <a href="index.html"><img src="{{asset('user-asset/images/resources/logo.png')}}" alt="Awesome Image" /></a>
                        </div>
                            </div>
                            <div class="col-lg-7">
                                   <ul class="navigation-box">
                             <li class= "{{Request::is('/') ? 'current':''}}">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            
                            <li class= "{{Request::is('about-us') ? 'current':''}}"><a href="{{url('about-us')}}">About Us</a></li>
                            <li class= "{{Request::is('our-service') ? 'current':''}}"><a href="{{url('our-service')}}">Our Services</a></li>
                            <li class= "{{Request::is('faq') ? 'current':''}}"><a href="{{url('faq')}}">FAQ</a></li>
                            <li class= "{{Request::is('review') ? 'current':''}}"><a href="{{url('review')}}">Reviews</a></li>
                            <li class= "{{Request::is('contact-us') ? 'current':''}}"><a href="{{url('contact-us')}}">Contact Us</a></li>
                        </ul>
                            </div>
                            <div class="col-md-2">
                                <div class="Book_now">
                                    <a href="{{url('book-now')}}">Book Now</a>
                                </div>
                            </div>
                        </div>
                       
                     
                    </div>
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.site-header header-one -->

        @yield('content')
        <section class="cta-style-one text-center ">
            <div class="container">
                <p>Call 24 hour service available</p>
                <h3>Call now and book <br> our taxi for your next ride</h3>
                <a href="#" class="cta-btn">Choose Your Taxi</a>
            </div><!-- /.container -->
        </section><!-- /.cta-style-one -->
        <footer class="site-footer">
            <img src="{{asset('user-asset/images/background/footer-bg-1-1.png')}}" class="footer-bg" alt="Awesome Image" />
            <div class="upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="footer-widget about-widget">
                              <!--   <div class="widget-title">
                                    <h3>About</h3>
                                </div> -->
                                <div class="dark-logo1">
                                    <a href="index.html" class="footer-logo"><img src="{{asset('user-asset/images/resources/logo.png')}}" alt="Awesome Image" /></a>
                                </div>
                                <p>There are many vari of pass of lorem ipsum availab but the majority have suffered in some form by injected humour or words</p>
                                <div class="social-block">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div><!-- /.social-block -->
                            </div><!-- /.footer-widget about-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-2">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h3>Links</h3>
                                </div><!-- /.widget-title -->
                                <ul class="link-lists">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('about-us')}}">About Us</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="{{url('book-now')}}">Book a Ride</a></li>
                                    <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                                </ul>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-lg-3">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h3>Contact</h3>
                                </div><!-- /.widget-title -->
                                <p>40530 Chapel Way #1,Fremont, CA 94538</p>
                                <ul class="contact-infos">
                                    <li><i class="fa fa-envelope"></i>sfoblackride@gmail.com </li>
                                    <li><i class="fa fa-phone-square"></i> +15109460001</li>
                                </ul><!-- /.contact-infos -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-4">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h3>Newsletter</h3>
                                </div><!-- /.widget-title -->
                                <p>Sign up now for our mailing list to get all latest news <br> and updates from Sfo Black Ride.</p>
                                <form action="#" class="subscribe-form">
                                    <input type="text" name="email" placeholder="Enter your email">
                                    <button type="submit">Go</button>
                                </form>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.upper-footer -->
            <div class="bottom-footer">
                <div class="container">
                    <div class="inner-container">
                        <div class="left-block">
                            <span>&copy; 2022 <a href="#">sfoblackride.com </a></span>
                        </div><!-- /.left-block -->
                        <div class="right-block">
                            <ul class="link-lists">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div><!-- /.right-block -->
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.bottom-footer -->
        </footer><!-- /.site-footer -->
    </div><!-- /.page-wrapper -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- /.scroll-to-top -->
    <script src="{{asset('user-asset/js/jquery.js')}}"></script>
    <script src="{{asset('user-asset/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('user-asset/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user-asset/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('user-asset/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('user-asset/js/waypoints.min.js')}}"></script>
    <script src="{{asset('user-asset/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('user-asset/js/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('user-asset/js/theme.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
</body>
</html>