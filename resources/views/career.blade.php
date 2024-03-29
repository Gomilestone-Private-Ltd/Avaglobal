@push('styles')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/career.css') }}" />
@endpush
@extends('layout.main')
@section('content')
    <div class="calculatorwrapper">
        <div class="calculatordtlsection">
            <div class="calculatorbannerblk">
                <div class="wrapper pageblock">
                    <div class="bannertxtblk">
                        <div class="avaglname font-bebas">Careers</div>
                        <h2 class="tagline uppercase">
                            Join AVA Global<br />
                            Team
                        </h2>
                        <a href="" data-scroll-nav="0">
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
                        <div class="cr-title-box">
                            <h3 class="csd-category">We have <span class="joc-count">{{ $openedJobs }} jobs</span> for you
                            </h3>
                            <h1 class="csd-title">Job Openings</h1>
                        </div>

                        <div class="case-study-box">
                            @foreach ($jobData as $job)
                                <div class="case-study-item">
                                    <div class="cs-content">
                                        <div class="csc-left">
                                            <h3 class="cs-category">{{ $job->department }}</h3>
                                            <a href="{{ url('/career-detail') }}/{{ Crypt::encrypt($job->id) }}">
                                                <h2 class="cs-title">
                                                    {{ $job->job_role }}
                                                </h2>

                                            </a>
                                            <div class="cl-location-box">
                                                <p class="cl-location"><img src="{{ asset('/images/location.png') }}"
                                                        class="location-img">
                                                    <span>{{ $job->location }}</span>
                                                </p>
                                                <p class="work"><img src="{{ asset('/images/time.png') }}"
                                                        class="time-img">
                                                    <span>{{ $job->time_period }}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="csc-right">
                                            <a href="{{ url('/career-detail') }}/{{ Crypt::encrypt($job->id) }}">
                                                <div class="knowmore uppercase">Apply Now
                                                    <div class="sprite knwmorearw"></div>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <!---footer start-->
            <div class="footerwrapper homefooterwrapper pageblock">
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
            </div>
            <script src="{{ asset('/js/scrollIt.min.js') }}"></script>

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

            <script src="{{ asset('/js/jquery.mmenu.min.all.js') }}"></script>
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
