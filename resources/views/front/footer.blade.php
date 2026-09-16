<link rel="stylesheet" href="{{ asset('theme/css/footer.css') }}">
<?php
    $FooterProperties = \App\Models\Property::query()
        ->where('active', 'Approved')
        ->orderBy('id', 'DESC')
        ->limit(3)
        ->get();
    if ($FooterProperties->isEmpty()) {
        $FooterProperties = \App\Models\Property::query()->orderBy('id', 'DESC')->limit(3)->get();
    }
?>
<footer class="first-footer rec-pro site-footer">
    <div class="site-footer-cta">
        <div class="site-footer-shell">
            <div class="site-footer-cta-copy">
                <span>Private client desk</span>
                <h2>Ready to find your dream home?</h2>
                <p>Let our advisors walk you through listings, viewings, and every step of the purchase.</p>
            </div>
            <div class="site-footer-cta-actions">
                <a class="site-footer-btn site-footer-btn-gold" href="{{ url('/contact-us') }}">Schedule a consultation</a>
                <a class="site-footer-btn site-footer-btn-ghost" href="{{ route('all_properties-home') }}">View properties</a>
            </div>
        </div>
    </div>

    <div class="top-footer bg-black-2 site-footer-top">
        <div class="site-footer-shell">
            <div class="row site-footer-grid">
                <div class="col-lg-3 col-md-6">
                    <div class="site-footer-brand">
                        <a href="{{ url('/') }}" class="site-footer-logo">
                            <img src="{{ asset('theme/images/preloader.png') }}" alt="Premium Homes">
                        </a>
                        <p class="site-footer-tagline">Your dream home awaits.</p>
                        <p>Curated residences, apartments, and plots in Kenya’s most desirable neighbourhoods.</p>
                        <ul class="site-footer-social">
                            <li><a href="https://www.facebook.com/premiumhomes.casa" aria-label="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/premiumhomes.casa/" aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/premium-casa" aria-label="LinkedIn"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/PremiumHomecasa" aria-label="X"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="site-footer-nav">
                        <h3><span>Quick</span> Menu</h3>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about-us') }}">About Us</a></li>
                            <li><a href="{{ route('properties-home', ['sale']) }}">For Sale</a></li>
                            <li><a href="{{ route('properties-home', ['rent']) }}">For Rent</a></li>
                            <li><a href="{{ route('land-for-sale') }}">Plots</a></li>
                            <li><a href="{{ route('un-approved') }}">UN Approved</a></li>
                            <li><a href="{{ url('/contact-us') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="site-footer-properties">
                        <div class="site-footer-heading">
                            <h3><span>Featured</span> Properties</h3>
                            <a href="{{ route('all_properties-home') }}">View all</a>
                        </div>
                        @if($FooterProperties->isEmpty())
                            <p class="site-footer-empty">New listings will appear here shortly.</p>
                        @else
                            <ul>
                                @foreach($FooterProperties as $item)
                                    <?php
                                        $footerImage = $item->featured_image
                                            ? asset('uploads/properties/'.$item->featured_image)
                                            : asset('theme/images/preloader.png');
                                        $footerPrice = is_numeric($item->price)
                                            ? 'KES '.number_format((float) $item->price)
                                            : $item->price;
                                        $footerPlace = $item->address ?: ($item->city ?: 'Kenya');
                                    ?>
                                    <li>
                                        <a href="{{ url('/properties/'.$item->slung) }}" class="site-footer-property">
                                            <span class="site-footer-thumb" style="background-image: url('{{ $footerImage }}');"></span>
                                            <span class="site-footer-meta">
                                                <strong>{{ $item->property_name }}</strong>
                                                <em><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $footerPlace }}</em>
                                                <span>{{ $footerPrice }} @if($item->status)<i>{{ $item->status }}</i>@endif</span>
                                            </span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="site-footer-aside">
                        <div class="site-footer-contact-block">
                            <h3><span>Contact</span> Us</h3>
                            <ul class="site-footer-contact">
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <div>
                                        <strong>Address:</strong>
                                        <span>Mirage Towers, Tower 2, 1st Floor, Suite 9, Westlands, Nairobi</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <div>
                                        <strong>Phone:</strong>
                                        <a href="tel:+254727111222">+254 727 111 222</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <div>
                                        <strong>Email:</strong>
                                        <a href="mailto:info@premiumhomes.casa">info@premiumhomes.casa</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="site-footer-news">
                            <h3><span>Newsletter</span></h3>
                            <p>Stay updated with our latest listings and private invitations.</p>
                            <form class="bloq-email mailchimp form-inline site-footer-form" method="post">
                                <label for="subscribeEmail" class="error"></label>
                                <div class="email">
                                    <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter your email" autocomplete="email">
                                    <input type="submit" value="Subscribe">
                                    <p class="subscription-success"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer rec-pro site-footer-bottom">
        <div class="site-footer-shell sd-f">
            <p>© {{ date('Y') }} <a href="{{ url('/copyright') }}">Premium Homes Limited</a>. All rights reserved.</p>
            <div class="site-footer-legal">
                <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                <a href="{{ url('/terms-and-conditions') }}">Terms</a>
                <a href="https://wa.me/254727111222" target="_blank" rel="noopener">WhatsApp</a>
            </div>
        </div>
    </div>
</footer>
