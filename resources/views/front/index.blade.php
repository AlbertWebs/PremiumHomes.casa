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
                <div class="row ">
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
                            We handpick high-end luxurious homes across the globe.

                            With our distinctive taste of class we list only the best homes.

                            With access to unrivaled property for sale Globally, premium Homes is expertly positioned to help you in your property search.
                        </p>
                        <a class="text-base text-base-dark-hover text-size-13" href="properties-full-list#">Read More <i class="fa fa-long-arrow-right ml-2"></i></a>
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
                        </p>
                        <a class="text-base text-base-dark-hover text-size-13" href="properties-full-list#">Read More <i class="fa fa-long-arrow-right ml-2"></i></a>
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
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="250">
                    <div class="people listing-item compact thehp-2">
                        <a href="single-property-1#" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url({{asset('theme/images/interior/p-2.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Rent</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Family Apartment</div>
                                <div class="recent-price mb-3">$6,500</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="350">
                    <div class="people landscapes no-pb pbp-3 listing-item compact thehp-2">
                        <a href="single-property-1#" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url({{asset('theme/images/interior/p-3.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Rent</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Villa House</div>
                                <div class="recent-price mb-3">$6,500</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="450">
                    <div class="landscapes listing-item compact thehp-2">
                        <a href="single-property-1#" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url({{asset('theme/images/feature-properties/fp-11.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Rent</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury Condo</div>
                                <div class="recent-price mb-3">$6,500</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>

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
            <h2>Agents</h2>
        </div>
        <div class="row team-all">
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 team-pro" data-aos="fade-up" data-aos-delay="150">
                <div class="team-wrap">
                    <div class="team-img">
                        <img src="{{asset('theme/images/team/t-4.jpg')}}" alt="" />
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h3>Moreen Kigen</h3>
                            <p>Real Estate Agent</p>
                            <div class="team-socials">
                                <ul>
                                    <li>
                                        <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <span><a href="agent-details#">View Profile</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
               $Agents = DB::table('users')->where('agent','1')->get();
               $delay = 5;
            ?>
            @foreach ($Agents as $agent)
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 team-pro" data-aos="fade-up" data-aos-delay="1{{$delay}}0">
                <div class="team-wrap">
                    <div class="team-img">
                        <img src="{{url('/')}}/uploads/users/{{$agent->image}}" alt="" />
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h3>{{$agent->name}}</h3>
                            <p>Real Estate Agent</p>
                            <div class="team-socials">
                                {{-- <ul>
                                    <li>
                                        <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                </ul> --}}
                            </div>
                            <span><a href="{{url('/')}}/properties-agent/{{$agent->id}}">View Properties</a></span>
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
                <div class="col-xl-6 col-md-12 col-xs-12" data-aos="fade-right">
                    <div class="news-item news-item-sm">
                        <a href="blog-details#" class="news-img-link">
                            <div class="news-item-img">
                                <img class="resp-img" src="{{asset('theme/images/blog/b-1.jpg')}}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="blog-details#"><h3>How Long Does It Really Take to Buy a House?</h3></a>
                            <span class="date">Jun 23, 2022 &nbsp;/&nbsp; By Albert</span>
                            <div class="news-item-descr">
                                <p>
                                    It is super important for any real estate investor to be familiar with the process of closing the sale of a property.
                                </p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="blog-details#" class="news-link">Read more...</a>
                                <ul class="action-list">
                                    <li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-6 col-md-12 col-xs-12" data-aos="fade-left">
                    <div class="news-item news-item-sm">
                        <a href="blog-details#" class="news-img-link">
                            <div class="news-item-img">
                                <img class="resp-img" src="{{asset('theme/images/blog/b-3.jpg')}}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="blog-details#"><h3>Avoid Paying Unnecessary Fees by Lowering Your Closing Costs—Here’s How</h3></a>
                            <span class="date">Oct 22, 2022 &nbsp;/&nbsp; By Albert</span>
                            <div class="news-item-descr">
                                <p>
                                    The hardest part’s over because you’ve found the perfect house. Now you have to go through negotiations to buy the house and determine your closing costs.
                                </p>
                            </div>
                            <div class="news-item-bottom">
                                <a href="blog-details#" class="news-link">Read more...</a>
                                <ul class="action-list">
                                    <li class="action-item"><i class="fa fa-heart"></i> <span>306</span></li>
                                    <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->
@endsection
