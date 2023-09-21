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
                    {{-- <h2 class="text-left mb-4">www.premiumhomes.casa <span></span></h2> --}}
                </div>
                <div class="pftext">
                    <p>
                        Welcome to Premium Homes - the premier destination for luxury real estate services! We specialize in curating exclusive living experiences in some of the most desirable locations in Kenya. With decades of excellence and a dedication to providing you with only the utmost in luxury, Premium Homes is your go-to partner in the world of upscale real estate. Whether you're looking for homes, rentals or property in Kenya we've got you covered.

                    </p>
                    <strong>Vision:</strong>
                    <p>A one-stop shop for elegance and luxury homes</p>
                    <strong>Mission:</strong>
                    <p></p>

                </div>
                <div class="box bg-2">
                    <a href="{{url('/')}}/all-properties" class="text-center button  button--size-l">Browse Properties</a>
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
            <h2><span>Core </span>Values</h2>
            <p>
              &nbsp;
            </p>
        </div>
        <div class="row service-1">
            <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                <div class="serv-flex">
                    <div class="art-1 img-13">
                        <span class="fa fa-handshake-o"></span>
                        <h3>Integrity</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">At Premium Homes, integrity forms the very foundation of our operations. We are unwavering in our commitment to honesty, transparency, and ethical conduct. We believe in doing what's right, and this dedication extends to how we interact with our clients, partners, and the communities we serve.</p>
                    </div>
                </div>
            </article>
            <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                <div class="serv-flex">
                    <div class="art-1 img-14">
                        <span class="fa fa-check-square-o"></span>
                        <h3>Expertise</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">Expertise is the driving force behind our success in the real estate industry. We take pride in our deep and continually evolving knowledge of the market, property trends, and the intricacies of buying and selling real estate. Our team is dedicated to ongoing education and skill enhancement, ensuring that we remain at the forefront of industry developments. </p>
                    </div>
                </div>
            </article>
            <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up">
                <div class="serv-flex arrow">
                    <div class="art-1 img-15">
                        <span class="fa fa-wrench"></span>
                        <h3>Discreet Client Service</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">Our commitment to discreet client service is a testament to our respect for your privacy and confidentiality. We understand that real estate transactions often involve sensitive information, and we take the utmost care in safeguarding your data and personal details.  </p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- END SECTION WHY CHOOSE US -->

{{--
<section class="about-us how-it-works fh">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="wprt-image-videoa w50">
                    <img alt="image" src="{{asset('uploads/team/dr-nelson-sechere.jpg')}}">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div>
                    <h2 class="text-left mb-4">Our Story <span></span></h2>
                </div>
                <div class="pftext">
                    <p>
                        Premium Homes was founded on the principles of passion, integrity, and expertise. Our journey began when Dr Nelson Sechere, a visionary with an unwavering appreciation of luxury living embarked on a remarkable journey to transform the world of real estate.
                        <br><br>

                        Dr. Nelson recognized the need for a real estate company that not only offered exceptional properties but also provided clients with deeply personalized and extraordinary experiences. This realization marked the inception of Premium Homes.
                        <br><br>

                        Driven by a passion for luxury real estate, Dr. Nelson assembled a team of like-minded individuals who shared this vision. Together they set out to redefine luxury living.
                        <br><br>

                        Premium Homes has exceeded our client's expectations, setting new standards in the Luxury real estate industry. We are here to guide you on your journey to finding the perfect property that suits you.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="about-us how-it-works fh">
    <div class="container">
        <div class="row">



            <div class="col-lg-6 col-md-12">
                <div>
                    <h2 class="text-left mb-4">Our Story <span></span></h2>
                    <h3>Chairman</h3>
                </div>
                <div class="pftext">
                    <p>
                        Premium Homes was founded on the principles of passion, integrity, and expertise. Our journey began when Dr Nelson Sechere, a visionary with an unwavering appreciation of luxury living embarked on a remarkable journey to transform the world of real estate.
                        <br><br>

                        Dr. Nelson recognized the need for a real estate company that not only offered exceptional properties but also provided clients with deeply personalized and extraordinary experiences. This realization marked the inception of Premium Homes.
                        <br><br>

                        Driven by a passion for luxury real estate, Dr. Nelson assembled a team of like-minded individuals who shared this vision. Together they set out to redefine luxury living.
                        <br><br>

                        Premium Homes has exceeded our client's expectations, setting new standards in the Luxury real estate industry. We are here to guide you on your journey to finding the perfect property that suits you.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="wprt-image-videoa w50">
                    <img alt="image" src="{{asset('uploads/team/dr-nelson-sechere.jpg')}}">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us how-it-works fh bg-white-2">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="wprt-image-videoa w50">
                    <img alt="image" src="{{asset('uploads/team/martin-mathege.jpg')}}">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div>
                    <h2 class="text-left mb-4"> Martin Mathenge <span></span></h2>
                    <h3>Director Business Development</h3>
                </div>
                <div class="pftext">
                    <p>
                        Martin Mathenge is an accomplished marketing executive and versatile professional renowned for his strong leadership acumen, specializing in brand management and key account development. <br><br> Martin boasts an impressive track record of consistently driving profitability while adeptly managing expenses, providing essential administrative support, nurturing emerging talent through training initiatives, and orchestrating impactful company events. <br><br> His effective leadership is marked by exceptional communication skills and a remarkable talent for precise time management.<br><br>

                        With over 15 years of hands-on experience, Martin is widely acknowledged as an innovative marketing expert who excels in enhancing administrative efficiency and offering invaluable support for business development initiatives. <br><br>His expertise empowers organizations to make well-informed decisions that propel them toward unprecedented success.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>





<section class="about-us how-it-works fh">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div>
                    <h2 class="text-left mb-4">Brian Luvanda <span></span></h2>
                    <h3>Business Development Manager</h3>
                </div>
                <div class="pftext">
                    <p>
                        Brian Luvanda, is a seasoned professional with over 8 years of invaluable experience
                        in the real estate industry, now leading the charge as Business Development
                        Manager.
                        <br><br>
                        Luvanda's journey in real estate has sharpened his excellent market insights and
                        finely tuned his strategic acumen, making him a driving force in the growth and
                        expansion of organizations he has been associated with.
                        His extensive experience has nurtured not only exceptional leadership and
                        communication skills but also an ability to discern market trends and form strategic
                        alliances.
                        <br><br>
                        He has consistently displayed an exemplary track record of leading diverse teams,
                        fostering a culture of collaboration and excellence, always keeping the client's needs
                        at the forefront.
                        <br><br>
                        Luvanda envisions to establish the businesses under his control as unchallenged
                        market leaders, propelled by innovation, cutting-edge technology, and a steadfast
                        dedication to excellence and quality. Through his guidance, businesses are set up for
                        a future of unparalleled growth and success, with a consistent focus on providing
                        exceptional experiences to prestigious clients.
                        <br><br>

                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="wprt-image-videoa w50">
                    <img alt="image" src="{{asset('uploads/team/brian-luvanda.jpg')}}">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- START SECTION AGENTS -->
<section class="team bg-white rec-pro bg-black-2" id="team">
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
                            <p>
                                {{$agent->position}}
                            </p>
                            @else
                            <p>
                                {{$agent->position}}
                            </p>
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
                            <span><a href="{{url('/')}}/team/{{$agent->slung}}">View Bio</a></span>
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
