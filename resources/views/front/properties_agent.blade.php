<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">


    <?php
    $PropertySEO = App\Models\Property::where('user_id',$id)->limit(1)->where('active','Approved')->get();
    $description = "Discover exquisite premium properties available for sale and rent in and around Nairobi. Explore luxurious homes, apartments, and estates in prime locations, curated to meet your discerning taste. Your dream property awaits in Nairobi's most sought-after neighborhoods.";
    $User = App\Models\User::find($id);
    ?>
    @foreach($PropertySEO as $prop)
        <title>{{$User->name}} -Marketing Coordinator - Premium Homes Limited</title>
        <meta name="description" content="{{$description}}">
        <meta name="robots" content="index,follow">
        <meta name="googlebot" content="index,follow"><!-- Google Specific -->
        <meta name="subject" content="Premium Plots in Kenya - Premium Homes Limited">
        <meta name="rating" content="General">
        <meta name="referrer" content="no-referrer">
        <meta name="theme-color" content="#EFE165">

        <link rel="canonical" href="https://premiumhomes.casa/properties/land-for-sale"/>
        <meta name="author" content="Designekta Studios">
        <meta property="og:description" content="{{$description}}">
        <meta property="og:image" content="https://premiumhomes.casa/uploads/properties/{{$prop->featured_image}}" />
        <meta property="fb:app_id" content="431980657174772" />
        <meta property="og:title" content="Premium Plots in Kenya - Premium Homes Limited" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://premiumhomes.casa/land-for-sale" />
        <meta property="og:site_name" content="Premium Homes Limited">
        <meta property="og:locale" content="en_US">

        <meta name="twitter:title" content="Premium Plots in Kenya - Premium Homes Limited" />
        <meta name="twitter:site" content="@premiumhomescasa" />
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@premiumhomescasa">
        <meta name="twitter:url" content="https://premiumhomes.casa/land-for-sale">
        <meta name="twitter:description" content="{{$description}}">
        <meta name="twitter:image" content="https://premiumhomes.casa/uploads/properties/{{$prop->featured_image}}">
        <meta name="twitter:creator" content="@premiumhomescasa" />
    @endforeach

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('theme/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/fontawesome-5-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/search.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/aos2.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/video.css')}}">
    {{-- <link rel="stylesheet" id="color" href="{{asset('theme/css/colors/pink.css')}}"> --}}
</head>



