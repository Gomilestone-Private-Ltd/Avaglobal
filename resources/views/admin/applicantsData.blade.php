@extends('admin.layouts.app')
@section('content')
@section('title', 'Applicant Details')

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
                    <h2>Applicants Records</h2>
                </div>
                <div class="col-md-6">

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
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable"
                                    id="job-posted">
                                    <thead>

                                        <tr>
                                            <th>S.No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact No.</th>
                                            <th>Job Position</th>
                                            <th>Applicant CV</th>
                                            @can('delete-job-applicants')
                                                <th>Action</th>
                                            @endcan
                                        </tr>

                                    </thead>

                                    <tbody>
                                        @foreach ($applicantData as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->phone }}</td>
                                                <td>{{ $data->position }}</td>
                                                <td>
                                                    <a href="{{ asset($data->avaDocs->path) }}" download>Download
                                                        PDF</a>
                                                </td>
                                                @can('delete-job-applicants')
                                                    <td>
                                                        <div class="d-flex">
                                                            <button onclick="deleteModal('{{ $data->id }}')"
                                                                class="btn btn-danger">Delete</button>

                                                        </div>
                                                    </td>
                                                @endcan
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                {{-- Delete Model --}}
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Applicant Record
                                                </h5>
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
    // Delete function 
    function deleteModal(id) {

        console.log(id);
        var modalToastrButton = $('#modalToastr');

        console.log(modalToastrButton);
        modalToastrButton.attr('href', "{{ url('admin/delete-applicant') }}/" + id);
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
