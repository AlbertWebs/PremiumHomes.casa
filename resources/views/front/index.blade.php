@extends('front.master')

@section('content')
<div class="int_content_wraapper int_content_left">
    <!--===Start Revolution Slider===-->
    <?php
       $Slider = DB::table('properties')->where('subscription','1')->get();
    ?>
    <div class="int_banner_slider">
        <div class="banner_box_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 align-self-center">
                        <div class="main_contentblock">
                            <div class="swiper-container" data-aos="fade-right">
                                <div class="swiper-wrapper">
                                    @foreach ($Slider as $slider)
                                    <div class="swiper-slide">
                                        <div class="swiper_imgbox imgbox1">
                                            <div class="swipper_img">
                                                <h4>{{$slider->status}} <span>Estate</span></h4>
                                                <h2 class="Property-heading">{{$slider->property_name}}</h2>
                                                <h3>kes {{$slider->price}}<span class="banner_span1"></span></h3>
                                                <p><i class="fa fa-map-marker mr-3"></i>{{$slider->address}}</p>
                                                <!-- homes List -->
                                                <ul class="homes-list clearfix">
                                                    <li>
                                                        <i class="fa fa-bed" aria-hidden="true"></i>
                                                        <span>{{$slider->bedroom}} Bedrooms</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-bath" aria-hidden="true"></i>
                                                        <span>{{$slider->Bath}} Bathrooms</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-object-group" aria-hidden="true"></i>
                                                        <span>{{$slider->sqft}} sq ft</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                        <span>1 Garages</span>
                                                    </li>
                                                </ul>
                                                <a href="{{route('property-single',[$slider->slung])}}" class="int_btn">View Property <span class="btn_caret"><i class="fas fa-caret-right"></i></span></a>
                                                <h1>Real</h1>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-7 align-self-center pr-0">
                        <!--=== Swiper ===-->
                        <div class="main_imgblock">
                            <div class="swiper-container" data-aos="fade-left">
                                <div class="swiper-wrapper">
                                    @foreach ($Slider as $slider)
                                    <div class="swiper-slide">
                                        <div class="swiper_contbox">
                                            <div class="swipper_conntent">
                                                <img src="{{url('/')}}/uploads/properties/{{$slider->featured_image}}" class="img-fluid " alt="images" />
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <?php
                                        $Gallery = DB::table('galleries')->where('property_id', $slider->id)->get();
                                        $Count = 1
                                    ?>
                                    @foreach ($Gallery as $gallery)
                                    <div class="swiper-slide">
                                        <div class="swiper_contbox">
                                            <div class="swipper_conntent">
                                                <img src="{{url('/')}}/images/{{$gallery->filename}}" class="img-fluid " alt="images" />
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=== Add Arrows ===-->
                <div class="banner_navi">
                    <div class="swiper-button-next">Next</div>
                    <div class="swiper-button-prev">Prev</div>
                </div>
            </div>
        </div>
    </div>
    <!--===End Revolution Slider===-->
</div>
{{-- @include('front.search') --}}

<!-- START SECTION PROPERTIES FOR SALE -->
<section class="recently portfolio featured bg-black-1 rec-pro">
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
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> {{$prop->bedrooms}} Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> {{$prop->Bath}} Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> {{$prop->sqft}} sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
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
<section class="recently portfolio bg-black-1 rec-pro">
    <div class="container-fluid">
        <div class="row">
            <div class="section-title col-md-5 pl-44">
                <h3>Properties</h3>
                <h2>For Rent</h2>
            </div>
        </div>
        <div class="portfolio col-xl-12 p-0">
            <div class="slick-lancers">
                @foreach ($PropertyRent as $prop)
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
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> {{$prop->bedrooms}} Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> {{$prop->Bath}} Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> {{$prop->sqft}} sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PROPERTIES FOR RENT -->

<!-- START SECTION AGENTS -->
<section class="team bg-white rec-pro bg-black-2">
    <div class="container-fluid">
        <div class="section-title col-md-5">
            <h3>Meet Our</h3>
            <h2>Representatives</h2>
        </div>
        <div class="row team-all">
            <?php
               $Agents = DB::table('users')->where('agent','1')->get();
               $delay = 5;
            ?>
            @foreach ($Agents as $agent)
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 team-pro" data-aos="fade-up" data-aos-delay="1{{$delay}}0">
                <div class="team-wrap">
                    <div class="team-img" style="width:225px; height:286px">
                        <img style="width:100%; height:100%; object-fit: cover;" src="{{url('/')}}/uploads/users/{{$agent->image}}" alt="" />
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h3>{{$agent->name}}</h3>
                            <p>Marketing Coordinator</p>
                            <div class="team-socials">
                                {{-- <ul>
                                    <li>
                                        <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                </ul> --}}
                            </div>
                            <span><a href="{{url('/')}}/properties-agent/{{$agent->slung}}">View Properties</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php $delay = $delay+1; ?>
            @endforeach
        </div>
    </div>
</section>
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
