<aside id="leftsidebar" class="sidebar" style="overflow: scroll">
    <div class="menu">
        <ul class="list">
            <li class="active open"><a href="{{ route('dashboard') }}"><img
                        src="{{ asset('assets/images/dashboard.png') }}" alt="Dashboard" class="side-icon">Dashboard</a>
            </li>

            <li><a href="javascript:void(0);" class="menu-toggle"><img src="{{ asset('assets/images/suitcase.png') }}"
                        alt="Dashboard" class="side-icon">Career</a>
                <ul class="ml-menu">
                    <li><a href="{{ route('opened-job') }}">Job Openings</a></li>
                    <li><a href="{{ route('applicants') }}">Job Applicants</a></li>
                </ul>
            </li>
            {{-- <li>
                <a href="{{ route('opened-job') }}">Job Openings</a>

            </li>
            <li class="{{ Request::is('applicants') ? 'active' : '' }}">
                <a href="{{ route('applicants') }}"><span>Job Applicants </span></a>

            </li> --}}
            <li>
                <a href="{{ route('case-section') }}"><img src="{{ asset('assets/images/case1.png') }}" alt="Dashboard"
                        class="side-icon">Case Study </a>

            </li>
            <li>
                <a href="{{ route('contact-applicants') }}"><img src="{{ asset('assets/images/dashboard.png') }}"
                        alt="Dashboard" class="side-icon">Contact Us Leads</a>

            </li>
            <li>
                <a href="{{ route('scroller') }}"><img src="{{ asset('assets/images/dashboard.png') }}" alt="Dashboard"
                        class="side-icon">Footer Scroller</a>
            </li>
            <li>
                <a href="{{ route('circulars') }}"><img src="{{ asset('assets/images/dashboard.png') }}"
                        alt="Dashboard" class="side-icon">Circulars</a>
            </li>
            <li>
                <a href="{{ route('data-policy') }}"><img src="{{ asset('assets/images/dashboard.png') }}"
                        alt="Dashboard" class="side-icon">Policy</a>
            </li>
            <li>
                <a href="{{ route('get-brochure') }}"><img src="{{ asset('assets/images/dashboard.png') }}"
                        alt="Dashboard" class="side-icon">Add PopUp</a>
            </li>
            <li>
                <a href="{{ route('download.brochureData') }}"><img src="{{ asset('assets/images/dashboard.png') }}"
                        alt="Dashboard" class="side-icon">Add Brochure</a>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><img src="{{ asset('assets/images/suitcase.png') }}"
                        alt="Dashboard" class="side-icon">Roles & Permissions</a>
                <ul class="ml-menu">
                    <li><a href="{{ route('roles.index') }}">Roles</a></li>
                    <li><a href="{{ route('permissions.index') }}">Permissions</a></li>
                    <li><a href="{{ route('users.index') }}">Users List</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
