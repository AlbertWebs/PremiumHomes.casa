<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {{--  --}}
    <title>{{$title}} - Premium Homes</title>
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
        <meta name="twitter:image" content="https://royaltech.co.ke/uploads/products/1_062eeb89-ffbf-474a-8443-1285ea8a9b41.jpg">
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

    @foreach ($Property as $Property)
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
                                            <h3>{{$Property->property_name}}<span class="mrg-l-5 category-tag">For Sale</span></h3>
                                            <div class="mt-0">
                                                <a href="https://goo.gl/maps/CNmkJmheKMGWS83X6" class="listing-address">
                                                    <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>{{$Property->address}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single detail-wrapper mr-2">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h4>kes {{$Property->price}}</h4>
                                                <div class="mt-0">
                                                    <a href="#listing-location" class="listing-address">
                                                        <p>{{$Property->sqft}}</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- main slider carousel items -->
                            <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                {{-- <h5 class="mb-4">Gallery</h5> --}}
                                <div class="carousel-inner">
                                    <div class="active item carousel-item" data-slide-number="0">
                                        <img src="{{url('/')}}/uploads/properties/{{$Property->featured_image}}" class="img-fluid" alt="slider-listing">
                                    </div>
                                    <?php
                                        $Gallery = DB::table('galleries')->where('property_id', $Property->id)->get();
                                        $Count = 1
                                    ?>
                                    @foreach ($Gallery as $gallery)
                                    <div class="item carousel-item" data-slide-number="{{$Count}}">
                                        <img src="{{url('/')}}/images/{{$gallery->filename}}" class="img-fluid" alt="slider-listing">
                                    </div>
                                    <?php $Count = $Count+1;?>
                                    @endforeach



                                    <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                    <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                                </div>
                                <!-- main slider carousel nav controls -->
                                <ul class="carousel-indicators smail-listing list-inline">
                                    <li class="list-inline-item active">
                                        <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#listingDetailsSlider">
                                            <img  src="{{url('/')}}/uploads/properties/{{$Property->featured_image}}" class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    <?php $Count = 1 ?>
                                    @foreach ($Gallery as $gallery)
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-{{$Count}}" data-slide-to="{{$Count}}" data-target="#listingDetailsSlider">
                                            <img style="width:127px; height:95px; object-fit:contain;" src="{{url('/')}}/images/{{$gallery->filename}}" class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    <?php $Count = $Count+1;?>
                                    @endforeach
                                </ul>
                                <!-- main slider carousel items -->
                            </div>
                            <div class="blog-info details mb-30">
                                <h5 class="mb-4">Description</h5>
                                <p class="mb-3">
                                    {!! nl2br($Property->property_description) !!}
                                </p>
                                {{-- <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="single homes-content details mb-30">
                        <!-- title -->
                        <h5 class="mb-4">Property Details</h5>
                        <ul class="homes-list clearfix">
                            <li>
                                <span class="font-weight-bold mr-1">Property ID:</span>
                                <span class="det">{{$Property->property_id}}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Property Type:</span>
                                <span class="det">{{$Property->type}}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Property status:</span>
                                <span class="det">For Sale</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Property Price:</span>
                                <span class="det">kes {{$Property->price}}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Rooms:</span>
                                <span class="det">{{$Property->rooms}}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Bedrooms:</span>
                                <span class="det">{{$Property->bedrooms}}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Bath:</span>
                                <span class="det">{{$Property->Bath}}</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Garages:</span>
                                <span class="det">1</span>
                            </li>
                            <li>
                                <span class="font-weight-bold mr-1">Year Built:</span>
                                <span class="det">{{$Property->yom}}</span>
                            </li>
                        </ul>
                        <!-- title -->
                        <h5 class="mt-5">Amenities</h5>
                        <!-- cars List -->
                        <ul class="homes-list clearfix">
                            @if($Property->ac == "on")
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Air Cond</span>
                            </li>
                            @endif
                            @if($Property->balcony == "on")
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Balcony</span>
                            </li>
                            @endif
                            @if($Property->internet == "on")
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Internet</span>
                            </li>
                            @endif
                            @if($Property->dishwasher == "on")
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Dishwasher</span>
                            </li>
                            @endif
                            @if($Property->parking == "on")
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Parking</span>
                            </li>
                            @endif
                            @if($Property->bar == "on")
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Bar</span>
                            </li>
                            @endif
                            @if($Property->swimming == "on")
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Pool</span>
                            </li>
                            @endif
                            @if($Property->Fridge == "on")
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Fridge</span>
                            </li>
                            @endif
                        </ul>
                    </div>
                    {{-- <div class="floor-plan property wprt-image-video w50 pro">
                        <h5>Floor Plans</h5>
                        <img alt="image" src="{{asset('theme/images/bg/floor-plan-1.png')}}">
                    </div> --}}
                    <div class="floor-plan property wprt-image-video w50 pro">
                        <h5>What's Nearby</h5>
                        <div class="property-nearby">
                            <div class="row">
                                <div class="col-lg-12">

                                    <?php
                                        $Cat = DB::table('cats')->get();
                                    ?>
                                        @foreach ($Cat as $cat)
                                        <?php $Nearby = DB::table('nearbies')->where('category',$cat->title)->where('property_id',$Property->id)->get(); $countNearby = count($Nearby); ?>

                                            @if($countNearby == 0)

                                            @else
                                                <div class="nearby-info mb-4">
                                                    <span class="nearby-title mb-3 d-block text-{{$cat->image}}">
                                                    <i class="{{$cat->icon}} mr-2"></i><b class="title">{{$cat->title}}</b>
                                                    </span>
                                                    <div class="nearby-list">
                                                        <ul class="property-list list-unstyled mb-0">
                                                            @foreach ($Nearby as $nearby)
                                                            <li class="d-flex">
                                                                <h6 class="mb-3 mr-2">{{$nearby->amenities}}</h6>
                                                                <span>({{$nearby->proximity}})</span>
                                                                <?php
                                                                    $Rating = ceil($nearby->rating);
                                                                ?>
                                                                @if($Rating == 1)
                                                                <ul class="list-unstyled list-inline ml-auto">
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                                </ul>
                                                                @elseif($Rating == 2)
                                                                <ul class="list-unstyled list-inline ml-auto">
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                                </ul>
                                                                @elseif($Rating == 3)
                                                                <ul class="list-unstyled list-inline ml-auto">
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                                </ul>
                                                                @elseif($Rating == 4)
                                                                <ul class="list-unstyled list-inline ml-auto">
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                                </ul>
                                                                @elseif($Rating == 5)
                                                                <ul class="list-unstyled list-inline ml-auto">
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                    <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                                </ul>
                                                                @endif
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="property wprt-image-video w50 pro" style="position: relative">
                            <h5>Property Video</h5>
                            <img style="border-radius:10px" alt="image" src="{{url('/')}}/uploads/properties/{{$Property->featured_image}}">
                            <div style="position: absolute; top: 50%; left: 50%;">
                                <a class="icon-wrap popup-video popup-youtube" href="{{$Property->video}}">
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
                            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.557192204415!2d36.7201291!3d-1.2364671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e2f130aa1a43250!2sRosehill%20residence!5e0!3m2!1sen!2ske!4v1669530628064!5m2!1sen!2ske" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                            {!! nl2br($Property->iframe) !!}
                        </div>
                        <br><br><br>
                    </div>
                </div>
                <aside class="col-lg-4 col-md-12 car">
                    <div class="single widget">
                        <!-- Start: Schedule a Tour -->
                        <div class="schedule widget-boxed mt-33 mt-0">
                            <div class="widget-boxed-header">
                                <h4><i class="fa fa-calendar pr-3 padd-r-10"></i>Schedule a Tour</h4>
                            </div>
                            <?php
                                $Agent = DB::table('users')->where('id',$Property->user_id)->get();
                            ?>
                            <div class="widget-boxed-body">
                                @if(Session::has('message'))
                                <div class="alert alert-success">{{ Session::get('message') }}</div>
                                @endif

                                @if(Session::has('messageError'))
                                                <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                                @endif

                                <form action="{{url('/schedule-post')}}" method="post">

                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 book">
                                            <input name="reservation_date" type="text" id="reservation-date" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
                                        </div>
                                        <div class="col-lg-6 col-md-12 book2">
                                            <input name="reservation_time" type="text" id="reservation-time" class="form-control" readonly="">
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
                                    </div>
                                    @foreach ($Agent as $agent)
                                       <input type="hidden" id="fname" name="email_agent" value="{{$agent->email}}" placeholder="Full Name" required />
                                       <input type="hidden" id="fname" name="name_agent" value="{{$agent->name}}" placeholder="Full Name" required />
                                    @endforeach
                                    <div class="agent-contact-form-sidebar">
                                    <input type="text" id="fname" name="full_name" placeholder="Full Name" required />
                                    <input type="email" id="fname" name="email_address" placeholder="Email " required />
                                    <input type="text" id="phone" name="phone_number" placeholder="Phone " required />
                                    </div>
                                    <button type="submit" class="btn reservation btn-radius theme-btn full-width mrg-top-10">Submit Request</button>
                                </form>

                            </div>
                        </div>
                        <!-- End: Schedule a Tour -->
                        <!-- end author-verified-badge -->




                        <div class="sidebar">
                            @foreach ($Agent as $agent)
                            <div class="widget-boxed mt-33 mt-5">
                                <div class="widget-boxed-header">
                                    <h4>Agent Information</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="sidebar-widget author-widget2">
                                        <div class="author-box clearfix">
                                            <img src="{{url('/')}}//uploads/users/{{$agent->image}}" alt="author-image" class="author__img">
                                            <h4 class="author__title">{{$agent->name}}</h4>
                                            <p class="author__meta">Coordinator</p>
                                        </div>
                                        <ul class="author__contact">
                                            <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>Nelson's Court, Ring Road, Westlands, Nairobi</li>
                                            <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:+254 727 111 222">+254 727 111 222 </a></li>
                                            <li><span class="la la-phone"><i class="fa fa-comment" aria-hidden="true"></i></span><a href="sms://+254 727 111 222">+254 727 111 222 </a></li>

                                            <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="mailto:info@premiumhomes.casa">info@premiumhomes.casa</a></li>
                                        </ul>
                                        {{-- <div class="agent-contact-form-sidebar">
                                            <h4>Request Inquiry</h4>
                                            <form name="contact_form" method="post" action="https://code-theme.com/html/findhouses/functions.php">
                                                <input type="text" id="fname" name="full_name" placeholder="Full Name" required />
                                                <input type="number" id="pnumber" name="phone_number" placeholder="Phone Number" required />
                                                <input type="email" id="emailid" name="email_address" placeholder="Email Address" required />
                                                <textarea placeholder="Message" name="message" required></textarea>
                                                <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit Request" />
                                            </form>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="main-search-field-2">
                                <div class="widget-boxed mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Recent Properties</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="recent-post">
                                            <?php
                                                $RecentProperties = DB::table('properties')->orderBy('id','ASC')->get();
                                            ?>
                                            @foreach ($RecentProperties as $Recent)
                                            <div class="recent-main my-4">
                                                <div class="recent-img">
                                                    <a href="{{route('property-single',[$Recent->slung])}}"><img src="{{url('/')}}/uploads/properties/{{$Recent->featured_image}}" alt=""></a>
                                                </div>
                                                <div class="info-img" style="margin-left:5px">
                                                    <a href="{{route('property-single',[$Recent->slung])}}"><h6>{{$Recent->property_name}}</h6></a>
                                                    <p>{{$Recent->price}}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </aside>
            </div>

        </div>
    </section>
    <!-- END SECTION PROPERTIES LISTING -->
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
