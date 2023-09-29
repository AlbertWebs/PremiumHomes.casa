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
                                                        <span>{{$slider->sqft}} </span>
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
                                                <img style="max-height:698px" src="{{url('/')}}/uploads/properties/{{$slider->featured_image}}" class="img-fluid " alt="images" />
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <?php
                                        $Gallery = DB::table('galleries')->where('property_id', $slider->id)->limit('5')->get();
                                        $Count = 1
                                    ?>
                                    @foreach ($Gallery as $gallery)
                                    <div class="swiper-slide">
                                        <div class="swiper_contbox">
                                            <div class="swipper_conntent">
                                                <img style="max-height:698px" src="{{url('/')}}/images/{{$gallery->filename}}" class="img-fluid " alt="images" />
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
