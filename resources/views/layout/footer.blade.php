<div class="footerwrapper homefooterwrapper pageblock">
    <div class="wrapper">
        <div class="footerblk">
            <div class="footermenu">
                <div class="fm-box">
                    <a href="#" class="footer-links">Clientele</a>
                    <a href="#" class="footer-links">Enquiry form</a>
                    @php
                            $brochure = \App\Models\AvaDocs::whereNotNull('downloadBrochureId')
                                ->where('downloadbrochurePdfStatus', 1)
                                ->first();
                            $file = $brochure ? $brochure->path : null;
                        @endphp

                        @if ($file)
                            <a href="{{ asset($file) }}" class="footer-links" download>Download Brochure</a>
                        @else
                            <a href="javascript:void(0)" class="footer-links">Download Brochure</a>
                        @endif
                </div>
            </div>
            <div class="footer-copy">
                <p class="copyrighttxt footertext">&copy; Copyright {{ date('Y') }} AVA GLOBAL - All
                    Rights Reserved</p>
                   <div class="icon-box">
                   <img class="footer-icons" src="{{ asset('images/linkedin.png') }}" alt="">
                   <img class="footer-icons" src="{{ asset('images/whatsapp.png') }}" alt="">
                   <img class="footer-icons" src="{{ asset('images/youtube.png') }}" alt="">
                   </div>
            </div>
            @php
                $data = App\Models\Marque::where('status', '1')->first();
                $marqueText = isset($data->marque_text) ? $data->marque_text : 'Ava Global';
            @endphp

            {{-- <marquee behavior="scroll" direction="left">
                {{ $marqueText }}</marquee> --}}
                

        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="marquee-container">
    <marquee behavior="scroll" direction="left">
        {{ $marqueText }}</marquee>
</div>
<script src="{{ asset('js/wow.js') }}"></script>
<script>
    new WOW().init();
</script>
<script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('js/scrollIt.min.js') }}"></script>
<script src="{{ asset('js/jquery.fullPage.js') }}"></script>
<script src="{{ asset('/js/scrollIt.min.js') }}"></script>
<script src="{{ asset('js/jquery.jscrollpane.min.js') }}"></script>
<script src="{{ asset('js/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('js/jquery.mmenu.min.all.js') }}"></script>
{{-- <script src="{{ asset('/js/footer.js') }}"></script> --}}
