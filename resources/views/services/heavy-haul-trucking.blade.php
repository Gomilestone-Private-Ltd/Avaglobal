@push('styles')
<!-- <link rel="stylesheet" href="{{ asset('/css/casestudy.css') }}" /> -->
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
    <div id="fullpage">
        <div class="section servicedetailsection wearhosblk" id="section0">

            <div class="servicedeatialbanner">
                <div class="wrapper pageblock">
                    <div class="bannertxtblk">
                        <div class="avaglname font-bebas">ava global</div>
                        <h2 class="tagline uppercase">services we offer!</h2>
                        <div class="subheading-banner">
                            <h1>Heavy Haul Trucking</h1>
                        </div>
                        <a href="#secondPage">
                            <div class="sprite dwnarw"></div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="greyoverlaybig"></div>
            <div class="greyoverlaysml"></div>
        </div>
        <div class="section freightcontentparent" id="section1">
            <div class="freightcontentblk wearhoscontblk">
                <div class="servicelefttxtblk">
                    <div class="">
                        <p class="pagetxt">
                            As a full-service logistics and transportation company, we help our clients maintain their day-to-day operations with our reliable trucking services. Our wide range of trucking services are designed to accommodate varied needs of our clients. From lowboy trailers and flatbed trucks to refrigerated trucks, heavy haulers and step deck trailers, we have different types of trucks to deliver your freight on time.
                        </p>
                    </div>
                </div>
                <div class="servicenos">
                    05
                </div>

            </div>
        </div>
        <div class="section servdet3sld" id="section2">
            <div class="">
                <div class="servicelefttxtblk servdet3sldcont">
                    <div class="wrapper">
                        <p class="pagetxt">
                            We handle all types of shipments, be it big or small. You can get the goods shipped wherever you want because we work with some of the top carriers across the country. Your cargo will be moved by professionals who will ensure that your supply chain costs are kept to a minimum. From picking up shipments to dispatching, preparing necessary documentation, dealing with border clearance and tracking of cargo to its destination, we manage the entire process for you.
                        </p>
                        <p class="pagetxt">
                            You can rely on us for seamless, secure and on-time deliveries. We also operate hired equipment for carrying cargoes and integrate with services offered by other in-house departments.
                        </p>
                        <h3 class="subtxt">Why choose us?</h3>
                        <div class="customlist ibvt">
                            <ul>
                                <li>Customized solutions to meet your specific needs</li>
                                <li>Our prompt trucking services deliver your freight on time</li>
                                <li>Multimodal solutions</li>
                                <li>Strong distribution network</li>
                            </ul>
                        </div>
                        <p class="pagetxt">
                            Our logistics services are backed by valuable industry experience and therefore, we offer you highest quality standards. Our team of experts will help you choose the best logistics solutions that fit your needs and budget. They can also help you determine the type of trailer you would need to transport the goods or equipment safely. A detailed plan will be created to accomplish your goals as per your schedule and requirements.
                        </p>
                    </div>
                </div>
                <div class="greyoverlaybig"></div>
                <div class="greyoverlaysml"></div>
                <div class="servicenos mob">
                    05
                </div>
                <div class="servicesmobimg">
                    <img src="https://www.avaglobal.in/images/services/truckingbg-resp.jpg" alt="" />
                </div>
                <!---footer start-->
                <div class="footerwrapper pageblock">
                    <div class="wrapper">
                        <div class="footerblk">

                            <div class="footerrightblk fr">
                                <!--<div class="socialiconblk ibvm">
                                <div class="sprite socialicon fb ibvm"></div>
                                <div class="sprite socialicon twitter ibvm"></div>
                                <div class="sprite socialicon youtube ibvm"></div>
                            </div>-->
                                <div class="developblk ibvm">
                                    <div class="ibvm footertext">Design &amp; Developed :</div>
                                    <div class="ibvm ddlogo">
                                        <a href="http://www.d-designstudio.com/" target="_blank" class="sprite"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="footerleftblk fl">
                                <p class="copyrighttxt footertext">&copy; Copyright 2018 AVA GLOBAL - All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="js/wow.js"></script>
                <script>
                    new WOW().init();
                </script>
                <script src="https://www.avaglobal.in/js/jquery.bxslider.min.js"></script>
                <script src="https://www.avaglobal.in/js/scrollIt.min.js"></script>
                <script src="https://www.avaglobal.in/js/jquery.fullPage.js"></script>
                <script>
                    $(document).ready(function() {
                        if ($(window).width() >= 1024) {
                            $('#fullpage').fullpage({
                                anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage', '5thPage', '6thPage', '7thPage', '8thPage'],
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

                <script src="https://www.avaglobal.in/js/jquery.jscrollpane.min.js"></script>
                <script src="https://www.avaglobal.in/js/jquery.mousewheel.js"></script>
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

                <script src="https://www.avaglobal.in/js/jquery.mmenu.min.all.js"></script>
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
            </div>
        </div>
    </div>
</div>
<script>
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

@endsection