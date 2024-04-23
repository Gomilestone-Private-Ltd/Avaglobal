@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/testimonilas.css') }}" />
@endpush
@extends('layout.main')
@section('content')
    <div id="page">
        <!---headerwrapper end-->
        <div class="calculatorwrapper">
            <div class="calculatordtlsection">
                <div class="calculatorbannerblk">
                    <div class="wrapper pageblock">
                        <div class="bannertxtblk">
                            <div class="avaglname font-bebas">Testimonial</div>
                            <h2 class="tagline uppercase">
                                Client Speak For<br />
                                AVA Global
                            </h2>
                            <a href="#" data-scroll-nav="0">
                                <div class="sprite dwnarw"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="greyoverlaybig"></div>
                <div class="greyoverlaysml"></div>
            </div>
            <div class="calculatorcontentwrap" data-scroll-index="0">
                <div class="calculatortabblk">
                    <div class="wrapper">
                        <div class="eva-container">
                            <div class="tm-box">
                                <div class="tm-inner">
                                    <img src="{{ asset('/images/tm-user.jpg') }}" class="tm-user">
                                    <div class="tm-content">
                                       <img src="{{ asset('/images/top-quote.png') }}" class="tml-icon">
                                       <p>Great partner for us and give us great guidance. They are a very forward looking company and we wish our collaboration grows further.</p>
                                       <img src="{{ asset('/images/bottom-quote.png') }}" class="tmr-icon">
                                    </div>
                                    <h3 class="name">Darshan Ghodawat</h3>
                                    <p class="designation">Ava global Logistics LLP</p>
                                 </div>
                                 <div class="tm-inner">
                                    <img src="{{ asset('/images/tm-user.jpg') }}" class="tm-user">
                                    <div class="tm-content">
                                       <img src="{{ asset('/images/top-quote.png') }}" class="tml-icon">
                                       <p>Great partner for us and give us great guidance. They are a very forward looking company and we wish our collaboration grows further.</p>
                                       <img src="{{ asset('/images/bottom-quote.png') }}" class="tmr-icon">
                                    </div>
                                    <h3 class="name">Darshan Ghodawat</h3>
                                    <p class="designation">Ava global Logistics LLP</p>
                                 </div>
                                 <div class="tm-inner">
                                    <img src="{{ asset('/images/tm-user.jpg') }}" class="tm-user">
                                    <div class="tm-content">
                                       <img src="{{ asset('/images/top-quote.png') }}" class="tml-icon">
                                       <p>Great partner for us and give us great guidance. They are a very forward looking company and we wish our collaboration grows further.</p>
                                       <img src="{{ asset('/images/bottom-quote.png') }}" class="tmr-icon">
                                    </div>
                                    <h3 class="name">Darshan Ghodawat</h3>
                                    <p class="designation">Ava global Logistics LLP</p>
                                 </div>
                                 <div class="tm-inner">
                                    <img src="{{ asset('/images/tm-user.jpg') }}" class="tm-user">
                                    <div class="tm-content">
                                       <img src="{{ asset('/images/top-quote.png') }}" class="tml-icon">
                                       <p>Great partner for us and give us great guidance. They are a very forward looking company and we wish our collaboration grows further.</p>
                                       <img src="{{ asset('/images/bottom-quote.png') }}" class="tmr-icon">
                                    </div>
                                    <h3 class="name">Darshan Ghodawat</h3>
                                    <p class="designation">Ava global Logistics LLP</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---footer start-->
                {{-- <div class="footerwrapper homefooterwrapper pageblock">
                    <div class="wrapper">
                        <div class="footerblk">
                            <div class="footerrightblk fr">

                                <div class="developblk ibvm">
                                    <div class="ibvm footertext">Design &amp; Developed :</div>
                                    <div class="ibvm ddlogo">
                                        <a href="#" target="_blank" class="sprite">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="footerleftblk fl">
                                <p class="copyrighttxt footertext">
                                    &copy; Copyright 2018 AVA GLOBAL - All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <script src="{{ asset('/js/scrollIt.min.js') }}"></script> --}}

                <!-- DESKTOP MENU JS SATRT -->
                <script>
                    $(document).ready(function() {
                        if ($(window).width() >= 1024) {
                            $("#menublk").click(function() {
                                //alert();
                                $(".navigation").addClass("navigationopen");
                            });

                            $(".closeicon").click(function() {
                                //alert();
                                $(".navigation").removeClass("navigationopen");
                            });
                        }
                    });

                    //scrollIt
                    $(document).ready(function() {
                        $(function() {
                            $.scrollIt({
                                upKey: 38,
                                downKey: 40,
                                easing: "linear",
                                scrollTime: 1000,
                                activeClass: "active",
                                onPageChange: null,
                                topOffset: -200,
                            });
                        });
                    });
                </script>
                <!-- DESKTOP MENU JS SATRT -->

                {{-- <script src="{{ asset('/js/jquery.mmenu.min.all.js') }}"></script> --}}
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
                                    position: "top",
                                    content: ["prev", "title", "close"],
                                }, ],
                            });
                        }
                    });
                </script>

                <script>
                    $(document).ready(function() {
                        /*SCRIPT FOR WE ARE HIRING TAB START*/

                        $(".innertabitem").click(function() {
                            $tabpos = $(this).index();

                            $(".innertabitem").removeClass("innertabitemactive");
                            $(".innertabdataitem").removeClass("innerdataactive");

                            $(".innertabdataitem").eq($tabpos).addClass("innerdataactive");
                            $(this).addClass("innertabitemactive");
                        });
                        /*SCRIPT FOR WE ARE HIRING TAB END*/
                    });
                </script>

                <script>
                    $(window).load(function() {
                        $("#preloader").delay(2000).fadeOut("slow");
                    });
                    $(document).ready(function() {
                        setTimeout(function() {
                            $("body").removeClass("overflow-hidden");
                        }, 2000);
                    });
                </script>
                <a href="#" class="back-to-top">Back to Top</a>

                <script>
                    $(document).ready(function() {
                        $(window).scroll(function() {
                            if ($(this).scrollTop() > 200) {
                                $(".back-to-top").fadeIn();
                            } else {
                                $(".back-to-top").fadeOut();
                            }
                        });

                        $(".back-to-top").click(function() {
                            $("html, body").animate({
                                    scrollTop: 0,
                                },
                                1000
                            );
                            return false;
                        });
                    });
                </script>
                <!---footer end-->
            </div>
        </div>
        <div class="horizontal-line"></div>
    </div>
@endsection
