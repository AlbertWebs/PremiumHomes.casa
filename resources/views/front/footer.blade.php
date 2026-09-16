@include('front.partials.theme-css')
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
    <div class="top-footer bg-black-2 site-footer-top">
        <div class="container-fluid">
            <div class="row site-footer-grid">
                <div class="col-lg-3 col-md-6">
                    <div class="site-footer-brand">
                        <a href="{{ url('/') }}" class="site-footer-logo">
                            <img src="{{ asset('theme/images/preloader.png') }}" alt="Premium Homes">
                        </a>
                        <p>Curated luxury homes, apartments, and plots in Kenya’s most sought-after neighbourhoods.</p>
                        <ul class="site-footer-contact">
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>Mirage Towers, Tower 2, 1st Floor, Suite 9, Westlands, Nairobi</span>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:+254727111222">+254 727 111 222</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="mailto:info@premiumhomes.casa">info@premiumhomes.casa</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="site-footer-nav">
                        <h3>Explore</h3>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about-us') }}">About Us</a></li>
                            <li><a href="{{ route('properties-home', ['sale']) }}">For Sale</a></li>
                            <li><a href="{{ route('properties-home', ['rent']) }}">For Rent</a></li>
                            <li><a href="{{ route('land-for-sale') }}">Plots</a></li>
                            <li><a href="{{ route('un-approved') }}">UN Approved</a></li>
                            <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="site-footer-properties">
                        <div class="site-footer-heading">
                            <h3>Properties</h3>
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
                                                <em>{{ $footerPlace }}</em>
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
                    <div class="site-footer-news">
                        <h3>Stay informed</h3>
                        <p>Receive new listings and private invitations. No noise, only premium homes.</p>
                        <form class="bloq-email mailchimp form-inline site-footer-form" method="post">
                            <label for="subscribeEmail" class="error"></label>
                            <div class="email">
                                <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Email address" autocomplete="email">
                                <input type="submit" value="Subscribe">
                                <p class="subscription-success"></p>
                            </div>
                        </form>
                        <a class="site-footer-whatsapp" href="https://wa.me/254727111222" target="_blank" rel="noopener">
                            <i class="fab fa-whatsapp" aria-hidden="true"></i>
                            Chat on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer rec-pro site-footer-bottom">
        <div class="container-fluid sd-f">
            <p>Copyright © {{ date('Y') }} <a href="{{ url('/copyright') }}">Premium Homes Limited</a> · <a href="{{ url('/privacy-policy') }}">Privacy</a> · <a href="{{ url('/terms-and-conditions') }}">Terms</a></p>
            <ul class="netsocials">
                <li><a href="https://www.facebook.com/premiumhomes.casa" aria-label="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/premiumhomes.casa/" aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/company/premium-casa" aria-label="LinkedIn"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/PremiumHomecasa" aria-label="X"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
