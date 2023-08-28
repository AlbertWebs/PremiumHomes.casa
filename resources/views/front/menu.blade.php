<nav id="navigation" class="style-1 black">
    <ul id="responsive">
        <li><a  href="{{route('properties-home',['rent'])}}">For Rent</a> </li>
        <li><a  href="{{route('properties-home',['sale'])}}">For Sale</a> </li>
        <li><a  href="{{route('land-for-sale')}}">Plots</a> </li>
        <li><a  href="{{route('un-approved')}}">UN Approved Properties</a> </li>
        {{-- <li><a href="{{route('search-home')}}"><i class="fa fa-search"></i> Search</a> </li> --}}
        <li class="d-none d-xl-none d-block d-lg-block"><a href="login#">Login</a></li>
        <li class="d-none d-xl-none d-block d-lg-block"><a href="register#">Register</a></li>
        <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0">
            <a href="{{url('/')}}/login" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
        </li>
    </ul>
</nav>
