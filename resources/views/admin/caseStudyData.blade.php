<!doctype html>
<html class="no-js " lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

        <title>Ava Global</title>
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
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
        {{-- font awesome --}}
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

            .toast-error {
                background-color: red !important;
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
        @include('admin.layouts.sidebar')
        <section class="content">
            <h3 class="text-center " style="font-weight: bold;color:#e83e8c">
                CASE STUDY DATA
            </h3>
            <div class="form-group col-md-12">
                <a href="{{ url('/add-case') }}" class="btn btn-primary float-right">Add</a>
            </div>
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
                                                    <th>Case</th>
                                                    <th>Case Title</th>
                                                    <th>Case Image</th>
                                                    <th>Posted By</th>
                                                    {{-- <th>Posted Date</th> --}}
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>

                                            </thead>
                                            <tbody>
                                                @foreach ($combinedData as $data)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $data->case }}</td>
                                                        <td>{{ $data->case_title }}</td>
                                                        <td><img src="{{ asset($data->avaDocs->path) }}"
                                                                style="width:70px;height:60px;border-radius:20%" /></td>
                                                        <td>{{ $data->posted_by }}</td>
                                                        <td>View Description
                                                            <i class="fa fa-eye" type="button"
                                                                data-id="{{ $data->id }}" data-toggle="modal"
                                                                data-target="#exampleModalLong"
                                                                style="font-size:24px;cursor: pointer;"
                                                                onclick="updateModalBody('{{ $data->id }}')">
                                                            </i>

                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <a href="{{ route('casestudy.edit', ['id' => $data->id]) }}"
                                                                    class="btn btn-primary">Edit</a>
                                                                <button onclick="deleteModal('{{ $data->id }}')"
                                                                    class="btn btn-danger">Delete</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">
                                                            Case Description
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" id="modalBody">

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        {{-- endModal --}}
                                        {{-- Delete Model --}}
                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Case
                                                            Study
                                                            Data</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are You Sure Want To Delete ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="" class="btn btn-info">Cancel</a>

                                                        <a href="" id="modalToastr" class="btn btn-danger"
                                                            style="">Yes</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            function updateModalBody(id) {
                // Send an AJAX request
                // $('#exampleModalLong').modal('hide');
                $('#modalBody').html('');
                var id = id;
                $.ajax({
                    type: 'GET',
                    url: '/case/get-description/' + id,
                    data: id,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response);
                        $('#modalBody').html('');
                        $('#modalBody').html(response.description);
                        $('#exampleModalLong').modal('show');
                    },
                    error: function(response) {
                        console.log("hii");
                    }
                });
            }

            // Delete function 
            function deleteModal(id) {

                console.log(id);
                var modalToastrButton = $('#modalToastr');

                console.log(modalToastrButton);
                modalToastrButton.attr('href', "{{ url('case-study/delete') }}/" + id);
                $('#deleteModal').modal('show');

                $('#modalToastr').on('click', function(event) {
                    event.preventDefault();
                    $.ajax({
                        type: 'GET',
                        url: modalToastrButton.attr('href'),
                        success: function(response) {
                            $('#deleteModal').modal('hide');
                            toastr.options = {
                                'progressBar': true,
                                'closeButton': true,
                                'timeOut': 5000
                            }
                            toastr.success(response.message);
                            window.location.href = "";
                        },
                        error: function(response) {
                            toastr.error(response.message);
                        }
                    });
                });
            }
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

        <!-- Jquery DataTable Plugin Js -->
        <script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>


    </body>


</html>
