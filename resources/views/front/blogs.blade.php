@extends('front.master')

@section('content')

{{-- <section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Blog</h1>
            <h2><a href="{{url('/')}}">Home </a> &nbsp;/&nbsp; Blog</h2>
        </div>
    </div>
</section> --}}
<!-- END SECTION HEADINGS -->
<section class="blog-section bg-black-1 rec-pro">
    <div class="container">
        <div class="section-title">
            <h3>From our Media</h3>
            <h2>Blogs</h2>
        </div>
        <div class="news-wrap">
            <div class="row">
                @foreach ($Blogs as $Blog)
                <div class="col-xl-6 col-md-12 col-xs-12" data-aos="fade-right">
                    <div class="news-item news-item-sm">
                        <a href="{{url('/')}}/blogs/{{$Blog->slung}}" class="news-img-link">
                            <div class="news-item-img">
                                <img style="min-height:350px !important" class="resp-img" src="{{url('/')}}/uploads/blogs/{{$Blog->image_one}}" alt="blog image">
                            </div>
                        </a>
                        <div class="news-item-text">
                            <a href="{{url('/')}}/blogs/{{$Blog->slung}}"><h3>{{$Blog->title}}</h3></a>
                            <span class="date">{{date('M', strtotime($Blog->created_at))}} {{date('d', strtotime($Blog->created_at))}}, {{date('Y', strtotime($Blog->created_at))}}  &nbsp;/&nbsp; By Admin</span>
                            <div class="news-item-descr">
                                <p>
                                    {!!html_entity_decode($Blog->meta)!!}
                                </p>
                            </div>
                            <br><br>
                            <div class="news-item-bottom">
                                <a href="{{url('/')}}/blogs/{{$Blog->slung}}" class="news-link">Read more...</a>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <?php echo $Blogs; ?>
    </div>
</section>


@endsection
