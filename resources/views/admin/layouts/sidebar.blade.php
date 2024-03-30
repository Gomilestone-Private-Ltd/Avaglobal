<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{ route('dashboard') }}"><img src="{{ asset('/images/blogo.png') }}" width="100" alt="AvaGlobal"></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="{{ asset('assets/images/profile_av.jpg') }}"
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
                <a href="{{ route('career-section') }}">Job Description</a>

            </li>
            <li>
                <a href="{{ route('case-section') }}">Case Study </a>

            </li>

        </ul>
    </div>
</aside>
