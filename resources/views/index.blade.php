@push('styles')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/main.css') }}" />
@endpush
@extends('layout.main')
@section('content')
    <div id="page">
        <div class="strik-left">
            <div class="arrowpre"><a id="previousPage" href="#"><span class="sprite prvsld"></span></a></div>
            <div class="arrownext">
                <a id="nextPage" href="#"><span class="sprite nxtsld"></span></a>
            </div>
        </div>
        <!-- RESPONSIVE MENU END -->
        <div id="fullpage">
            <div class="section" id="section0">
                <div class="videoblkwrapper pageblock">
                    <div class="videoblk">
                        <div class="wrapper">
                            <div class="avanameblk fl uppercase">
                                <div class="avaglname font-bebas">ava global</div>
                                <h1 class="main-title">Redefining Logistics and Transportation Company</h1>
                                <h2 class="sub-title">Logistic solutions & supply chain operations</h2>
                                <a href="#secondPage">
                                    <div class="sprite dwnarw"></div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="videowrapper">
                        <video autoplay="autoplay" class="desk-video" loop="loop" muted="muted" id="myVideo">
                            <source src="video/My-Video2.mp4" type="video/mp4" />
                            <source src="video/My-Video2.webm" type="video/webm" />
                            <source src="video/My-Video2.ogg" type="video/ogg" />
                        </video>
                        <video id="myVideomob" class="res-video" loop="loop" poster="video/video-poster-img.jpg">
                            <source src="video/My-Video2.mp4" type="video/mp4">
                            <source src="video/My-Video2.mp4" type="video/webm" />
                        </video>
                        <div class="vidbuttons">
                            <button type="button" class="play playpausebtn"></button>
                            <button type="button" class="pause playpausebtn"></button>
                        </div>
                    </div>
                    <div class="blackoverlay"></div>
                    <div class="bluoverlaybig"></div>
                    <div class="bluoverlaysml"></div>
                </div>
            </div>
            <div class="section" id="section1">
                <div class="overviewblk pageblock">
                    <div class="overviewtab">
                        <div id="bx-pager">
                            <div>
                                <a data-slide-index="0" href="">an overview</a>
                                <a data-slide-index="1" href="">the challenges</a>
                                <a data-slide-index="2" href="">our usp</a>
                            </div>
                        </div>
                    </div>
                    <ul class="bxslideroverview">
                        <li class="overviewslide">
                            <div class="overviewtxtblk">
                                <div class="overvwttl font-bebas uppercase">an overview</div>
                                <div class="overvwtagln font-bebas uppercase">your <span>navigators</span> in the
                                    world of trade .</div>
                                <div class="pagetxt">
                                    AVA Global is committed to offer high quality logistics solutions to meet
                                    client’sbusiness needs. From air cargo and ocean freight to warehousing, custom
                                    clearance,chartering and transportation, we have an extensive portfolio of
                                    services to add value and flexibility to our client’s supply chain requirements.
                                </div>
                                <a href="/about.html">
                                    <div class="knowmore uppercase">know more
                                        <div class="sprite knwmorearw"></div>
                                    </div>
                                </a>
                                <div class="counter-box">
                                    <div class="counter-box-inner">
                                        <div class="counter-b1">
                                            <h3><span id="customer">0</span>+</h3>
                                            <h4 class="ct-heading">Trusted Customers</h4>
                                        </div>
                                        <div class="counter-b2">
                                            <h3><span id="footprint">0</span>+</h3>
                                            <h4 class="ct-heading">Footprints Countries</h4>
                                        </div>
                                        <div class="counter-b3">
                                            <h3><span id="ocean">0</span>+</h3>
                                            <h4 class="ct-heading">Ocean routes</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overviewimgrightblk">
                                <img src="images/mobile-images/overviewimg-resp.jpg" alt="" class="overvwsldimg">
                                <div class="oversldimgtxt">
                                    <div class="tabrighttxtblk">
                                        <div class="ibvm twentytxt">
                                            <div class="font-bebas experiencetxt">
                                                20
                                            </div>
                                        </div>
                                        <div class="ibvm experinceblk">
                                            <div class="font-bebas experiencetxt">
                                                years of<br /> Experience
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="challengeslide">
                            <div class="overviewtxtblk">
                                <div class="overvwttl font-bebas uppercase">the challenges</div>
                                <div class="overvwtagln font-bebas uppercase">challenges in logistics and supply
                                    chain management.</div>
                                <div class="pagetxt">
                                    In today's highly competitive marketplace, the pressure on organizations is to
                                    find new ways to create and deliver value to customers consistently. Provision
                                    of efficient logistics solutions and effective supply chain management processes
                                    are the ways to achieve cost-reduction and better service for customers.
                                </div>
                                <a href="about.php">
                                    <div class="knowmore uppercase">know more
                                        <div class="sprite knwmorearw"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="overviewimgrightblk">
                                <img src="images/mobile-images/challengeimg-mob.jpg" alt="" class="overvwsldimg">
                                <div class="oversldimgtxt">
                                    <div class="tabrighttxtblk">
                                        <div class="ibvm twentytxt">
                                            <div class="font-bebas experiencetxt">
                                                05
                                            </div>
                                        </div>
                                        <div class="ibvm experinceblk">
                                            <div class="font-bebas experiencetxt">
                                                global<br /> presence
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="uspslide">
                            <div class="overviewtxtblk">
                                <div class="overvwttl font-bebas uppercase">our usp</div>
                                <div class="overvwtagln font-bebas uppercase">what outstands<span> ava
                                        global?</span></div>
                                <div class="usplistblk">
                                    <ul>
                                        <li>Flexibity in handling all types of freights.</li>
                                        <li>Expert support teams.</li>
                                        <li>Networking with top global carriers.</li>
                                        <li>Multiple carrier solutions.</li>
                                        <li>Centralized ocean procurement, combined with best price & terms.</li>
                                    </ul>
                                </div>
                                <a href="about.php">
                                    <div class="knowmore uppercase">know more
                                        <div class="sprite knwmorearw"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="overviewimgrightblk">
                                <img src="images/mobile-images/uspimg-mob.jpg" alt="" class="overvwsldimg">
                                <div class="oversldimgtxt">
                                    <div class="tabrighttxtblk">
                                        <div class="ibvm twentytxt">
                                            <div class="font-bebas experiencetxt">
                                                09
                                            </div>
                                        </div>
                                        <div class="ibvm experinceblk">
                                            <div class="font-bebas experiencetxt">
                                                core<br /> products
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="section" id="section2">
                <div class="productwrapper pageblock">
                    <div class="productleftcontent">
                        <div class="wrapper">
                            <div class="productinfoblk">
                                <div class="productheading font-bebas">
                                    core products
                                </div>
                                <div class="pagetxt">
                                    Our hands-on services and strategic solutions are extensive and customised to
                                    meet your every need; whether assisting with expediting an urgent shipment or a
                                    strategic partner who can provide competitive terms, identify and create
                                    short-term efficiencies and build up long-term competitiveness.
                                </div>
                                <a href="/about.html">
                                    <div class="knowmore knowmorewhite uppercase">
                                        Know More
                                        <div class="sprite knwmorearw knwmorewharw"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="productrightcontent">
                        <div id="product-bx-pager">
                            <div>
                                <a data-slide-index="0" href="" class="active">OCEAN FREIGHT</a>

                                <a data-slide-index="1" href="">AIR FREIGHT</a>
                                <a data-slide-index="2" href="">CUSTOM CLEARING</a>
                                <a data-slide-index="3" href="">WAREHOUSING</a>
                                <a data-slide-index="4" href="">TRUCKING</a>
                                <a data-slide-index="5" href="">shipping</a>
                                <a data-slide-index="6" href="">insurance</a>
                            </div>
                        </div>
                        <ul class="bxsliderproduct">
                            <li>
                                <div class="praductbanwraper">
                                    <img src="/images/services/ocen-fright.png" alt="" class="img-desktop" />
                                    <img src="/images/services/oceanbg-resp.jpg" alt="" class="img-responsive" />
                                    <a href="services/sea-freight.php">
                                        <div class="knowmore coreproknwmore uppercase">
                                            Know More
                                            <div class="sprite knwmorearw knwmorewharw"></div>
                                        </div>
                                    </a>
                                    <div class="product-name"><span>01.</span> OCEAN FREIGHT
                                        <a class="prod-morebuts" href="services/sea-freight.php">KNOW MORE</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="praductbanwraper">
                                    <img src="/images/services/air-fright.png" alt="" class="img-desktop" />
                                    <img src="/images/services/airbg-resp.jpg" alt="" class="img-responsive" />

                                    <a href="services/air-freight.php">
                                        <div class="knowmore coreproknwmore uppercase">
                                            Know More
                                            <div class="sprite knwmorearw knwmorewharw"></div>
                                        </div>
                                    </a>
                                    <div class="product-name"><span>02.</span> AIR FREIGHT
                                        <a class="prod-morebuts" href="services/air-freight.php">KNOW MORE</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="praductbanwraper">
                                    <img src="images/services/custom-clearing.png" alt="" class="img-desktop" />
                                    <img src="images/services/custombg-resp.jpg" alt="" class="img-responsive" />

                                    <a href="services/customs-clearance.php">
                                        <div class="knowmore coreproknwmore uppercase">
                                            Know More
                                            <div class="sprite knwmorearw knwmorewharw"></div>
                                        </div>
                                    </a>
                                    <div class="product-name"><span>03.</span> CUSTOM CLEARING
                                        <a class="prod-morebuts" href="services/customs-clearance.php">KNOW
                                            MORE</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="praductbanwraper">
                                    <img src="/images/services/warehouse.png" alt="" class="img-desktop" />
                                    <img src="/images/services/warehousebg-resp.jpg" alt=""
                                        class="img-responsive" />

                                    <a href="services/warehousing.php">
                                        <div class="knowmore coreproknwmore uppercase">
                                            Know More
                                            <div class="sprite knwmorearw knwmorewharw"></div>
                                        </div>
                                    </a>
                                    <div class="product-name"><span>04.</span> WAREHOUSING
                                        <a class="prod-morebuts" href="services/warehousing.php">KNOW MORE</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="praductbanwraper">
                                    <img src="/images/services/trucking.png" alt="" class="img-desktop" />
                                    <img src="/images/services/truckingbg-resp.jpg" alt=""
                                        class="img-responsive" />

                                    <a href="services/heavy-haul-trucking.php">
                                        <div class="knowmore coreproknwmore uppercase">
                                            Know More
                                            <div class="sprite knwmorearw knwmorewharw"></div>
                                        </div>
                                    </a>
                                    <div class="product-name"><span>05.</span> TRUCKING
                                        <a class="prod-morebuts" href="services/heavy-haul-trucking.php">KNOW
                                            MORE</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="praductbanwraper">
                                    <img src="/images/services/shipping.png" alt="" class="img-desktop" />
                                    <img src="/images/services/shipping-resp.png" alt=""
                                        class="img-responsive" />

                                    <a href="services/services-shipping.php">
                                        <div class="knowmore coreproknwmore uppercase">
                                            Know More
                                            <div class="sprite knwmorearw knwmorewharw"></div>
                                        </div>
                                    </a>
                                    <div class="product-name"><span>06.</span> shipping
                                        <a class="prod-morebuts" href="services/services-shipping.php">KNOW
                                            MORE</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="praductbanwraper">
                                    <img src="/images/services/insurance.png" alt="" class="img-desktop" />
                                    <img src="/images/services/insurancebg-resp.jpg" alt=""
                                        class="img-responsive" />

                                    <a href="services/cargo-insurance.php">
                                        <div class="knowmore coreproknwmore uppercase">
                                            Know More
                                            <div class="sprite knwmorearw knwmorewharw"></div>
                                        </div>
                                    </a>
                                    <div class="product-name"><span>07.</span> insurance
                                        <a class="prod-morebuts" href="services/cargo-insurance.php">KNOW MORE</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section servdet3sld" id="section3">
                <div class="fp-tableCell fv-display">
                    <video class="full-video" width="100%" autoplay controls muted loop>
                        <source src="/video/full-video.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="section" id="section4">
                <div class="banner-wrapper pageblock">
                    <div class="newsleftcontent">
                        <div class="wrapper">
                            <div class="newsinfoblk">
                                <div class="newsheading font-bebas">
                                    news & events
                                </div>
                                <div class="knowmore uppercase">
                                    all news & events
                                    <div class="sprite knwmorearw"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsslidercontent">
                        <ul class="bxslidernews">
                            <li>
                                <img src="/images/1.png" alt="" />
                                <div class="banner-caption">
                                    <div class="banner-container">
                                        <p class="slidetxt"><b>Ava Global Logistics wins 'Emerging Agri Business
                                                Logistics Co. of the year 2017' award at Globoil India 2017.</b></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="/images/2.png" alt="" />
                                <div class="banner-caption">
                                    <div class="banner-container">
                                        <p class="slidetxt"><b>Globoil Delhi 2017</b></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section" id="section5">
                <div class="contactinfobg pageblock">
                    <div class="contactinforightblk">
                        <h2 class="tagline uppercase">Contact info.</h2>
                        <div class="contactdetailsblk">
                            <div class="contactblk">
                                <div class="contacticon ibvt">
                                    <span class="sprite locationwhite"></span>
                                </div>
                                <div class="contacttxt ibvt">
                                    405, 4th Floor, Windfall, Sahar Plaza Complex,<br /> J.B Nagar, Andheri - Kurla
                                    Road, Andheri (East), <br /> Mumbai - 400059.
                                </div>
                            </div>
                            <div class="contactblk">
                                <div class="callblk ibvm">
                                    <div class="contacticon ibvt">
                                        <span class="sprite telephonewhite"></span>
                                    </div>
                                    <div class="contacttxt ibvt">
                                        +91 22 4611 3300 / 99
                                    </div>
                                </div>
                                <div class="callblk ibvm">
                                    <div class="contacticon ibvt">
                                        <span class="sprite faxwhite"></span>
                                    </div>
                                    <div class="contacttxt ibvt">
                                        +91 22 4611 3305
                                    </div>
                                </div>
                            </div>
                            <div class="contactblk">
                                <div class="contacticon ibvt">
                                    <span class="sprite emailwhite"></span>
                                </div>
                                <div class="contacttxt ibvt">
                                    <a href="mailto:info@avaglobal.in">info@avaglobal.in</a>
                                </div>
                            </div>
                        </div>
                        <a href="contact.php">
                            <div class="knowmore directiontxt uppercase">view direction
                                <div class="sprite knwmorearw knwmorewharw"></div>
                            </div>
                        </a>
                    </div>
                    <div class="contactmobimg"><img src="images/mobile-images/contactinfobg-mob.jpg" alt="" />
                    </div>
                </div>
                <div class="footerwrapper homefooterwrapper pageblock">
                    <div class="wrapper">
                        <div class="footerblk">
                            <div class="footerleftblk fl">
                                <p class="copyrighttxt footertext">&copy; Copyright 2018 AVA GLOBAL - All Rights
                                    Reserved</p>
                            </div>
                            <div class="footerrightblk fr">
                                <div class="developblk ibvm">
                                    <div class="ibvm footertext">Design &amp; Developed :</div>
                                    <div class="ibvm ddlogo">
                                        <a href="http://www.d-designstudio.com/" target="_blank" class="sprite"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // number count for stats, using jQuery animate
        function numCounter(tagId, maxCount, speed) {
            var initialNumber = 0;

            function counter() {
                document.getElementById(tagId).innerHTML = initialNumber;
                if (maxCount == initialNumber) {
                    initialNumber = initialNumber;
                } else {
                    ++initialNumber
                }
            }
            var counterDelay = setInterval(counter, speed);


        }

        numCounter("customer", 250, 30);
        numCounter("footprint", 170, 40);
        numCounter("ocean", 850, 10);
    </script>
    <script>
        window.onpageshow = function(event) {
            // If the event persisted property is false, it means the page is loaded from the server cache
            if (event.persisted) {
                window.location.reload(); // Reload the page
            }
        };
    </script>
    <script src="{{ asset('/js/jquery.bxslider.min.js') }}"></script>
    <script>
        $(".bxslider").bxSlider({
                auto: !0,
                autoControls: !0
            }), $(".bxslideroverview")
            .bxSlider({
                pagerCustom: "#bx-pager",
                mode: "fade"
            }),
            $(".bxsliderproduct").bxSlider({
                pagerCustom: "#product-bx-pager",
                mode: "fade"
            }),
            $(".bxslidernews").bxSlider({
                mode: "fade"
            }),
            $("#previousPage").click(function(e) {
                e.preventDefault(), $.fn.fullpage.moveSectionUp()
            }), $("#nextPage").click(function(e) {
                e.preventDefault(), $.fn.fullpage.moveSectionDown()
            });
    </script>
    <script>
        $(document).ready(function() {
            var e = document.getElementById("myVideomob");
            e.pause(), $(".play").hide(), $(".pause").click(function() {
                e.play(), $(".pause").hide(), $(".play").show()
            }), $(".play").click(function() {
                e.pause(), $(".pause").show(), $(".play").hide()
            })
        });
    </script>
    <script src="{{ asset('/js/scrollIt.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.fullPage.js') }}"></script>
    <script>
        $(document).ready(function() {
            if ($(window).width() >= 1024) {
                $('#fullpage').fullpage({
                    anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage', '5thPage', '6thPage',
                        '7thPage', '8thPage'
                    ],
                    navigation: true,
                    navigationPosition: 'right',
                    navigationTooltips: ['', '', '', '', '', '', '']
                });
            }
        });
        //script for arrow scroll
        $("#previousPage").click(function(e) {
            e.preventDefault();
            $.fn.fullpage.moveSectionUp();
        });
        $("#nextPage").click(function(e) {
            e.preventDefault();
            $.fn.fullpage.moveSectionDown();
        });
    </script>
    <script src="{{ asset('/js/jquery.jscrollpane.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.mousewheel.js') }}"></script>
    <script>
        $(document).ready(function() {
            if ($(window).width() >= 1001) {
                $('.scroll-pane').jScrollPane({
                    autoReinitialise: true
                });
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            if ($(window).width() >= 1024) {
                $('#menublk').click(function() {
                    $('.navigation').addClass('navigationopen')
                });
                $('.closeicon').click(function() {
                    $('.navigation').removeClass('navigationopen')
                });
            }
        });
    </script>
    <script src="{{ asset('/js/jquery.mmenu.min.all.js') }}"></script>
    <script>
        $(function() {
            if ($(window).width() <= 1023) {
                $("nav#menu").mmenu({
                    offCanvas: {
                        position: "right",
                        zposition: "back",
                        moveBackground: "true",
                    },
                    navbars: [{
                        position: 'top',
                        content: ['prev', 'title', 'close']
                    }, ]
                });
            }
        });
    </script>
    <script>
        $(window).load(function() {
            $("#preloader").delay(1000).fadeOut("slow");
        });
        $(document).ready(function() {
            setTimeout(function() {
                $('body').removeClass("overflow-hidden");
            }, 1000);
        });
    </script>
    <a href="#" class="back-to-top">Back to Top</a>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) {
                    $('.back-to-top').fadeIn();
                } else {
                    $('.back-to-top').fadeOut();
                }
            });
            $('.back-to-top').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 1000);
                return false;
            });
        });
    </script>

    <script>
        let video = document.querySelector('video');

        // Set the default playing speed
        video.defaultPlaybackRate = 3

        // Loading the video after setting 
        video.load();
    </script>
@endsection