<body class="homepage-9 hp-6 hd-whitse hmp7 mh int_dark_bg">
    {{--  --}}

    <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Header -->
            <div id="header" class="int_content_wraapper hd">
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
                        <nav id="navigation" class="style-1 black">
                            <ul id="responsive">
                                <li><a  href="{{route('properties-home',['rent'])}}">For Rent</a> </li>
                                <li><a  href="{{route('properties-home',['sale'])}}">For Sale</a> </li>
                                <li><a onclick="return alert('Work in progress')"  href="#">Plots</a> </li>
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

                    <!-- Right Side Content / End -->
                    @if(Auth::User())
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


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <!-- Right Side Content / End -->
                    @else

                    @endif



                    @if(Auth::User())

                    @else
                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">

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
    {{--  --}}
    <!-- Wrapper -->
    <div class="clearfix"></div>
    <div class="clearfix"></div>
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->

        <div class="clearfix"></div>
        <!-- Header Container / End -->



        {{--  --}}

         <!-- START SECTION PROPERTIES LISTING -->
         <section class="properties-list featured portfolio blog ho-17">
            <div class="container">




                <div class="row portfolio-items">
                    @foreach ($Property as $prop)
                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                        <div class="project-single mb-0" data-aos="fade-up">
                            <a href="{{route('property-single',[$prop->slung])}}" class="recent-16">
                                <div class="recent-img16 img-center" style="background-image: url('{{asset('uploads/properties/')}}/{{$prop->featured_image}}');"></div>
                                <div class="recent-content"></div>
                                <div class="recent-details">
                                    <div class="recent-title">{{$prop->property_name}}</div>
                                <div class="recent-price mb-3">kes {{$prop->price}}</div>
                                <div class="house-details thehp-1">
                                    <i class="fa fa-bed mr-1" aria-hidden="true"></i> {{$prop->bedroom}} Br <span class="mr-1">|</span>
                                    <i class="fa fa-suitcase mr-1" aria-hidden="true"></i> {{$prop->type}}  <span class="mr-1">|</span>
                                    <i class="fa fa-car mr-1" aria-hidden="true"></i> {{$prop->garages}}1 Gr <span class="mr-1">|</span>
                                    <i class="fa fa-object-group mr-1" aria-hidden="true"></i> {{$prop->sqft}}
                                </div>
                                </div>
                                <div class="view-proper">View Details</div>
                            </a>
                        </div>
                    </div>
                    @endforeach


                </div>
                {{-- Pagination --}}
                <?php
                echo $Property;
                ?>
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->
        {{--  --}}

        @include('front.footer')


        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Premium<strong>Homes</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>Login With</p>
                        <a href="{{route('facebook-login')}}" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                        <a href="{{route('google-login')}}" class="twitter-log"><i class="fa fa-google"></i> Log in with Gmail</a>
                        <a href="{{route('linkedin-login')}}" class="linkedin-log"><i class="fa fa-linkedin"></i> Log in with Linked-In</a>
                    </div>
                    <div class="log-separator fl-wrap"><span>Or</span></div>
                    <div id="tabs-container">
                        <center>
                            <a class="button border text-center" href="{{ route('login') }}"><i class="fa fa-lock"></i>  Login</a>
                            <a class="button border text-center" href="{{ route('register') }}"><i class="fa fa-user-plus"></i>  Register</a>
                        </center>
                        {{-- <div class="tab">
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
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
        <script src="{{asset('theme/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('theme/js/rangeSlider.js')}}"></script>
        <script src="{{asset('theme/js/tether.min.js')}}"></script>
        <script src="{{asset('theme/js/popper.min.js')}}"></script>
        <script src="{{asset('theme/js/moment.js')}}"></script>
        <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('theme/js/mmenu.min.js')}}"></script>
        <script src="{{asset('theme/js/mmenu.js')}}"></script>
        <script src="{{asset('theme/js/animate.js')}}"></script>
        <script src="{{asset('theme/js/aos.js')}}"></script>
        <script src="{{asset('theme/js/aos2.js')}}"></script>
        <script src="{{asset('theme/js/slick.min.js')}}"></script>
        <script src="{{asset('theme/js/fitvids.js')}}"></script>
        <script src="{{asset('theme/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('theme/js/typed.min.js')}}"></script>
        <script src="{{asset('theme/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('theme/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('theme/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('theme/js/smooth-scroll.min.js')}}"></script>
        <script src="{{asset('theme/js/lightcase.js')}}"></script>
        <script src="{{asset('theme/js/search.js')}}"></script>
        <script src="{{asset('theme/js/owl.carousel.js')}}"></script>
        <script src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('theme/js/ajaxchimp.min.js')}}"></script>
        <script src="{{asset('theme/js/newsletter.js')}}"></script>
        <script src="{{asset('theme/js/jquery.form.js')}}"></script>
        <script src="{{asset('theme/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('theme/js/searched.js')}}"></script>
        <script src="{{asset('theme/js/forms-2.js')}}"></script>
        <script src="{{asset('theme/js/leaflet.js')}}"></script>
        <script src="{{asset('theme/js/leaflet-gesture-handling.min.js')}}"></script>
        <script src="{{asset('theme/js/leaflet-providers.js')}}"></script>
        <script src="{{asset('theme/js/leaflet.markercluster.js')}}"></script>
        <script src="{{asset('theme/js/map-style2.js')}}"></script>
        <script src="{{asset('theme/js/range.js')}}"></script>
        <script src="{{asset('theme/js/color-switcher.js')}}"></script>

        <!-- Slider Revolution scripts -->
        <script src="{{asset('theme/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('theme/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

        <script>
            var typed = new Typed('.typed', {
                strings: ["Homes ^2000", "Apartment ^2000", "House ^4000", "Villas ^6000"],
                smartBackspace: false,
                loop: true,
                showCursor: true,
                cursorChar: "|",
                typeSpeed: 50,
                backSpeed: 30,
                startDelay: 800
            });

        </script>
        <script>
            $('.slick-lancers2').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });

        </script>
        <script>
            $('.slick-lancers').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });

        </script>

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
