@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/contact.css') }}" />
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
            <div class="section" id="section0">
                <div class="contactbannerblk">
                    <div class="wrapper pageblock">
                        <div class="bannertxtblk">
                            <div class="avaglname font-bebas">Contact information</div>
                            <h2 class="tagline uppercase">WHAT IS IN YOUR MIND?<br /> LET'S TALK!</h2>
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
                <div class="letsmeetbg" id="element">
                    <div class="contactlefttxtblk">
                        <h2 class="tagline uppercase">LET'S MEET UP</h2>
                        <div class="contactdetailsblk">
                            <div class="contactblk let_meet_box iconss">
                                <div class="contacticon ibvt">
                                    <span class="sprite email"></span>
                                </div>
                                <div class="contacticon ibvt">
                                    <a href="mailto:info@avaglobal.in">info@avaglobal.in</a>
                                </div>
                            </div>
                            <div class="contactblk let_meet_box">
                                <div class="callblk let_meet_box ibvm">
                                    <div class="contacticon ibvt">
                                        <span class="sprite telephone"></span>
                                    </div>
                                    <div class="contacticon ibvt">
                                        +91 22 4611 3300 / 99
                                    </div>
                                </div>
                            </div>
                            <div class="contactblk let_meet_box">
                                <div class="contacticon ibvt">
                                    <span class="sprite location"></span>
                                </div>
                                <div class="contacticon ibvt">
                                    {{-- 4th FLOOR, Sahar Plaza COMPLEX, Windfall,<br /> 405, Andheri - Kurla Rd, J B Nagar,
                                    Andheri East,<br /> Mumbai, Maharashtra 400059 --}}
                                    405 Windfall 4th Floor, Sahar Plaza,<br>
                                    Andheri - Kurla Road, J B Nagar, Andheri East,<br>
                                    Mumbai, Maharashtra 400059
                                </div>
                            </div>

                        </div>

                        <a href="https://maps.app.goo.gl/K7wXxm4WnoUixDEj8" target="_blank">
                            <div class="knowmore directiontxt uppercase">view direction
                                <div>
                                    <img class="more-right" src="{{asset('images/arrow-right.png')}}" alt="">
                                </div>
                            </div>
                        </a>
                        <div class="branch-box">
                            <h1 class="branch-text">
                                Branch office:
                            </h1>
                            <p class="branch-sub-text">AVA Global Logistics LLP
                                A-303/304, 3rd Floor, Privilon, Ambli BRTS Road, Iskon Cross Roads, Ahmedabad - 380059,
                                Gujarat.
                                Board: +91 79 4915 3300</p>

                            <h1 class="branch-text">Representative offices:</h1>
                            <p class="branch-sub-text">Morbi</p>
                            <p class="branch-sub-text">Gandhidham</p>
                            <p class="branch-sub-text">Hazira</p>
                        </div>
                    </div>
                    <div class="contactmobimg"><img src="{{asset('images/contact/letsmeetbg1.png')}}" alt="image" /></div>
                </div>
            </div>
            <div class="section avamap" id="section2">
                <div class="contactmap">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7539.696955858754!2d72.8696271701171!3d19.114302051510567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c83950d18eb9%3A0x445b7d08a9dff0b7!2sAVA%20GLOBAL!5e0!3m2!1sen!2sin!4v1711625651498!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="section" id="section3">
                <div class="hiringbg">
                    <div class="lead-form">
                        <div class="lead-form-box">
                            <div class="hiringheading">
                                Talk With Our Team
                            </div>
                            <form class="contact_form" id="contactform" method="post" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-cont">
                                    <div class="input-container ibvm">
                                        <div class="placholder">Your Name</div>
                                        <input type="text" name="name" id="name" class="inputclick">
                                        <span class="text-danger v-error">

                                        </span>
                                    </div>
                                    <div class="input-container ibvm">
                                        <div class="placholder">Your Email address</div>
                                        <input type="email" name="email" id="email" class="inputclick">
                                        <span class="text-danger v-error">

                                        </span>
                                    </div>
                                    <div class="input-container ibvm">
                                        <div class="placholder">PHONE number</div>
                                        <input type="text" name="phone" id="phone" class="inputclick">
                                        <span class="text-danger v-error">

                                        </span>
                                    </div>
                                    <div class="input-container ibvm">
                                        <div class="placholder">Requirement</div>
                                        <input type="text" name="requirement" id="requirement" class="inputclick">
                                        <span class="text-danger v-error">

                                        </span>
                                    </div>
                                    <div class="input-container ibvm">

                                    <select name="allservice" id="allservice" class="drop-down service_select">
                                            <option value="">Services</option>
                                            <option value="OceanFreight">Ocean Freight</option>
                                            <option value="AirFreight">Air Freight</option>
                                            <option value="Trucking">Road Freight</option>
                                            <option value="Rail">Rail Freight</option>
                                            <option value="CustomClearing">Custom Clearing</option>
                                            <option value="Forwading">Forwarding</option>
                                            <option value="WareHousing">Warehousing</option>
                                            <option value="Insurance">Insurance</option>

                                        </select>
                                        <span class="text-danger v-error">
                                        </span>
                                    </div>

                                    <div class="submitbtn">
                                        <input type="submit" id="submit" name="contact" value="Submit Now" />

                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
                    <div class="contactmobimg"><img src="{{asset('images/contact/hiringbg-mob.jpg')}}" alt="" /></div>


                </div>


                <script>
                    $(document).ready(function() {
                        $('#contactform').submit(function(e) {
                            e.preventDefault();
                            const formData = new FormData($(this)[0]);
                            // Send an AJAX request
                            $.ajax({
                                type: 'POST',
                                url: "{{ url('admin/post-contacts') }}",
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function(response) {
                                    $("#submit").attr("disabled", true)
                                    $("#contactform")[0].reset();
                                    // $('.fileSeelct').val('');
                                    $('#file_7_id span').html('');
                                    console.log(response);
                                    toastr.options = {
                                        'closeButton': true,
                                        'progressBar': true
                                    }
                                    toastr.success(response.message);
                                },
                                error: function(response) {
                                    if (response.responseJSON && response.responseJSON.errors) {
                                        $('.text-danger').html('');
                                        $.each(response.responseJSON.errors, function(field, errorMessage) {
                                            $('[name="' + field + '"]').closest(
                                                    '.input-container')
                                                .find('.text-danger').html(errorMessage);

                                            $('[name="' + field + '"]').on('input',
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
                <script>
                    function fileValidation() {
                        var fileInput = document.getElementById('file-7');
                        var fileSize = (fileInput.files[0].size / 1024 / 1024).toFixed(2);
                        if (fileSize > 2) {
                            // alert("File size must be less than 5 MB.");
                            toastr.error("File size must be less than 2 MB.")
                            toastr.options = {
                                'closeButton': true,
                                'progressBar': true,
                            }
                            fileInput.value = '';
                            return false;
                        }
                    }
                </script>


                {{-- end --}}

                <!---footer start-->
                <script>
                    $(document).ready(function() {
                        if ($(window).width() >= 1024) {
                            $('#fullpage').fullpage({
                                anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage', '5thPage', '6thPage',
                                    '7thPage', '8thPage'
                                ],
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
                    $(document).ready(function() {
                        //script for arrow scroll
                        $("#previousPage").click(function(e) {
                            e.preventDefault();
                            $.fn.fullpage.moveSectionUp();
                        });
                        $("#nextPage").click(function(e) {
                            e.preventDefault();
                            $.fn.fullpage.moveSectionDown();
                        });
                        /*SCRIPT FOR WE ARE HIRING TAB START*/
                        $('.innertabitem').click(function() {
                            $tabpos = $(this).index();

                            $('.innertabitem').removeClass('innertabitemactive');
                            $('.innertabdataitem').removeClass('innerdataactive');

                            $('.innertabdataitem').eq($tabpos).addClass('innerdataactive');
                            $(this).addClass('innertabitemactive');

                        });
                        /*SCRIPT FOR WE ARE HIRING TAB END*/
                    });
                </script>
                <script>
                    /*SCRIPT FOR INPUT TYPE START*/
                    $(document).ready(function($) {
                        $('.inputclick').focusin(function() {
                            $(this).prev('.placholder').addClass('up-place');
                        });

                        // $('.inputclick').focusout(function() {
                        //     $(this).prev('.placholder').removeClass('up-place');
                        // });

                        $(".inputclick").blur(function() {
                            // if ($(this).val() >= '1') {
                            //     $(this).prev('.placholder').hide();
                            // } else {
                            //     $(this).prev('.placholder').show();
                            // }
                            $(this).prev('.placholder').show();
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
            @endsection
