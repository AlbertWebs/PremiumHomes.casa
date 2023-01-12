<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Premium Homes - High End Homes in Kenya</title>
    <meta name="description" content="Apartments, Houses, Homes, Condos, Studios, High Rise, High End Living in Africa">
    <link rel="canonical" href="https://premiumhomes.casa/"/>
    <meta name="author" content="Designekta Studios">
    <meta property="og:description" content="Apartments, Houses, Homes, Condos, Studios, High Rise, High End Living in Africa">
    <meta property="og:image" content="https://premiumhomes.casa/theme/images/preloader.png" />
    <meta property="fb:app_id" content="431980657174772" />
    <meta property="og:title" content="Premium Homes - High End Homes in Kenya - Premium Business Den - " />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://premiumhomes.casa/" />

    <meta name="twitter:title" content="Premium Homes - High End Homes in Kenya - Premium Business Den" />
    <meta name="twitter:site" content="@premiumhomescasa" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="@premiumhomescasa" />
     <!-- FAVICON -->
     <link rel="shortcut icon" type="image/x-icon" href="{{asset('theme/images/preloader.png')}}">
     <link rel="stylesheet" href="{{asset('theme/css/jquery-ui.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('theme/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/fontawesome-5-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/search.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{asset('theme/css/default.css')}}">
</head>

