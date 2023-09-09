<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php
    $PropertySEO = App\Models\Property::where('Status',$id)->limit(1)->where('active','Approved')->get();
    $description = "Discover exquisite premium properties available for sale and rent in and around Nairobi. Explore luxurious homes, apartments, and estates in prime locations, curated to meet your discerning taste. Your dream property awaits in Nairobi's most sought-after neighborhoods.";
    ?>
    @foreach($PropertySEO as $prop)
        <title>Premium Properties for {{$id}} in Kenya - Premium Homes Limited</title>
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
 <!-- FAVICON -->
 <link rel="shortcut icon" type="image/x-icon" href="{{asset('theme/images/preloader.png')}}">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">



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
    @include('tawkto')
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
                        @include('front.menu')
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


         <!-- STAR HEADER SEARCH -->
         <div id="map-container" class="fullwidth-home-map dark-overlay hero-video">
            <!-- Video -->
            <div class="video-container hero-video">
                <video poster="{{asset('uploads/properties/1670936451.jpg')}}" loop autoplay muted>
                    {{-- <source src="{{asset('theme/video/videoplayback.webm')}}" type="video/mp4"> --}}
                </video>
            </div>
            <div id="hero-area" class="main-search-inner search-2 vid hero-video">
                <div class="container vid hero-video" data-aos="zoom-in">
                    <div class="row hero-video" >
                        <div class="col-md-12 hero-video">
                            <div class="hero-inner2 hero-video">
                                @if($id == "sale")
                                    <div class="welcome-text hero-video">
                                        <h1 class="h1">Find
                                        <br class="d-md-none">
                                        <span class="typed border-bottom"></span>
                                        For Sale
                                    </h1>
                                        <p class="mt-4">
                                            At Premium Homes, we redefine luxury living by curating a portfolio of high-end properties that reflect the epitome of elegance, opulence, and sophistication. With a commitment to excellence, we bring you a world of extraordinary real estate opportunities.

                                            Our passion lies in connecting discerning buyers with the most exquisite homes and investment properties. Whether you're seeking a luxurious residence, a prestigious commercial space, or a prime piece of land, Premium Homes is your trusted partner in securing the finest in real estate.

                                            With an unwavering dedication to quality, professionalism, and client satisfaction, we invite you to explore our collection of premium properties and embark on a journey towards a life of unmatched prestige and comfort. Discover your dream property with Premium Homes, where luxury knows no bounds.
                                        </p>
                                    </div>
                                @elseif($id=="rent")
                                    <div class="welcome-text hero-video">
                                        <h1 class="h1">Find
                                        <br class="d-md-none">
                                        <span class="typed border-bottom"></span>
                                        For Rent
                                    </h1>
                                        <p class="mt-4">
                                            Our commitment to excellence is reflected in every detail of the homes we offer. From stunning city apartments to breathtaking suburban estates, Premium Homes is your gateway to an elevated lifestyle.

                                            Experience the pinnacle of sophistication, personalized service, and a curated selection of properties that cater to your unique tastes. Whether you seek the perfect urban retreat, a serene suburban oasis, or a prestigious corporate residence, we have the ideal rental property waiting for you.
                                        </p>
                                    </div>
                                @endif

                                <!--/ End Welcome Text -->
                                <!-- Search Form -->

                                <!--/ End Search Form -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <a href="#section-property" class="scroll-to">
                <span class="mouse">
                     <span class="scroll"></span>
                </span>
            </a>
        </div>
        <!-- END HEADER SEARCH -->

        {{--  --}}

         <!-- START SECTION PROPERTIES LISTING -->
        <section class="recently portfolio bg-black-1 rec-pro2 hmp ho-17" id="section-property">
            <div class="container-fluid">
                <div class="row">
                    <div class="section-title col-md-5 pl-44">
                        <h3>Properties</h3>
                        <h2 style="text-transform: capitalize">For {{$id}}</h2>
                    </div>
                </div>
                <div class="row portfolio-items">
                    @foreach ($Property as $prop)
                    <div class="item col-lg-3 col-md-6 col-xs-12 landscapes sale" data-aos="zoom-in" data-aos-delay="150">
                        <div class="landscapes listing-item compact thehp-1">
                            <a href="{{route('property-single',[$prop->slung])}}" class="recent-16 hmp" data-aos="fade-up">
                                <div class="recent-img16 img-fluid img-center" style="background-image: url('{{asset('uploads/properties/')}}/{{$prop->featured_image}}');"></div>
                                <div class="recent-content"></div>
                                <div class="listing-badges">
                                    <span>For {{$prop->status}}</span>
                                </div>
                                <div class="recent-details">
                                    <div class="recent-title">{{$prop->property_name}}</div>
                                    <div class="price-details">
                                    <div class="recent-price mb-3">KES {{$prop->price}}</div>
                                    <div class="recent-price mb-3" style="font-weight:200; color:#bf9d34">
                                        <i class="fa fa-map-marker"></i> {{$prop->address}}
                                    </div>
                                    @if($prop->type == "Plot")
                                        <div class="house-details thehp-1">
                                            <i class="fa fa-object-group mr-1" aria-hidden="true"></i> {{$prop->sqft}}</div>
                                        </div>
                                    @else
                                        <div class="house-details thehp-1">
                                            <i class="fa fa-bed mr-1" aria-hidden="true"></i> {{$prop->bedroom}} Br <span class="mr-1">|</span>
                                            <i class="fa fa-suitcase mr-1" aria-hidden="true"></i> {{$prop->type}}  <span class="mr-1">|</span>
                                            <i class="fa fa-car mr-1" aria-hidden="true"></i> {{$prop->garages}}1 Gr <span class="mr-1">|</span>
                                            <i class="fa fa-object-group mr-1" aria-hidden="true"></i> {{$prop->sqft}}</div>
                                        </div>
                                    @endif
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
