        @php
            $data = App\Models\Brochure::with(['avaDocsPopUpImage', 'avaDocsBrochureFiles'])
                ->where('status', '1')
                ->first();
        @endphp
        <div id="once-popup">
            <div class="inner">
                {{-- @if (count($brochure) > 0) --}}
                {{-- @foreach ($brochure as $data) --}}
                <div class="pop-content">
                    <div id="popup-close"><span class="close-icon">×</span></div>
                    {{-- <img class="popup-image" src="{{ asset('/images/event/popup.jpg') }}" /> --}}
                    @if ($data->avaDocsPopUpImage->path)
                        <img class="popup-image"
                            src="{{ asset(isset($data->avaDocsPopUpImage->path) ? $data->avaDocsPopUpImage->path : 'images/event/popup.jpg') }}" />
                        {{-- src="{{ asset(isset($brochure->avaDocsBrochure->path) ? $brochure->avaDocsBrochure->path : 'assets/img/1711805669avaglobal.png') }}" /> --}}
                    @endif
                    <div class="popup-logo">
                        <img class="popup-logo-img" src="{{ asset('/images/blogo.png') }}" />
                    </div>
                    <div class="event-content">
                        {{-- <h1 class="pop-heading">International Training Course on the REDEFINING LOGISTICS AND TRANSPORTATION
                </h1> --}}
                        <h1 class="pop-heading">
                            {{-- {{ $data->title }} --}}
                            {{ isset($data->title) ? $data->title : 'International Training Course on the REDEFINING LOGISTICS AND TRANSPORTATION' }}
                        </h1>
                        <div class="cl-location-box">
                            <p class="cl-location"><img src="{{ asset('/images/location.png') }}" class="location-img">
                                {{-- <span>Mumbai</span> --}}
                                <span>{{ isset($data->location) ? $data->location : 'Mumbai' }}</span>
                            </p>
                            <p class="work"><img src="{{ asset('/images/event.png') }}" class="time-img">
                                {{-- <span>25 MAR 2020</span> --}}
                                <span>{{ isset($data->created_at) ? $data->created_at : '25 MAR 2020' }}</span>
                            </p>
                        </div>
                        @if (isset($data->avaDocsBrochureFiles->path))
                            <a href="{{ $data->avaDocsBrochureFiles->path }}" class="db-pop" download>Download Event
                                Brochure</a>
                        @else
                            <a href="#" class="db-pop" download>Download Event
                                Brochure</a>
                        @endif
                    </div>
                    {{-- @endforeach --}}
                    {{-- @endif --}}
                </div>
            </div>
        </div>
