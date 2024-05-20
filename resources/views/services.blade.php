@push('styles')
<!-- <link rel="stylesheet" href="{{ asset('/css/casestudy.css') }}" /> -->
@endpush
@extends('layout.main')
@section('content')

<div id="page">
    <!---headerwrapper start-->
    <div class="strik-left">
        <div class="arrowpre"><a id="previousPage" href="#"><span class="sprite prvsld"></span></a></div>
        <div class="arrownext">
            <a id="nextPage" href="#"><span class="sprite nxtsld"></span></a>
        </div>
    </div>

    <div id="fullpage" class="serviceswrap">
        <div class="section" id="section0">
            <div class="servicebannerblk">
                <div class="wrapper pageblock">
                    <div class="bannertxtblk">
                        <div class="avaglname font-bebas">ava global</div>
                        <h2 class="tagline uppercase">services we offer!</h2>
                        <p>Ava global is a very young organization founded on the certain<br />
                            and inherent strength of its promoters/founders. </p>
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
            <div class="oceanbgblk" id="element">
                <div class="servicelefttxtblk">
                    <h2 class="tagline uppercase">OCEAN FREIGHT</h2>
                    <p class="pagetxt">
                        As a premier <a href="/services/sea-freight.php">ocean freight service provider</a>, AVA Global is capable of handling shipments of any size effectively. We specialize in offering a flexible range of ocean freight services for FCL (Full-Container load) as well as LCL (Less-Than-Container Load) shipments. Our <a href="https://www.avaglobal.in/">freight forwarding company</a> holds long-term relations with major shipping lines that enables us to meet varied needs of our clients.
                    </p>
                    <p class="pagetxt">
                        Irrespective of the size of your business, our team will offer you customized solutions coupled with guaranteed transit times and flexible scheduling. From loading of freight to unloading, our team will manage as well as monitor each aspect of your freight requirement. We are also equipped to manage all logistics procedures related to international import and export. Our team not only chooses the right transport equipment and carrier but also ensures safe packaging and shipping. We have an extensive portfolio of regional as well as global carriers so that our clients have various options to choose from.
                    </p>
                    <a href="{{ route('seaFreight') }}">
                        <div class="knowmore knowmorewhite uppercase">know more<div class="sprite knwmorearw knwmorewharw"></div>
                        </div>
                    </a>
                </div>
                <div class="servicesmobimg">
                    <img src="images/services/oceanbg-resp.jpg" alt="" />
                </div>
            </div>
        </div>
        <div class="section" id="section2">
            <div class="airbgblk">
                <div class="servicerighttxtblk">
                    <h2 class="tagline uppercase">AIR FREIGHT</h2>
                    <p class="pagetxt">
                        As one of the most trusted <a href="{{ route('airFreight') }}">air freight service providers</a>, AVA Global offers a comprehensive range of value-added services to its clients. We provide the stability and reliability needed to maintain the integrity of our client’s supply chain. Whether you need to fly your shipment in a commercial plane or a specialist freighter aircraft, we can provide you tailor-made solutions as per your air freight needs.
                    </p>
                    <p class="pagetxt">
                        Regardless of the size of your business, our team of experts will help you choose services that best suit your needs. We make use of our global network of dedicated air specialists to move your goods wherever you want. We have partnered with airlines and <a href="https://www.avaglobal.in/">freight forwarders</a> for offering you seamless solutions.
                    </p>
                    <a href="{{ route('airFreight') }}">
                        <div class="knowmore knowmorewhite uppercase">know more<div class="sprite knwmorearw knwmorewharw"></div>
                        </div>
                    </a>
                </div>
                <div class="servicesmobimg">
                    <img src="images/services/flite.png" alt="" />
                </div>
            </div>
        </div>
        <div class="section" id="section5">
            <div class="truckingbgblk">
                <div class="servicelefttxtblk">
                    <h2 class="tagline uppercase">ROAD FREIGHT</h2>
                    <p class="pagetxt">
                        As a full-service logistics and transportation company, we help our clients maintain their day-to-day operations with our reliable trucking services. Our wide range of trucking services are designed to accommodate varied needs of our clients. From lowboy trailers and flatbed trucks to refrigerated trucks, heavy haulers and step deck trailers, we have different types of trucks todeliver your freight on time.
                    </p>
                    <p class="pagetxt">
                        We handle all types of shipments, be it big or small. You can get the goods shipped wherever you want because we work with some of the top carriers across the country. Your cargo will be moved by professionals who will ensure that your supply chain costs are kept to a minimum.From picking up shipments to dispatching, preparing necessary documentation, dealing with border clearance and tracking of cargo to its destination, we manage the entire process for you.
                    </p>
                    <a href="{{ route('heavyHaulTrucking') }}">
                        <div class="knowmore knowmorewhite uppercase">know more<div class="sprite knwmorearw knwmorewharw"></div>
                        </div>
                    </a>
                </div>
                <div class="servicesmobimg">
                    <img src="images/services/truckingbg-resp.jpg" alt="" />
                </div>
            </div>
        </div>
        <div class="section" id="section5">
            <div class="truckingbgblk">
                <div class="servicelefttxtblk">
                    <h2 class="tagline uppercase">RAIL FREIGHT</h2>
                    <p class="pagetxt">
                        We have exclusive arrangements for drayage of containers between select ICDs and select Ports through railways.
                        Catering to DPD & DPE movements to benefit from tri-angulation.
                    </p>
                  
                    <a href="{{ route('railFreight') }}">
                        <div class="knowmore knowmorewhite uppercase">know more<div class="sprite knwmorearw knwmorewharw"></div>
                        </div>
                    </a>
                </div>
                <div class="servicesmobimg">
                    <img src="images/services/train.png" alt="" />
                </div>
            </div>
        </div>
        <div class="section" id="section3">
            <div class="custombgblk">
                <div class="servicelefttxtblk">
                    <h2 class="tagline uppercase">CUSTOM CLEARING</h2>
                    <p class="pagetxt">
                        At AVA, we understand the challenges of global business and the need for smooth custom clearance. We leverage on our industry expertise to offer you quality custom clearance services, helping you avoid demurrages and penalties and reducing your lead time.
                    </p>
                    <p class="pagetxt">
                        We offer import and export custom clearance for sea as well as air services. In order to ensure that your goods are delivered as expected, we manage the entire documentation procedure and get your goods through the customs efficiently. Our team is well-versed with the local rules and regulations. They make use of their industry knowledge to offer you tailor-made solutions, helping you save time and money.
                    </p>
                    <!--<h3 class="subtxt">Our services cover all aspects of customs
                        procedures and include:</h3>
                    <div class="customlist fl">
                        <ul>
                            <li>Full customs clearance</li>
                            <li>Bonded warehousing</li>
                            <li>Bonded transit movements</li>
                            <li>Commodity classification</li>
                            <li>Intrastat and extrastat</li>
                            <li>Limited fiscal representation</li>
                            <li>Aggregated declarations</li>
                        </ul>
                    </div>
                    <div class="customlist customlistrt fl">
                        <ul>
                            <li>Classification and validation investigation</li>
                            <li>Regulatory reporting</li>
                            <li>Complex entry preparation</li>
                            <li>IPR/drawback strategy</li>
                            <li>Bonded transfers and transshipments</li>
                            <li>Intra trade zone declaration (e.g. Eurostats)</li>
                        </ul>
                    </div>-->
                    <div class="clear"></div>
                    <a href="{{ route('customsClearance') }}">
                        <div class="knowmore knowmorewhite uppercase">know more<div class="sprite knwmorearw knwmorewharw"></div>
                        </div>
                    </a>
                </div>
                <div class="servicesmobimg">
                    <img src="images/services/custom1.jpg" alt="" />
                </div>
            </div>
        </div>
        <div class="section" id="section6">
            <div class="shippingbgblk">
                <div class="servicerighttxtblk">
                    <h2 class="tagline uppercase">FORWARDING</h2>
                    <p class="pagetxt">
                        At AVA Global, we understand how complicated supply chains can be. As a full-service logistics and freight shipping company, weoffer a wide range of domestic and global shipping services, helping our clients meet the changing demands of the global logistics market. We have partnered with various logistic providers to offer you high quality services at competitive rates.
                    </p>
                    <p class="pagetxt">
                        From cargo pickup to door delivery, our team of experts handle all aspects of the shipping procedure. You can also manage as well as track your shipment online 24/7.
                    </p>
                    <a href="{{ route('freightShipping') }}">
                        <div class="knowmore knowmorewhite uppercase">know more<div class="sprite knwmorearw knwmorewharw"></div>
                        </div>
                    </a>
                </div>
                <div class="servicesmobimg">
                    <img src="images/services/forwarding1.png" alt="" />
                </div>
            </div>
        </div>
        <div class="section" id="section4">
            <div class="warehousebgblk">
                <div class="servicerighttxtblk">
                    <h2 class="tagline uppercase">Warehousing</h2>
                    <p class="pagetxt">
                        We offer top-class warehousing facilities to our clients, fulfilling their need for safe storage of goods that are in transit. Our wide range of logistic and packaging services are designed to meet different business needs. We possess a wide network of well-equipped warehouses throughout the country for quick and easy handling of our clients’ imported and exported goods.
                    </p>
                    <p class="pagetxt">
                        At AVA, we also offer customized services in bonded as well as non-bonded storage. Our well-guarded and spacious warehouses can store anything from small fragile items to large industrial equipment. Each warehouse is equipped with the latest facilities to keep valuables in best condition. Excellent storage facilities ensure protection from accidental damage or theft.
                    </p>
                    <a href="{{ route('warehousing') }}">
                        <div class="knowmore knowmorewhite uppercase">know more<div class="sprite knwmorearw knwmorewharw"></div>
                        </div>
                    </a>
                </div>
                <div class="servicesmobimg">
                    <img src="images/services/warehouse.jpg" alt="" />
                </div>
            </div>
        </div>

        <div class="section" id="section7">
            <div class="insurancebgblk">
                <div class="servicelefttxtblk">
                    <h2 class="tagline uppercase">Insurance</h2>
                    <p class="pagetxt">
                        We are the one stop shop for all your cargo and commercial insurance needs. Our easy and affordable coverage solutions are designed to support your business at every stage of transportation and storage.
                    </p>
                    <p class="pagetxt">
                        Our insurance products cover freight against loss or damage whilst being transported by sea, air or road. You can count on us to give you the right insurance product at an affordable price. Our well-trained insurance experts make use of the latest technology to provide you the best insurance and risk management solutions. You can even customize your cargo and commercial insurance policy to meet the specific needs of your business.
                    </p>
                    <a href="{{ route('cargoInsurancet') }}">
                        <div class="knowmore knowmorewhite uppercase">know more<div class="sprite knwmorearw knwmorewharw"></div>
                        </div>
                    </a>
                </div>
                <div class="servicesmobimg">
                    <img src="images/services/insurance1.jpg" alt="" />
                </div>
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