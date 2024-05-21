@push('styles')
<link type="text/css" rel="stylesheet" href="{{ asset('/css/containersize.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('/css/conversion.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:800|Poppins:700" rel="stylesheet">
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
                        <h2 class="tagline uppercase">
                            Measurement converter
                        </h2>

                        <a href="" data-scroll-nav='0'>
                            <div class="sprite dwnarw"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="greyoverlaybig"></div>
            <div class="greyoverlaysml"></div>
        </div>

        <div class="main-box">
        <div class="calulator-box">
            <div class="converter-wrapper" data-scroll-index='0'>
                <h1 class="cal-heading">MEASUREMENT CONVERTER</h1>
              <div class="cal-box">
              <form name="property_form">
                    <span>
                        <select class="select-property" name="the_menu" size=1 onChange="UpdateUnitMenu(this, document.form_A.unit_menu); UpdateUnitMenu(this, document.form_B.unit_menu)">
                        </select>
                    </span>
                </form>

                <div class="converter-side-a">
                    <form name="form_A" onSubmit="return false" id="form2">
                        <input type="text" class="numbersonly" name="unit_input" maxlength="20" value="0" onKeyUp="CalculateUnit(document.form_A, document.form_B)">
                        <span>
                            <select name="unit_menu" onChange="CalculateUnit(document.form_B, document.form_A)">
                            </select>
                        </span>
                    </form>
                </div>

                <div class="converter-side-b">
                    <form name="form_B" onSubmit="return false" id="form3">
                        <input type="text" class="numbersonly" name="unit_input" maxlength="20" value="0" onkeyup="CalculateUnit(document.form_B, document.form_A)">
                        <span>
                            <select name="unit_menu" onChange="CalculateUnit(document.form_A, document.form_B)">
                            </select>
                        </span>
                    </form>
                </div>
              </div>
            </div>
        </div>
        </div>
    </div>

    <script src="{{ asset('js/conversion.js') }}"></script>

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

        //scrollIt
        $(document).ready(function() {
            $(function() {
                $.scrollIt({
                    upKey: 38,
                    downKey: 40,
                    easing: 'linear',
                    scrollTime: 1000,
                    activeClass: 'active',
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
        //script for arrow scroll
        $("#previousPage").click(function(e) {
            e.preventDefault();
            $.fn.fullpage.moveSectionUp();
        });
        $("#nextPage").click(function(e) {
            e.preventDefault();
            $.fn.fullpage.moveSectionDown();
        });
        //for sticky section
        // $(window).scroll(function() {
        //     if ($(window).width() >= 1001) {
        //         if ($(this).scrollTop() > 600) {
        //             $('.headerblk').addClass('bgcolchange');
        //         } else {
        //             $('.headerblk').removeClass('bgcolchange');
        //         }
        //     }
        //     if ($(window).width() <= 1001) {
        //         if ($(this).scrollTop() > 250) {
        //             $('.headerblk').addClass('bgcolchange');
        //         } else {
        //             $('.headerblk').removeClass('bgcolchange');
        //         }
        //     }
        //     if ($(window).width() >= 1400) {
        //         if ($(this).scrollTop() > 600) {
        //             $('.headerblk').addClass('bgcolchange');
        //         } else {
        //             $('.headerblk').removeClass('bgcolchange');
        //         }
        //     }
        // });
    </script>

    <script>
        $(document).ready(function() {

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
        $(window).load(function() {
            $("#preloader").delay(2000).fadeOut("slow");
        });
        $(document).ready(function() {
            setTimeout(function() {
                $('body').removeClass("overflow-hidden");
            }, 2000);
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

    @endsection