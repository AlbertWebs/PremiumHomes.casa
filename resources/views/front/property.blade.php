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
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION PROPERTIES LISTING -->
    <section class="single-proper blog details int_dark_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 blog-pots">
                    <div class="row">
                        <div class="col-md-12">
                            <section class="headings-2 pt-0">
                                <div class="pro-wrapper">
                                    <div class="detail-wrapper-body">
                                        <div class="listing-title-bar">
                                            <h3>Rosehill Residence<span class="mrg-l-5 category-tag">For Sale</span></h3>
                                            <div class="mt-0">
                                                <a href="https://goo.gl/maps/CNmkJmheKMGWS83X6" class="listing-address">
                                                    <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>Westfields Apartments - Lower Kabete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single detail-wrapper mr-2">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h4>$ 77,800</h4>
                                                <div class="mt-0">
                                                    <a href="#listing-location" class="listing-address">
                                                        <p>184 sq ft</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- main slider carousel items -->
                            <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                <h5 class="mb-4">Gallery</h5>
                                <div class="carousel-inner">
                                    <div class="active item carousel-item" data-slide-number="0">
                                        <img src="{{asset('theme/images/single-property/s-1.jpg')}}" class="img-fluid" alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="1">
                                        <img src="{{asset('theme/images/single-property/s-2.jpg')}}" class="img-fluid" alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="2">
                                        <img src="{{asset('theme/images/single-property/s-3.jpg')}}" class="img-fluid" alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="4">
                                        <img src="{{asset('theme/images/single-property/s-4.jpg')}}" class="img-fluid" alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="5">
                                        <img src="{{asset('theme/images/single-property/s-5.jpg')}}" class="img-fluid" alt="slider-listing">
                                    </div>

                                    <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                    <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                                </div>
                                <!-- main slider carousel nav controls -->
                                <ul class="carousel-indicators smail-listing list-inline">
                                    <li class="list-inline-item active">
                                        <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#listingDetailsSlider">
                                            <img src="{{asset('theme/images/single-property/s-1.jpg')}}" class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-1" data-slide-to="1" data-target="#listingDetailsSlider">
                                            <img src="{{asset('theme/images/single-property/s-2.jpg')}}" class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-2" data-slide-to="2" data-target="#listingDetailsSlider">
                                            <img src="{{asset('theme/images/single-property/s-3.jpg')}}" class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-3" data-slide-to="3" data-target="#listingDetailsSlider">
                                            <img src="{{asset('theme/images/single-property/s-4.jpg')}}" class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-4" data-slide-to="4" data-target="#listingDetailsSlider">
                                            <img src="{{asset('theme/images/single-property/s-5.jpg')}}" class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                </ul>
                                <!-- main slider carousel items -->
                            </div>
                            <div class="blog-info details mb-30">
                                <h5 class="mb-4">Description</h5>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single homes-content details mb-30">
                        <!-- title -->
                        <h5 class="mb-4">Property Details</h5>
                        <ul class="homes-list clearfix">
                            <li>
                                <span class="font-weight-bold mr-1">Property ID:</span>
                                <span class="det">V254680</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Property Type:</span>
                                <span class="det">House</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Property status:</span>
                                <span class="det">For Sale</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Property Price:</span>
                                <span class="det">$212,000</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Rooms:</span>
                                <span class="det">6</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Bedrooms:</span>
                                <span class="det">7</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Bath:</span>
                                <span class="det">4</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Garages:</span>
                                <span class="det">2</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Year Built:</span>
                                <span class="det">10/6/2020</span>
                            </li>
                        </ul>
                        <!-- title -->
                        <h5 class="mt-5">Amenities</h5>
                        <!-- cars List -->
                        <ul class="homes-list clearfix">
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Air Cond</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Balcony</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Internet</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Dishwasher</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Bedding</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Cable TV</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Parking</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Pool</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Fridge</span>
                            </li>
                        </ul>
                    </div>
                    <div class="floor-plan property wprt-image-video w50 pro">
                        <h5>Floor Plans</h5>
                        <img alt="image" src="{{asset('theme/images/bg/floor-plan-1.png')}}">
                    </div>
                    <div class="floor-plan property wprt-image-video w50 pro">
                        <h5>What's Nearby</h5>
                        <div class="property-nearby">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="nearby-info mb-4">
                                        <span class="nearby-title mb-3 d-block text-info">
                                           <i class="fas fa-graduation-cap mr-2"></i><b class="title">Education</b>
                                        </span>
                                        <div class="nearby-list">
                                            <ul class="property-list list-unstyled mb-0">
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">Education Mandarin</h6>
                                                    <span>(15.61 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">Marry's Education</h6>
                                                    <span>(15.23 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">The Kaplan</h6>
                                                    <span>(15.16 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nearby-info mb-4">
                                        <span class="nearby-title mb-3 d-block text-success">
                                          <i class="fas fa-user-md mr-2"></i><b class="title">Health & Medical</b>
                                        </span>
                                        <div class="nearby-list">
                                            <ul class="property-list list-unstyled mb-0">
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">Natural Market</h6>
                                                    <span>(13.20 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">Food For Health</h6>
                                                    <span>(13.22 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">A Matter of Health</h6>
                                                    <span>(13.34 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nearby-info">
                                        <span class="nearby-title mb-3 d-block text-danger">
                                            <i class="fas fa-car mr-2"></i><b class="title">Transportation</b>
                                        </span>
                                        <div class="nearby-list">
                                            <ul class="property-list list-unstyled mb-0">
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">Airport Transportation</h6>
                                                    <span>(11.36 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">NYC Executive Limo</h6>
                                                    <span>(11.87 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">Empire Limousine</h6>
                                                    <span>(11.52 miles)</span>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="property wprt-image-video w50 pro" style="position: relative">
                            <h5>Property Video</h5>
                            <img style="border-radius:10px" alt="image" src="{{asset('theme/images/slider/home-slider-4.jpg')}}">
                            <div style="position: absolute; top: 50%; left: 50%;">
                                <a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=eDp8jLl4LVs">
                                    <i class="fa fa-play"></i>
                                </a>
                                <div class="iq-waves">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property-location map">
                        <h5>Location</h5>
                        <div class="divider-fade"></div>
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.557192204415!2d36.7201291!3d-1.2364671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e2f130aa1a43250!2sRosehill%20residence!5e0!3m2!1sen!2ske!4v1669530628064!5m2!1sen!2ske" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <aside class="col-lg-4 col-md-12 car">
                    <div class="single widget">
                        <!-- Start: Schedule a Tour -->
                        <div class="schedule widget-boxed mt-33 mt-0">
                            <div class="widget-boxed-header">
                                <h4><i class="fa fa-calendar pr-3 padd-r-10"></i>Schedule a Tour</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 book">
                                        <input type="text" id="reservation-date" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 book2">
                                        <input type="text" id="reservation-time" class="form-control" readonly="">
                                    </div>
                                </div>
                                <div class="row mrg-top-15 mb-3">
                                    <div class="col-lg-12 col-md-12 mt-4">
                                        <label class="mb-4">Number of People</label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                     <button type="button" class="btn counter-btn theme-cl btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                         <i class="fa fa-minus"></i>
                                     </button>
                                        </span>
                                            <input type="text" name="quant[1]" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">
                                            <span class="input-group-btn">
                                         <button type="button" class="btn counter-btn theme-cl btn-number" data-type="plus" data-field="quant[1]">
                                          <i class="fa fa-plus"></i>
                                         </button>
                                        </span>
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6 col-md-12 mt-4">
                                        <label class="mb-4">Children</label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                     <button type="button" class="btn counter-btn theme-cl btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                                         <i class="fa fa-minus"></i>
                                     </button>
                                        </span>
                                            <input type="text" name="quant[2]" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">
                                            <span class="input-group-btn">
                                         <button type="button" class="btn counter-btn theme-cl btn-number" data-type="plus" data-field="quant[2]">
                                          <i class="fa fa-plus"></i>
                                         </button>
                                        </span>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="agent-contact-form-sidebar">
                                <input type="text" id="fname" name="full_name" placeholder="Full Name" required />
                                <input type="email" id="fname" name="email_address" placeholder="Email " required />
                                <input type="text" id="phone" name="phone_number" placeholder="Phone " required />
                                </div>
                                <a href="payment-method.html" class="btn reservation btn-radius theme-btn full-width mrg-top-10">Submit Request</a>
                            </div>
                        </div>
                        <!-- End: Schedule a Tour -->
                        <!-- end author-verified-badge -->
                        <div class="sidebar">
                            <div class="widget-boxed mt-33 mt-5">
                                <div class="widget-boxed-header">
                                    <h4>Agent Information</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="sidebar-widget author-widget2">
                                        <div class="author-box clearfix">
                                            <img src="{{asset('theme/images/testimonials/199259143_4389625377747506_3043984032264076715_n.jpg')}}" alt="author-image" class="author__img">
                                            <h4 class="author__title">Albert Muhatia</h4>
                                            <p class="author__meta">Agent of Property</p>
                                        </div>
                                        <ul class="author__contact">
                                            <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>3571 Riverside Downs</li>
                                            <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:(+254) 72 301 4032">(+254) 72 301 4032 </a></li>
                                            <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">albertmuhatia@gmail.com</a></li>
                                        </ul>
                                        <div class="agent-contact-form-sidebar">
                                            <h4>Request Inquiry</h4>
                                            <form name="contact_form" method="post" action="https://code-theme.com/html/findhouses/functions.php">
                                                <input type="text" id="fname" name="full_name" placeholder="Full Name" required />
                                                <input type="number" id="pnumber" name="phone_number" placeholder="Phone Number" required />
                                                <input type="email" id="emailid" name="email_address" placeholder="Email Address" required />
                                                <textarea placeholder="Message" name="message" required></textarea>
                                                <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit Request" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-search-field-2">
                                <div class="widget-boxed mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Recent Properties</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="recent-post">
                                            <div class="recent-main">
                                                <div class="recent-img">
                                                    <a href="blog-details.html"><img src="{{asset('theme/images/feature-properties/fp-1.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="info-img">
                                                    <a href="blog-details.html"><h6>Family Home</h6></a>
                                                    <p>$640,000</p>
                                                </div>
                                            </div>
                                            <div class="recent-main my-4">
                                                <div class="recent-img">
                                                    <a href="blog-details.html"><img src="{{asset('theme/images/feature-properties/fp-2.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="info-img">
                                                    <a href="blog-details.html"><h6>Family Home</h6></a>
                                                    <p>$330,000</p>
                                                </div>
                                            </div>
                                            <div class="recent-main">
                                                <div class="recent-img">
                                                    <a href="blog-details.html"><img src="{{asset('theme/images/feature-properties/fp-3.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="info-img">
                                                    <a href="blog-details.html"><h6>Family Home</h6></a>
                                                    <p>$198,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-boxed mt-5">
                                    <div class="widget-boxed-header mb-5">
                                        <h4>Feature Properties</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="slick-lancers">
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 200,000</span>
                                                            <span>For Sale</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Lavington</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="{{asset('theme/images/feature-properties/fp-1.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 6,500</span>
                                                            <span class="rent">For Rent</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Runda</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="{{asset('theme/images/feature-properties/fp-2.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 235,000</span>
                                                            <span>For Sale</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Langata</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="{{asset('theme/images/feature-properties/fp-3.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 6,500</span>
                                                            <span class="rent">For Rent</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Upper Hill</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="{{asset('theme/images/feature-properties/fp-4.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 230,000</span>
                                                            <span>For Sale</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Loresho</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="{{asset('theme/images/feature-properties/fp-5.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 6,500</span>
                                                            <span class="rent">For Rent</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Kilimani</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="{{asset('theme/images/feature-properties/fp-6.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- START SIMILAR PROPERTIES -->
            <section class="similar-property featured portfolio p-0 bg-white-inner">
                <div class="container">
                    <h5>Similar Properties</h5>
                    <div class="row portfolio-items">
                        <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">$900,000</div>
                                            <img src="{{asset('theme/images/blog/b-11.jpg')}}" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="{{url('/')}}/properties/slung" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Karuna Close, Westlands, Nairobi</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="footer">
                                        <a href="agent-details.html">
                                            <img src="{{asset('theme/images/testimonials/199259143_4389625377747506_3043984032264076715_n.jpg')}}" alt="" class="mr-2"> Beatrice Mwangi
                                        </a>
                                        <span>2 months ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-lg-4 col-md-6 col-xs-12 people">
                            <div class="project-single">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <div class="homes-price">$3,000/mo</div>
                                            <img src="{{asset('theme/images/blog/b-12.jpg')}}" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="{{url('/')}}/properties/slung" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Karuna Close, Westlands, Nairobi</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="footer">
                                        <a href="agent-details.html">
                                            <img src="{{asset('theme/images/testimonials/199259143_4389625377747506_3043984032264076715_n.jpg')}}" alt="" class="mr-2"> Albert Muhatia
                                        </a>
                                        <span>2 months ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes no-pb pbp-3">
                            <div class="project-single no-mb mbp-3">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">$9,000/mo</div>
                                            <img src="{{asset('theme/images/blog/b-1.jpg')}}" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="{{url('/')}}/properties/slung" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Karuna Close, Westlands, Nairobi</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="footer">
                                        <a href="agent-details.html">
                                            <img src="{{asset('theme/images/testimonials/199259143_4389625377747506_3043984032264076715_n.jpg')}}" alt="" class="mr-2"> Terry Waweru
                                        </a>
                                        <span>2 months ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SIMILAR PROPERTIES -->
        </div>
    </section>
    <!-- END SECTION PROPERTIES LISTING -->

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
