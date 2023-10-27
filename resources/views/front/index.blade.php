@extends('front.master-home')

@section('content')

    <!-- STAR HEADER SEARCH -->
    <div id="map-container" class="fullwidth-home-map dark-overlay">
        <!-- Video -->
        <div class="video-container">
            <video style="object-fit:cover !important" poster="{{asset('uploads/banners/slider-main.png')}}" loop autoplay muted>
                {{-- <source src="{{asset('theme/video/pexels-african-creator-15556055.mp4')}}" type="video/mp4"> --}}
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

                                        <div class="tab-content search-widget">
                                            <form method="POST" action="{{url('/search-property')}}">

                                                @csrf
                                                    <div class="tab-pane fade show active" id="tabs_1">
                                                        <div class="rld-main-search">
                                                            <div class="row">
                                                                <div class="rld-single-input">
                                                                    <input name="keyword" type="text" placeholder="Enter Keyword">
                                                                </div>
                                                                <div class="rld-single-select ml-22">
                                                                    <select required="Select Type" name="type" class="select single-select">
                                                                        <option value="" selected disabled hidden>Choose Type...</option>
                                                                        <option value="any" >Any</option>
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
                                                                         <option selected value="" disabled>Sale/Rent</option>
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

{{-- @include('front.search') --}}





<!-- START SECTION FEATURED PROPERTIES -->
<section class="recently portfolio bg-black-1 rec-pro2 hmp ho-17">
    <div class="container-fluid">
        <div class="row">
            <div class="section-title col-md-5 pl-44">
                <h3>Properties</h3>
                <h2>For Sale</h2>
            </div>
        </div>
        <div class="row portfolio-items">
            @foreach ($Property as $prop)
            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale" data-aos="zoom-in" data-aos-delay="150">
                <div class="project-single landscapes listing-item compact thehp-1">
                    <a href="{{route('property-single',[$prop->slung])}}" class="recent-16 hmp" data-aos="fade-up">
                        <div class="recent-img16 img-fluid img-center" style="background-image: url('{{asset('uploads/properties/')}}/{{$prop->featured_image}}');" ></div>
                        <div class="recent-content"></div>
                        <div class="listing-badges">
                            <span>For {{$prop->status}}</span>
                        </div>
                        <div class="recent-details">
                            <div class="recent-title">{{$prop->property_name}}</div>
                            <div class="price-details">
                            <div class="recent-price mb-3">KES {{$prop->price}}</div>
                            <div class="recent-price mb-3" style="font-weight:900; color:#bf9d34">
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
                                    {{-- <i class="fa fa-car mr-1" aria-hidden="true"></i> {{$prop->garages}} Gr <span class="mr-1">|</span> --}}
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
        <div class="bg-all">
            <a target="new" href="{{route('properties-home',['sale'])}}" class="btn btn-outline-light">All Premium For Sale Properties</a>
        </div>
    </div>
</section>
<!-- END SECTION FEATURED PROPERTIES -->

<!-- START SECTION PROPERTIES FOR SALE -->
{{-- <section class="recently portfolio featured bg-black-1 rec-pro">
    <div class="container-fluid">
        <div class="row">
            <div class="section-title col-md-5 pl-44">
                <h3>Properties</h3>
                <h2>For Sale</h2>
            </div>
        </div>
        <div class="portfolio col-xl-12 p-0">
            <div class="slick-lancers">
                @foreach ($Property as $prop)
                <div class="agents-grid">
                    <div class="landscapes listing-item compact thehp-1" data-aos="fade-up" data-aos-delay="150">
                        <a href="{{route('property-single',[$prop->slung])}}" class="recent-16">
                            <div class="recent-img16 img-fluid img-center" style="background-image: url('{{asset('uploads/properties/')}}/{{$prop->featured_image}}');"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For {{$prop->status}}</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">{{$prop->property_name}}</div>
                                <div class="recent-price mb-3">kes {{$prop->price}}</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> {{$prop->bedrooms}} Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> {{$prop->Bath}} Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> {{$prop->sqft}} </div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section> --}}
<!-- END SECTION PROPERTIES FOR SALE -->

