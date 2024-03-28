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
                                <h1>Warehousing</h1>
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
                <div class="freightcontentblk wearhousecontblk">
                    <div class="servicelefttxtblk">
                        <div class="">
                            <p class="pagetxt">
                                We offer top-class warehousing facilities to our clients, fulfilling their need for safe storage of goods that are in transit. Our wide range of logistic and packaging services are designed to meet different business needs. We possess a wide network of well-equipped warehouses throughout the country for quick and easy handling of our clients’ imported and exported goods.
                            </p>
                            <p class="pagetxt">
                                At AVA, we also offer customized services in bonded as well as non-bonded storage. Our well-guarded and spacious warehouses can store anything from small fragile items to large industrial equipment. Each warehouse is equipped with the latest facilities to keep valuables in best condition. Excellent storage facilities ensure protection from accidental damage or theft.
                            </p>
                        </div>
                    </div>
                    <div class="servicenos">
                        04
                    </div>


                </div>
            </div>
            <div class="section servdet3sld" id="section2">
                <div class="">
                    <div class="servicelefttxtblk servdet3sldcont">
                        <div class="wrapper">
                            <p class="pagetxt">
                                You can rely on us for all your logistic warehousing, freight warehousing and distribution needs. Our cost-effective storage services are available for short-term as well as long-term period.You can even get the space customized to fit your needs.
                            </p>
                            <h3 class="subtxt">Why us?</h3>
                            <div class="customlist ibvt">
                                <ul>
                                    <li>Safety and security of goods</li>
                                    <li>Excellent services in all terrains</li>
                                    <li>Well-trained professionals for loading, unloading, packing and shipping of goods</li>
                                    <li>Storage system designed for varied client needs</li>
                                    <li>Efficient handling of large inventories</li>
                                </ul>
                            </div>
                            <p class="pagetxt">
                                We work with a planned and controlled storage system so that you get better control over your goods. By choosing our warehousing services, you not only minimize the inventory costs but also get assistance in reducing fixed overheads and increasing business efficiency.
                            </p>
                        </div>
                    </div>
                    <div class="greyoverlaybig"></div>
                    <div class="greyoverlaysml"></div>
                    <div class="servicenos mob">
                        04
                    </div>
                    <div class="servicesmobimg">
                        <img src="https://www.avaglobal.in/images/services/warehousebg-resp.jpg" alt="" />
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