@extends('front.master-home')

@section('content')
  <!-- START SECTION HEADINGS -->
  <section id="home" class="section welcome-area bg-overlay d-flex align-items-center overflow-hidden" style="background: rgba(0, 0, 0, 0) url('{{asset('theme/images/bg/bg-demo.jpg')}}') no-repeat scroll center center/cover;  background: rgba(0,0,0,.5);">
    <div class="container">
        <div class="row align-items-center">
            <!-- Welcome Intro Start -->
            <div class="header-image left h1 col-12 col-md-7 col-lg-6">
                <div class="welcome-intro" data-aos="fade-right">
                    <div class="left wow fadeInLeft">
                        <h1 style="color:#bf9d34">The best way to find your dream home</h1>
                        <p>
                            Welcome to Premium Homes - the premier destination for luxury real estate services! We specialize in curating exclusive living experiences in some of the most desirable locations in Kenya. With decades of excellence and a dedication to providing you with only the utmost in luxury, Premium Homes is your go-to partner in the world of upscale real estate. Whether you're looking for homes, rentals or property in Kenya we've got you covered.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-6">
                <!-- Welcome Thumb -->
                <div class="welcome-thumb text-center mx-auto" data-aos="fade-left">
                    <!-- Play Button -->
                    <a class="play-btn popup-video popup-youtube" data-fancybox href="https://www.youtube.com/watch?v=14semTlwyUY">
                        <div class="btn-circle play-animation"></div>
                        <div class="btn-circle play-animation animation-short"></div>
                        <!-- Play Icon -->
                        <div class="play-icon">
                            <i class="fas fa-play"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Shape Bottom -->
    <div class="shape-bottom">
        <svg fill="#fff" id="Layer_1" x="0px" y="0px" viewBox="0 0 1921 819.8" style="enable-background:new 0 0 1921 819.8;" xml:space="preserve">
            <path class="st0" d="M1921,413.1v406.7H0V0.5h0.4l228.1,598.3c30,74.4,80.8,130.6,152.5,168.6c107.6,57,212.1,40.7,245.7,34.4  c22.4-4.2,54.9-13.1,97.5-26.6L1921,400.5V413.1z"></path>
            <path class="st1" d="M1921,387.9v431.9H0V0h13l226.6,594.4c14.4,35.7,34,67.4,58.3,94.3c24.4,26.9,54.2,49.8,88.6,68.1  c50.2,26.6,105.8,40.1,165.2,40.1c36.1,0,63.6-5.2,72.6-6.9c21.6-4,53.9-12.9,96.1-26.2L1921,387.9z"></path>
        </svg>
    </div>
</section>
<!-- END SECTION HEADINGS -->
@endsection
