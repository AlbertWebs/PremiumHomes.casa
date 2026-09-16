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
                                <p class="mt-4">We have over a hundred properties for you.</p>
                            </div>
                            <!--/ End Welcome Text -->
                            <!-- Search Form -->
                            <div class="col-12">
                                <div class="banner-search-wrap">
                                    @if(Session::has('message'))
                                        <div class="alert alert-info text-center">{{ Session::get('message') }}</div>
                                    @endif
                                    @if(Session::has('messageError'))
                                        <div class="alert alert-danger text-center">{{ Session::get('messageError') }}</div>
                                    @endif

                                        <div class="tab-content search-widget">
                                            <form class="hero-search-form" method="POST" action="{{url('/search-property')}}">
                                                @csrf
                                                    <div class="tab-pane fade show active" id="tabs_1">
                                                        <div class="rld-main-search hero-search-bar">
                                                            <div class="hero-search-fields">
                                                                <div class="rld-single-input hero-field-keyword">
                                                                    <label class="sr-only" for="hero-keyword">Keyword</label>
                                                                    <input id="hero-keyword" name="keyword" type="text" placeholder="Enter Keyword" autocomplete="off">
                                                                </div>
                                                                <div class="rld-single-select hero-field-type">
                                                                    <label class="sr-only" for="hero-type">Property type</label>
                                                                    <select id="hero-type" required name="type" class="select single-select">
                                                                        <option value="" selected disabled>Property type</option>
                                                                        <option value="any">Any</option>
                                                                        <option value="Duplex">Duplex</option>
                                                                        <option value="Condominium">Condominium</option>
                                                                        <option value="Villa">Villa</option>
                                                                        <option value="Mansion">Mansion</option>
                                                                        <option value="Townhouse">Townhouse</option>
                                                                        <option value="Cottages">Cottages</option>
                                                                        <option value="Bungalow">Bungalow</option>
                                                                        <option value="Apartment">Apartment</option>
                                                                        <option value="Resorts">Resorts</option>
                                                                        <option value="Plot">Plot</option>
                                                                        <option value="Penthouse">Penthouse</option>
                                                                        <option value="Commercial Properties">Commercial Properties</option>
                                                                    </select>
                                                                </div>
                                                                <div class="rld-single-select hero-field-status">
                                                                    <label class="sr-only" for="hero-status">Sale or rent</label>
                                                                    <select id="hero-status" required name="status" class="select single-select">
                                                                        <option selected value="" disabled>Sale / Rent</option>
                                                                        <option value="Rent">Rent</option>
                                                                        <option value="Sale">Sale</option>
                                                                    </select>
                                                                </div>
                                                                <div class="rld-single-input hero-field-location">
                                                                    <label class="sr-only" for="hero-location">Location</label>
                                                                    <input id="hero-location" name="location" type="text" placeholder="Location e.g Karen" autocomplete="address-level2">
                                                                </div>
                                                                <button type="submit" class="btn btn-yellow hero-search-go">GO</button>
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
        <div class="row ph-card-grid">
            @forelse ($Property as $prop)
            <div class="col-lg-4 col-md-6 col-xs-12" data-aos="fade-up">
                @include('front.partials.property-card')
            </div>
            @empty
            <div class="col-12">
                <div class="ph-empty">
                    <strong>Sale listings coming soon</strong>
                    <p>Our advisors are preparing a curated selection of homes for sale.</p>
                </div>
            </div>
            @endforelse
        </div>
        <div class="bg-all ph-cta-row">
            <a href="{{route('properties-home',['sale'])}}" class="btn btn-outline-light">See all for sale</a>
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
            <div class="col-lg-6 col-md-12 m-bottom-40" data-aos="fade-up">
                <div class="service bg-light-2 box-shadow-1">
                    <div class="media">
                        <i class="fa fa-home bg-base text-white rounded-100 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                    </div>
                    <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                        <h4 class="m-bottom-15 text-bold-700">Buying</h4>
                        <p>We handpick high-end homes and guide you from first viewing to keys in hand — with discreet advice, strong negotiation, and a portfolio built for lasting value.</p>
                        <a class="text-base text-base-dark-hover text-size-13" href="{{url('/')}}/buying">Learn more <i class="fa fa-long-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 m-bottom-40" data-aos="fade-up" data-aos-delay="120">
                <div class="service bg-light-2 box-shadow-1">
                    <div class="media">
                        <i class="fas fa-building bg-base text-white rounded-100 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                    </div>
                    <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                        <h4 class="m-bottom-15 text-bold-700">Renting</h4>
                        <p>From city apartments to private estates, we match you with rental homes that feel considered — well finished, well located, and ready to live in.</p>
                        <a class="text-base text-base-dark-hover text-size-13" href="{{url('/')}}/renting">Learn more <i class="fa fa-long-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ph-statement">
    <div class="ph-statement-inner">
        <span class="ph-kicker">Nairobi · Private residences</span>
        <h2>Find where you want to live</h2>
        <span class="ph-rule" aria-hidden="true"></span>
        <p>Premium Homes Ltd. curates luxury residences in Nairobi’s most desirable neighbourhoods — homes chosen for craft, location, and a quieter kind of prestige.</p>
        <ul class="ph-places">
            <li>Karen</li>
            <li>Runda</li>
            <li>Lavington</li>
            <li>Westlands</li>
            <li>Muthaiga</li>
            <li>Kitisuru</li>
        </ul>
        <div class="ph-statement-actions">
            <a href="{{ route('properties-home', ['sale']) }}" class="ph-btn">View homes for sale</a>
            <a href="{{ url('/contact-us') }}" class="ph-btn ph-btn-ghost">Speak with an advisor</a>
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
        <div class="row ph-card-grid">
            @forelse ($PropertyRent as $prop)
            <div class="col-lg-4 col-md-6 col-xs-12" data-aos="fade-up">
                @include('front.partials.property-card')
            </div>
            @empty
            <div class="col-12">
                <div class="ph-invite">
                    <span class="ph-invite-icon" aria-hidden="true"><i class="fa fa-key"></i></span>
                    <span class="ph-kicker">Private rentals</span>
                    <strong>Rental homes coming soon</strong>
                    <span class="ph-rule" aria-hidden="true"></span>
                    <p>Tell us what you need and we will match you with the right home to let — considered, well located, and ready when you are.</p>
                    <div class="ph-statement-actions">
                        <a href="{{ url('/contact-us') }}" class="ph-btn">Share your brief</a>
                        <a href="https://wa.me/254727111222" class="ph-btn ph-btn-ghost" target="_blank" rel="noopener">WhatsApp an advisor</a>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
        @if($PropertyRent->isNotEmpty())
        <div class="bg-all ph-cta-row">
            <a href="{{route('properties-home',['rent'])}}" class="btn btn-outline-light">See all to let</a>
        </div>
        @endif
    </div>
