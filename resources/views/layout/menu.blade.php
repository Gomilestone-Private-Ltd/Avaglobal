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
            <div class="header-menu">
                <div class="topnav" id="myTopnav">
                    <a class="th-link" href="{{ url('/') }}">Home</a>
                    <a class="th-link" href="{{ route('about') }}">About Us</a>
                    <!-- <a class="th-link" href="{{ route('caseStudy') }}">Case Studies</a> -->
                    <div class="dropdown">
                        <button class="dropbtn">Services
                            <img src="{{ asset('/images/down-menu.png') }}" class="menu-icon">
                        </button>
                        <div class="dropdown-content">
                            <a href="{{ route('seaFreight') }}">Ocean Freight</a>
                            <a href="{{ route('airFreight') }}">Air Freight</a>
                            <a href="{{ route('heavyHaulTrucking') }}">Road Freight</a>
                            <a href="{{ route('railFreight') }}">Rail Freight</a>
                            <a href="{{ route('customsClearance') }}">Custom Clearing</a>
                            <a href="{{ route('freightShipping') }}">Forwarding</a>
                            <a href="{{ route('warehousing') }}">Warehousing</a>
                            <a href="{{ route('cargoInsurancet') }}">Insurance</a>

                        </div>
                    </div>
                    <a class="th-link" href="{{ route('contact') }}">Contact us</a>
                </div>
            </div>
            <div id="google_translate_element">
                <img src="{{ asset('/images/language.png') }}" class="language-icon">
            </div>
            {{-- <span class="welcm-ava">welcome to ava global</span> --}}
            <a href="{{ route('login') }}"><img src="{{ asset('/images/use.svg') }}" class="user-icon"></a>
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
                        <li><a href="{{ route('media') }}">Media centre</a></li>
                        <li><a href="{{ route('knowledge') }}">Knowledge centre</a></li>
                        <li><a href="{{ route('caseStudy') }}">Case studies</a></li>
                        <li><a href="{{ route('career') }}">Career</a></li>
                    </ul>
                    <!-- <li><a href="{{ url('/') }}">Home</a></li> -->
                    <!-- <li><a href="{{ route('about') }}">ABOUT US</a></li> -->
                    <!-- <li><a href="{{ route('contact') }}">Contact us</a></li> -->
                    <!-- <li><a href="{{ route('career') }}">Career</a></li> -->

                    <!-- <li><a href="{{ route('media') }}">In The Media</a></li> -->
                    <!-- <li><a href="{{ route('login') }}">Employee Login</a></li> -->

                </div>
                <!-- <div class="navlinkblk">
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
                </div> -->
            </div>
        </div>
    </div>
</div>
<nav id="menu">

    <ul>
        <li class="side_menu_box">
            <p id="close_menu"><i class="fa fa-times" aria-hidden="true"></i></p>
        </li>
        <li><a href="{{ route('home') }}">HOME</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li>
            {{-- <a href="{{ route('services') }}">services</a> --}}
            <a>services</a>
            <ul>
                <li><a href="{{ route('seaFreight') }}">OCEAN FREIGHT</a></li>
                <li><a href="{{ route('airFreight') }}">AIR FREIGHT</a></li>
                <li><a href="{{ route('heavyHaulTrucking') }}">ROAD FREIGHT</a></li>
                <li><a href="{{ route('railFreight') }}">RAIL FREIGHT</a></li>
                <li><a href="{{ route('customsClearance') }}">CUSTOMS CLEARANCE</a>
                </li>
                <li><a href="{{ route('freightShipping') }}">FORWARDING</a></li>
                <li><a href="{{ route('warehousing') }}">WAREHOUSING</a></li>
                {{-- <li><a href="{{ route('heavyHaulTrucking') }}">TRUCKING</a></li> --}}

                <li><a href="{{ route('cargoInsurancet') }}">INSURANCE</a></li>
            </ul>
        </li>
        <li><a href="{{route('knowledge')}}">KNOWLEDGE CENTRE</a>
            <ul>
                <li><a href="{{ route('tariffsCalculators') }}">PROCEDURE FOR CLEARANCE OF
                        <br />IMPORTED AND EXPORT GOODS</a></li>
                <li><a href="{{ route('containerSizes') }}">CONTAINER SIZES</a></li>
                <li><a href="{{ route('conversion-calc') }}">MEASUREMENT CONVERTER</a></li>

            </ul>
        </li>
        <li><a href="{{ route('contact') }}">Contact us</a></li>
        <li><a href="{{ route('career') }}">Career</a></li>
        <li><a href="{{ route('caseStudy') }}">Case Studies</a></li>
        <li><a href="{{ route('media') }}">In The Media</a></li>
        <li><a href="{{ route('login') }}">Employee Login</a></li>
    </ul>
</nav>
<script>
    // Select elements with class mm-menu and mm-offcanvas
    var firstCss = document.getElementById('menu');
    firstCss.style.display = "block";
    firstCss.style.position = "fixed";
    firstCss.style.setProperty("right", "-300px", "important");
    firstCss.style.transition = "0.5s";

    var ham = document.getElementById('menublk');
    ham.onclick = function() {
        var closeThis = document.querySelectorAll('.mm-offcanvas');
        closeThis.forEach(function(el) {
            el.style.removeProperty("right");
        });
        var htmlElement = document.documentElement;
        htmlElement.classList.add('mm-opened', 'mm-background', 'mm-right', 'mm-opening');
    }

    var closeEl = document.getElementById('close_menu');
    closeEl.onclick = function() {
        var firstCss = document.getElementById('menu');
        firstCss.style.display = "block";
        firstCss.style.position = "fixed";

        firstCss.style.setProperty("right", "-300px", "important");
        firstCss.style.transition = "0.5s";
        var htmlElement = document.documentElement;
        htmlElement.classList.remove('mm-opened', 'mm-background', 'mm-right', 'mm-opening');
    }
</script>
