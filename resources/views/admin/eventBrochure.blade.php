@extends('admin.layouts.app')
@section('content')
@section('title', 'Case Study Details')
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

<section class="content">
    <h3 class="text-center " style="font-weight: bold;color:#e83e8c">
        EVENT BROCHURE DATA
    </h3>
    <div class="form-group col-md-12">
        <a href="{{ url('download/addbrochure') }}" class="btn btn-primary float-right ">Add</a>
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
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable"
                                    id="job-posted">
                                    <thead>

                                        <tr>
                                            <th>S.No</th>
                                            <th>Brochure Pdf File</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @if (count($BrochureData) > 0)
                                            @foreach ($BrochureData as $data)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        {{ $data->filename }}
                                                        <a href="{{ asset($data->path) }}" download>Download
                                                            Brochure</a>
                                                    </td>
                                                    <td>
                                                        {!! $data->downloadbrochurePdfStatus == 1
                                                            ? '<button class="btn btn-success" onclick="changeStatus(' . $data->id . ')">Active</button>'
                                                            : '<button class="btn btn-danger" onclick="changeStatus(' . $data->id . ')">Inactive</button>' !!}
                                                    </td>
                                                    <td>

                                                        <div class="d-flex">
                                                            <a href="{{ route('downloadBrochure.edit', ['id' => $data->id]) }}"
                                                                class="btn btn-primary">Edit</a>
                                                            <button id="deleteButton"
                                                                onclick="deleteModal('{{ $data->id }}')"
                                                                class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif


                                    </tbody>
                                </table>
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
    function changeStatus(id) {
        $.ajax({
            type: 'GET',
            url: '/change/downloadbrochure/status/' + id,
            data: id,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                window.location.href = "";

            },
            error: function(response) {
                console.log("something went wrong");
            }
        });
    }
</script>
<script>
    // Delete function 
    function deleteModal(id) {

        console.log(id);
        var modalToastrButton = $('#modalToastr');

        console.log(modalToastrButton);
        modalToastrButton.attr('href', "{{ url('download/brochure/delete') }}/" + id);
        $('#deleteModal').modal('show');

        $('#modalToastr').on('click', function(event) {
            event.preventDefault();
            $.ajax({
                type: 'GET',
                url: modalToastrButton.attr('href'),
                success: function(response) {
                    // $("#deleteButton").attr("disabled", true)
                    $("#deleteButton").removeAttr("disabled");
                    $('#deleteModal').modal('hide');
                    toastr.options = {
                        'progressBar': true,
                        'closeButton': true,
                        // 'timeOut': 5000
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
