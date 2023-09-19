@extends('front.master-team')

@section('content')
@foreach ($Users as $user)


<section class="headings" style="min-height:200px; clear:both; background-image: url('{{asset('/uploads/banners/info-banner.jpg')}}')">
    <div class="text-heading text-center">
        <div class="container"><br><br><br>
            <h1 style="color:#bf9d34; text-shadow: 1px 1px 0px #000000;">{{$user->name}}</h1>
            <h3 style="font-weight:900; color:#ffffff">{{$user->position}}</h3>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->






<section class="about-us how-it-works fh">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div>
                    <h2 class="text-left mb-4">{{$user->name}}<span></span></h2>
                    <h3>{{$user->position}}</h3>
                </div>
                <div class="pftext">
                    <p>
                        {!!html_entity_decode($user->content)!!}
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="wprt-image-videoa w50">
                    <img alt="image" src="{{url('/')}}/uploads/team/{{$user->image}}">
                </div>
            </div>
        </div>
    </div>
</section>



<?php
 $Plots = DB::table('properties')->where('type','Plot')->get();
 $Sale = DB::table('properties')->where('Status','Sale')->get();
 $Rent = DB::table('properties')->where('Status','Rent')->get();
?>

<!-- START SECTION COUNTER UP -->
<section class="counterup">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">{{count($Plots)}}</p>
                        <h3>Listed Plots</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">{{count($Sale)}}</p>
                        <h3>House For Sale</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr mb-0">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">{{count($Rent)}}</p>
                        <h3>House For Rent</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="countr mb-0 last">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                    <div class="count-me">
                        <p class="counter text-left">4</p>
                        <h3>Sold</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COUNTER UP -->

<!-- START SECTION TESTIMONIALS -->
{{-- <section class="testimonials home18 bg-white">
    <div class="container">
       <div class="sec-title">
            <h2><span>Clients </span>Testimonials</h2>
            <p>We collect reviews from our customers.</p>
        </div>
        <div class="owl-carousel style1">
            <div class="test-1 pb-0 pt-0">
                <img src="{{asset('theme/images/testimonials/ts-1.jpg')}}" alt="">
                <h3 class="mt-3 mb-0">Lisa Smith</h3>
                <h6 class="mt-1">New York</h6>
                <ul class="starts text-center mb-2">
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
            </div>
            <div class="test-1 pb-0 pt-0">
                <img src="{{asset('theme/images/testimonials/ts-2.jpg')}}" alt="">
                <h3 class="mt-3 mb-0">Jhon Morris</h3>
                <h6 class="mt-1">Los Angeles</h6>
                <ul class="starts text-center mb-2">
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
                <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
            </div>
            <div class="test-1 pt-0">
                <img src="{{asset('theme/images/testimonials/ts-3.jpg')}}" alt="">
                <h3 class="mt-3 mb-0">Mary Deshaw</h3>
                <h6 class="mt-1">Chicago</h6>
                <ul class="starts text-center mb-2">
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
            </div>
            <div class="test-1 pt-0">
                <img src="{{asset('theme/images/testimonials/ts-4.jpg')}}" alt="">
                <h3 class="mt-3 mb-0">Gary Steven</h3>
                <h6 class="mt-1">Philadelphia</h6>
                <ul class="starts text-center mb-2">
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
                <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
            </div>
            <div class="test-1 pt-0">
                <img src="{{asset('theme/images/testimonials/ts-5.jpg')}}" alt="">
                <h3 class="mt-3 mb-0">Cristy Mayer</h3>
                <h6 class="mt-1">San Francisco</h6>
                <ul class="starts text-center mb-2">
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
            </div>
            <div class="test-1 pt-0">
                <img src="{{asset('theme/images/testimonials/ts-6.jpg')}}" alt="">
                <h3 class="mt-3 mb-0">Ichiro Tasaka</h3>
                <h6 class="mt-1">Houston</h6>
                <ul class="starts text-center mb-2">
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
                <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
            </div>
        </div>
    </div>
</section> --}}
<!-- END SECTION TESTIMONIALS -->

<!-- STAR SECTION PARTNERS -->
{{-- <div class="partners bg-white-2">
    <div class="container">
        <div class="sec-title">
            <h2><span>Our </span>Partners</h2>
            <p>The Companies That Represent Us.</p>
        </div>
        <div class="owl-carousel style2">
            <div class="owl-item"><img src="{{asset('theme/images/partners/11.jpg')}}" alt=""></div>
            <div class="owl-item"><img src="{{asset('theme/images/partners/12.jpg')}}" alt=""></div>
            <div class="owl-item"><img src="{{asset('theme/images/partners/13.jpg')}}" alt=""></div>
            <div class="owl-item"><img src="{{asset('theme/images/partners/14.jpg')}}" alt=""></div>
            <div class="owl-item"><img src="{{asset('theme/images/partners/15.jpg')}}" alt=""></div>
            <div class="owl-item"><img src="{{asset('theme/images/partners/16.jpg')}}" alt=""></div>
            <div class="owl-item"><img src="{{asset('theme/images/partners/17.jpg')}}" alt=""></div>
            <div class="owl-item"><img src="{{asset('theme/images/partners/11.jpg')}}" alt=""></div>
            <div class="owl-item"><img src="{{asset('theme/images/partners/12.jpg')}}" alt=""></div>
            <div class="owl-item"><img src="{{asset('theme/images/partners/13.jpg')}}" alt=""></div>
        </div>
    </div>
</div> --}}
<!-- END SECTION PARTNERS -->
@endforeach

@endsection
