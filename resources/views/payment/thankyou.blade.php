@extends('front.master-login')

@section('content')
 <!-- START SECTION LOGIN -->
 <div id="login">
    <div class="login">
        <br><br><br>
        <div class="jumbotron text-center" style="min-height:300px">
            <h1 class="display-3">Thank You!</h1>
            <p class="lead"><strong>Your Premium Subscripion Will Be Approved Shortly</strong> </p>
            {{-- <p class="lead"><strong>Please check your email</strong> for further instructions maps and our office contacts</p> --}}
            <hr>
            <p>
              Having trouble? <a href="tel:+254 707 190 188">Contact us</a>
            </p>
            <p class="lead">
              <a class="btn btn-success btn-lg" href="{{url('/')}}" role="button">Continue to homepage</a>
            </p>
          </div>
    </div>
</div>
<!-- END SECTION LOGIN -->
@endsection
