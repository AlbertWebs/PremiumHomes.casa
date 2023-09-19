@extends('front.master-contact')

@section('content')
<section class="headings" style="min-height:200px; clear:both; background-image: url('{{asset('/uploads/banners/info-banner.jpg')}}')">
    <div class="text-heading text-center">
        <div class="container"><br><br><br>
            <h1 style="color:#bf9d34; text-shadow: 1px 1px 0px #000000;">Contact Us</h1>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->
<section class="about-us how-it-works fh">
       <!-- START SECTION CONTACT US -->
       <section class="contact-us">
        <div class="container">
            <div class="property-location mb-5">
                <h3>Our Location</h3>
                <div class="divider-fade"></div>
                <div id="map-contacts" class="contact-maps" style="min-height:450px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.42976313841!2d36.8064823!3d-1.2574892!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1751675bc759%3A0x12ae75ea89237c46!2sNelson&#39;S%20Court%20Serviced%20Apartments!5e0!3m2!1sen!2ske!4v1695123822265!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h3 class="mb-4">Contact Us</h3>
                    <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                        <div id="success" class="successform">
                            <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                        </div>
                        <div id="error" class="errorform">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control input-custom input-full" name="name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control input-custom input-full" name="lastname" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input required type="text" required class="form-control input-custom input-full" name="mobile" placeholder="Mobile">
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-control input-custom input-full" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea required class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8" placeholder="Message"></textarea>
                        </div>
                        <button style="background-color:#bf9d34" type="submit" id="submit-contact" class="btn btn-primary btn-lg button border">Submit</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12 bgc">
                    <div class="call-info">
                        <h3>Contact Details</h3>
                        <p class="mb-5">Please find below contact details and contact us today!</p>
                        <ul style="list-style: none">
                            <li>
                                <div class="info">
                                    <p class="in-p"> <i class="fa fa-map-marker" aria-hidden="true"></i> Nelson's Court, Ring Road, Westlands, Nairobi</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <p class="in-p"><i class="fa fa-phone" aria-hidden="true"></i> +254 727 111 222</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <p class="in-p ti"><i class="fa fa-envelope" aria-hidden="true"></i> support@premiumhomes.casa</p>
                                </div>
                            </li>
                            <li>
                                <div class="info cll">
                                    <p class="in-p ti">  <i class="fa fa-clock-o" aria-hidden="true"></i> 8:00 a.m - 9:00 p.m</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION CONTACT US -->
</section>

@endsection
