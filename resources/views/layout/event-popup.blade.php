<div id="once-popup">
    <div class="inner">
        @php
            $brochure = \App\Models\Brochure::with('avaDocsBrochure')->first();
            // dd($bochure->location);
        @endphp

        <div class="pop-content">
            <div id="popup-close"><span class="close-icon">×</span></div>
            {{-- <img class="popup-image" src="{{ asset('/images/event/popup.jpg') }}" /> --}}
            <img class="popup-image"
                src="{{ asset(isset($brochure->avaDocsBrochure->path) ? $brochure->avaDocsBrochure->path : 'assets/img/1711805669avaglobal.png') }}" />

            <div class="popup-logo">
                <img class="popup-logo-img" src="{{ asset('/images/blogo.png') }}" />
            </div>
            <div class="event-content">
                {{-- <h1 class="pop-heading">International Training Course on the REDEFINING LOGISTICS AND TRANSPORTATION
                </h1> --}}
                <h1 class="pop-heading">
                    {{ $brochure->title }}
                    {{-- {{ isset($brochure->title) ? $brochure->title : 'International Training Course on the REDEFINING LOGISTICS AND TRANSPORTATION' }} --}}
                </h1>
                <div class="cl-location-box">
                    <p class="cl-location"><img src="{{ asset('/images/location.png') }}" class="location-img">
                        {{-- <span>Mumbai</span> --}}
                        <span>{{ isset($brochure->location) ? $brochure->location : 'Mumbai' }}</span>
                    </p>
                    <p class="work"><img src="{{ asset('/images/event.png') }}" class="time-img">
                        {{-- <span>25 MAR 2020</span> --}}
                        <span>{{ isset($brochure->created_at) ? $brochure->created_at : '25 MAR 2020' }}</span>
                    </p>
                </div>
                @php
                    $file = asset('assets/pdf/brochure.pdf');
                @endphp
                <a href="{{ $file }}" class="db-pop" download>Download Event Brochure</a>
            </div>
        </div>
    </div>
</div>
