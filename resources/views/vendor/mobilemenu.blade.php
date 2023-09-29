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
                    <a class="" target="new" href="https://premiumhomes.erpserver.one/admin/leads">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>Leads
                    </a>
                </li>
                <li>
                    <a class="@if($active == 'property_views') active @else @endif" target="new" href="{{route('my-listings')}}">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>Property Views
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
