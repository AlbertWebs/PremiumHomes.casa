@extends('front.master-login')

@section('content')
 <!-- START SECTION LOGIN -->
 <div id="login">
    <div class="login">
        <div class="access_social">
            <a href="#0" class="social_bt facebook">Login with Facebook</a>
            <a href="#0" class="social_bt google">Login with Google</a>
            <a href="#0" class="social_bt linkedin">Login with Linkedin</a>
        </div>
        <div class="divider"><span>Or</span></div>
        <form autocomplete="off" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label>Your Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="ti-user"></i>
            </div>

            <div class="form-group">
                <label>Your Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Your password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <i class="icon_lock_alt"></i>
            </div>
            <div class="form-group">
                <label>Confirm password</label>
                <input class="form-control" type="password" name="password_confirmation" id="password2">
                <i class="icon_lock_alt"></i>
            </div>
            <div id="pass-info" class="clearfix"></div>
            <button type="submit" class="btn_1 rounded full-width add_top_30">Register Now!</button>
            <div class="text-center add_top_10">Already have an acccount? <strong><a href="{{ route('login') }}">Sign In</a></strong></div>
        </form>
    </div>
</div>
<!-- END SECTION LOGIN -->
@endsection
