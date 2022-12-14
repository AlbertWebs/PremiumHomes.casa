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
                         <br><br>
                         <div class="my-properties">

                             <table class="table-responsive">
                                 <thead>
                                     <tr>
                                         <th class="pl-2">Amenities</th>
                                         <th class="p-0">Property Name</th>
                                         <th>Proximity</th>
                                         <th>Rating</th>
                                         <th>Category</th>
                                         <th>Actions</th>

                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach($Nearby as $mylisting)
                                     <tr>
                                         <td class="image myelist">
                                             <a href="{{url('/')}}/properties/{{$mylisting->slung}}">
                                                <img alt="{{$mylisting->property_name}}" src="{{url('/')}}/uploads/properties/{{$mylisting->featured_image}}" class="img-fluid">
                                                <center>
                                                    <a style="color:#bf9d34" href="{{url('/')}}/vendors/add-gallery/{{$mylisting->id}}" class="edit"><i class="fa fa-image"></i> Add</a>
                                                    |
                                                    <a style="color:#bf9d34" href="{{url('/')}}/vendors/update-gallery/{{$mylisting->id}}" class="edit"><i class="fa fa-edit"></i> Update</a>
                                                </center>
                                            </a>
                                         </td>
                                         <td>
                                             <div class="inner">
                                                 <a target="new" href="{{url('/')}}/properties/{{$mylisting->slung}}">
                                                    <h2 style="max-width:300px">{{$mylisting->property_name}}</h2>
                                                </a>
                                                 <figure>
                                                    <i class="lni-map-marker"></i>
                                                    {{$mylisting->address}},  {{$mylisting->city}}
                                                    {{-- <br> --}}

                                                </figure>
                                                 {{-- <ul class="starts text-left mb-0">
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
                                                 </ul> --}}
                                             </div>
                                         </td>
                                         <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
                                         <td>
                                            <div class="inner">
                                                @if($mylisting->active == "Pending Approval")
                                                    <p style="font-weight: 800; text-align:center" class="alert-warning"><span class="fa fa-clock"></span> {{$mylisting->active}}</p>
                                                @elseif($mylisting->active == "Approved")
                                                    <p style="font-weight: 800; text-align:center" class="alert-success"><span class="fa fa-check"></span> {{$mylisting->active}}</p>
                                                @else
                                                    <p style="font-weight: 800; text-align:center" class="alert-danger"><span class="fa fa-times"></span> {{$mylisting->active}}</p>
                                                @endif
                                                {{-- <br> --}}
                                                {{-- Added On:{{date('d.m.Y',strtotime($mylisting->created_at))}} --}}
                                            </div>
                                         </td>

                                         <td>
                                            <div class="inner">163
                                            </div>
                                         </td>
                                         <td class="actions">
                                             <a href="{{url('/')}}/vendors/edit-properties/{{$mylisting->id}}" class="edit"><i class="fa fa-edit"></i> Edit</a>
                                             <a onclick="return confirm('Would you wish to Delete this listing? You cannot undo this operation')" href="{{url('/')}}/vendors/delete-properties/{{$mylisting->id}}"><i class="far fa-trash-alt"></i> Delete</a>
                                         </td>
                                         <td>
                                            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
                                            @if($mylisting->subscription == 0)
                                            <a onclick="return confirm('Would you wish to upgrade this listing to Premium?')" href="{{url('/')}}/vendors/upgrade/{{$mylisting->id}}"  class="btn btn-outline" style="background-color:#C0C0C0; color:#ffffff"><span class="fa fa-check-square" aria-hidden="true"></span> Standard</a>
                                            @else
                                            <a onclick="return confirm('Would you wish to downgread this listing to Standard?')" href="{{url('/')}}/vendors/downgrade/{{$mylisting->id}}"  class="btn btn-outline" style="background-color:#bf9d34; color:#ffffff"><span class="fa fa-crown"></span> Premium</a>
                                            @endif
                                        </td>
                                     </tr>
                                     @endforeach
                                 </tbody>
                             </table>
                             {{-- <div class="pagination-container">
                                 <nav>
                                     <ul class="pagination">
                                         <li class="page-item"><a class="btn btn-common" href="#"><i class="lni-chevron-left"></i> Previous </a></li>
                                         <li class="page-item"><a class="page-link" href="#">1</a></li>
                                         <li class="page-item"><a class="page-link" href="#">2</a></li>
                                         <li class="page-item"><a class="page-link" href="#">3</a></li>
                                         <li class="page-item"><a class="btn btn-common" href="#">Next <i class="lni-chevron-right"></i></a></li>
                                     </ul>
                                 </nav>
                             </div> --}}
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
