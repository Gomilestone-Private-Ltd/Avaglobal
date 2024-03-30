<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<header class="headerblk">
    <div class="wrapper ">
        <div class="logosection">
            <a href="{{ url('/') }}">
                <video class="logo-video" width="100" height="70" autoplay muted loop>
                    <source src="{{ asset('/ava-logo.mp4') }}" type="video/mp4">
                </video>
            </a>

        </div>
        <div class="headerrightblk">
            <div id="google_translate_element">
                <img src="{{ asset('/images/language.png') }}" class="language-icon">
            </div>
            <span class="welcm-ava">welcome to ava global</span>
            <a href="{{ route('employee-login') }}"><img src="{{ asset('/images/use.svg') }}" class="user-icon"></a>
            <a href="#menu"><span class="sprite hamburger" id="menublk"></span></a>
        </div>
        <div class="clear"></div>
    </div>
</header>
<div class="navigation">
    <div class="navigationwrap">
        <div class="container">
            <div class="navigationheader">
                <div class="navlogoblk fl">
                    <a href="/">
                        <div class="avamentttl font-bebas">ava global</div>
                    </a>
                </div>
                <div class="navcloseblk fr">
                    <div class="closetextblk font-bebas ibvm">close</div>
                    <div class="closeicon sprite ibvm"></div>
                </div>
            </div>
            <div class="navigationdes">
                <div class="navlinkblk">
                    <ul class="navmainlink">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">ABOUT US</a></li>
                        <li><a href="{{ route('contact') }}">Contact us</a></li>
                        <li><a href="{{ route('career') }}">Career</a></li>
                        <li><a href="{{ route('caseStudy') }}">Case Studies</a></li>
                        <li><a href="{{ route('newsEvent') }}">News & Events</a></li>
                        <li><a href="{{ route('employee-login') }}">Employee Login</a></li>
                    </ul>
                </div>
                <div class="navlinkblk">
                    <ul class="navmainlink">
                        <li><a href="{{ route('services') }}">Services</a></li>
                    </ul>
                    <ul class="navsubllink">
                        <li><a href="{{ route('seaFreight') }}">OCEAN FREIGHT</a>
                        </li>
                        <li><a href="{{ route('airFreight') }}">AIR FREIGHT</a>
                        </li>
                        <li><a href="{{ route('customsClearance') }}">CUSTOM CLEARING</a></li>
                        <li><a href="{{ route('warehousing') }}">WAREHOUSING</a>
                        </li>
                        <li><a href="{{ route('heavyHaulTrucking') }}">TRUCKING</a>
                        </li>
                        <li><a href="{{ route('freightShipping') }}">SHIPPING</a>
                        </li>
                        <li><a href="{{ route('cargoInsurancet') }}">INSURANCE</a>
                        </li>
                    </ul>
                </div>
                <div class="navlinkblk">
                    <ul class="navmainlink">
                        <li><a href="{{ route('tariffsCalculators') }}">TARIFFS &
                                CALCULATORS</a></li>
                    </ul>
                    <ul class="navsubllink">
                        <li><a href="{{ route('tariffsCalculators') }}">PROCEDURE FOR
                                CLEARANCE OF <br />IMPORTED AND EXPORT GOODS</a></li>
                        <li><a href="{{ route('containerSizes') }}">CONTAINER SIZES</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<nav id="menu">
    <ul>
        <li><a href="{{ route('home') }}">HOME</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('services') }}">services</a>
            <ul>
                <li><a href="{{ route('seaFreight') }}">OCEAN FREIGHT</a></li>
                <li><a href="{{ route('airFreight') }}">AIR FREIGHT</a></li>
                <li><a href="{{ route('customsClearance') }}">CUSTOM CLEARING</a>
                </li>
                <li><a href="{{ route('warehousing') }}">WAREHOUSING</a></li>
                <li><a href="{{ route('heavyHaulTrucking') }}">TRUCKING</a></li>
                <li><a href="{{ route('freightShipping') }}">SHIPPING</a></li>
                <li><a href="{{ route('cargoInsurancet') }}">INSURANCE</a></li>
            </ul>
        </li>
        <li><a href="{{ route('tariffsCalculators') }}">TARIFFS & CALCULATORS</a>
            <ul>
                <li><a href="{{ route('tariffsCalculators') }}">PROCEDURE FOR CLEARANCE OF
                        <br />IMPORTED AND EXPORT GOODS</a></li>
                <li><a href="{{ route('containerSizes') }}">CONTAINER SIZES</a></li>

            </ul>
        </li>
        <li><a href="{{ route('contact') }}">Contact us</a></li>
        <li><a href="{{ route('career') }}">Career</a></li>
        <li><a href="{{ route('caseStudy') }}">Case Studies</a></li>
        <li><a href="{{ route('newsEvent') }}">News & Events</a></li>
        <li><a href="{{ route('employee-login') }}">Employee Login</a></li>
    </ul>
</nav>
