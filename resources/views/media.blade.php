@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/event.css') }}" />
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
                            <div class="avaglname font-bebas">In The Media</div>
                            <h2 class="tagline uppercase">
                                Online & Print Coverage of<br />
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
                            <div class="cr-title-box">
                                <h1 class="csd-title">Online Coverage</h1>
                            </div>
                            <div class="case-study-box">
                                @if (count($newsData) > 0)
                                    @foreach ($newsData as $data)
                                        <div class="case-study-item">
                                            <img src="{{ isset($data->onlineDocsImage->path) ? asset($data->onlineDocsImage->path) : asset('/images/event/media1.jpg') }}"
                                                class="cs-image" />
                                            <div class="cs-content">
                                                <h2 class="cs-title">
                                                    {{ $data->title }}
                                                </h2>
                                                <div class="cl-location-box">
                                                    <p class="cl-location"><img src="{{ asset('/images/location.png') }}"
                                                            class="location-img">
                                                        <span>{{ $data->location }}</span>
                                                    </p>
                                                    <p class="work"><img src="{{ asset('/images/event.png') }}"
                                                            class="time-img">
                                                        <span>{{ $data->created_at }}</span>
                                                    </p>
                                                </div>
                                                <P class="oc-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti magnam quia velit eveniet? Ipsum maxime expedita hic aliquam nemo minus, libero corrupti iure itaque ex. Eius sit iusto minus deleniti.</P>
                                                <a href="{{ $data->media_url }}" target="_blank">
                                                    <div class="knowmore uppercase">Read more
                                                        <div class="sprite knwmorearw"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                <div class="case-study-item">

                                </div>
                            </div>
                        </div>
                        @php
                            $latestEventData = App\Models\Media::with('avaDocs', 'printDocsImage')
                                ->whereHas('avaDocs')
                                ->whereHas('printDocsImage')
                                ->get();
                        @endphp
                        <div class="eva-container event">
                            <div class="cr-title-box">
                                <h1 class="csd-title">Print Coverage</h1>
                            </div>

                            <div class="case-study-box">
                                @if (count($latestEventData) > 0)
                                    @foreach ($latestEventData as $event)
                                        <div class="case-study-item">
                                            <img src="{{ isset($event->printDocsImage->path) ? asset($event->printDocsImage->path) : asset('/images/event/event1.jpg') }}"
                                                class="cs-image" />
                                            <div class="cs-content">
                                                <h2 class="cs-title">
                                                    {{-- The standard Lorem Ipsum passage, used since the 1500s --}}
                                                    {{ $event->title }}
                                                </h2>
                                                <div class="cl-location-box">
                                                    <p class="cl-location"><img src="{{ asset('/images/location.png') }}"
                                                            class="location-img">
                                                        <span>{{ $event->location }}</span>
                                                    </p>
                                                    <p class="work"><img src="{{ asset('/images/event.png') }}"
                                                            class="time-img">
                                                        <span>{{ $event->created_at }}</span>
                                                    </p>
                                                </div>
                                                {{-- {{route('caseStudyDetail')}} --}}
                                                <a href="{{ $event->avaDocs->path }}" target="_blank">
                                                    <div class="knowmore uppercase" download>Download Print Coverage
                                                        <div class="sprite knwmorearw"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                {{-- <div class="case-study-item">
                                    <img class="cs-image" src="{{ asset('/images/event/event2.jpg') }}" />
                                    <div class="cs-content">
                                        <h2 class="cs-title">
                                            The standard Lorem Ipsum passage, used since the 1500s
                                        </h2>
                                        <div class="cl-location-box">
                                            <p class="cl-location"><img src="{{ asset('/images/location.png') }}"
                                                    class="location-img">
                                                <span>Mumbais</span>
                                            </p>
                                            <p class="work"><img src="{{ asset('/images/event.png') }}" class="time-img">
                                                <span>25 MAR 2020</span>
                                            </p>
                                        </div>
                                        <a href="#">
                                            <div class="knowmore uppercase">Download Event Brochure
                                                <div class="sprite knwmorearw"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div> --}}
                                <div class="case-study-item">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
        @endsection
