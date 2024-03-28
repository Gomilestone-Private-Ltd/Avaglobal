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
                        <div class="contactblk">
                            <div class="contacticon ibvt">
                                <span class="sprite location"></span>
                            </div>
                            <div class="contacticon ibvt">
                                405, 4th Floor, Windfall, Sahar Plaza Complex, <br />J.B Nagar, Andheri - Kurla Road, <br />Andheri (East), Mumbai - 400059.
                            </div>
                        </div>
                        <div class="contactblk">
                            <div class="callblk ibvm">
                                <div class="contacticon ibvt">
                                    <span class="sprite telephone"></span>
                                </div>
                                <div class="contacticon ibvt">
                                    +91 22 4611 3300 / 99
                                </div>
                            </div>
                            <div class="callblk ibvm">
                                <div class="contacticon ibvt">
                                    <span class="sprite fax"></span>
                                </div>
                                <div class="contacticon ibvt">
                                    +91 22 4611 3305
                                </div>
                            </div>
                        </div>
                        <div class="contactblk">
                            <div class="contacticon ibvt">
                                <span class="sprite email"></span>
                            </div>
                            <div class="contacticon ibvt">
                                <a href="mailto:info@avaglobal.in">info@avaglobal.in</a>
                            </div>
                        </div>
                    </div>

                    <div class="knowmore directiontxt uppercase">
                        <a href="#section2">view direction</a>
                        <a href="#3rdPage">
                            <div class="sprite dwnarw viewdir"></div>
                        </a>
                    </div>
                </div>
                <div class="contactmobimg"><img src="images/mobile-images/letsmeetbg-res.jpg" alt="" /></div>
            </div>
        </div>
        <div class="section avamap" id="section2">
            <div class="contactmap">
                <img src="images/contact/ava-map-mob.jpg" class="map-images" alt="Location" />
                <div class="greebg"></div>
                <div class="greebgtwo"></div>
                <div class="bluebg"></div>
                <div class="contactmobimg">
                    <img src="images/contact/ava-map-mob.jpg" alt="" />
                </div>
            </div>
        </div>
        <div class="section" id="section3">
            <div class="hiringbg">
                <div class="contactlefttxtblk hiringcontent">
                    <div class="innertablist">
                        <div class="innertabitem careers innertabitemactive">Careers & job Inquires</div>
                        <!--
                            <div class="innertabitem press">Press & Media</div>
                            <div class="innertabitem vendor">Vendors & Suppliers</div>
-->
                        <div class="innertabitem investor">Investor Relation</div>
                    </div>
                    <div class="innertabdata projectgallerywrap pageblock">
                        <div class="innertabdataitem careers innerdataactive">
                            <div class="hiringdatablk">
                                <div class="hiringheading">
                                    WE ARE HIRING
                                </div>
                                <form name="contactform" method="post" action="send_mail.php" enctype="multipart/form-data">
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
                                            <input type="text" name="phone" class="inputclick" pattern="[0-9]{5,15}" required>
                                        </div>
                                        <div class="input-container ibvm">
                                            <div class="placholder">Position</div>
                                            <input type="text" name="position" class="inputclick" required>
                                        </div>
                                        <div class="input-container choose-container">
                                            <div class="form-row">
                                                <div class="upload-career fl">
                                                    <!--<input class="input-text-car" id="uploadFile" placeholder="choose file (file format pdf)" type="text">-->
                                                    <div class="browse-btn"><input name="file-7[]" id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple="" type="file">
                                                        <label for="file-7">
                                                            <span>CHOOSE FILE (FILE FORMAT PDF)</span>
                                                            <strong>Upload</strong>
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--
                                                <div class="browse-btn fl">
                                                    <span>Upload</span>
                                                    <input name="upfile" class="upload" id="uploadBtn" type="file">
                                                </div>
-->
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

                        <!--
                            <div class="innertabdataitem press">

                            </div>
                            <div class="innertabdataitem vendor">

                            </div>
-->
                        <div class="innertabdataitem investor">
                            <p class="pagetxt">
                                AVA Global aim to provide accurate and relevant information to all our investors to maintain a strong & healthy relations consistently. We value the communication we have with existing and potential shareholders to evaluate the company’s performance and its prospects.
                            </p>
                        </div>

                    </div>

                </div>
                <div class="contactmobimg"><img src="images/mobile-images/hiringbg-mob.jpg" alt="" /></div>
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
</div>
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
                    fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
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