</section>
<!-- END SECTION PROPERTIES FOR RENT -->

<!-- START SECTION AGENTS -->

<!-- END SECTION AGENTS -->

<!-- START SECTION BLOG -->
@if(isset($Blog) && $Blog->count())
<section class="blog-section bg-black-1 rec-pro">
    <div class="container-fluid">
        <div class="section-title">
            <h3>Latest</h3>
            <h2>News</h2>
        </div>
        <div class="news-wrap">
            <div class="row">
                @foreach ($Blog as $post)
                <div class="col-xl-6 col-md-12 col-xs-12" data-aos="fade-right">
                    <div class="news-item news-item-sm">
                        <a href="{{url('/')}}/blogs/{{$post->slung}}" class="news-img-link">
                            <div class="news-item-img">
                                <img class="resp-img" src="{{url('/')}}/uploads/blogs/{{$post->image_one}}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="{{url('/')}}/blogs/{{$post->slung}}"><h3>{{$post->title}}</h3></a>
                            <span class="date">{{date('M', strtotime($post->created_at))}} {{date('d', strtotime($post->created_at))}}, {{date('Y', strtotime($post->created_at))}}  &nbsp;/&nbsp; By Shaila</span>
                            <div class="news-item-descr">
                                <p>
                                    {!!html_entity_decode($post->meta)!!}
                                </p>
                            </div>
                            <br>
                            <div class="news-item-bottom">
                                <a href="{{url('/')}}/blogs/{{$post->slung}}" class="news-link">Read more...</a>
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
@endif
<!-- END SECTION BLOG -->
@endsection