<!-- START SECTION SERVICES -->
<section class="services-home rec-pro">
    <div class="container-fluid">
        <div class="section-title">
            <h3>Property</h3>
            <h2>Services</h2>
        </div>
        <div class="row">
            <div  class="col-lg-6 col-md-12 m-top-0 m-bottom-40" data-aos="fade-up" data-aos-delay="150">
                <div style="min-height:300px !important;" class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                    <div class="media">
                        <i class="fa fa-home bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                    </div>
                    <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                        <h4 class="m-bottom-15 text-bold-700">Buying</h4>
                        <p>

                            Imagine a world where your dream home isn't just a vision, but a reality. Welcome to Premium Homes, where luxury living becomes a tangible experience. If you're considering buying property with Premium Homes, you're stepping into a realm of unparalleled craftsmanship, thoughtful design, and exceptional service. In this guide, we'll walk you through the process of purchasing property with Premium Homes, ensuring that your journey is as smooth and rewarding as the homes themselves.
                            <br><br>
                            We handpick high-end luxurious homes across the globe.

                            With our distinctive taste of class we list only the best homes.

                            With access to unrivaled property for sale Globally, premium Homes is expertly positioned to help you in your property search.
                        </p>
                        <a class="text-base text-base-dark-hover text-size-13" href="{{url('/')}}/buying">Read More <i class="fa fa-long-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 m-top-40 m-bottom-40" data-aos="fade-up" data-aos-delay="250">
                <div style="min-height:300px" class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                    <div class="media">
                        <i class="fas fa-building bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                    </div>
                    <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                        <h4 class="m-bottom-15 text-bold-700">Renting</h4>
                        <p>
                            Welcome to Premium Homes  - your starting point to the finest property to rent across the world and gateway to luxury global rental properties through Premium Homes.
                            Premium Homes offers local real estate agents in major cities offering a wide range of property for rent in Listed areas including apartments, town houses, maisonettes and houses.
                            <br><br>
                            When it comes to finding the perfect rental property, every detail matters. Your home should not only reflect your lifestyle but also offer a haven of comfort, convenience, and sophistication. That's where Premium Homes comes in. We're not just a real estate company; we're your partners in discovering rental properties that redefine luxury living.
                        </p>
                        <a class="text-base text-base-dark-hover text-size-13" href="{{url('/')}}/renting">Read More <i class="fa fa-long-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION SERVICES -->
<!-- START SECTION PROPERTIES FOR RENT -->
{{-- <section class="recently portfolio bg-black-2 rec-pro">
    <div class="container-fluid">
        <div class="row">
            <div class="section-title col-md-5 pl-44">
                <h3>Featered Plots</h3>
                <h2>Sale & Lease</h2>
            </div>
        </div>
        <div class="portfolio col-xl-12 p-0">
            <div class="slick-lancers">
                @foreach ($PropertyPlots as $prop)
                <div class="agents-grid">
                    <div class="landscapes listing-item compact thehp-1" data-aos="fade-up" data-aos-delay="150">
                        <a href="{{route('property-single',[$prop->slung])}}" class="recent-16">
                            <div class="recent-img16 img-fluid img-center" style="background-image: url('{{asset('uploads/properties/')}}/{{$prop->featured_image}}');"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For {{$prop->status}}</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">{{$prop->property_name}}</div>
                                <div class="recent-price mb-3">kes {{$prop->price}}</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> {{$prop->bedrooms}} Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> {{$prop->Bath}} Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> {{$prop->sqft}} </div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section> --}}
<!-- END SECTION PROPERTIES FOR RENT -->

<!-- START SECTION PROPERTIES FOR RENT -->
<section class="recently portfolio bg-black-1 rec-pro2 hmp ho-17">
    <div class="container-fluid">
        <div class="row">
            <div class="section-title col-md-5 pl-44">
                <h3>Properties</h3>
                <h2>For Rent</h2>
            </div>
        </div>
        <div class="row portfolio-items">
            @foreach ($PropertyRent as $prop)
            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale" data-aos="zoom-in" data-aos-delay="150">
                <div class="project-single landscapes listing-item compact thehp-1">
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
                            <div class="recent-price mb-3" style="font-weight:900; color:#bf9d34">
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
                                    <i class="fa fa-car mr-1" aria-hidden="true"></i> {{$prop->garages}} Gr <span class="mr-1">|</span>
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
        <div class="bg-all">
            <a target="new" href="{{route('properties-home',['rent'])}}" class="btn btn-outline-light">All Premium Properties To Let</a>
        </div>
    </div>
</section>
<!-- END SECTION PROPERTIES FOR RENT -->

<!-- START SECTION AGENTS -->

<!-- END SECTION AGENTS -->

<!-- START SECTION BLOG -->
<section class="blog-section bg-black-1 rec-pro">
    <div class="container-fluid">
        <div class="section-title">
            <h3>Latest</h3>
            <h2>News</h2>
        </div>
        <div class="news-wrap">
            <div class="row">
                @foreach ($Blog as $Blog)
                <div class="col-xl-6 col-md-12 col-xs-12" data-aos="fade-right">
                    <div class="news-item news-item-sm">
                        <a href="{{url('/')}}/blogs/{{$Blog->slung}}" class="news-img-link">
                            <div class="news-item-img">
                                <img class="resp-img" src="{{url('/')}}/uploads/blogs/{{$Blog->image_one}}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="{{url('/')}}/blogs/{{$Blog->slung}}"><h3>{{$Blog->title}}</h3></a>
                            <span class="date">{{date('M', strtotime($Blog->created_at))}} {{date('d', strtotime($Blog->created_at))}}, {{date('Y', strtotime($Blog->created_at))}}  &nbsp;/&nbsp; By Admin</span>
                            <div class="news-item-descr">
                                <p>
                                    {!!html_entity_decode($Blog->meta)!!}
                                </p>
                            </div>
                            <br>
                            <div class="news-item-bottom">
                                <a href="{{url('/')}}/blogs/{{$Blog->slung}}" class="news-link">Read more...</a>
                                <ul class="action-list">
                                    <li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->
@endsection
