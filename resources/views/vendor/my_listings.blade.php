<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Premium Homes - High-End Homes in Nairobi</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('theme/css/jquery-ui.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('theme/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/search.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/dashbord-mobile-menu.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{asset('theme/css/default.css')}}">
</head>

<body class="maxw1600 m0a dashboard-bd">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <div class="dash-content-wrap">
            <header id="header-container" class="db-top-header">
                <!-- Header -->
                <div id="header">
                    <div class="container-fluid">
                        <!-- Left Side Content -->
                        <div class="left-side">
                            <!-- Logo -->
                            <div id="logo">
                                <a href="{{url('/')}}"><img src="{{asset('theme/images/logo-kubwa.png')}}" alt="Premium Homes"></a>
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
                                        <li><a href="#">Home</a>
                                        <li><a onclick="alert('work in progress')" href="#">For Rent</a> </li>
                                        <li><a onclick="alert('work in progress')" href="#">For Sale</a> </li>
                                        <li><a onclick="alert('work in progress')" href="#">Property Advice</a> </li>
                                        {{-- <li><a href="{{route('search-home')}}"><i class="fa fa-search"></i> Search</a> </li> --}}
                                        <li><a onclick="alert('work in progress')" href="#">Locations</a> </li>
                                        <li><a target="new" href="https://tawk.to/chat/634ebf66daff0e1306d2a62a/1gflpnajd">Contact Us</a> </li>
                                </ul>
                            </nav>
                            <div class="clearfix"></div>
                            <!-- Main Navigation / End -->
                        </div>
                        <!-- Left Side Content / End -->
                        <!-- Right Side Content / -->
                        <div class="header-user-menu user-menu">
                            <div class="header-user-name">
                                @if(Auth::User())
                                <span><img src="{{asset('theme/images/testimonials/199259143_4389625377747506_3043984032264076715_n.jpg')}}" alt=""></span>{{Auth::User()->name}}
                                @else
                                <span><img src="{{asset('theme/images/testimonials/199259143_4389625377747506_3043984032264076715_n.jpg')}}" alt=""></span>Albert Muhatia
                                @endif
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
                    </div>
                </div>
                <!-- Header / End -->
            </header>
        </div>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- START SECTION DASHBOARD -->
        <section class="user-page section-padding">
            <div class="container-fluid">
                <div class="row">
                    @include('vendor.sidebar')
                    {{--  --}}
                    <div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">
                        <div class="col-lg-12 mobile-dashbord dashbord">
                             <div class="dashboard_navigationbar dashxl">
                                 <div class="dropdown">
                                     <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
                                     <ul id="myDropdown" class="dropdown-content">
                                         <li>
                                             <a href="dashboard.html">
                                                 <i class="fa fa-map-marker mr-3"></i> Dashboard
                                             </a>
                                         </li>
                                         <li>
                                             <a href="user-profile.html">
                                                 <i class="fa fa-user mr-3"></i>Profile
                                             </a>
                                         </li>
                                         <li>
                                             <a class="active" href="my-listings.html">
                                                 <i class="fa fa-list mr-3" aria-hidden="true"></i>My Properties
                                             </a>
                                         </li>
                                         <li>
                                             <a href="favorited-listings.html">
                                                 <i class="fa fa-heart mr-3" aria-hidden="true"></i>Favorited Properties
                                             </a>
                                         </li>
                                         <li>
                                             <a href="add-property.html">
                                                 <i class="fa fa-list mr-3" aria-hidden="true"></i>Add Property
                                             </a>
                                         </li>
                                         <li>
                                             <a href="payment-method.html">
                                                 <i class="fas fa-credit-card mr-3"></i>Payments
                                             </a>
                                         </li>
                                         <li>
                                             <a href="invoice.html">
                                                 <i class="fas fa-paste mr-3"></i>Invoices
                                             </a>
                                         </li>
                                         <li>
                                             <a href="change-password.html">
                                                 <i class="fa fa-lock mr-3"></i>Change Password
                                             </a>
                                         </li>
                                         <li>
                                             <a href="index-2.html">
                                                 <i class="fas fa-sign-out-alt mr-3"></i>Log Out
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div class="my-properties">
                             <table class="table-responsive">
                                 <thead>
                                     <tr>
                                         <th class="pl-2">My Properties</th>
                                         <th class="p-0"></th>
                                         <th>Date Added</th>
                                         <th>Views</th>
                                         <th>Actions</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td class="image myelist">
                                             <a href="single-property-1.html"><img alt="my-properties-3" src="{{asset('theme/images/feature-properties/fp-1.jpg')}}" class="img-fluid"></a>
                                         </td>
                                         <td>
                                             <div class="inner">
                                                 <a href="single-property-1.html"><h2>Luxury Villa House</h2></a>
                                                 <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                 <ul class="starts text-left mb-0">
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="ml-3">(6 Reviews)</li>
                                                 </ul>
                                             </div>
                                         </td>
                                         <td>08.14.2020</td>
                                         <td>163</td>
                                         <td class="actions">
                                             <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                             <a href="#"><i class="far fa-trash-alt"></i></a>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td class="image">
                                             <a href="single-property-1.html"><img alt="my-properties-3" src="{{asset('theme/images/feature-properties/fp-2.jpg')}}" class="img-fluid"></a>
                                         </td>
                                         <td>
                                             <div class="inner">
                                                 <a href="single-property-1.html"><h2>Luxury Villa House</h2></a>
                                                 <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                 <ul class="starts text-left mb-0">
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star-o"></i>
                                                     </li>
                                                     <li class="ml-3">(6 Reviews)</li>
                                                 </ul>
                                             </div>
                                         </td>
                                         <td>08.14.2020</td>
                                         <td>202</td>
                                         <td class="actions">
                                             <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                             <a href="#"><i class="far fa-trash-alt"></i></a>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td class="image">
                                             <a href="single-property-1.html"><img alt="my-properties-3" src="{{asset('theme/images/feature-properties/fp-3.jpg')}}" class="img-fluid"></a>
                                         </td>
                                         <td>
                                             <div class="inner">
                                                 <a href="single-property-1.html"><h2>Luxury Villa House</h2></a>
                                                 <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                 <ul class="starts text-left mb-0">
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="ml-3">(6 Reviews)</li>
                                                 </ul>
                                             </div>
                                         </td>
                                         <td>08.14.2020</td>
                                         <td>412</td>
                                         <td class="actions">
                                             <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                             <a href="#"><i class="far fa-trash-alt"></i></a>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td class="image">
                                             <a href="single-property-1.html"><img alt="my-properties-3" src="{{asset('theme/images/feature-properties/fp-4.jpg')}}" class="img-fluid"></a>
                                         </td>
                                         <td>
                                             <div class="inner">
                                                 <a href="single-property-1.html"><h2>Luxury Villa House</h2></a>
                                                 <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                 <ul class="starts text-left mb-0">
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star-o"></i>
                                                     </li>
                                                     <li class="ml-3">(6 Reviews)</li>
                                                 </ul>
                                             </div>
                                         </td>
                                         <td>08.14.2020</td>
                                         <td>675</td>
                                         <td class="actions">
                                             <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                             <a href="#"><i class="far fa-trash-alt"></i></a>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td class="image">
                                             <a href="single-property-1.html"><img alt="my-properties-3" src="{{asset('theme/images/feature-properties/fp-5.jpg')}}" class="img-fluid"></a>
                                         </td>
                                         <td>
                                             <div class="inner">
                                                 <a href="single-property-1.html"><h2>Luxury Villa House</h2></a>
                                                 <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                 <ul class="starts text-left mb-0">
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="ml-3">(6 Reviews)</li>
                                                 </ul>
                                             </div>
                                         </td>
                                         <td>08.14.2020</td>
                                         <td>325</td>
                                         <td class="actions">
                                             <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                             <a href="#"><i class="far fa-trash-alt"></i></a>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td class="image">
                                             <a href="single-property-1.html"><img alt="my-properties-3" src="{{asset('theme/images/feature-properties/fp-6.jpg')}}" class="img-fluid"></a>
                                         </td>
                                         <td>
                                             <div class="inner">
                                                 <a href="single-property-1.html"><h2>Luxury Villa House</h2></a>
                                                 <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                 <ul class="starts text-left mb-0">
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star"></i>
                                                     </li>
                                                     <li class="mb-0"><i class="fa fa-star-o"></i>
                                                     </li>
                                                     <li class="ml-3">(6 Reviews)</li>
                                                 </ul>
                                             </div>
                                         </td>
                                         <td>08.14.2020</td>
                                         <td>247</td>
                                         <td class="actions">
                                             <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                             <a href="#"><i class="far fa-trash-alt"></i></a>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
                             <div class="pagination-container">
                                 <nav>
                                     <ul class="pagination">
                                         <li class="page-item"><a class="btn btn-common" href="#"><i class="lni-chevron-left"></i> Previous </a></li>
                                         <li class="page-item"><a class="page-link" href="#">1</a></li>
                                         <li class="page-item"><a class="page-link" href="#">2</a></li>
                                         <li class="page-item"><a class="page-link" href="#">3</a></li>
                                         <li class="page-item"><a class="btn btn-common" href="#">Next <i class="lni-chevron-right"></i></a></li>
                                     </ul>
                                 </nav>
                             </div>
                         </div>
                     </div>
                    {{--  --}}
                </div>
            </div>
        </section>
        <!-- END SECTION DASHBOARD -->

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
        <script src="{{asset('theme/js/jquery-ui.js')}}"></script>
        <script src="{{asset('theme/js/tether.min.js')}}"></script>
        <script src="{{asset('theme/js/moment.js')}}"></script>
        <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('theme/js/mmenu.min.js')}}"></script>
        <script src="{{asset('theme/js/mmenu.js')}}"></script>
        <script src="{{asset('theme/js/swiper.min.js')}}"></script>
        <script src="{{asset('theme/js/swiper.js')}}"></script>
        <script src="{{asset('theme/js/slick.min.js')}}"></script>
        <script src="{{asset('theme/js/slick2.js')}}"></script>
        <script src="{{asset('theme/js/fitvids.js')}}"></script>
        <script src="{{asset('theme/js/jquery.waypoints.min.js')}}"></script>
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
        <script src="{{asset('theme/js/dashbord-mobile-menu.js')}}"></script>
        <script src="{{asset('theme/js/forms-2.js')}}"></script>
        <script src="{{asset('theme/js/color-switcher.js')}}"></script>

        <script>
            $(".header-user-name").on("click", function() {
                $(".header-user-menu ul").toggleClass("hu-menu-vis");
                $(this).toggleClass("hu-menu-visdec");
            });

        </script>

        <!-- MAIN JS -->
        <script src="{{asset('theme/js/script.js')}}"></script>

    </div>
    <!-- Wrapper / End -->
</body>


</html>
