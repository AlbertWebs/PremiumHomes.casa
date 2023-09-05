<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {{--  --}}
    <title>Gallery - {{$title}} - Premium Homes</title>
    <meta name="description" content="{{$description}}">
    @foreach($Property as $prop)
       <meta name="robots" content="index,follow">
        <meta name="googlebot" content="index,follow"><!-- Google Specific -->
        <meta name="subject" content="{{$title}} - Premium Homes Limited">
        <meta name="rating" content="General">
        <meta name="referrer" content="no-referrer">
        <meta name="theme-color" content="#EFE165">

        <link rel="canonical" href="https://premiumhomes.casa/properties/{{$prop->slung}}"/>
        <meta name="author" content="Designekta Studios">
        <meta property="og:description" content="{{$description}}">
        <meta property="og:image" content="https://premiumhomes.casa/uploads/properties/{{$prop->featured_image}}" />
        <meta property="fb:app_id" content="431980657174772" />
        <meta property="og:title" content="{{$title}} - Premium Homes Limited" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://premiumhomes.casa/properties/{{$prop->slung}}" />
        <meta property="og:site_name" content="Premium Homes Limited">
        <meta property="og:locale" content="en_US">

        <meta name="twitter:title" content="{{$title}} - Premium Homes Limited" />
        <meta name="twitter:site" content="@premiumhomescasa" />
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@premiumhomescasa">
        <meta name="twitter:url" content="https://premiumhomes.casa/properties/{{$prop->slung}}">
        <meta name="twitter:description" content="{{$description}}">
        <meta name="twitter:image" content="https://premiumhomes.casa/uploads/properties/{{$prop->featured_image}}">
        <meta name="twitter:creator" content="@premiumhomescasa" />
    @endforeach
    {{--  --}}


    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('theme/images/preloader.png')}}">
    <link rel="stylesheet" href="{{asset('theme/css/jquery-ui.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">


   <!-- FONT AWESOME -->
   <link rel="stylesheet" href="{{asset('theme/font/flaticon.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/fontawesome-all.min.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/fontawesome-5-all.min.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}">
   <!-- LEAFLET MAP -->
   <link rel="stylesheet" href="{{asset('theme/css/leaflet.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/leaflet-gesture-handling.min.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/leaflet.markercluster.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/leaflet.markercluster.default.css')}}">
   <!-- ARCHIVES CSS -->
   <link rel="stylesheet" href="{{asset('theme/css/timedropper.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/datedropper.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/animate.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/lightcase.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/menu.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/slick.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/styles.css')}}">
   <link rel="stylesheet" id="color" href="{{asset('theme/css/default.css')}}">
   @include('tawkto')
</head>



<body class="inner-pages sin-1 homepage-4 int_dark_bg">

    {{--  --}}
 <!-- Wrapper -->
 <div id="wrapper">
    <!-- START SECTION HEADINGS -->
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
    <!-- END SECTION HEADINGS -->

    @foreach ($Property as $Property)
    {{--  --}}
    <div class="single-property-4">
        <div class="container-fluid p0">
            <div class="row m0">

                    <?php
                        $Gallery = DB::table('galleries')->where('property_id', $Property->id)->get();
                        $Count = 1
                    ?>
                <div class="col-sm-12 col-lg-12 p0">
                    <div class="row m0">
                        <div class="col-sm-4 col-lg-4 p0">
                            <div class="popup-images p0">
                                <a  class="popup-img" href="{{url('/')}}/uploads/properties/{{$Property->featured_image}}">
                                    <img class="img-fluid w100" src="{{url('/')}}/uploads/properties/{{$Property->featured_image}}" alt="">
                                </a>
                            </div>
                        </div>
                        @foreach ($Gallery as $gallery)
                        <div class="col-sm-4 col-lg-4 p0">
                            <div class="popup-images p0">
                                <a  class="popup-img" href="{{url('/')}}/images/{{$gallery->filename}}">
                                    <img class="img-fluid w100" src="{{url('/')}}/images/{{$gallery->filename}}" alt="">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION HEADINGS -->
    {{--  --}}



    @endforeach

    <!-- START FOOTER -->
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
                </div>
            </div>
        </div>
    </div>
    <!--register form end -->



    <!-- ARCHIVES JS -->
    <script src="{{asset('theme/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery-ui.js')}}"></script>
    <script src="{{asset('theme/js/range-slider.js')}}"></script>
    <script src="{{asset('theme/js/tether.min.js')}}"></script>
    <script src="{{asset('theme/js/popper.min.js')}}"></script>
    <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/js/mmenu.min.js')}}"></script>
    <script src="{{asset('theme/js/mmenu.js')}}"></script>
    <script src="{{asset('theme/js/slick.min.js')}}"></script>
    <script src="{{asset('theme/js/slick4.js')}}"></script>
    <script src="{{asset('theme/js/fitvids.js')}}"></script>
    <script src="{{asset('theme/js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('theme/js/popup.js')}}"></script>
    <script src="{{asset('theme/js/ajaxchimp.min.js')}}"></script>
    <script src="{{asset('theme/js/newsletter.js')}}"></script>
    <script src="{{asset('theme/js/timedropper.js')}}"></script>
    <script src="{{asset('theme/js/datedropper.js')}}"></script>
    <script src="{{asset('theme/js/jqueryadd-count.js')}}"></script>
    <script src="{{asset('theme/js/leaflet.js')}}"></script>
    <script src="{{asset('theme/js/leaflet-gesture-handling.min.js')}}"></script>
    <script src="{{asset('theme/js/leaflet-providers.js')}}"></script>
    <script src="{{asset('theme/js/leaflet.markercluster.js')}}"></script>
    <script src="{{asset('theme/js/map-single.js')}}"></script>
    <script src="{{asset('theme/js/color-switcher.js')}}"></script>
    <script src="{{asset('theme/js/inner.js')}}"></script>

    <!-- Date Dropper Script-->
    <script>
        $('#reservation-date').dateDropper();

    </script>
    <!-- Time Dropper Script-->
    <script>
        this.$('#reservation-time').timeDropper({
            setCurrentTime: false,
            meridians: true,
            primaryColor: "#e8212a",
            borderColor: "#e8212a",
            minutesInterval: '15'
        });

    </script>

    <script>
        $(document).ready(function() {
            $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });

    </script>

    <script>
        $('.slick-carousel').each(function() {
            var slider = $(this);
            $(this).slick({
                infinite: true,
                dots: false,
                arrows: false,
                centerMode: true,
                centerPadding: '0'
            });

            $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                slider.slick('slickPrev');
            });
            $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                slider.slick('slickNext');
            });
        });

    </script>

</div>
<!-- Wrapper / End -->
    {{--  --}}


</body>


</html>
