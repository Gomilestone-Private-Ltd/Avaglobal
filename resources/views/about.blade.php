@extends('layout.main')
@section('content')

<style>
        body{
        background-color: #F5F5FF;
        }
        .wrappers{
        padding: 70px 0;
        /* overflow-x: hidden; */
        }


        .my-slider{
        padding: 0 70px;
        }
       
        .slick-next:before, .slick-prev:before{
        color: #000;
        font-size: 26px;
        }
        button.prev-arrow.slick-arrow {
            background-color: white;
            font-size: 29px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: none;
            position: absolute;
            top: 50%;
            left: 6%;
            z-index: 9999;
        }
        button.next-arrow.slick-arrow {
            background-color: white;
            font-size: 29px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: none;
            position: absolute;
            right: 4%;
            top: 50%;
            z-index: 9999;
        }
</style>
    <div id="page" class="aboutpg">

        <div class="strik-left">
            <div class="arrowpre"><a id="previousPage" href="#"><span class="sprite prvsld"></span></a></div>
            <div class="arrownext">
                <a id="nextPage" href="#"><span class="sprite nxtsld"></span></a>
            </div>
        </div>

        <!-- RESPONSIVE MENU END --> <!---headerwrapper end-->
        <div id="fullpage">
        <div class="section mission-wrapper-about" id="section2">
                <div class="servicerighttxtblk">
                    <div class="misson-blk-abt">
                        <div>
                            <img class="icon-img" src="{{ asset('images/about/our-mission.png') }}" alt="" />
                        </div>
                        <div class="misson-blk-abt-head">
                            our Mission
                        </div>
                        <div class="misson-blk-abt-content">
                            To serve our customers with flexible and innovative logistics solutions. To be a
                            strategic supply chain partner and provide customized solutions of highest standard to
                            our customers.
                        </div>
                    </div>
                    <div class="misson-blk-abt">
                        <div>
                            <img class="icon-img" src="{{ asset('images/about/our-vision.png') }}" alt="">
                        </div>
                        <div class="misson-blk-abt-head">
                            our vision
                        </div>
                        <div class="misson-blk-abt-content">
                            To become a leading logistics service provider by ensuring highest ethical standards and
                            delivering exceptional value to our clients, staff and community.
                        </div>
                    </div>
                    <div class="clear"></div>

                    <div class="philosophy-blk-abt">
                        <div>
                            <img class="belief-icon" src="{{ asset('images/about/handshake.png') }}" alt="">
                        </div>
                        <div class="misson-blk-abt-head">
                             Our Belief
                        </div>
                        <div class="misson-blk-abt-content">
                            At AVA Global, we believe in keeping things simple and transparent.
                            We endeavour in growing our customers reach and network and be a part of their growth story.
                        </div>
                    </div>
                </div>
                <div class="missn-line"></div>
                <div class="servicesmobimg">
                    <img src="{{ asset('images/about/img1-res.jpg') }}" alt="" />
                </div>
            </div>
            <div class="section servdet3sld" id="section0">
               <div class="our-usp">
                <h1 class="main-text">Our USP</h1>
                <div class="four-box">
                    <div class="first-box">
                    <img class="our-icons" src="{{ asset('images/solutions.png') }}" alt="" />
                        <h1 class="color-black"> End to End – Intermodal Solutions</h1>
                    </div>
                    <div class="first-box">
                    <img class="our-icons" src="{{ asset('images/logistic-1.png') }}" alt="" />
                        <h1 class="color-black">Logistics Network Design to Suit Business Needs</h1>
                    </div>
                    <div class="first-box">
                    <img class="our-icons" src="{{ asset('images/transportation.png') }}" alt="" />
                        <h1 class="color-black">Complete Suite of Logistics Services</h1>
                    </div>
                   <div class="first-box">
                   <img class="our-icons" src="{{ asset('images/cargo.png') }}" alt="" />
                        <h1 class="color-black">Exclusive Arrangements for Unitization of Cargo</h1>
                    </div>
                </div>
               </div>
               <div class="greyoverlaybig"></div>
               <div class="greyoverlaysml"></div>
            </div>
            <div class="section servdet3sld" id="section0">
               <div class="our-usp">
                
               <div class="wrappers">
               <h1 class="main-text">Our Expertise</h1>
                    <div class="my-slider">
                    <div class="item">
                            <div class="main-expertise-box">
                                <div class="ecpertise-box">
                                  <img class="" src="{{ asset('images/about/agro.jpg') }}" alt="">
                                </div>
                            <div class="right-text-expertise">
                            <h1 class="itum-heading">AGRO</h1>
                                <h1 class="itum-sub-heading">Special filed rates for Agro Commodities worldwibe ex Nhava, Sheva, Mundra, Hazira and ICD's with confirmed bookings.</h1>
                             </div>
                        </div>
                        </div>
                        <div class="item"> 
                            <div class="main-expertise-box">  
                             <div class="right-text-expertise">
                             <h1 class="itum-heading">CREAMIC</h1>
                                <h1 class="itum-sub-heading">Exclusive arrangements in Morbi with well established hinterland connectivity across ICD/CFS and sea-ports.</h1>
                             </div>
                             <div class="ecpertise-box">
                                  <img class="" src="{{ asset('images/about/creamic.jpg') }}" alt="">
                                </div>
                        </div>
                        </div>
                        <div class="item">
                            <div class="main-expertise-box">
                                <div class="ecpertise-box">
                                  <img class="" src="{{ asset('images/about/pharma.png') }}" alt="">
                                </div>
                            <div class="right-text-expertise">
                                <h1 class="itum-heading">PHARMA</h1>
                                <h1 class="itum-sub-heading">IOT based tracking for temperature controlled cargo.</h1>
                             </div>
                        </div>
                        </div>
                        <div class="item">
                            <div class="main-expertise-box">
                               
                            <div class="right-text-expertise">
                            <h1 class="itum-heading">CHEMICALS</h1>
                                <h1 class="itum-sub-heading">Experience of shipping dangerous goods and hazerdous material across 200+ routes.</h1>
                             </div>
                             <div class="ecpertise-box">
                                  <img class="" src="{{ asset('images/about/chamical.jpg') }}" alt="">
                                </div>
                        </div>
                        </div>
                        <div class="item">
                            <div class="main-expertise-box">
                                <div class="ecpertise-box">
                                  <img class="" src="{{ asset('images/about/large-container.jpg') }}" alt="">
                                </div>
                            <div class="right-text-expertise">
                            <h1 class="itum-heading">MACHINERY, OCD & HEAVY HAUL</h1>
                                <h1 class="itum-sub-heading">pecialized expertise, tailored solutions and reliable delivery for your oversized, overweight and challenging freight.</h1>
                             </div>
                        </div>
                        </div>
                        <div class="item">
                            <div class="main-expertise-box">   
                            <div class="right-text-expertise">
                            <h1 class="itum-heading">MACHINERY, OCD & HEAVY HAUL</h1>
                                <h1 class="itum-sub-heading">Understanding the nuances in shipping over dimensional cargo.</h1>
                             </div>
                             <div class="ecpertise-box">
                                  <img class="" src="{{ asset('images/about/container.jpg') }}" alt="">
                                </div>
                        </div>
                        </div>
                        </div>
                    </div>

               </div>
               <div class="greyoverlaybig"></div>
               <div class="greyoverlaysml"></div>
            </div>
            <div class="section" id="section0">
                <div class="aboutbannerblk">
                    <div class="wrapper pageblock">
                        <div class="bannertxtblk">
                            <div class="avaglname font-bebas">an overview</div>
                            <h1 class="tagline uppercase">About AVA Global, Logistics service provider</h1>
                            <p>At AVA Global, our team is committed to perform with highest standards of quality and service, <br /> with complete trust, transparency and ethics.</p>
                            <!-- <p>Ava global is a very young organization founded on the certain<br /> and inherent
                                strength of its promoters/founders. </p> -->
                            <a href="#secondPage">
                                <div class="sprite dwnarw"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="greyoverlaybig"></div>
                <div class="greyoverlaysml"></div>
            </div>
            <div class="section" id="section1">
                <div class="aboutavabgblk" id="element">
                    <div class="servicelefttxtblk">
                        <h2 class="tagline uppercase heading-abt-title">about ava global</h2>
                        <div class="owscrollblk scroll-pane">
                            <h3 class="subtxt">Redefining Logistics and Transportation</h3>
                            <p class="pagetxt">
                                AVA Global is committed to offer high quality logistics solutions to meet
                                client’sbusiness needs. From <a href="#">air
                                    cargo</a> and <a href="#">ocean
                                    freight</a> to
                                <a href="#">warehousing</a>, <a
                                    href="#">custom
                                    clearance</a>, chartering and transportation, we have an extensive portfolio of
                                services to add value and flexibility to our client’s supply chain requirements.

                            </p>
                            <p class="pagetxt">
                                With more than 20 years of experiencein delivering exceptional customer value, we
                                have established ourselves as one the leadinglogistics and transportation service
                                providers in India. Our resourceful team of logistics experts along with strong
                                technological support and global network, has helped us handle the most discerning
                                demands of our clients. Our expertise can be relied upon in managing day to day
                                logistics needs with ease.
                            </p>
                            <p class="pagetxt">
                                We take pride in our systematic, customer-driven approach and cost-effective
                                measures to meet client’srequirements. Our aim is to offer our clients a seamless
                                service experience anytime, anywhere. We strive to create value by maximizing the
                                full potential of our client’s business by understanding their needs and providing
                                timely solutions that are entirely to their satisfaction.
                            </p>
                            <p class="pagetxt">
                                At AVA Global, we not only deliver timely logistic solutions but also work towards
                                providing innovative and cost effective measures in a timely manner without
                                compromising on quality in this ever changing dynamic scenario.
                            </p>
                            <div class="aboutpgexptxt">
                                <div class="abt-ava-glo-no">
                                    <div class="no-content-ava">20</div>
                                </div>
                                <div class="abt-ava-glo-no">
                                    <div class="year-ava">years of</div>
                                    <div class="experience-ava">Experience</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="servicesmobimg">
                        <img src="{{ asset('images/mobile-images/overviewimg-mob.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
           
            <div class="section commitment-wrapper-about" id="section3">
                <div class="servicelefttxtblk">
                    <div class="ourprinciblk">
                        <h2 class="tagline uppercase ">our PRINCIPLE</h2>
                        <p class="pagetxt commitsubtxt">We aim to grow our client’s business and in the process
                            grow along with them. Irrespective of logistics and transportation needs, we offer
                            highest standard of professionalism.</p>
                        <p class="pagetxt">
                            With client satisfaction as the driving force, our services are backed by complete
                            business transparency. By implementing transparency we not only add value to our
                            operations but also display our commitment towards maintaining long lasting business
                            relations with our clients.
                        </p>
                        <p class="pagetxt">
                            At AVA Global, we believe that collaboration and transparency are vital to the success
                            of logistics and supply chain management. Our team shares a transparent relation with
                            each client, allowing them to understand all procedures and systems.
                        </p>
                    </div>
                    <div class="ourcommitblk">
                        <h2 class="tagline uppercase">Commitments</h2>
                        <p class="pagetxt">At AVA Global, we understand your need for high performance logistics
                            solutions to maintain a competitive advantage. We are committed to provide you superior
                            services, irrespective of your logistics needs. We take pride in our strong network of
                            qualified carriers and a team of dedicated managers and logistics experts who enable us
                            to deliver top-notch solutions to you at the most competitive price. Committed to
                            deliver on our promised service level, we work closelywith our clientsto deliver
                            excellence. </p>
                        <!--<p class="pagetxt commitsubtxt">
                                        Our three key drivers to ensure this high performance are :
                                        <span class="pagetitle uppercase">integrated processes, coordinated players and the total trace ability of operations.</span>
                                    </p>-->
                    </div>
                </div>
                <div class="servicesmobimg">
                    <img src="{{ asset('/images/about/img2-res.jpg') }}" alt="" />
                </div>
            </div>
            <div class="section team-wrapper-about" id="section4">
                <div class="team-slider-wrap">
                    <div class="banner-wrapper-about desksliderabt">
                        <div class="blue-div-team blue-div-team1"></div>
                        <div class="blue-div-team blue-div-team2"></div>
                        <div class="blue-div-team blue-div-team3"></div>
                        <div class="ourteamnewblk">
                            <div class="ourteammember ibvt"><img src="{{ asset('images/about/darshan.png') }}"
                                    alt="" />
                                <div class="abt-banner-caption">
                                    <div class="banner-container-abt">
                                        <div class="abt-team-name">Mr. Darshan Ghodawat</div>
                                        <div class="abt-team-desgntn">MD & CEO</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ourteammember kushal ibvt"><img src="{{ asset('images/about/kaushal.png') }}"
                                    alt="" />
                                <div class="abt-banner-caption">
                                    <div class="banner-container-abt">
                                        <div class="abt-team-name">Mr. Kaushal Vithlani</div>
                                        <div class="abt-team-desgntn">Director & COO</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-wrapper-about responsiveabtsld">
                        <div class="blue-div-team blue-div-team1"></div>
                        <div class="blue-div-team blue-div-team2"></div>
                        <div class="blue-div-team blue-div-team3"></div>
                        <ul class="bxslidernews3">
                            <li>
                                <div class="abt-banner-blk-same">
                                    <img src="{{ asset('images/about/team-resp/Darshan_Ghodawat.jpg') }}"
                                        alt="" />
                                    <div class="abt-banner-caption">
                                        <div class="banner-container-abt">
                                            <div class="abt-team-name">Mr. Darshan Ghodawat</div>
                                            <div class="abt-team-desgntn">MD & CEO</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="abt-banner-blk-same">
                                    <img src="{{ asset('images/about/kaushal_v - Copy.jpg') }}" alt="" />
                                    <div class="abt-banner-caption">
                                        <div class="banner-container-abt">
                                            <div class="abt-team-name">Mr. Kaushal Vithlani</div>
                                            <div class="abt-team-desgntn">Director & COO</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="abt-banner-blk-same">
                                    <img src="{{ asset('images/about/team-resp/team3-resp.jpg') }}" alt="" />
                                    <div class="abt-banner-caption">
                                        <div class="banner-container-abt">
                                            <div class="abt-team-name">Capt. Ashok Shrivastava</div>
                                            <div class="abt-team-desgntn">Head of Shipping</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="newsleftcontent mediacontent">
                        <div class="wrapper">
                            <div class="newsinfoblk">
                                <div class="newsheading font-bebas">
                                    OUR TEAM
                                </div>
                                <div class="pagetxt">
                                    We have a team of specialists to take care of a variety of logistics needs. Our
                                    team comprises of professionals who are dedicated and service oriented. They
                                    bring both expertise and experience to the table, helping the company deliver
                                    timely and effective solutions.
                                </div>
                                <div class="pagetxt teamsubtxt">
                                    Our professionals are committed to exceed customer expectations and ensure
                                    highest level of quality and service.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---footer start-->
                    <!-- <div class="footerwrapper pageblock">
                        <div class="wrapper">
                            <div class="footerblk">

                                <div class="footerrightblk fr">
                                    <div class="developblk ibvm">
                                        <div class="ibvm footertext">Design &amp; Developed :</div>
                                        <div class="ibvm ddlogo">
                                            <a href="#" target="_blank" class="sprite"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="footerleftblk fl">
                                    <p class="copyrighttxt footertext">&copy; Copyright 2018 AVA GLOBAL - All
                                        Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    {{-- <script src="{{ asset('js/wow.js') }}"></script>
                    <script>
                        new WOW().init();
                    </script>
                    <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
                    <script src="{{ asset('js/scrollIt.min.js') }}"></script>
                    <script src="{{ asset('js/jquery.fullPage.js') }}"></script> --}}
                    <script>
                        $(document).ready(function() {
                            if ($(window).width() >= 1024) {
                                $('#fullpage').fullpage({
                                    anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage', '5thPage', '6thPage',
                                        '7thPage', '8thPage'
                                    ],
                                    //sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C', '#C63D0F'],
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

                    {{-- <script src="{{ asset('js/jquery.jscrollpane.min.js') }}"></script>
                    <script src="{{ asset('js/jquery.mousewheel.js') }}"></script> --}}
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
                        $(window).scroll(function() {
                            if ($(window).width() <= 1023) {
                                if ($(this).scrollTop() > 200) {
                                    $('.headerblk').addClass('bgcolchange');
                                } else {
                                    $('.headerblk').removeClass('bgcolchange');
                                }
                            }
                        });
                    </script>
                    <!-- DESKTOP MENU JS SATRT -->
                    <script>
                        $(document).ready(function() {
                            if ($(window).width() >= 1024) {
                                $('#menublk').click(function() {
                                    //alert();
                                    $('.navigation').addClass('navigationopen')
                                });

                                $('.closeicon').click(function() {
                                    //alert();
                                    $('.navigation').removeClass('navigationopen')
                                });
                            }
                        });
                    </script>
                    <!-- DESKTOP MENU JS SATRT -->

                    {{-- <script src="{{ asset('js/jquery.mmenu.min.all.js') }}"></script> --}}
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
                                        content: [
                                            'prev',
                                            'title',
                                            'close'
                                        ]
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
                    </script> <!---footer end-->
                {{-- </div>
            </div>
        </div> --}}
    </div>
    {{-- <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.bxslider').bxSlider({
            auto: false,
            autoControls: true,

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
        //script for news slider testi
        $('.bxslidernews1').bxSlider({
            mode: 'fade',
        });
        //script for news slider testi
        $('.bxslidernews2').bxSlider({
            mode: 'fade',
        });
        //script for news slider testi       
        $('.bxslidernews3').bxSlider({
            slideWidth: 275,
            minSlides: 1,
            maxSlides: 3,
            slideMargin: 10,
            moveSlides: 1,
            infiniteLoop: false
        });
    </script>
    <script>
        $(document).ready(function(){
      $('.my-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        speed: 300,
        // infinite: true,
        autoplaySpeed: 5000,
        prevArrow:'<button class="prev-arrow"><</button>',
        nextArrow:'<button class="next-arrow">></button>', 
        // autoplay: true,
        responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
      });
    });
    </script>
   

@endsection
