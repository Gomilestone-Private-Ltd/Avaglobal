@push('styles')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/careerdetail.css') }}" />
@endpush
@extends('layout.main')
@section('content')
    <div id="page">
        <div class="calculatorwrapper">
            <div class="job-details">
                <div class="eva-container">
                    <div class="jd-herder-main">
                        <div class="jd-herder-left">
                            @foreach ($careerData as $data)
                                <h3 class="csd-category">{{ $data->department }}</h3>
                                <h1 class="csd-title">{{ $data->job_role }}</h1>
                            @endforeach

                        </div>
                        <div class="jd-herder-right">
                            <a class="prod-morebuts" href="#apply">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="calculatorcontentwrap" data-scroll-index="0">
                <div class="calculatortabblk">
                    <div class="wrapper">
                        <div class="eva-container">
                            <div class="job-main">
                                <div class="job-left">
                                    <div class="csd-contnet detail csdt-title csdt-title2 csdt-content key-point">
                                        @foreach ($careerData as $descData)
                                            {!! $description = isset($descData->careerDescription->description)
                                                ? $descData->careerDescription->description
                                                : '' !!}
                                        @endforeach
                                        {{-- <h3 class="csdt-title">Job Summary</h3>
                                        <p class="csdt-content">Contrary to popular belief, Lorem Ipsum is not
                                            simply random text. It has roots in a piece of classical Latin
                                            literature from 45 BC, making it over 2000 years old. Richard
                                            McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                                            looked up one of the more obscure Latin words, consectetur, from a Lorem
                                            Ipsum passage, and going through the cites of the word in classical
                                            literature, discovered the undoubtable source.</p>

                                        <h3 class="csdt-title2">Key Responsibilities</h3>
                                        <ul class="key-point">
                                            <li>You provide ongoing sustaining support to the product, addressing
                                                end to end feature enhancements.</li>
                                            <li>You provide ongoing sustaining support to the product, addressing
                                                end to end feature enhancements.</li>
                                            <li>You provide ongoing sustaining support to the product, addressing
                                                end to end feature enhancements.</li>
                                            <li>You provide ongoing sustaining support to the product, addressing
                                                end to end feature enhancements.</li>
                                            <li>You provide ongoing sustaining support to the product, addressing
                                                end to end feature enhancements.</li>
                                            <li>You provide ongoing sustaining support to the product, addressing
                                                end to end feature enhancements.</li>
                                        </ul>

                                        <h3 class="csdt-title2">Skills & Experience</h3>
                                        <ul class="key-point">
                                            <li>You provide ongoing sustaining support to the product, addressing
                                                end to end feature enhancements.</li>
                                            <li>You provide ongoing sustaining support to the product, addressing
                                                end to end feature enhancements.</li>
                                            <li>You provide ongoing sustaining support to the product, addressing
                                                end to end feature enhancements.</li>
                                            <li>You provide ongoing sustaining support to the product, addressing
                                                end to end feature enhancements.</li>
                                            <li>You provide ongoing sustaining support to the product, addressing
                                                end to end feature enhancements.</li>
                                            <li>You provide ongoing sustaining support to the product, addressing
                                                end to end feature enhancements.</li>
                                        </ul>


                                        <h3 class="csdt-title2">Other Requirements</h3>
                                        <p class="csdt-content">Contrary to popular belief, Lorem Ipsum is not
                                            simply random text. It has roots in a piece of classical Latin
                                            literature from 45 BC, making it over 2000 years old. Richard
                                            McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                                            looked up one of the more obscure Latin words, consectetur, from a Lorem
                                            Ipsum passage, and going through the cites of the word in classical
                                            literature, discovered the undoubtable source.</p> --}}

                                    </div>
                                </div>
                                <div class="job-right" id="apply">
                                    <h3 class="csdt-title">Job Details</h3>
                                    <p class="jr-box"><img src="{{ asset('/images/time.png') }}" class="time-img">Category :
                                        <span> Operations</span>
                                    </p>
                                    <p class="jr-box"><img src="{{ asset('/images/time.png') }}" class="time-img">Workday :
                                        <span> Full Time</span>
                                    </p>
                                    <p class="jr-box"><img src="{{ asset('/images/time.png') }}" class="time-img">Location :
                                        <span> Mumbai</span>
                                    </p>
                                    <p class="jr-box"><img src="{{ asset('/images/time.png') }}" class="time-img">Experience
                                        :
                                        <span> 5+ Years</span>
                                    </p>

                                    <h3 class="csdt-title2">WE ARE HIRING</h3>
                                    <form name="contactform" method="post" action="send_mail.php"
                                        enctype="multipart/form-data">
                                        <div class="form-cont">
                                            <div class="input-container ibvm">
                                                <div class="placholder">Your Name</div>
                                                <input type="text" name="name" class="inputclick" required>
                                            </div>
                                            <div class="input-container ibvm">
                                                <div class="placholder">Your Email address</div>
                                                <input type="email" name="email" class="inputclick" required>
                                            </div>
                                            <div class="input-container ibvm">
                                                <div class="placholder">PHONE number</div>
                                                <input type="text" name="phone" class="inputclick"
                                                    pattern="[0-9]{5,15}" required>
                                            </div>
                                            <div class="input-container ibvm">
                                                <div class="placholder">Position</div>
                                                <input type="text" name="position" class="inputclick" required>
                                            </div>
                                            <div class="input-container choose-container">
                                                <div class="form-row">
                                                    <div class="upload-career fl">
                                                        <div class="browse-btn"><input name="file-7[]" id="file-7"
                                                                class="inputfile inputfile-6"
                                                                data-multiple-caption="{count} files selected"
                                                                multiple="" type="file">
                                                            <label for="file-7">
                                                                <span>(FILE FORMAT PDF)</span>
                                                                <strong>Upload CV</strong>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="submitbtn">
                                                <input type="submit" name="contact" value="Submit Now" />
                                            </div>
                                        </div>
                                    </form>
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
