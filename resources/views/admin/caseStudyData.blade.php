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
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h2>Case Study Records</h2>
                </div>
                @can('add-case-study')
                    <div class="col-md-6">
                        <a href="{{ url('admin/add-case') }}" class="btn btn-primary float-right"><span><img
                                    src="{{ asset('assets/images/plus.png') }}" alt="All" class="add-icon"></span>Add</a>
                    </div>
                @endcan
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
                                            <th>Case</th>
                                            <th>Case Title</th>
                                            <th>Case Image</th>
                                            <th>Posted By</th>
                                            {{-- <th>Posted Date</th> --}}
                                            <th>Description</th>
                                            @if (auth()->user()->can('edit-case-study') || auth()->user()->can('delete-case-study'))
                                                <th>Action</th>
                                            @endif
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach ($combinedData as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->case }}</td>
                                                <td>{{ $data->case_title }}</td>

                                                <td>
                                                    @foreach ($data->avaDocs as $images)
                                                        <img src="{{ asset($images->path) }}"
                                                            style="width:70px;height:60px;border-radius:20%" />
                                                    @endforeach
                                                </td>
                                                <td>{{ $data->posted_by }}</td>
                                                <td>
                                                    <a type="button" class="view-btn" data-id="{{ $data->id }}"
                                                        data-toggle="modal" data-target="#exampleModalLong"
                                                        onclick="updateModalBody('{{ $data->id }}')">
                                                        <img src="{{ asset('assets/images/eye.png') }}"
                                                                        alt="Back" class="eye-icon">
                                                    </a>

                                                </td>
                                                @if (auth()->user()->can('edit-case-study') || auth()->user()->can('delete-case-study'))
                                                    <td>
                                                        <div class="d-flex">
                                                            @can('edit-case-study')
                                                                <a href="{{ route('casestudy.edit', ['id' => $data->id]) }}"
                                                                    class="edit-btn"><img src="{{ asset('assets/images/edit.png') }}"
                                                                    alt="Back" class="edit-icon"></a>
                                                            @endcan
                                                            @can('delete-case-study')
                                                                <button id="deleteButton"
                                                                    onclick="deleteModal('{{ $data->id }}')"
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
            url: 'case/get-description/' + id,
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
        var modalToastrButton = $('#modalToastr');
        modalToastrButton.attr('href', "{{ url('admin/case-study/delete') }}/" + id);
        $('#deleteModal').modal('show');

        $('#modalToastr').on('click', function(event) {
            event.preventDefault();
            $.ajax({
                type: 'GET',
                url: modalToastrButton.attr('href'),
                success: function(response) {
                    // $("#deleteButton").attr("disabled", true)
                    $('#deleteModal').modal('hide');
                    toastr.options = {
                        'progressBar': true,
                        'closeButton': true,
                        // 'timeOut': 5000
                    }
                    toastr.success(response.message);
                    window.location.href = response.route;
                },
                error: function(response) {
                    toastr.error(response.message);
                    window.location.href = response.route;
                }
            });
        });
    }
</script>

@endsection
