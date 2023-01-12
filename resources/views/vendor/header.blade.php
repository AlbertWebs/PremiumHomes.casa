<header id="header-container" class="db-top-header">
    <!-- Header -->
    <div id="header">
        <div class="container-fluid">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="{{url('/')}}"><img src="{{asset('theme/images/logo-kubwa.png')}}" alt="Premium Homes"></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1">
                    @include('vendor.menu')
                </nav>
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->
            <!-- Right Side Content / -->
            <div class="header-user-menu user-menu">
                <div class="header-user-name">
                    @if(Auth::User()->avatar == null)
                    <span><img style="border:2px solid #bf9d34" src="{{url('/')}}/uploads/users/avatar.jpg" alt=""></span>{{Auth::User()->name}}
                    @else
                    <span><img style="border:2px solid #bf9d34" src="{{url('/')}}/uploads/users/{{Auth::user()->avatar}}" alt=""></span>{{Auth::User()->name}}
                    @endif
                </div>
                <ul>
                    <li><a href="user-profile#"> Edit profile</a></li>
                    <li><a href="{{url('/')}}/vendors/add-property"> Add Property</a></li>
                    <li><a href="payment-method#">  Payments</a></li>
                    <li><a href="change-password#"> Change Password</a></li>
                    <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}">{{ __('Logout') }}</a></li>
                </ul>
            </div>
            <!-- Right Side Content / End -->
        </div>
    </div>
    <!-- Header / End -->
</header>
