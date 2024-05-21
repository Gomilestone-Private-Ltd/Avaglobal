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
        <div class="section servicedetailsection airfrightblk" id="section0" style="padding-bottom: 0px !important;">
            <div class="servicedeatialbanner">
                <div class="wrapper pageblock">
                    <div class="bannertxtblk">
                        <div class="avaglname font-bebas">ava global</div>
                        <h2 class="tagline uppercase">services we offer!</h2>
                        <div class="subheading-banner">
                            <h1>AIR FREIGHT</h1>
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
            <div class="freightcontentblk airfrightcontblk">
                <div class="servicelefttxtblk left-text-responsive">
                <div class="freight-box  freight-box-res">
                       <h1 class="freight-text  freight-text-res">Time and Speed is an essence when it comes to Air freight. We understand
                         this and work round the clock to book and move goods whenever and wherever required. </h1>
                         <h1 class="freight-text freight-text-res">We have partnered with airlines and freight consolidators for offering you seamless solutions.  </h1>
                         <h1 class="freight-text freight-text-res">Our dedicated team of air specialists combine value, speed and flexibility to serve our client's better.</h1>

                         <p class="freight-para">Why us?</p>

                         <ul class="list-fright">
                            <li>Competitive rates</li>
                            <li>IATA Certified</li>
                            <li>Airway bill stock from major airlines</li>
                            <li>Experience in handling exhibition cargo</li>
                            <li>Handling of personal effects & household goods</li>
                            <li>Acceptance for DG and non DG commodities</li>
                            <li>DDU/DDP solutions offered</li>
                            <li>Express  shipments</li>
                         </ul>
                         <h1 class="freight-text freight-text-res">Our long-term relations with 90+ carriers enable us to meet variety of market needs.</h1>
                    </div>
                </div>
                <div class="servicenos">
                    02
                </div>
                <div>
                    <img class="oceanbg-img" src="{{asset('images/services/flite.png')}}" alt="image">
                </div>
            </div>
        </div>
        <!-- <div class="section servdet3sld" id="section2">
            <div class="">
                <div class="servicelefttxtblk servdet3sldcont">
                    <div class="wrapper">
                        <p class="pagetxt">
                            Our <a href="https://www.avaglobal.in/">freight forwarding company</a> is well-equipped to meet different transit times and capacity requirements. You can rely on our quick and cost-effective services that include high priority deliveries and air express. With our unmatched skills in air operations and cargo freight management, we combine value, speed and flexibility to serve you better.
                        </p>
                        <h3 class="subtxt">Why us?</h3>
                        <div class="customlist">
                            <ul>
                                <li>Competitive rates</li>
                                <li>IATA Certified</li>
                                <li>Experience in handling exhibition cargo</li>
                                <li>Acceptance for DG and non DG commodities</li>
                                <li>DDU/DDP solutions offered</li>
                            </ul>
                        </div>
                        <p class="pagetxt">
                            We take pride in our performance standards and timely services that have helped us earn a strong reputation in the market. Our aim is to fulfill the varied demands of our clients by ensuring speedy movement of their valuable merchandise. From order placement to the final delivery, our team of professionals handles every aspect of the import and export freight with precision.
                        </p>
                    </div>
                </div>
                <div class="greyoverlaybig"></div>
                <div class="greyoverlaysml"></div>
                <div class="servicenos mob">
                    02
                </div>
                <div class="servicesmobimg">
                    <img src="https://www.avaglobal.in/images/services/airbg-resp.jpg" alt="" />
                </div>
                </div>
        </div> -->
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