<body class="inner-pages listing homepage-4 agents hd-white int_dark_bg">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Header -->
            <div id="header">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="{{url('/')}}"><img src="{{asset('theme/images/preloader.png')}}" data-sticky-logo="{{asset('theme/images/preloader.png')}}" alt="Premium Homes"></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li><a onclick="" href="{{route('properties-home')}}">For Rent</a> </li>
                                <li><a onclick="alert('work in progress')" href="#">For Sale</a> </li>
                                <li><a onclick="alert('work in progress')" href="#">Property Advice</a> </li>
                                {{-- <li><a href="{{route('search-home')}}"><i class="fa fa-search"></i> Search</a> </li> --}}

                                <li><a onclick="alert('work in progress')" href="#">Locations</a> </li>

                                <li class="d-none d-xl-none d-block d-lg-block"><a href="login#">Login</a></li>
                                <li class="d-none d-xl-none d-block d-lg-block"><a href="register#">Register</a></li>
                                <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0">
                                    <a href="{{url('/')}}/login" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                        <!-- Right Side Content / End -->
                        <div class="right-side d-none d-none d-lg-none d-xl-flex">
                            <!-- Header Widget -->
                            <div class="header-widget">
                                <a href="{{url('/')}}/login" class="button border">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
                            </div>
                            <!-- Header Widget / End -->
                        </div>
                        <!-- Right Side Content / End -->

                        @if(Auth::User())
                        <!-- Right Side Content / End -->
                        <div class="header-user-menu user-menu add">
                            <div class="header-user-name">
                                <span>
                                    <img src="{{asset('theme/images/testimonials/199259143_4389625377747506_3043984032264076715_n.jpg')}}" alt="">
                                </span>
                                Hi, {{Auth::User()->name}}
                            </div>
                            <ul>
                                <li><a href="user-profile#"> Edit profile</a></li>
                                <li><a href="add-property#"> Add Property</a></li>
                                <li><a href="payment-method#">  Payments</a></li>
                                <li><a href="change-password#"> Change Password</a></li>
                                <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}">{{ __('Logout') }}</a></li>
                            </ul>
                        </div>
                        <!-- Right Side Content / End -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @else

                        @endif

                        @if(Auth::User())

                        @else
                        <div class="right-side d-none d-lg-none d-xl-flex sign ml-0">

                            <div class="header-widget sign-in">
                                <div class="show-reg-form modal-open"><a class="button border" href="#"><i class="fa fa-user-plus"></i> Sign In </a></div>
                            </div>

                        </div>
                        <!-- Right Side Content / End -->
                        @endif


                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        <!-- END SECTION HEADINGS -->

        @yield('content')

        <!-- START FOOTER -->
        <footer class="first-footer">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="netabout">
                                <a href="{{url('/')}}" class="logo">
                                    <img src="{{asset('theme/images/logo-kubwa.png')}}" alt="Premium Homes">
                                </a>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto soluta laboriosam, perspiciatis, aspernatur officiis esse.</p> --}}
                            </div>
                            <div class="contactus">
                                <ul>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="in-p">95 South Park Avenue, Westands</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="in-p">+254 723 014 032</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="in-p ti">support@premiumhomes.casa</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="navigation">
                                <h3>Navigation</h3>
                                <div class="nav-footer">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Sale Property</a></li>
                                        <li><a href="#">Buy Property</a></li>
                                        <li><a href="#">Property Details</a></li>
                                    </ul>
                                    <ul class="nav-right">
                                        <li><a target="new" href="https://tawk.to/chat/634ebf66daff0e1306d2a62a/1gflpnajd">Chat Online</a></li>
                                        <li><a href="#">Copyrights</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Sitemaps</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h3>Twitter Feeds</h3>
                                <div class="twitter-widget contuct">
                                    <div class="twitter-area">
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@premiumhomes</a> high-end homes in Loresho are here, this is just sample content</h5>
                                                <h4>about 2 days ago</h4>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@premiumhomes</a> some other tweet goes here, not so long but enough</h5>
                                                <h4>about 6 days ago</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="newsletters">
                                <h3>Newsletters</h3>
                                <p>Sign Up for Our Newsletter to get Latest Updates and Offers.  Subscribe to receive news in your inbox.</p>
                            </div>
                            <form class="bloq-email mailchimp form-inline" method="post">
                                <label for="subscribeEmail" class="error"></label>
                                <div class="email">
                                    <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                                    <input type="submit" value="Subscribe">
                                    <p class="subscription-success"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer">
                <div class="container">
                    <p>Copyright © {{date('Y')}} <a style="color:#EFE165" href="https://www.premiumhomes.casa">Premium Homes Limited</a> - All Rights Reserved.</p>
                    <ul class="netsocials">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                    </div>
                    <div class="log-separator fl-wrap"><span>Or</span></div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                            <label>First Name * </label>
                                            <input name="name" type="text" onClick="this.select()" value="">
                                            <label>Second Name *</label>
                                            <input name="name2" type="text" onClick="this.select()" value="">
                                            <label>Email Address *</label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password *</label>
                                            <input name="password" type="password" onClick="this.select()" value="">
                                            <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->

        <!-- ARCHIVES JS -->
        <script src="{{asset('theme/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('theme/js/rangeSlider.js')}}"></script>
        <script src="{{asset('theme/js/tether.min.js')}}"></script>
        <script src="{{asset('theme/js/popper.min.js')}}"></script>
        <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('theme/js/mmenu.min.js')}}"></script>
        <script src="{{asset('theme/js/mmenu.js')}}"></script>
        <script src="{{asset('theme/js/aos.js')}}"></script>
        <script src="{{asset('theme/js/aos2.js')}}"></script>
        <script src="{{asset('theme/js/smooth-scroll.min.js')}}"></script>
        <script src="{{asset('theme/js/lightcase.js')}}"></script>
        <script src="{{asset('theme/js/search.js')}}"></script>
        <script src="{{asset('theme/js/light.js')}}"></script>
        <script src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('theme/js/popup.js')}}"></script>
        <script src="{{asset('theme/js/searched.js')}}"></script>
        <script src="{{asset('theme/js/ajaxchimp.min.js')}}"></script>
        <script src="{{asset('theme/js/newsletter.js')}}"></script>
        <script src="{{asset('theme/js/inner.js')}}"></script>
        <script src="{{asset('theme/js/color-switcher.js')}}"></script>

        <script>
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });

        </script>
        <!-- MAIN JS -->
        <script src="{{asset('theme/js/script.js')}}"></script>

    </div>
    <!-- Wrapper / End -->
</body>


</html>
