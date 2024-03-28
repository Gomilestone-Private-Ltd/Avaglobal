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
            <div class="section servicedetailsection custclrblk" id="section0">
                <div class="servicedeatialbanner">
                    <div class="wrapper pageblock">
                        <div class="bannertxtblk">
                            <div class="avaglname font-bebas">ava global</div>
                            <h2 class="tagline uppercase">services we offer!</h2>
                            <div class="subheading-banner">
                                <h1>Customs Clearance</h1>
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
                <div class="freightcontentblk custcontblk">
                    <div class="servicelefttxtblk custumclerblk">
                        <div class="">
                            <p class="pagetxt">
                                At AVA, we understand the challenges of global business and the need for smooth custom clearance. We leverage on our industry expertise to offer you quality custom clearance services, helping you avoid demurrages and penalties and reducing your lead time.
                            </p>
                            <p class="pagetxt">
                                We offer import and export custom clearance for sea as well as air services. In order to ensure that your goods are delivered as expected, we manage the entire documentation procedure and get your goods through the customs efficiently. Our team is well-versed with the local rules and regulations. They make use of their industry knowledge to offer you tailor-made solutions, helping you save time and money.
                            </p>
                        </div>
                    </div>
                    <div class="servicenos">
                        03
                    </div>
                </div>
            </div>
            <div class="section servdet3sld" id="section2">
                <div class="">
                    <div class="servicelefttxtblk servdet3sldcont">
                        <div class="wrapper">
                            <p class="pagetxt">
                                With our custom clearance services, you can be assured of quick and hassle-free clearance of your shipment. We also conduct factory stuffing clearance, re-export of rejected goods and warehouse management.
                            </p>
                            <h3 class="subtxt">Our services cover all aspects of customs procedures and include:</h3>
                            <div class="customlist ibvt">
                                <ul>
                                    <li>Full custom clearance</li>
                                    <li>Bonded warehousing</li>
                                    <li>Classification and validation investigation</li>
                                    <li>Bonded transit movements</li>
                                    <li>Regulatory reporting</li>
                                    <li>Complex entry preparation</li>
                                </ul>
                                <ul>
                                    <li>IPR/drawback strategyn</li>
                                    <li>Commodity classification</li>
                                    <li>Intrastat and extra-stat</li>
                                    <li>Bonded transfers and trans-shipments</li>
                                    <li>Aggregated declarations</li>
                                    <li>Limited fiscal representation </li>
                                </ul>
                            </div>
                            <p class="pagetxt width90per">
                                We understand how confusing custom rules and processes can be and therefore, our goal is to make custom clearance as easy as possible for you. From handling custom documentation and carting/receiving goods to examining of shipments and stuffing/de-stuffing at ports, our expert team will handle all formalities on your behalf.
                            </p>
                        </div>
                    </div>
                    <div class="greyoverlaybig"></div>
                    <div class="greyoverlaysml"></div>
                    <div class="servicenos mob">
                        03
                    </div>
                    <div class="servicesmobimg">
                        <img src="https://www.avaglobal.in/images/services/custombg-resp.jpg" alt="" />
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