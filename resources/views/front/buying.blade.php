@extends('front.master')

@section('content')
@foreach($Buying as $blog)

<!-- END SECTION HEADINGS -->

<!-- START SECTION BLOG -->
<section class="blog blog-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 blog-pots">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="news-item details no-mb2">
                            <div class="news-item-text details pb-0">
                                <div class="news-item-descr big-news details visib mb-0" style="color:#ffffff !important;">
                                    <p class="mb-3" >
                                        {!!html_entity_decode($blog->buying)!!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- END SECTION BLOG -->
@endforeach
@endsection
