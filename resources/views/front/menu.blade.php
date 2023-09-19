<nav id="navigation" class="style-1 black">
    <ul id="responsive">
        <li class="active"><a   href="{{url('/')}}">Home</a> </li>
        <li>
            <a   href="{{url('/about-us')}}">About Us</a>
            <ul>
                <li><a href="#">Our Team</a>
                </li>
            </ul>
        </li>
        <li><a  href="{{route('properties-home',['rent'])}}">For Rent</a> </li>
        <li><a  href="{{route('properties-home',['sale'])}}">For Sale</a> </li>
        <li><a  href="{{route('land-for-sale')}}">Plots</a> </li>
        <li><a  href="{{route('un-approved')}}">UN Approved Properties</a> </li>
        <li><a  href="{{route('search-home')}}">Search Propertes</a> </li>
        <li><a  href="{{url('/')}}/contact-us">Contact Us</a> </li>
    </ul>
</nav>
