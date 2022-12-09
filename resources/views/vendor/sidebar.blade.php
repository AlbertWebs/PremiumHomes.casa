<div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
    <div class="user-profile-box mb-0">
        <div class="sidebar-header">
            <img src="{{asset('theme/images/Landscape-logo-premium-4.png')}}" alt="header-logo Premium Homes">
        </div>
        <div class="header clearfix">
            <img src="{{asset('theme/images/testimonials/199259143_4389625377747506_3043984032264076715_n.jpg')}}" alt="avatar" class="img-fluid profile-img">
        </div>
        <div class="active-user">
            @if(Auth::User())
            <h2>{{Auth::User()->name}}</h2>
            @else
            <h2>Albert Muhatia</h2>
            @endif
        </div>
        <div class="detail clearfix">
            <ul class="mb-0">
                <li>
                    <a class="@if($active == 'home') active @else @endif" href="{{route('dashboard')}}">
                        <i class="fa fa-map-marker"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a class="@if($active == 'profile') active @else @endif" href="{{route('user-profile')}}">
                        <i class="fa fa-user"></i>Profile
                    </a>
                </li>
                <li>
                    <a class="@if($active == 'properties') active @else @endif" href="{{route('my-listings')}}">
                        <i class="fa fa-list" aria-hidden="true"></i>My Properties
                    </a>
                </li>

                <li>
                    <a class="@if($active == 'add_property') active @else @endif" href="{{route('add-property')}}">
                        <i class="fa fa-list" aria-hidden="true"></i>Add Property
                    </a>
                </li>
                <li>
                    <a class="@if($active == 'payment_method') active @else @endif" href="{{route('payment-method')}}">
                        <i class="fas fa-credit-card"></i>Payments
                    </a>
                </li>
                <li>
                    <a class="@if($active == 'invoices') active @else @endif" href="{{route('invoices')}}">
                        <i class="fas fa-paste"></i>Invoices
                    </a>
                </li>
                <li>
                    <a href="change-password#">
                        <i class="fa fa-lock"></i>Change Password
                    </a>
                </li>
                <li>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt"></i>
                        {{ __('Logout') }}
                    </a>
                    {{--  --}}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
