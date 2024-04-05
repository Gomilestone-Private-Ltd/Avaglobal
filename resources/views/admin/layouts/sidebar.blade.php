<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <!-- <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button> -->
        <a href="{{ route('dashboard') }}"><img src="{{ asset('/images/blogo.png') }}" width="100" alt="AvaGlobal"></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="{{ asset('assets/images/user.png') }}"
                            alt="User"></a>
                    <div class="detail">
                        <h4>{{ auth()->user()->name }}</h4>
                        <small>{{ auth()->user()->role->name }}</small>
                    </div>
                </div>
            </li>
            <li class="active open"><a href="{{ route('dashboard') }}"><i
                        class="zmdi zmdi-home"></i><span>Dashboard</span></a>
            </li>
            <li>
                <a href="{{ route('opened-job') }}">Job Openings</a>

            </li>
            <li>
                <a href="{{ route('applicants') }}">Job Applicants </a>

            </li>
            <li>
                <a href="{{ route('case-section') }}">Case Study </a>

            </li>
            <li>
                <a href="{{ route('contact-applicants') }}">Contact Us Leads</a>

            </li>
            <!-- <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span></a>
                <ul class="ml-menu">
                    <li><a href="mail-inbox.html">Email</a></li>
                    <li><a href="chat.html">Chat Apps</a></li>
                    <li><a href="events.html">Calendar</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </li> -->
        </ul>
    </div>
</aside>
