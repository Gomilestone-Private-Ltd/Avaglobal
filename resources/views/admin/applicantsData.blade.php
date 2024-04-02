<!doctype html>
<html class="no-js " lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

        <title>Ava Global</title>
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

            /* .card .body {
                font-weight: 400;
                border-radius: .35rem;
                background: #fff;
                font-size: 14px;
                color: #222;
                padding: 20px;
                margin-top: -115px;
            } */
        </style>
    </head>

    <body class="theme-blush">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48"
                        height="48" alt="Aero"></div>
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
        {{-- <aside id="leftsidebar" class="sidebar">
            <div class="navbar-brand">
                <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
                <a href="index.html"><img src="{{ asset('/images/blogo.png') }}" width="100" alt="AvaGlobal"></a>
            </div>
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <a class="image" href="profile.html"><img src="assets/images/profile_av.jpg"
                                    alt="User"></a>
                            <div class="detail">
                                <h4>{{ auth()->user()->name }}</h4>
                                <small>{{ auth()->user()->role->name }}</small>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                    <li><a href="{{ route('opened-job') }}"><span>Job Openings</span></a> </li>
                    <li><a href="{{ route('career-section') }}"><span>Job Description</span></a></li>
                </ul>
            </div>
        </aside> --}}
        @include('admin.layouts.sidebar')

        <section class="content">
            <h3 class="text-center " style="font-weight: bold;color:#e83e8c">
                Job Posted List
            </h3>
            <div class="body_scroll">
                <div class="block-header">
                    <div class="row">


                    </div>
                </div>

                <div class="container-fluid">
                    <!-- Basic Examples -->
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="body">
                                    <div class="table-responsive">
                                        <table
                                            class="table table-bordered table-striped table-hover js-basic-example dataTable"
                                            id="job-posted">
                                            <thead>

                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Contact No.</th>
                                                    <th>Job Position</th>
                                                    <th>Applicant CV</th>
                                                </tr>

                                            </thead>

                                            <tbody>
                                                {{-- @foreach ($jobPost as $data)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $data->department }}</td>
                                                        <td>{{ $data->job_role }}</td>
                                                        <td>{{ $data->location }}</td>
                                                        <td>{{ $data->time_period }}</td>

                                                        <td>
                                                            <div class="d-flex">
                                                                <a href="{{ url('/career-description') }}/{{ $data->id }}/{{ $data->job_role }}"
                                                                    class="btn btn-primary">Add</a>
                                                                <a href="{{ url('/edit-description') }}/{{ $job_id = isset($descData->job_id) ? $descData->job_id : $data->id }}"
                                                                    class="btn"
                                                                    style="background-color: #e83e8c;">Edit</a>
                                                            </div>
                                                        </td>


                                                    </tr>
                                                @endforeach --}}


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section>


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

        <!-- Jquery DataTable Plugin Js -->
        <script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

        <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
        <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>

    </body>


</html>
