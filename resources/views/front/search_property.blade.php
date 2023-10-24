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

        $description = "Discover exquisite premium properties available for sale and rent in and around Nairobi. Explore luxurious homes, apartments, and estates in prime locations, curated to meet your discerning taste. Your dream property awaits in Nairobi's most sought-after neighborhoods.";

    ?>
    @if($SearchResults->isEmpty())
        <?php $SearchResults = 0 ?>
    @else

    @endif
    @foreach($SearchResults as $prop)
        <title>Search Premium Properties - Premium Homes Limited</title>
        <meta name="description" content="{{$description}}">
        <meta name="robots" content="index,follow">
        <meta name="googlebot" content="index,follow"><!-- Google Specific -->
        <meta name="subject" content="Search Premium Properties - Premium Homes Limited">
        <meta name="rating" content="General">
        <meta name="referrer" content="no-referrer">
        <meta name="theme-color" content="#EFE165">

        <link rel="canonical" href="https://premiumhomes.casa/search-property"/>
        <meta name="author" content="Designekta Studios">
        <meta property="og:description" content="{{$description}}">
        <meta property="og:image" content="https://premiumhomes.casa/uploads/properties/{{$prop->featured_image}}" />
        <meta property="fb:app_id" content="431980657174772" />
        <meta property="og:title" content="Search Premium Properties - Premium Homes Limited" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://premiumhomes.casa/search-property" />
        <meta property="og:site_name" content="Premium Homes Limited">
        <meta property="og:locale" content="en_US">

        <meta name="twitter:title" content="Search Premium Properties - Premium Homes Limited" />
        <meta name="twitter:site" content="@premiumhomescasa" />
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@premiumhomescasa">
        <meta name="twitter:url" content="https://premiumhomes.casa/search-property">
        <meta name="twitter:description" content="{{$description}}">
        <meta name="twitter:image" content="https://premiumhomes.casa/uploads/properties/{{$prop->featured_image}}">
        <meta name="twitter:creator" content="@premiumhomescasa" />
    @endforeach
     <!-- FAVICON -->
     <link rel="shortcut icon" type="image/x-icon" href="{{asset('theme/images/preloader.png')}}">

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
                      @include('front.menu')
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->





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
            <div class="container-fluid">




                <div class="row portfolio-items">
                    @foreach ($SearchResults as $prop)
                    <div class="item col-lg-3 col-md-6 col-xs-12 landscapes sale">
                        <div class="project-single mb-0" data-aos="fade-up">
                            <a href="{{route('property-single',[$prop->slung])}}" class="recent-16">
                                <div class="recent-img16 img-center" style="background-image: url('{{asset('uploads/properties/')}}/{{$prop->featured_image}}');"></div>
                                <div class="recent-content"></div>
                                <div class="recent-details">
                                    <div class="recent-title">{{$prop->property_name}}</div>
                                <div class="recent-price mb-3">kes {{$prop->price}}</div>
                                <div class="recent-price mb-3" style="font-weight:900; color:#bf9d34">
                                    <i class="fa fa-map-marker"></i> {{$prop->address}}
                                </div>
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
                echo $SearchResults;
                ?>
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->
        {{--  --}}

        @include('front.footer')


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
