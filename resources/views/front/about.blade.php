@extends('front.master')

@section('content')
<section class="headings" style="min-height:200px; clear:both; background-image: url('{{asset('/uploads/banners/info-banner.jpg')}}')">
    <div class="text-heading text-center">
        <div class="container"><br><br><br>
            <h1 style="color:#bf9d34; text-shadow: 1px 1px 0px #000000;">About Premium Homes</h1>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<section class="about-us how-it-works fh">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 who-1">
                <div>
                    <h2 class="text-left mb-4">www.premiumhomes.casa <span></span></h2>
                </div>
                <div class="pftext">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio id voluptatibus incidunt cum? Atque quasi eum debitis optio ab. Esse itaque officiis tempora possimus odio rerum aperiam ratione, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio id voluptatibus incidunt cum? Atque quasi eum debitis optio ab. Esse itaque officiis tempora possimus odio rerum aperiam ratione, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio id voluptatibus incidunt cum? Atque quasi eum debitis optio ab. Esse itaque officiis tempora possimus odio rerum aperiam ratione, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt.</p>
                </div>
                <div class="box bg-2">
                    <a href="{{url('/')}}/properties" class="text-center button  button--size-l">Browse Properties</a>
                    {{-- <img src="{{asset('theme/images/signature.png')}}" class="ml-5" alt=""> --}}
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="wprt-image-video w50">
                    <img alt="image" src="{{asset('images/b-4.jpg')}}">
                  <span style="padding: 0; margin: 0; margin-left: 5px;"><a href=""></a></span>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- START SECTION WHY CHOOSE US -->
<section class="how-it-works bg-white-2">
    <div class="container">
        <div class="sec-title">
            <h2><span>Why </span>Choose Us</h2>
            <p>We provide full service at every step.</p>
        </div>
        <div class="row service-1">
            <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                <div class="serv-flex">
                    <div class="art-1 img-13">
                        <img src="{{asset('theme/images/icons/icon-4.svg')}}" alt="">
                        <h3>Wide Renge Of Properties</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                    </div>
                </div>
            </article>
            <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                <div class="serv-flex">
                    <div class="art-1 img-14">
                        <img src="{{asset('theme/images/icons/icon-5.svg')}}" alt="">
                        <h3>Trusted by thousands</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                    </div>
                </div>
            </article>
            <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up">
                <div class="serv-flex arrow">
                    <div class="art-1 img-15">
                        <img src="{{asset('theme/images/icons/icon-6.svg')}}" alt="">
                        <h3>Financing made easy</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- END SECTION WHY CHOOSE US -->



<!-- START SECTION AGENTS -->
<section class="team bg-white rec-pro bg-black-2">
    <div class="container-fluid">
        <div class="section-title col-md-5">
            <h3>Meet Our</h3>
            <h2>Representatives</h2>
        </div>
        <div class="row team-all">
            <?php
               $Agents = DB::table('users')->where('agent','1')->orWhere('agent','2')->get();
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
                            @if($agent->agent == 1)
                            <p>Marketing Coordinator</p>
                            @else
                            <p>Real Estate Agent</p>
                            @endif
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

@endsection
