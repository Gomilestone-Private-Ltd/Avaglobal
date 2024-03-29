<!doctype html>
<html class="no-js " lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

        <title>:: Aero Bootstrap4 Admin :: Basic Form Elements 3243</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Favicon-->
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
        <!-- Bootstrap Material Datetime Picker Css -->
        <link
            href="{{ asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}"
            rel="stylesheet" />
        <!-- Bootstrap Select Css -->
        <link href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

        <!-- jQuery DataTable link -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">

        <!-- Custom Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        {{-- TinyMce --}}
        <script src="{{ asset('assets/TinyMce/js/tinymce/tinymce.min.js') }}"></script>

        <style>
            label {
                color: black;
            }

            .required label::after {
                content: " *";
                color: red;
            }

            .error {
                color: red;
            }

            h3 {
                margin-bottom: -9px;
            }
        </style>
    </head>

    <body class="theme-blush">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('assets/images/loader.svg') }}"
                        width="48" height="48" alt="Aero"></div>
                <p>Please wait...</p>
            </div>
        </div>

        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>

        <!-- Main Search -->
        <div id="search">
            <button id="close" type="button"
                class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
            <form>
                <input type="search" value="" placeholder="Search..." />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <!-- Right Icon menu Sidebar -->
        <div class="navbar-right">
            <ul class="navbar-nav">


                <li><a href="{{ route('logout') }}" class="mega-menu" title="Sign Out"><i
                            class="zmdi zmdi-power"></i></a>
                </li>
            </ul>
        </div>

        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <div class="navbar-brand">
                <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
                <a href="index.html"><img src="{{ asset('/images/blogo.png') }}" width="100" alt="AvaGlobal"></a>
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
                    <li><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                    </li>
                    <li><a href="{{ route('opened-job') }}"><span>Job Openings</span></a> </li>
                    <li><a href="{{ route('career-section') }}"><span>Job Description</span></a></li>
                </ul>
            </div>
        </aside>


        <section class="content">
            <h3 class="text-center " style="font-weight: bold;color:#e83e8c">
                Career Section Description
            </h3>
            <form method="POST" action="" id="textEditor">
                @csrf
                {{-- <div class="form-group col-md-12 required">
                    <label for="">Title:</label>
                    <input type="text" name="title" class="form-control" value="" placeholder="Title">
                    <span class="text-danger">

                    </span>
                </div> --}}
                <div class="form-group col-md-12 required">
                    <label for="">Description:</label>
                    <textarea name="description" id="tinymce" class="form-control" value="{!! $description = isset($descData->description) ? $descData->description : '' !!}"
                        placeholder="Description"></textarea>
                    <span class="text-danger">
                        {{-- id="editor" --}}
                    </span>
                </div>
                <input type="hidden" id="routeId" name="routeId"
                    value="{{ $job_id = isset($descData->job_id) ? $descData->job_id : $id }}">
                <div class="form-group col-md-12 d-flex ">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ url('/edit-description') }}/{{ $job_id = isset($descData->job_id) ? $descData->job_id : $id }}"
                        class="btn btn-primary">Edit</a>
                </div>
            </form>


        </section>



        <script type="text/javascript">
            tinymce.init({
                selector: 'textarea#tinymce',
                plugins: "preview",
                theme_advanced_buttons3_add: "preview",
                plugin_preview_width: "500",
                plugin_preview_height: "600",
                promotion: false,
                plugins: "code",
                branding: false,
                height: 400
            });

            $(document).ready(function() {
                $('#textEditor').submit(function(e) {
                    e.preventDefault();
                    // Serialize the form data
                    const formData = new FormData($(this)[0]);
                    $.ajax({
                        type: 'POST',
                        url: '{{ url('/text-editor') }}',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {

                            console.log(response);
                            toastr.options = {
                                'closeButton': true,
                                'progressBar': true
                            }
                            toastr.success(response.message);
                            setTimeout(function() {
                                window.location.href = "";
                            }, 3000);

                        },
                        error: function(response) {
                            if (response.responseJSON && response.responseJSON.errors) {
                                $('.text-danger').html('');

                                var errorHtml = '<span class="text-danger">' +
                                    response.responseJSON.errors + '</span>';
                                console.log(errorHtml);
                                $('[name="' + "description" + '"]').closest(
                                        '.form-group')
                                    .find('.text-danger').html(errorHtml);
                            }
                        }
                    });
                });
            });
        </script>


        {{-- Toastr script --}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <!-- Jquery Core Js -->
        <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
        <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->

        <script src="{{ asset('assets/plugins/momentjs/moment.js') }}"></script> <!-- Moment Plugin Js -->
        <!-- Bootstrap Material Datetime Picker Plugin Js -->
        <script src="{{ asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
        </script>

        <script src="{{ asset('assets/js/pages/forms/basic-form-elements.js') }}"></script>



        <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->


    </body>


</html>
