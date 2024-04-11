<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Freight forwarding companies in India | Freight forwarders in Mumbai, India - AVA Global</title>
        <meta name="description"
            content="AVA Global is one of the premier freight forwarding companies in India.✅ As a leading freight forwarders in Mumbai, India, we offer end-to-end freight forwarding solutions and high-quality and timely service to each and every customer.✅" />
        <link rel="canonical" href="https://www.avaglobal.in/" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/slick.css') }}" />


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <meta name="Resource-type" content="Document" />
        <link rel="icon" href="https://www.avaglobal.in{{ asset('/images/favicon.png') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />

        <link rel="stylesheet" href="{{ asset('/css/animate.css') }}" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive.css') }}" />
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 1024px)"
            href="{{ asset('/css/fullpage.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery.bxslider.min.css') }}" />
        <link href="{{ asset('/css/jquery.jscrollpane.css') }}" rel="stylesheet" type="text/css" />
        <link type="text/css" rel="stylesheet" href="{{ asset('/css/jquery.mmenu.all.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/event-popup.css') }}" />
        {{-- include styles here --}}
        @stack('styles')
        {{-- ---------------------------------------------------------------- --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-107918162-1');
        </script>

        <script src="{{ asset('/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/js/owl.carousel.js') }}"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107918162-1"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en'
                }, 'google_translate_element');
            }
        </script> -->

        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en'
                }, 'google_translate_element');

                var $googleDiv = $("#google_translate_element .skiptranslate");
                var $googleDivChild = $("#google_translate_element .skiptranslate div");
                $googleDivChild.next().remove();

                $googleDiv.contents().filter(function() {
                    return this.nodeType === 3 && $.trim(this.nodeValue) !== '';
                }).remove();

            }
        </script>
        <script>
            $(document).ready(function() {
                if (localStorage.getItem('popState') != 'shown') {
                    $("#once-popup").delay(1000).fadeIn();
                    localStorage.setItem('popState', 'shown')
                }

                $('#popup-close').click(function(e) {
                    $('#once-popup').fadeOut();

                });

            });
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
        </script>
        {{-- me added --}}
        {{-- Toastr script --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        {{-- end --}}

        <!-- <style>
          #once-popup {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.65);
            text-align: center;
            z-index: 10000;
        }

        #once-popup .inner {
            background: #ffffff;
            padding: 20px;
            width: 600px;
            max-width: 90%;
            margin: 50px auto;
        }

        #once-popup #popup-close {
            float: right;
            font-size: 30px;
            line-height: 10px;
            padding: 5px;
            cursor: pointer;
        }
    </style> -->
    </head>

    <body>
        @php
            $brochure = \App\Models\Brochure::where('status', 1)->first();

        @endphp

        @include('layout.menu')
        @yield('content')
        @include('layout.footer')
        @if (isset($brochure->status) && $brochure->status == 1)
            @include('layout.event-popup')
        @endif

    </body>

</html>
