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
                    <h2>Footer Marque Records</h2>
                </div>
                @can('add-footer-marque')
                    <div class="col-md-6">
                        <a href="{{ url('admin/add-marque') }}" class="btn btn-primary float-right"><span><img
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
                                            <th>Scroller Text</th>
                                            @can('edit-status-footer-marque')
                                                <th>Status</th>
                                            @endcan
                                            @if (auth()->user()->can('edit-footer-marque') || auth()->user()->can('delete-footer-marque'))
                                                <th>Action</th>
                                            @endif
                                        </tr>

                                    </thead>
                                    <tbody>

                                        @if (count($data) > 0)
                                            @foreach ($data as $Mdata)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $Mdata->marque_text }}</td>
                                                    @can('edit-status-footer-marque')
                                                        <td>
                                                            {!! $Mdata->status == 1
                                                                ? '<button class="btn btn-success" onclick="changeStatus(' . $Mdata->id . ')">Active</button>'
                                                                : '<button class="btn btn-danger" onclick="changeStatus(' . $Mdata->id . ')">Inactive</button>' !!}
                                                        </td>
                                                    @endcan
                                                    @if (auth()->user()->can('edit-footer-marque') || auth()->user()->can('delete-footer-marque'))
                                                        <td>
                                                            <div class="d-flex">
                                                                @can('edit-footer-marque')
                                                                    <a href="{{ route('marque.edit', ['id' => $Mdata->id]) }}"
                                                                        class="btn btn-primary">Edit</a>
                                                                @endcan
                                                                @can('delete-footer-marque')
                                                                    <button id="deleteButton"
                                                                        onclick="deleteModal('{{ $Mdata->id }}')"
                                                                        class="btn btn-danger">Delete</button>
                                                                @endcan
                                                            </div>
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        @endif


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
                                                <h5 class="modal-title" id="exampleModalLabel">Delete FooterMarque
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
    function changeStatus(id) {
        $.ajax({
            type: 'GET',
            url: 'change-marque-status/' + id,
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
        modalToastrButton.attr('href', "{{ url('admin/delete-marque') }}/" + id);
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
