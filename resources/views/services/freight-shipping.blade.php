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
        <div class="section servicedetailsection shippingblk" id="section0">

            <div class="servicedeatialbanner">
                <div class="wrapper pageblock">
                    <div class="bannertxtblk">
                        <div class="avaglname font-bebas">ava global</div>
                        <h2 class="tagline uppercase">services we offer!</h2>
                        <h1 class="subheading-banner">FORWARDING</h1>
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
            <div class="freightcontentblk shippingcontblk">
                <div class="servicelefttxtblk">
                <div class="text-width">
                            <h1 class="freight-text">
                            We work on intermodal and multimodal arrangements depending on client's business need.
                            </h1>
                            <h1 class="freight-text">
                            We offer standardized and customized solutions as compatible to client's shipping needs.
                                </h1>
                                <h1 class="freight-text">
                                It is our constant endeavour to minimize dwell time for cargo, ensure optimal utilization of transport equipment and maintain safety and service standards. 
                                </h1>
                                <h1 class="freight-text">
                                We offer end to end visibility during the shipment lifecycle.
                                </h1>
                        </div>
                </div>
                <div class="servicenos">
                    06
                </div>
                <div>
                    <img class="oceanbg-img" src="{{asset('images/services/forwarding1.png')}}" alt="image">
                </div>
            </div>
        </div>
        <!-- <div class="section servdet3sld" id="section2">
            <div class="">
                <div class="servicelefttxtblk servdet3sldcont shippingprojectwrap">
                    <div class="wrapper">
                        <div class="shippingprojectblk">
                            <div class="shippingproinfo ibvm">
                                <h3 class="subtxt">Bulk Chartering</h3>
                                <p class="pagetxt">
                                    At AVA Global , we offer our services for cargo in bulk. Our bulk chartering team is headed by an experienced master mariner with years of experience. Our basic aim is to find cargo for the ship and ship for the cargo. We undertake the entire activity under our fold so that total responsibility lies with us for safe loading , transportation and discharge of the cargo. In this segment we work with select clients so that we can give a focussed attention to details and satisfy customer’s needs. The objective is to develop a deep relations with the customer and provide an exclusive service.
                                </p>
                                <p class="pagetxt">
                                    Customers: Shree Renuka Sugars , Rankers , CP
                                </p>
                            </div>
                            <div class="shippingproimg ibvm">
                                <img class="shipping-img" src="https://www.avaglobal.in/images/services/bulk-chartering.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="greyoverlaybig"></div>
                <div class="greyoverlaysml"></div>
                <div class="servicenos mob">
                    06
                </div>

            </div>
        </div> -->
        <!-- <div class="section servdet3sld" id="section3">
            <div class="">
                <div class="servicelefttxtblk servdet3sldcont shippingprojectwrap">
                    <div class="wrapper">
                        <div class="shippingprojectblk">
                            <div class="shippingproinfo ibvm">
                                <h3 class="subtxt">Project Cargo</h3>
                                <p class="pagetxt">
                                    Carrying heavy lift and project cargo is a delicate activity which needs to be handled with lot of care. These are special cargo and thus need special care and handling. It is not only onboard loading and discharging which is important but also the carriage of cargo from the factory to the vessel and vice-versa. The loading , lashing and securing of the cargo has to be very carefully planned and executed so that they withstand the rigours of the sea and perils of maritime adventure. It is a specialized job and needs experienced and knowledeble people. We at AVA Global have the exact specialization and skills available to handle such delicate operations. We have already executed heavy lift project from Mumbai to Kuantan and carrying windmill blades of 55 Mts on continuous basis on the Indian coast. In order to provide comfort and ease to the customer we undertake complete logistics to move the cargo from shippers door to consignee’s premises.
                                </p>
                                <p class="pagetxt">
                                    Our Customers : Thermax , Suzlon Energy.
                                </p>
                            </div>
                            <div class="shippingproimg ibvm">
                                <img class="shipping-img" src="https://www.avaglobal.in/images/services/cargo.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="greyoverlaybig"></div>
                <div class="greyoverlaysml"></div>
                <div class="servicenos mob">
                    06
                </div>
                <div class="servicesmobimg">
                    <img src="https://www.avaglobal.in/images/services/shipping-resp.png" alt="" />
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