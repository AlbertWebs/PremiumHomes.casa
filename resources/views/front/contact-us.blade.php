@extends('front.master-contact')

@section('content')
<section class="headings" style="min-height:200px; clear:both; background-image: url('{{asset('/uploads/banners/info-banner.jpg')}}')">
    <div class="text-heading text-center">
        <div class="container"><br><br><br>
            <h1 style="color:#bf9d34; text-shadow: 1px 1px 0px #000000;">Contact Us</h1>
        </div>
    </div>
</section>

<section class="contact-page-wrap">
    <div class="container">
        <div class="contact-page-intro">
            <span class="eyebrow">Get in touch</span>
            <h2>We would love to hear from you</h2>
            <p>Tell us what you are looking for and a Premium Homes advisor will get back to you. You can also call, email, or message us on WhatsApp.</p>
        </div>

        <div class="row align-items-stretch">
            <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                <div class="contact-panel">
                    <h3>Send a message</h3>
                    <p class="panel-lead">Share a few details and we will respond during business hours.</p>

                    @if(Session::has('message'))
                        <div class="alert alert-success contact-alert" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    @if(Session::has('messageError'))
                        <div class="alert alert-danger contact-alert" role="alert">{{ Session::get('messageError') }}</div>
                    @endif

                    <form id="premium-contact-form" class="contact-form-grid" action="{{ url('/form/process-contact') }}" method="post">
                        @csrf
                        <div class="form-row-custom">
                            <div class="form-col">
                                <div class="form-group">
                                    <label for="contact-name">First name <span class="req">*</span></label>
                                    <input id="contact-name" type="text" required class="form-control" name="name" placeholder="Jane" autocomplete="given-name">
                                </div>
                            </div>
                            <div class="form-col">
                                <div class="form-group">
                                    <label for="contact-lastname">Last name <span class="req">*</span></label>
                                    <input id="contact-lastname" type="text" required class="form-control" name="lastname" placeholder="Mwangi" autocomplete="family-name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row-custom">
                            <div class="form-col">
                                <div class="form-group">
                                    <label for="contact-mobile">Mobile <span class="req">*</span></label>
                                    <input id="contact-mobile" type="tel" required class="form-control" name="mobile" placeholder="+254 7xx xxx xxx" autocomplete="tel">
                                </div>
                            </div>
                            <div class="form-col">
                                <div class="form-group">
                                    <label for="contact-email">Email <span class="req">*</span></label>
                                    <input id="contact-email" type="email" required class="form-control" name="email" placeholder="you@email.com" autocomplete="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-interest">I am interested in</label>
                            <select id="contact-interest" class="form-control" name="interest">
                                <option value="Buying a home">Buying a home</option>
                                <option value="Renting a home">Renting a home</option>
                                <option value="Plots / land">Plots / land</option>
                                <option value="UN approved property">UN approved property</option>
                                <option value="General enquiry" selected>General enquiry</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ccomment">Message <span class="req">*</span></label>
                            <textarea class="form-control" id="ccomment" name="message" required rows="5" placeholder="Tell us about the property, location, budget, or question you have."></textarea>
                        </div>
                        <div class="contact-captcha" id="TheCapcha">
                            <div class="g-recaptcha" data-sitekey="6LeObFooAAAAAP3zafjIk5R1CoLugX2SO_LhD0XC" data-callback="correctCaptcha"></div>
                            <p class="captcha-hint">Complete the verification above to enable Send message.</p>
                            <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
                        </div>
                        <div class="contact-submit-row">
                            <button type="submit" id="submit-contact" class="btn contact-submit">Send message</button>
                            <p class="contact-submit-note">We reply during 8:00 a.m – 9:00 p.m, every day.</p>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 col-md-12">
                <aside class="contact-details-card">
                    <h3>Contact details</h3>
                    <p class="panel-lead">Visit our Westlands office or reach us directly.</p>
                    <ul class="contact-detail-list">
                        <li>
                            <a class="contact-detail-item" href="https://maps.google.com/?q=Premium+Homes+Mirage+Towers+Westlands+Nairobi" target="_blank" rel="noopener">
                                <span class="contact-detail-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                <span class="contact-detail-copy">
                                    <span>Office</span>
                                    <strong>Mirage Towers, Tower 2, 1st Floor, Suite 9, Westlands, Nairobi</strong>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="contact-detail-item" href="tel:+254727111222">
                                <span class="contact-detail-icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <span class="contact-detail-copy">
                                    <span>Call</span>
                                    <strong>+254 727 111 222</strong>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="contact-detail-item" href="mailto:info@premiumhomes.casa">
                                <span class="contact-detail-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                <span class="contact-detail-copy">
                                    <span>Email</span>
                                    <strong>info@premiumhomes.casa</strong>
                                </span>
                            </a>
                        </li>
                        <li>
                            <div class="contact-detail-item">
                                <span class="contact-detail-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                <span class="contact-detail-copy">
                                    <span>Hours</span>
                                    <strong>Monday – Sunday, 8:00 a.m – 9:00 p.m</strong>
                                </span>
                            </div>
                        </li>
                    </ul>
                    <a class="contact-whatsapp-btn" href="https://wa.me/254727111222" target="_blank" rel="noopener">
                        <img src="{{ asset('uploads/icon/whatsapp.svg') }}" alt="">
                        Chat on WhatsApp
                    </a>
                    <p class="contact-whatsapp-note">Fastest way to reach an advisor</p>
                </aside>
            </div>
        </div>

        <div class="contact-map-wrap">
            <h3>Our location</h3>
            <p class="map-lead">Mirage Towers, Westlands — tap the map for directions.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.3525214141!2d36.8071875!3d-1.2700625!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17a6a9e05969%3A0x3ff956c8001fb6e6!2sPremium%20Homes!5e0!3m2!1sen!2ske!4v1695917335887!5m2!1sen!2ske" title="Premium Homes office map" width="100%" height="380" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
@endsection
