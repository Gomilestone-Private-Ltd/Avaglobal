    @extends('admin.layouts.app')
    @section('content')
    @section('title', 'Job Openings')
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
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('assets/images/loader.svg') }}" width="48"
                    height="48" alt="Aero"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- Main Search -->
    <div id="search">
        <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
        <form>
            <input type="search" value="" placeholder="Search..." />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- Right Icon menu Sidebar -->
    <div class="navbar-right">
        <ul class="navbar-nav">

            <li><a href="{{ route('logout') }}" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a>
            </li>
        </ul>
    </div>
    <section class="content">
        <h3 class="text-center " style="font-weight: bold;color:#e83e8c">
            JOB OPENINGS DATA
        </h3>
        <div class="form-group col-md-12">
            <a href="{{ url('/add-jobs') }}" class="btn btn-primary float-right">Add</a>
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
                                                <th>Department</th>
                                                <th>Job Role</th>
                                                <th>Location</th>
                                                <th>Time Period</th>
                                                <th>Job Status</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            @foreach ($jobPost as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->department }}</td>
                                                    <td>{{ $data->job_role }}</td>
                                                    <td>{{ $data->location }}</td>
                                                    <td>{{ $data->time_period }}</td>

                                                    <td>{{ $data->is_active }}</td>
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
                                                            <a href="{{ route('careerjob.edit', ['id' => $data->id]) }}"
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
                url: '/career/get-description/' + id,
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
            modalToastrButton.attr('href', "{{ url('job-data/delete') }}/" + id);
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


    {{-- 
        <script>
            $(document).ready(function() {

                $('#postjob').submit(function(e) {
                    e.preventDefault();

                    // Serialize the form data
                    const formData = new FormData($(this)[0]);

                    // Send an AJAX request
                    $.ajax({
                        type: 'POST',
                        url: '{{ url('/post-jobs') }}',
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
                                window.location.href = "/get-jobs";
                            }, 3000);
                        },
                        error: function(response) {
                            console.log("hii");

                            if (response.responseJSON && response.responseJSON.errors) {
                                $('.text-danger').html('');
                                $.each(response.responseJSON.errors, function(field, errorMessage) {

                                    var errorHtml = '<span class="text-danger">' +
                                        errorMessage + '</span>';
                                    $('[name="' + field + '"]').closest(
                                            '.form-group')
                                        .find('.text-danger').html(errorHtml);
                                });
                            }


                        }
                    });
                });
            });
        </script> --}}



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
@endsection
