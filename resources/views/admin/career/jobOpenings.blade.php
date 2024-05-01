    @extends('admin.layouts.app')
    @section('content')
    @section('title', 'Job Openings')
    @section('header-title', 'Job Openings Records')
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

    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        {{-- <h2>Job Openings Records</h2> --}}
                    </div>
                    <div class="col-md-6">
                        @can('add-job-opening')
                            <a href="{{ route('add-job-openings') }}" class="btn btn-primary float-right"><span><img
                                        src="{{ asset('assets/images/plus.png') }}" alt="All"
                                        class="add-icon"></span>Add</a>
                        @endcan
                    </div>
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
                                        <thead class="main-table">

                                            <tr>
                                                <th>S.No</th>
                                                <th>Department</th>
                                                <th>Job Role</th>
                                                <th>Location</th>
                                                <th>Time Period</th>
                                                <th>Job Status</th>
                                                <th>Description</th>
                                                @if (auth()->user()->can('edit-job-opening') || auth()->user()->can('delete-job-opening'))
                                                    <th>Action</th>
                                                @endif
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
                                                    <td>
                                                        <a type="button"
                                                            class="view-btn"
                                                            data-id="{{ $data->id }}" data-toggle="modal"
                                                            data-target="#exampleModalLong"
                                                            onclick="updateModalBody('{{ $data->id }}')">
                                                            <img src="{{ asset('assets/images/eye.png') }}"
                                                                        alt="Back" class="eye-icon">
                                                        </a>
                                                    </td>
                                                    @if (auth()->user()->can('edit-job-opening') || auth()->user()->can('delete-job-opening'))
                                                        <td>
                                                            <div class="d-flex">
                                                                @can('edit-job-opening')
                                                                    <a href="{{ route('edit-job-openings', ['id' => $data->id]) }}"
                                                                        class="edit-btn"><img src="{{ asset('assets/images/edit.png') }}"
                                                                        alt="Back" class="edit-icon"></a>
                                                                @endcan
                                                                @can('delete-job-opening')
                                                                    <button onclick="deleteModal('{{ $data->id }}')"
                                                                        class="delete-btn"><img src="{{ asset('assets/images/trash.png') }}"
                                                                        alt="Back" class="delete-icon"></button>
                                                                @endcan
                                                            </div>
                                                        </td>
                                                    @endif
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
                                                        Job Role Description
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
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete JobOpening's
                                                        Record</h5>
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
                url: '/admin/career/get-description/' + id,
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
            modalToastrButton.attr('href', "{{ url('admin/delete/job-openings') }}/" + id);
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
@endsection
