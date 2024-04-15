<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="icon" href="https://www.avaglobal.in{{ asset('/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}" />
    <link
        href="{{ asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    <link href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/charts-c3/plugin.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/plugins/morrisjs/morris.min.css') }}" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"
        integrity="sha512-O/nUTF5mdFkhEoQHFn9N5wmgYyW323JO6v8kr6ltSRKriZyTr/8417taVWeabVS4iONGk2V444QD0P2cwhuTkg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/TinyMce/js/tinymce/tinymce.min.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script>
        var baseUrl = "{{ url('') }}";
        var token = "{{ csrf_token() }}";
    </script>
</head>
<div class="header-container">
    <div class="left-header">
        <div class="navbar-brand">
            <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/images/blogo.png') }}" width="110"
                    alt="AvaGlobal"></a>
        </div>
    </div>
    <div class="right-header">
        <div class="rm-container">
            <div class="rm-left">
                <h3 class="welcome-text">WELCOME TO AVA GLOBAL</h3>
            </div>
            <div class="rm-right">
                <div class="user-info">
                    <a class="image" href="#"><img src="{{ asset('assets/images/user.png') }}" alt="User"
                            class="userimage"></a>
                    <div class="detail">
                        {{-- <h4 class="username">Test</h4> --}}
                        <div class="dropdown">
                            <button class="logout-btn dropdown-toggle" type="button"
                                data-toggle="dropdown">{{ auth()->user()->name }}
                                <span><img src="{{ asset('assets/images/down.png') }}" alt="User"
                                        class="down-icon"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('logout') }}"><span><img
                                                src="{{ asset('assets/images/logout.png') }}" alt="User"
                                                class="logout-icon"></span>Logout</a></li>
                            </ul>
                        </div>
                        {{-- <small class="userrole">{{ auth()->user()->role->name }}</small> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
