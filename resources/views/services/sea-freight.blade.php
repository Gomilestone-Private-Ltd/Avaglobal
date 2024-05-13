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
        <div class="section servicedetailsection" id="section0">

            <div class="servicedeatialbanner">
                <div class="wrapper pageblock">
                    <div class="bannertxtblk">
                        <div class="avaglname font-bebas">ava global</div>
                        <h2 class="tagline uppercase">services we offer!</h2>
                        <div class="subheading-banner">
                            <h1>Ocean Freight</h1>
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
            <div class="freightcontentblk">
                <div class="servicelefttxtblk">
                    <div class="freight-box">
                       <h1 class="freight-text">AVA Global is capable of effectively handling shipments of any shape and size.
                         We specialize in a range of ocean freight services like - </h1>

                         <ul class="list-fright">
                            <li>FCL (Full-Container load)</li>
                            <li>LCL (Less-Than-Container Load)</li>
                            <li>OOG (Out of gauge containers)</li>
                            <li>Flexi bag containers and ISO tank containers</li>
                            <li>Chartering for bulk and break bulk cargo</li>
                         </ul>
                         <h1 class="freight-text">Our long-term relations with 90+ carriers enable us to meet variety of market needs.</h1>
                    </div>
                </div>
                <div class="servicenos">
                    01
                </div>
            </div>
        </div>
        <!-- <div class="section servdet3sld" id="section2">

            <div class="">
                <div class="servicelefttxtblk servdet3sldcont">
                    <div class="wrapper">
                        <p class="pagetxt">
                            Irrespective of the size of your business, our team will offer you customized solutions coupled with guaranteed transit times and flexible scheduling. From loading of freight to unloading, our team will manage as well as monitor each aspect of your freight requirement. We are also equipped to manage all logistics procedures related to international import and export. Our team not only chooses the right transport equipment and carrier but also ensures safe packaging and shipping. We have an extensive portfolio of regional as well as global carriers so that our clients have various options to choose from.
                        </p>
                        <p class="pagetxt">
                            You can rely on us for expedition of urgent shipments and management of large shipments. We also offer intermodal transport services to our clients.
                        </p>
                        <div class="customlist ibvt">
                            <ul>
                                <li>Freight Management</li>
                                <li>Less-Than-Container Load</li>
                                <li>Open Charter & Project Solutions</li>
                                <li>Full-Container Load</li>
                                <li>Value-added Services</li>
                            </ul>
                        </div>
                        <p class="pagetxt">
                            As a trusted supply chain partner, we monitor our service standards constantly. Our aim is to ensure minimum dwell time for cargoes.
                        </p>
                        <p class="pagetxt">
                            Call us today if you are looking for the finest and most personalized ocean freight logistics solutions.
                        </p>
                    </div>
                </div>
                <div class="greyoverlaybig"></div>
                <div class="greyoverlaysml"></div>
                <div class="servicenos mob">
                    01
                </div>
                <div class="servicesmobimg">
                    <img src="https://www.avaglobal.in/images/services/oceanbg-resp.jpg" alt="" />
                </div>
            </div>

        </div> -->
              <!---footer start-->
               

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