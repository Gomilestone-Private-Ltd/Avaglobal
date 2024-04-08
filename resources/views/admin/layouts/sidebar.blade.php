<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li class="active open"><a href="{{ route('dashboard') }}"><img src="{{ asset('assets/images/dashboard.png') }}" alt="Dashboard" class="side-icon">Dashboard</a>
            </li>

            <li><a href="javascript:void(0);" class="menu-toggle"><img src="{{ asset('assets/images/suitcase.png') }}" alt="Dashboard" class="side-icon">Career</a>
                <ul class="ml-menu">
                    <li><a href="{{ route('opened-job') }}">Job Openings</a></li>
                    <li><a href="{{ route('applicants') }}">Job Applicants</a></li>
                </ul>
            </li> 
            {{-- <li>
                <a href="{{ route('opened-job') }}">Job Openings</a>

            </li>
            <li>
                <a href="{{ route('applicants') }}">Job Applicants </a>

            </li> --}}
            <li>
                <a href="{{ route('case-section') }}"><img src="{{ asset('assets/images/case1.png') }}" alt="Dashboard" class="side-icon">Case Study </a>

            </li>
            <li>
                <a href="#"><img src="{{ asset('assets/images/dashboard.png') }}" alt="Dashboard" class="side-icon">Contact Us Leads</a>

            </li>
            
        </ul>
    </div>
</aside>
