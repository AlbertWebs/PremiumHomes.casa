@extends('front.master-blog')

@section('content')
@foreach($Blog as $blog)

<!-- END SECTION HEADINGS -->

<!-- START SECTION BLOG -->
<section class="blog blog-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 blog-pots">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="news-item details no-mb2">
                            <a href="#" class="news-img-link">
                                <div style="width:100%; max-height:300px" class="news-item-img">
                                    <img style="width:100%; height:100%; object-fit:cover" class="img-responsive" src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text details pb-0">
                                <a href="#"><h3>{{$blog->title}}</h3></a>
                                <div class="dates">
                                    <span class="date">{{date('M', strtotime($blog->created_at))}} {{date('d', strtotime($blog->created_at))}}, {{date('Y', strtotime($blog->created_at))}} </span>
                                </div>
                                <div class="news-item-descr big-news details visib mb-0">
                                    <p class="mb-3" style="color:#ffffff">
                                        {!!html_entity_decode($blog->content)!!}
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
