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
            @include('vendor.header')
        </div>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- START SECTION DASHBOARD -->
        <section class="user-page section-padding">
            <div class="container-fluid">
                <div class="row">
                    @include('vendor.sidebar')
                    <div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">
                       <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                        <li>
                                            <a class="active" href="{{route('dashboard')}}">
                                                <i class="fa fa-map-marker"></i> Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('user-profile')}}">
                                                <i class="fa fa-user"></i>Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('my-listings')}}">
                                                <i class="fa fa-list" aria-hidden="true"></i>My Properties
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{route('add-property')}}">
                                                <i class="fa fa-list" aria-hidden="true"></i>Add Property
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('payment-method')}}">
                                                <i class="fas fa-credit-card"></i>Payments
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('invoices')}}">
                                                <i class="fas fa-paste"></i>Invoices
                                            </a>
                                        </li>
                                        <li>
                                            <a href="change-password#">
                                                <i class="fa fa-lock"></i>Change Password
                                            </a>
                                        </li>
                                        <li>

                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt"></i>
                                                {{ __('Logout') }}
                                            </a>
                                            {{--  --}}
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="dashborad-box stat bg-white">
                            <h4 class="title">Manage Dashboard</h4>
                            <div class="section-body">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-xs-12 dar pro mr-3">
                                        <div class="item">
                                            <div class="icon">
                                                <i class="fa fa-list" aria-hidden="true"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="number">{{count($MyListings)}}</h6>
                                                <p class="type ml-1">Published Property</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-xs-12 dar rev mr-3">
                                        <div class="item">
                                            <div class="icon">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="number">0</h6>
                                                <p class="type ml-1">Total Reviews</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 dar com mr-3">
                                        <div class="item mb-0">
                                            <div class="icon">
                                                <i class="fas fa-comments"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="number">0</h6>
                                                <p class="type ml-1">Messages</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 dar booked">
                                        <div class="item mb-0">
                                            <div class="icon">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="number">0</h6>
                                                <p class="type ml-1">Times Bookmarked</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashborad-box">
                            <h4 class="title">Listing</h4>
                            <div class="section-body listing-table">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Property Name</th>
                                                <th>Date</th>
                                                <th>Rating</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($MyListings as $mylisting)
                                            <tr>
                                                <td>{{$mylisting->property_name}}</td>
                                                <td>{{date('d.m.Y',strtotime($mylisting->created_at))}}</td>
                                                <td class="rating"><span>5.0</span></td>
                                                <td class="status">
                                                    <span class="active">
                                                        @if($mylisting->active == "Pending Approval")
                                                        <p style="font-weight: 800; text-align:center" class="alert-warning"><span class="fa fa-clock"></span> {{$mylisting->active}}</p>
                                                        @elseif($mylisting->active == "Approved")
                                                            <p style="font-weight: 800; text-align:center" class="alert-success"><span class="fa fa-check"></span> {{$mylisting->active}}</p>
                                                        @else
                                                            <p style="font-weight: 800; text-align:center" class="alert-danger"><span class="fa fa-times"></span> {{$mylisting->active}}</p>
                                                        @endif
                                                    </span>
                                                </td>
                                                <td class="edit"><a href="{{url('/')}}/vendors/edit-properties/{{$mylisting->id}}"><i class="fa fa-pencil"></i> Edit</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="dashborad-box">
                            <h4 class="title">Message</h4>
                            <div class="section-body">
                                <div class="messages">
                                    <div class="message">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-1.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h6>Mary Smith</h6>
                                            <p class="post-time">22 Minutes ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-2.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h6>Karl Tyron</h6>
                                            <p class="post-time">0 Minutes ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-3.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h6>Lisa Willis</h6>
                                            <p class="post-time">53 Minutes ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="dashborad-box">
                            <h4 class="title">Review</h4>
                            <div class="section-body">
                                <div class="reviews">
                                    <div class="review">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-4.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h5>Family House</h5>
                                            <h6>Mary Smith</h6>
                                            <p class="post-time">10 hours ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <ul class="starts mb-0">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-5.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h5>Bay Apartment</h5>
                                            <h6>Karl Tyron</h6>
                                            <p class="post-time">22 hours ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <ul class="starts mb-0">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-6.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h5>Family House Villa</h5>
                                            <h6>Lisa Willis</h6>
                                            <p class="post-time">51 hours ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <ul class="starts mb-0">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="dashborad-box mb-0">
                            <h4 class="heading pt-0">Personal Information</h4>
                            <div class="section-inforamation">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" value="{{Auth::User()->name}}" class="form-control" placeholder="Enter your First name">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="text" value="{{Auth::User()->email}}" class="form-control" placeholder="Ex: example@domain.com">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" value="{{Auth::User()->mobile}}" class="form-control" placeholder="Ex: +1-800-7700-00">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>About Yourself</label>
                                                <textarea name="address" class="form-control" placeholder="Write about userself"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="password-section">
                                        <h6>Update Password</h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password" class="form-control" placeholder="Write new password">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Repeat Password</label>
                                                    <input type="password" class="form-control" placeholder="Write same password again">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg mt-2">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- START FOOTER -->
                        <div class="second-footer">
                            <div class="container">
                                <p>{{date('Y')}} ?? Copyright Premium Homes Limited - All Rights Reserved.</p>
                                {{-- <p>Made With <i class="fa fa-heart" aria-hidden="true"></i> By Code-Theme</p> --}}
                            </div>
                        </div>
                    </div>
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
