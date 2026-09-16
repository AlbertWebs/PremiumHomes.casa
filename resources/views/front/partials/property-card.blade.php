<?php
    $cardImage = !empty($prop->featured_image)
        ? asset('uploads/properties/'.$prop->featured_image)
        : asset('theme/images/preloader.png');
    $cardPrice = is_numeric($prop->price)
        ? 'KES '.number_format((float) $prop->price)
        : 'KES '.$prop->price;
    $cardPlace = $prop->address ?: ($prop->city ?: 'Kenya');
    $cardType = $prop->type ?: 'Home';
    $cardStatus = $prop->status ?: '';
?>
<a href="{{ route('property-single', [$prop->slung]) }}" class="ph-card">
    <span class="ph-card-media" style="background-image: url('{{ $cardImage }}');"></span>
    <span class="ph-card-body">
        <span class="ph-card-loc"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $cardPlace }}</span>
        <strong class="ph-card-title">{{ $prop->property_name }}</strong>
        <span class="ph-card-type">{{ $cardType }}@if($cardStatus) · {{ $cardStatus }}@endif</span>
        <span class="ph-card-foot">
            <span class="ph-card-price">{{ $cardPrice }}</span>
            <span class="ph-card-go">View <i class="fa fa-angle-right" aria-hidden="true"></i></span>
        </span>
    </span>
</a>
