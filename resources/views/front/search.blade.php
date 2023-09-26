<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Premium Homes - High End Homes in Kenya</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">


    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/aos2.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/video.css">
    <link rel="stylesheet" id="color" href="css/colors/pink.css">
</head>

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
<link rel="stylesheet" id="color" href="{{asset('theme/css/colors/pink.css')}}">


<body class="homepage-9 hp-6 hd-white hmp7 mh">
    <header id="header-container" style="background-color: #000000">
        <!-- Header -->
        <div id="header" class="int_content_wraapper hd">
            <div class="container container-header">
                <!-- Left Side Content -->
                <div class="left-sides">
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
                    <nav id="navigation" class="style-1 black" >
                        <ul id="responsive">
                            <li @if($title == "Home") class="active" @endif><a   href="{{url('/')}}">Home</a> </li>
                            <li @if($title == "About") class="active" @endif>
                                <a   href="{{url('/about-us')}}">About Us</a>
                                <ul>
                                    <li><a href="{{url('/')}}/about-us#team">Our Team</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  @if($title == "rent") class="active" @endif href="{{route('properties-home',['rent'])}}">For Rent</a> </li>
                            <li><a  @if($title == "sale") class="active" @endif href="{{route('properties-home',['sale'])}}">For Sale</a> </li>
                            <li><a  @if($title == "Plots") class="active" @endif  href="{{route('land-for-sale')}}">Plots</a> </li>
                            <li><a  @if($title == "UN") class="active" @endif  href="{{route('un-approved')}}">UN Approved Properties</a> </li>
                            <li><a  @if($title == "Search") class="active" @endif href="{{route('search-home')}}">Search Propertes</a> </li>
                            <li><a  href="{{url('/')}}/contact-us">Contact Us</a> </li>
                        </ul>
                    </nav>
                    <!-- Main Navigation / End -->
                </div>
                <!-- Left Side Content / End -->





            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->

        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- STAR HEADER SEARCH -->
        <div id="map-container" class="fullwidth-home-map dark-overlay">
            <!-- Video -->
            <div class="video-container">
                <video style="object-fit:cover !important" poster="{{asset('theme/images/bg/video-image.png')}}" loop autoplay muted>
                    <source src="{{asset('theme/video/pexels-african-creator-15556055.mp4')}}" type="video/mp4">
                </video>
            </div>
            <div id="hero-area" class="main-search-inner search-2 vid">
                <div class="container vid" data-aos="zoom-in">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="hero-inner2">
                                <!-- Welcome Text -->
                                <div class="welcome-text">
                                    <h1 class="h1">Find Your Dream
                                    <br class="d-md-none">
                                    <span class="typed border-bottom"></span>
                                </h1>
                                    <p class="mt-4">We Have Over Hundred Properties For You.</p>
                                </div>
                                <!--/ End Welcome Text -->
                                <!-- Search Form -->
                                <div class="col-12">
                                    <div class="banner-search-wrap">
                                        <center>
                                            @if(Session::has('message'))
                                                          <h3 class="alert alert-info">{{ Session::get('message') }}</h3>
                                           @endif

                                           @if(Session::has('messageError'))
                                                          <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                                           @endif
                                        </center>

                                            <div class="tab-content">
                                                <form method="POST" action="{{url('/search-property')}}">

                                                    @csrf
                                                        <div class="tab-pane fade show active" id="tabs_1">
                                                            <div class="rld-main-search">
                                                                <div class="row">
                                                                    <div class="rld-single-input">
                                                                        <input name="keyword" type="text" placeholder="Enter Keyword">
                                                                    </div>
                                                                    <div class="rld-single-select ml-22">
                                                                        <select required name="type" class="select single-select">
                                                                            <option value="Duplex">Duplex</option>
                                                                            <option value="Condominium">Condominium</option>
                                                                            <option value="Villa">Villa</option>
                                                                            <option value="Mansion">Mansion</option>
                                                                            <option value="Townhouse">Townhouse</option>
                                                                            <option value="Cottages">Cottages</option>
                                                                            <option value="Bungalow">Bungalow</option>
                                                                            <option value="Apartment">Apartment</option>
                                                                            <option value="Mansion">Mansion</option>
                                                                            <option value="Resorts">Resorts</option>
                                                                            <option value="Plot">Plot</option>
                                                                            <option value="Penthouse">Penthouse</option>
                                                                            <option value="Commercial Properies">Commercial Properies</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="rld-single-select ml-22">
                                                                        <select required name="status" class="select single-select">
                                                                            <option value="Rent">Rent</option>
                                                                            <option value="Sale">Sale</option>

                                                                        </select>
                                                                    </div>
                                                                    <div class="rld-single-input">
                                                                        <input name="location" type="text" placeholder="Location e.g Karen">
                                                                    </div>
                                                                    {{-- <div class="dropdown-filter d-none d-none d-lg-none d-xl-block"><span>Advanced Search</span></div> --}}
                                                                    <div class="col-xl-1 col-lg-1 col-md-4 pl-0">
                                                                        <button type="submit" class="btn btn-yellow">GO</button>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                </form>

                                            </div>

                                    </div>
                                </div>
                                <!--/ End Search Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER SEARCH -->




        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->



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
                strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
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
