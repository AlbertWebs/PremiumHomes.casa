@extends('front.master-pages')

@section('content')


<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Copryright Statement</h1>
            <h2><a href="{{url('/')}}">Home </a> &nbsp;/&nbsp; Copryright Statement</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION FAQ -->
<section class="faq service-details bg-white">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12">

                <ul class="accordion accordion-1 one-open">
                    <li class="active">
                        <div class="title">
                            <span>What payment methods are available?</span>
                        </div>
                        <div class="content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </li>

                </ul>
                <!--end of accordion-->
            </div>
        </div>
    </div>
</section>
<!-- END SECTION FAQ -->




@endsection
