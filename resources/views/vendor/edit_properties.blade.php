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

<body class="inner-pages maxw1600 m0a dashboard-bd">
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
                    <div class="col-lg-9 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2">
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
                                            <a href="my-listings.html">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>My Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a href="favorited-listings.html">
                                                <i class="fa fa-heart mr-3" aria-hidden="true"></i>Favorited Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a class="active" href="add-property.html">
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
                        <form action="{{route('save-property-post')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="single-add-property">
                                <h3>Property description and price</h3>
                                <center>
                                    @if(Session::has('message'))
                                                  <div class="alert alert-success">{{ Session::get('message') }}</div>
                                   @endif

                                   @if(Session::has('messageError'))
                                                  <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                                   @endif
                                </center>
                                <div class="property-form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <label for="title">Property Title</label>
                                                    <input required name="property_name" type="text" value="{{$Property->property_name}}" name="title" id="title" placeholder="Enter your property title">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <label for="description">Property Description</label>
                                                    {{-- <textarea id="description" name="property_description" placeholder="Describe about your property"></textarea> --}}
                                                    <textarea name="property_description" id="article_ckeditor" rows="10" cols="80" required>{{$Property->property_name}}</textarea>

                                                    <script src="https://amanivehiclesounds.co.ke/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                                                    <script>
                                                        CKEDITOR.replace( 'article_ckeditor' );
                                                    </script>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            {{--  --}}
                                            <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                                <div class="form-group categories">
                                                    <label for="price">Rent/Sale</label>
                                                    <select name="status" class="nice-select form-control wide" required>
                                                        <option selected value="{{$Property->status}}">{{$Property->status}}</option>
                                                        <option value="Rent">Rent</option>
                                                        <option value="Sale">Sale</option>
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                                <div class="form-group categories">
                                                    <label for="price">Type</label>
                                                    <select name="type" class="nice-select form-control wide" required>
                                                        <option selected value="{{$Property->type}}">{{$Property->type}}</option>
                                                        <option value="commercial">commercial</option>
                                                        <option value="apartment">apartment</option>
                                                        <option value="home">home</option>
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                                <div class="form-group categories">
                                                    <label for="price">Rooms</label>
                                                    <select name="rooms" class="nice-select form-control wide" required>
                                                        <option selected value="{{$Property->rooms}}">{{$Property->rooms}}</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  --}}
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <p class="no-mb">
                                                    <label for="price">Price</label>
                                                    <input type="text" value="{{$Property->price}}" name="price" placeholder="USD" id="price" required>
                                                </p>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p class="no-mb last">
                                                    <label for="area">Area</label>
                                                    <input type="text" name="sqft" value="{{$Property->sqft}}" placeholder="Sqft" id="area" required>
                                                </p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="single-add-property">
                                <h3>Featured Image</h3>
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                                <div class="property-form-group">
                                    <div class="row">
                                        {{-- <div class="col-md-12">
                                            <form action="https://code-theme.com/file-upload" class="dropzone"></form>
                                        </div> --}}
                                        <div class="container col-md-6">
                                            <div class="mb-5">
                                                {{-- <label for="Image" class="form-label">Bootstrap 5 image Upload with Preview</label> --}}
                                                <input name="featured_image" class="form-control" type="file" id="formFile" onchange="preview()">
                                                {{-- <button onclick="clearImage()" class="btn btn-primary mt-3">Click me</button> --}}
                                            </div>
                                            <img id="frame" src="{{url('/')}}/uploads/properties/{{$Property->featured_image}}" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="{{$Property->featured_image}}" name="featured_image_cheat">
                            <input type="hidden" value="{{$Property->id}}" name="PropertyID">
                            {{--  --}}
                            <script>
                                function preview() {
                                    frame.src = URL.createObjectURL(event.target.files[0]);
                                }
                                function clearImage() {
                                    document.getElementById('formFile').value = null;
                                    frame.src = "";
                                }
                            </script>
                            {{--  --}}
                            <div class="single-add-property">
                                <h3>property Location</h3>
                                <div class="property-form-group">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p>
                                                <label for="address">Address</label>
                                                <input type="text" name="address" value="{{$Property->address}}" placeholder="e.g 3571 Riverside Downs" id="address" required>
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p>
                                                <label for="city">City</label>
                                                <input type="text" name="city" value="{{$Property->city}}"  placeholder="Enter Your City" id="city" required>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p>
                                                <label for="state">State</label>
                                                <input type="text" name="state" value="{{$Property->state}}" placeholder="Enter Your State" id="state" required>
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p>
                                                <label for="country">Country</label>
                                                <input type="text" name="country" value="{{$Property->country}}" placeholder="Enter Your Country" id="country" required>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb first">
                                                <label for="latitude">Google Maps latitude</label>
                                                <input type="text" name="latitude" value="{{$Property->latitude}}" placeholder="Google Maps latitude" id="latitude" >
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb last">
                                                <label for="longitude">Google Maps longitude</label>
                                                <input type="text" name="longitude" value="{{$Property->longitude}}" placeholder="Google Maps longitude" id="longitude">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="description">iframe</label>
                                                <textarea id="description" name="iframe" placeholder="Property Iframe">{{$Property->iframe}}</textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-add-property">
                                <h3>Extra Information</h3>
                                <div class="property-form-group">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb">
                                                <label for="price">Year of Make</label>
                                                <input type="text" value="{{$Property->yom}}" name="yom" placeholder="{{date('Y')}}" id="price" required>
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb">
                                                <label for="price">Video</label>
                                                <input type="text" value="{{$Property->video}}" name="video" placeholder="https://www.youtube.com/watch?v=hGiTSuJl1U8" id="price" required>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="single-add-property">
                                <h3>Property Features</h3>
                                <div class="property-form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="pro-feature-add pl-0">
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-a" type="checkbox" @if($Property->ac == "on") checked @endif name="ac">
                                                            <label for="check-a">Air Conditioning</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-b" type="checkbox" @if($Property->swimming == "on") checked @endif name="swimming">
                                                            <label for="check-b">Swimming Pool</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-c" type="checkbox" @if($Property->heater == "on") checked @endif name="heater">
                                                            <label for="check-c">Solar Heater</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="laundry" type="checkbox" @if($Property->laundry == "on") checked @endif name="laundry">
                                                            <label for="laundry">Laundry Room</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="parking" type="checkbox" @if($Property->parking == "on") checked @endif name="parking">
                                                            <label for="parking">Parking</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="dishwasher" type="checkbox" @if($Property->dishwasher == "on") checked @endif name="dishwasher">
                                                            <label for="dishwasher">Dishwasher</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="balcony" type="checkbox" @if($Property->balcony == "on") checked @endif name="balcony">
                                                            <label for="balcony">Balcony</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="internet" type="checkbox" @if($Property->internet == "on") checked @endif name="internet">
                                                            <label for="internet">Internet</label>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-e" type="checkbox" @if($Property->gym == "on") checked @endif name="gym">
                                                            <label for="check-e">Gym</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-g" type="checkbox" @if($Property->alarm == "on") checked @endif name="alarm">
                                                            <label for="check-g">Alarm</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-h" type="checkbox" @if($Property->window_covering == "on") checked @endif name="window_covering">
                                                            <label for="check-h">Window Covering</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-i" type="checkbox" @if($Property->refrigerator == "on") checked @endif name="refrigerator">
                                                            <label for="check-i">Refrigerator</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-j" type="checkbox" @if($Property->cable == "on") checked @endif name="cable">
                                                            <label for="check-j">TV Cable & WIFI</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="fl-wrap filter-tags clearfix">
                                                    <div class="checkboxes float-left">
                                                        <div class="filter-tags-wrap">
                                                            <input id="check-k" type="checkbox" @if($Property->microwave == "on") checked @endif name="microwave">
                                                            <label for="check-k">Microwave</label>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-add-property">
                                <h3>Contact Information</h3>
                                <div class="property-form-group">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p>
                                                <label for="con-name">Name</label>
                                                <input type="text" value="{{Auth::User()->name}}" placeholder="Enter Your Name" id="con-name" name="con_name" required>
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p>
                                                <label for="con-user">Username</label>
                                                <input type="text" value="{{Auth::User()->email}}" placeholder="Enter Your Username" id="con-user" name="con_user" required>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb first">
                                                <label for="con-email">Email</label>
                                                <input type="email" placeholder="Enter Your Email" value="{{Auth::User()->email}}" id="con-email" name="con_email" required>
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb last">
                                                <label for="con-phn">Phone</label>
                                                <input type="text" value="{{Auth::User()->mobile}}" placeholder="Enter Your Phone Number" id="con-phn" name="con_phn" required>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-property-button pt-5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="prperty-submit-button">
                                                <button type="submit"><span class="fa fa-save"></span> Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
        <script src="{{asset('theme/js/popper.min.js')}}"></script>
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
        <script src="{{asset('theme/js/dropzone.js')}}"></script>

        <!-- MAIN JS -->
        <script src="{{asset('theme/js/script.js')}}"></script>
        <script>
            $(".dropzone").dropzone({
                dictDefaultMessage: "<i class='fa fa-cloud-upload'></i> Click here or drop files to upload",
            });

        </script>
        <script>
            $(".header-user-name").on("click", function() {
                $(".header-user-menu ul").toggleClass("hu-menu-vis");
                $(this).toggleClass("hu-menu-visdec");
            });

        </script>
        {{--  --}}

    </div>
    <!-- Wrapper / End -->
</body>


</html>
