@extends('front.master')

@section('content')
<div class="int_content_wraapper int_content_left">
    <!--===Start Revolution Slider===-->
    <div class="int_banner_slider">
        <div class="banner_box_wrapper">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 align-self-center">
                        <div class="main_contentblock">
                            <div class="swiper-container" data-aos="fade-right">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper_imgbox imgbox1">
                                            <div class="swipper_img">
                                                <h4>For Sale <span>Estate</span></h4>
                                                <h2>Rosehill Apartments</h2>
                                                <h3>$ 77,800<span class="banner_span1"></span></h3>
                                                <p><i class="fa fa-map-marker mr-3"></i>Rosehill Apartments - Lower Kabete Road, Nairobi</p>
                                                <!-- homes List -->
                                                <ul class="homes-list clearfix">
                                                    <li>
                                                        <i class="fa fa-bed" aria-hidden="true"></i>
                                                        <span>3 Bedrooms</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-bath" aria-hidden="true"></i>
                                                        <span>2 Bathrooms</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-object-group" aria-hidden="true"></i>
                                                        <span>184 sq ft</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-warehouse" aria-hidden="true"></i>
                                                        <span>1 Garages</span>
                                                    </li>
                                                </ul>
                                                <a href="{{route('properties-home',['sale'])}}" class="int_btn">View Property <span class="btn_caret"><i class="fas fa-caret-right"></i></span></a>
                                                <h1>Real</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-7 align-self-center pr-0">
                        <!--=== Swiper ===-->
                        <div class="main_imgblock">
                            <div class="swiper-container" data-aos="fade-left">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper_contbox">
                                            <div class="swipper_conntent">
                                                <img src="{{asset('theme/images/slider/slider-8.jpg')}}" class="img-fluid " alt="images" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper_contbox">
                                            <div class="swipper_conntent">
                                                <img src="{{asset('theme/images/slider/slider-9.jpg')}}" class="img-fluid" alt="images" />
                                            </div>
                                        </div>
                                    </div>
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
                <div class="agents-grid">
                    <div class="landscapes listing-item compact thehp-1" data-aos="fade-up" data-aos-delay="150">
                        <a href="single-property-1#" class="recent-16">
                            <div class="recent-img16 img-fluid img-center" style="background-image: url({{asset('theme/images/feature-properties/fp-8.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Sale</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House</div>
                                <div class="recent-price mb-3">$235,720</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="250">
                    <div class="people listing-item compact thehp-1">
                        <a href="single-property-1#" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url({{asset('theme/images/feature-properties/fp-9.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Sale</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Family Apartment</div>
                                <div class="recent-price mb-3">$560,000</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="350">
                    <div class="people landscapes no-pb pbp-3 listing-item compact thehp-1">
                        <a href="single-property-1#" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url({{asset('theme/images/feature-properties/fp-10.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Sale</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Villa House</div>
                                <div class="recent-price mb-3">$220,000</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="450">
                    <div class="landscapes listing-item compact thehp-1">
                        <a href="single-property-1#" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url({{asset('theme/images/interior/p-4.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Sale</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury Condo</div>
                                <div class="recent-price mb-3">$190,000</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="550">
                    <div class="people listing-item compact thehp-1">
                        <a href="single-property-1#" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url({{asset('theme/images/interior/p-5.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Sale</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House</div>
                                <div class="recent-price mb-3">$214,000</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up">
                    <div class="people landscapes no-pb pbp-3 listing-item compact thehp-1">
                        <a href="single-property-1#" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url({{asset('theme/images/single-property/s-6.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Sale</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House</div>
                                <div class="recent-price mb-3">$380,000</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up">
                    <div class="people landscapes no-pb pbp-3 listing-item compact thehp-1">
                        <a href="sisingle-property-1#" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url({{asset('theme/images/single-property/s-1.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Sale</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House 1</div>
                                <div class="recent-price mb-3">$960,000</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up">
                    <div class="people landscapes no-pb pbp-3 listing-item compact thehp-1">
                        <a href="single-property-1#" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url({{asset('theme/images/single-property/s-2.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Sale</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House 3</div>
                                <div class="recent-price mb-3">$6,500</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up">
                    <div class="people landscapes no-pb pbp-3 listing-item compact thehp-1">
                        <a href="single-property-1#" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url({{asset('theme/images/single-property/s-3.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Sale</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House 4</div>
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
<!-- END SECTION PROPERTIES FOR SALE -->

<!-- START SECTION SERVICES -->
<section class="services-home rec-pro">
    <div class="container-fluid">
        <div class="section-title">
            <h3>Property</h3>
            <h2>Services</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-12 m-top-0 m-bottom-40" data-aos="fade-up" data-aos-delay="150">
                <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                    <div class="media">
                        <i class="fa fa-home bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                    </div>
                    <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                        <h4 class="m-bottom-15 text-bold-700">Houses</h4>
                        <p>Kenya is a country in Africa with coastline on the Indian Ocean. It encompasses savannah, lakelands, the dramatic Great Rift Valley and mountain highlands. It's also home to wildlife like lions, elephants and rhino</p>
                        <a class="text-base text-base-dark-hover text-size-13" href="properties-full-list#">Read More <i class="fa fa-long-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 m-top-40 m-bottom-40" data-aos="fade-up" data-aos-delay="250">
                <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                    <div class="media">
                        <i class="fas fa-building bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                    </div>
                    <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                        <h4 class="m-bottom-15 text-bold-700">Apartments</h4>
                        <p>Kenya is a country in Africa with coastline on the Indian Ocean. It encompasses savannah, lakelands, the dramatic Great Rift Valley and mountain highlands. It's also home to wildlife like lions, elephants and rhino</p>
                        <a class="text-base text-base-dark-hover text-size-13" href="properties-full-list#">Read More <i class="fa fa-long-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 m-top-40 m-bottom-40 commercial" data-aos="fade-up" data-aos-delay="350">
                <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                    <div class="media">
                        <i class="fas fa-warehouse bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                    </div>
                    <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                        <h4 class="m-bottom-15 text-bold-700">Commercial</h4>
                        <p>Kenya is a country in Africa with coastline on the Indian Ocean. It encompasses savannah, lakelands, the dramatic Great Rift Valley and mountain highlands. It's also home to wildlife like lions, elephants and rhino</p>
                        <a class="text-base text-base-dark-hover text-size-13" href="properties-full-list#">Read More <i class="fa fa-long-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 m-top-40 m-bottom-40 commercial" data-aos="fade-up" data-aos-delay="450">
                <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                    <div class="media">
                        <i class="fas fa-map-marker bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                    </div>
                    <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                        <h4 class="m-bottom-15 text-bold-700">Plots</h4>
                        <p>Kenya is a country in Africa with coastline on the Indian Ocean. It encompasses savannah, lakelands, the dramatic Great Rift Valley and mountain highlands. It's also home to wildlife like lions, elephants and rhino</p>
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
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                    <div class="landscapes listing-item compact thehp-2">
                        <a href="single-property-1#" class="recent-16">
                            <div class="recent-img16 img-fluid img-center" style="background-image: url({{asset('theme/images/interior/p-1.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Rent</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House</div>
                                <div class="recent-price mb-3">$6,500</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
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
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="550">
                    <div class="people listing-item compact thehp-2">
                        <a href="single-property-1#" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url({{asset('theme/images/feature-properties/fp-12.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Rent</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House</div>
                                <div class="recent-price mb-3">$6,500</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up">
                    <div class="people landscapes no-pb pbp-3 listing-item compact thehp-2">
                        <a href="single-property-1#" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url({{asset('theme/images/single-property/s-6.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Rent</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House</div>
                                <div class="recent-price mb-3">$6,500</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up">
                    <div class="people landscapes no-pb pbp-3 listing-item compact thehp-2">
                        <a href="sisingle-property-1#" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url({{asset('theme/images/single-property/s-1.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Rent</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House</div>
                                <div class="recent-price mb-3">$6,500</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up">
                    <div class="people landscapes no-pb pbp-3 listing-item compact thehp-2">
                        <a href="single-property-1#" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url({{asset('theme/images/single-property/s-2.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Rent</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House</div>
                                <div class="recent-price mb-3">$6,500</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> 6 Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> 3 Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up">
                    <div class="people landscapes no-pb pbp-3 listing-item compact thehp-2">
                        <a href="single-property-1#" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url({{asset('theme/images/single-property/s-3.jpg')}});"></div>
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Rent</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">Luxury House</div>
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
                            <a href="blog-details#"><h3>The Real Estate News</h3></a>
                            <span class="date">Jun 23, 2020 &nbsp;/&nbsp; By Albert</span>
                            <div class="news-item-descr">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
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
                            <a href="blog-details#"><h3>The Real Estate News</h3></a>
                            <span class="date">Jun 23, 2020 &nbsp;/&nbsp; By Albert</span>
                            <div class="news-item-descr">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
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
