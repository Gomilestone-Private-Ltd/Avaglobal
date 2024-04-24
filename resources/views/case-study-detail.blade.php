@push('styles')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/casestudydetail.css') }}" />
@endpush
@extends('layout.main')
@section('content')
    <div id="page">
        <!---headerwrapper end-->
        <div class="calculatorwrapper">
            <div class="calculatordtlsection">
                <div id="demo">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <div id="owl-demo" class="owl-carousel">
                                    @if (isset($caseStudyData->avaDocs))
                                        @foreach ($caseStudyData->avaDocs as $images)
                                            <div class="item"><img src="{{ asset($images->path) }}" alt="The Last of us">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <img src="{{ asset('/images/contactinfobg.jpg') }}" class="csd-banner"> --}}
                {{-- @foreach ($caseStudyData->avaDocs as $images)
                    <img src="{{ asset($images->path) }}" class="csd-banner" />
                @endforeach --}}
                {{-- <img src="{{ asset($caseStudyData->avaDocs->path) }}" class="csd-banner"> --}}


            </div>
            <div class="calculatorcontentwrap" data-scroll-index="0">
                <div class="calculatortabblk">
                    <div class="wrapper">
                        <div class="eva-container">
                            <div class="case-study-box">
                                <h3 class="csd-category">{{ isset($caseStudyData->case) ? $caseStudyData->case : '' }}</h3>
                                <h1 class="csd-title">
                                    {{ isset($caseStudyData->case_title) ? $caseStudyData->case_title : '' }}
                                </h1>
                                <div class="csd-box">
                                    <p class="cs-user">
                                        {{ isset($caseStudyData->posted_by) ? $caseStudyData->posted_by : '' }}
                                    </p>
                                    <p class="cs-date">
                                        {{ isset($caseStudyData->created_at) ? $caseStudyData->created_at : '' }}
                                    </p>
                                </div>
                            </div>
                            <div class="csd-contnet detail key-point csdt-title csdt-content">
                                {!! isset($caseStudyData->description) ? $caseStudyData->description : '' !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!---footer start-->
                {{-- <div class="footerwrapper homefooterwrapper pageblock">
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

                <script>
                    $(document).ready(function() {
                        $("#owl-demo").owlCarousel({

                            //   navigation : true,
                            slideSpeed: 300,
                            paginationSpeed: 400,
                            singleItem: true


                            // "singleItem:true" is a shortcut for:
                            // items : 1, 
                            // itemsDesktop : false,
                            // itemsDesktopSmall : false,
                            // itemsTablet: false,
                            // itemsMobile : false

                        });
                    });
                </script>

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
