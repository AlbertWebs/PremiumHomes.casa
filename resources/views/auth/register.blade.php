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
        <form autocomplete="off">
            <div class="form-group">
                <label>Your Name</label>
                <input class="form-control" type="text">
                <i class="ti-user"></i>
            </div>
            <div class="form-group">
                <label>Your Last Name</label>
                <input class="form-control" type="text">
                <i class="ti-user"></i>
            </div>
            <div class="form-group">
                <label>Your Email</label>
                <input class="form-control" type="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Your password</label>
                <input class="form-control" type="password" id="password1">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="form-group">
                <label>Confirm password</label>
                <input class="form-control" type="password" id="password2">
                <i class="icon_lock_alt"></i>
            </div>
            <div id="pass-info" class="clearfix"></div>
            <a href="#0" class="btn_1 rounded full-width add_top_30">Register Now!</a>
            <div class="text-center add_top_10">Already have an acccount? <strong><a href="{{ route('login') }}">Sign In</a></strong></div>
        </form>
    </div>
</div>
<!-- END SECTION LOGIN -->
@endsection
