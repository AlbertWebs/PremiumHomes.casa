@extends('front.master')

@section('content')
<style>
    .buying-listings {
        padding: 3.25rem 0 4.5rem;
    }
    .buying-listings .section-title h3 {
        color: #bf9d34;
    }
    .buying-listings .section-title h2 {
        color: #fff;
        text-transform: none;
    }
    .buying-coming-soon {
        max-width: 640px;
        margin: 1.5rem auto 0;
        text-align: center;
        background: #121b22;
        border: 1px solid rgba(191, 157, 52, 0.35);
        border-top: 3px solid #bf9d34;
        border-radius: 16px;
        padding: 3rem 2rem;
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.22);
    }
    .buying-coming-soon .soon-badge {
        display: inline-block;
        color: #bf9d34;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.16em;
        text-transform: uppercase;
        margin-bottom: 0.85rem;
    }
    .buying-coming-soon h4 {
        color: #fff;
        font-size: 1.85rem;
        margin: 0 0 0.75rem;
        text-transform: none;
        letter-spacing: 0;
    }
    .buying-coming-soon p {
        color: rgba(255, 255, 255, 0.78);
        margin: 0 auto 1.6rem;
        max-width: 420px;
        line-height: 1.65;
    }
    .buying-coming-soon .soon-actions {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.75rem;
    }
    .buying-coming-soon .soon-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.45rem;
        border-radius: 10px;
        padding: 0.8rem 1.35rem;
        font-weight: 700;
        text-decoration: none !important;
    }
    .buying-coming-soon .soon-btn-gold {
        background: #bf9d34;
        color: #fff !important;
    }
    .buying-coming-soon .soon-btn-gold:hover {
        background: #a8882b;
        color: #fff !important;
    }
    .buying-coming-soon .soon-btn-wa {
        background: #25d366;
        color: #fff !important;
    }
    .buying-coming-soon .soon-btn-wa:hover {
        background: #1ebe57;
        color: #fff !important;
    }
    .buying-coming-soon .soon-btn-wa img {
        width: 18px;
        height: 18px;
    }
</style>

<section class="headings" style="min-height:200px; clear:both; background-image: url('{{asset('/uploads/banners/info-banner.jpg')}}')">
    <div class="text-heading text-center">
        <div class="container"><br><br><br>
            <h1 style="color:#bf9d34; text-shadow: 1px 1px 0px #000000;">Buying</h1>
        </div>
    </div>
</section>

@if(isset($Buying) && $Buying->count())
    @foreach($Buying as $blog)
        @if(!empty($blog->buying))
        <section class="blog blog-section">
            <div class="container">
                <div class="news-item-descr big-news details visib mb-0">
                    {!! html_entity_decode($blog->buying) !!}
                </div>
            </div>
        </section>
        @endif
    @endforeach
@endif

<section class="recently portfolio buying-listings rec-pro2" id="section-property">
    <div class="container">
        <div class="row">
            <div class="section-title col-md-12 text-center">
                <h3>Properties</h3>
                <h2>Listings</h2>
            </div>
        </div>
        <div class="buying-coming-soon">
            <span class="soon-badge">Listings</span>
            <h4>Coming Soon</h4>
            <p>Homes for sale will appear here shortly. Talk to a Premium Homes advisor in the meantime.</p>
            <div class="soon-actions">
                <a class="soon-btn soon-btn-gold" href="{{ url('/contact-us') }}">Contact us</a>
                <a class="soon-btn soon-btn-wa" href="https://wa.me/254727111222" target="_blank" rel="noopener">
                    <img src="{{ asset('uploads/icon/whatsapp.svg') }}" alt="">
                    WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
