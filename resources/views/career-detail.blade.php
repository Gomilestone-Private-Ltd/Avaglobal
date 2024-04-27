@push('styles')
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/careerdetail.css') }}" />
@endpush
@extends('layout.main')
@section('content')
    {{-- me added --}}
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <div id="page">
        <div class="calculatorwrapper">
            <div class="job-details">
                <div class="eva-container">
                    <div class="jd-herder-main">
                        <div class="jd-herder-left">

                            <h3 class="csd-category">
                                {{ isset($careerData->department) ? $careerData->department : '' }}
                            </h3>
                            <h1 class="csd-title">{{ isset($careerData->job_role) ? $careerData->job_role : '' }}</h1>

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

                                        {!! $description = isset($careerData->description) ? $careerData->description : '' !!}

                                    </div>
                                </div>

                                <div class="job-right" id="apply">
                                    <h3 class="csdt-title">Job Details</h3>
                                    <p class="jr-box"><img src="{{ asset('/images/editing.png') }}" class="time-img">
                                        Category :<span>
                                            {{ isset($careerData->job_role) ? $careerData->job_role : '' }}</span>
                                    </p>
                                    <p class="jr-box"><img src="{{ asset('/images/time.png') }}" class="time-img">Workday :
                                        <span>{{ isset($careerData->time_period) ? $careerData->time_period : '' }}</span>
                                    </p>
                                    <p class="jr-box"><img src="{{ asset('/images/location.png') }}"
                                            class="time-img">Location :
                                        <span> {{ isset($careerData->location) ? $careerData->location : '' }}</span>
                                    </p>
                                    <p class="jr-box"><img src="{{ asset('/images/event.png') }}"
                                            class="time-img">Experience
                                        :
                                        <span> {{ isset($careerData->experience) ? $careerData->experience : '' }}</span>
                                    </p>



                                    <h3 class="csdt-title2">WE ARE HIRING</h3>
                                    <form id="applicantForm" method="post" action="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-cont">
                                            <div class="input-container ibvm">
                                                <div class="placholder">Your Name</div>
                                                <input type="text" name="name" class="inputclick">
                                                <span class="text-danger">
                                                </span>
                                            </div>
                                            <div class="input-container ibvm">
                                                <div class="placholder">Your Email address</div>
                                                <input type="email" name="email" class="inputclick">
                                                <span class="text-danger">

                                                </span>
                                            </div>
                                            <div class="input-container ibvm">
                                                <div class="placholder">PHONE number</div>
                                                <input type="text" name="phone" class="inputclick">
                                                <span class="text-danger">

                                                </span>
                                            </div>
                                            <div class="input-container ibvm">
                                                <div class="placholder">Position</div>
                                                <input type="text" name="position" 
                                                    value="{{ isset($careerData->job_role) ? $careerData->job_role : '' }}"
                                                    class="inputclick">
                                                <span class="text-danger">

                                                </span>
                                            </div>
                                            <div class="input-container choose-container">
                                                <div class="form-row">
                                                    <div class="upload-career fl">
                                                        <div class="browse-btn"><input name="applicantPdf" id="file-7"
                                                                class="inputfile inputfile-6 fileSeelct"
                                                                accept=" application/pdf"
                                                                data-multiple-caption="{count} files selected"
                                                                multiple="" type="file">
                                                            <label for="file-7" id="file_7_id">
                                                                <span>(FILE FORMAT PDF)</span>
                                                                <strong>Upload CV</strong>
                                                            </label>

                                                        </div>
                                                        <span class="text-danger">

                                                        </span>
                                                    </div>

                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="submitbtn">
                                                <input type="submit" id="submit" name="" value="Submit Now" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $(document).ready(function() {

                        $('#applicantForm').submit(function(e) {
                            e.preventDefault();

                            // Serialize the form data
                            const formData = new FormData($(this)[0]);

                            // Send an AJAX request
                            $.ajax({
                                type: 'POST',
                                url: '{{ url('/post-applicants') }}',
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function(response) {
                                    $("#submit").attr("disabled", true)
                                    $("#applicantForm")[0].reset();
                                    // $('.fileSeelct').val('');
                                    $('#file_7_id span').html('');




                                    console.log(response);
                                    toastr.options = {
                                        'closeButton': true,
                                        'progressBar': true
                                    }
                                    toastr.success(response.message);
                                    // window.location.href = "";
                                    // setTimeout(function() {
                                    //     window.location.href = "/get-jobs";
                                    // }, 2000);
                                },
                                error: function(response) {
                                    if (response.responseJSON && response.responseJSON.errors) {
                                        $('.text-danger').html('');
                                        $.each(response.responseJSON.errors, function(field, errorMessage) {
                                            $('input[name="' + field + '"]').closest(
                                                    '.input-container')
                                                .find('.text-danger').html(errorMessage);
                                            $('input[name="' + field + '"]').on('input',
                                                function() {
                                                    $('.text-danger').html('');
                                                });
                                        });
                                    }


                                }
                            });
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

                <script>
                    /*SCRIPT FOR INPUT TYPE START*/
                    $(document).ready(function($) {
                        $('.inputclick').focusin(function() {
                            $(this).prev('.placholder').addClass('up-place');
                        });

                        $('.inputclick').focusout(function() {
                            $(this).prev('.placholder').removeClass('up-place');
                        });

                        $(".inputclick").blur(function() {
                            if ($(this).val() >= '1') {
                                $(this).prev('.placholder').hide();
                            } else {
                                $(this).prev('.placholder').show();
                            }
                        });
                    });
                    /*SCRIPT FOR INPUT TYPE START*/
                </script>
                <!-- BROWSE BUTTON JS START -->
                <script>
                    (function(e, t, n) {
                        var r = e.querySelectorAll("html")[0];
                        r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
                    })(document, window, 0);
                </script>
                <script>
                    'use strict';;
                    (function(document, window, index) {
                        var inputs = document.querySelectorAll('.inputfile');
                        Array.prototype.forEach.call(inputs, function(input) {
                            var label = input.nextElementSibling,
                                labelVal = label.innerHTML;

                            input.addEventListener('change', function(e) {
                                var fileName = '';
                                if (this.files && this.files.length > 1)
                                    fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}',
                                        this.files.length);
                                else
                                    fileName = e.target.value.split('\\').pop();

                                if (fileName)
                                    label.querySelector('span').innerHTML = fileName;
                                else
                                    label.innerHTML = labelVal;
                            });

                            // Firefox bug fix
                            input.addEventListener('focus', function() {
                                input.classList.add('has-focus');
                            });
                            input.addEventListener('blur', function() {
                                input.classList.remove('has-focus');
                            });
                        });
                    }(document, window, 0));
                </script>

                <!---footer end-->
            </div>
        @endsection
