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
        <div class="section servicedetailsection insuranceblk" id="section0">
            <div class="servicedeatialbanner">
                <div class="wrapper pageblock">
                    <div class="bannertxtblk">
                        <div class="avaglname font-bebas">ava global</div>
                        <h2 class="tagline uppercase">services we offer!</h2>
                        <div class="subheading-banner">
                            <h1>Rail FREIGHT</h1>
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
            <div class="freightcontentblk rail-freight">
                <div class="servicelefttxtblk">
                <div class="text-width">
                            <h1 class="freight-text">
                            We have exclusive arrangements for drayage of containers between select ICDs and select Ports through railways. 
                            </h1>
                            <h1 class="freight-text">
                            Catering to DPD & DPE movements to benefit from tri-angulation.
                                </h1>
                              
                        </div>
                </div>
                <div class="servicenos">
                    07
                </div>
            </div>
        </div>
      
                <!---footer start-->
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