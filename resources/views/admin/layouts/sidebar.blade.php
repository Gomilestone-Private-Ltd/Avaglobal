<aside id="leftsidebar" class="sidebar" style="overflow: scroll">
    <div class="menu">
        <ul class="list">
            @can('view-dashboard')
                <li class="active open"><a href="{{ route('dashboard') }}"><img
                            src="{{ asset('assets/images/dashboard.png') }}" alt="Dashboard" class="side-icon">Dashboard</a>
                </li>
            @endcan
            @can('view-career')
                <li><a href="javascript:void(0);" class="menu-toggle"><img src="{{ asset('assets/images/suitcase.png') }}"
                            alt="Dashboard" class="side-icon">Career</a>
                    <ul class="ml-menu">
                        @can('view-job-opening')
                            <li><a href="{{ route('opened-job') }}">Job Openings</a></li>
                        @endcan
                        @can('view-job-applicants')
                            <li><a href="{{ route('applicants') }}">Job Applicants</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
            {{-- <li>
                <a href="{{ route('opened-job') }}">Job Openings</a>

            </li>
            <li class="{{ Request::is('applicants') ? 'active' : '' }}">
                <a href="{{ route('applicants') }}"><span>Job Applicants </span></a>

            </li> --}}
            @can('view-case-study')
                <li>
                    <a href="{{ route('case-section') }}"><img src="{{ asset('assets/images/case-study1.png') }}"
                            alt="Case Study" class="side-icon">Case Study </a>

                </li>
            @endcan
            @can('view-contactus-lead')
                <li>
                    <a href="{{ route('contact-applicants') }}"><img src="{{ asset('assets/images/contact-us.png') }}"
                            alt="Contact Us Leads" class="side-icon">Contact Us Leads</a>

                </li>
            @endcan
            @can('view-footer-marque')
                <li>
                    <a href="{{ route('scroller') }}"><img src="{{ asset('assets/images/footer.png') }}" alt="Footer"
                            class="side-icon">Footer Scroller</a>
                </li>
            @endcan
            @can('view-circular')
                <li>
                    <a href="{{ route('circulars') }}"><img src="{{ asset('assets/images/dashboard.png') }}"
                            alt="Dashboard" class="side-icon">Circulars</a>
                </li>
            @endcan
            @can('view-policy')
                <li>
                    <a href="{{ route('data-policy') }}"><img src="{{ asset('assets/images/dashboard.png') }}"
                            alt="Dashboard" class="side-icon">Policy</a>
                </li>
            @endcan
            @can('view-popup')
                <li>
                    <a href="{{ route('get-brochure') }}"><img src="{{ asset('assets/images/pop-up.png') }}"
                            alt="Pop Up" class="side-icon">Add PopUp</a>
                </li>
            @endcan
            @can('view-brochure')
                <li>
                    <a href="{{ route('download.brochureData') }}"><img src="{{ asset('assets/images/dashboard.png') }}"
                            alt="Dashboard" class="side-icon">Add Brochure</a>
                </li>
            @endcan
            @can('view-roles-and-permissions')
                <li><a href="javascript:void(0);" class="menu-toggle"><img
                            src="{{ asset('assets/images/management.png') }}" alt="Roles & Permissions"
                            class="side-icon">Roles & Permissions</a>
                    <ul class="ml-menu">
                        @can('view-roles')
                            <li><a href="{{ route('roles.index') }}">Roles</a></li>
                        @endcan
                        @can('view-permissions')
                            <li><a href="{{ route('permissions.index') }}">Permissions</a></li>
                        @endcan
                        @can('view-users')
                            <li><a href="{{ route('users.index') }}">Users List</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan
        </ul>
    </div>
</aside>
