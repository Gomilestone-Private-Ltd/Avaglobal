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
        SCROLLER DATA
    </h3>
    <div class="form-group col-md-12">
        <a href="{{ url('/add-brochure') }}" class="btn btn-primary float-right disabled">Add</a>
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
                                            <th>Scroller Text</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        {{--
                                        @if (count($brochure) > 0)
                                           @foreach ($brochure as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->title }}</td>
                                                    <td>{{ $data->location }}</td>
                                                    <td><img src="{{ asset(isset($data->avaDocsBrochure->path) ? $data->avaDocsBrochure->path : 'assets/img/1711805669avaglobal.png') }}"
                                                            style="width:70px;height:60px;border-radius:20%" /></td>
                                                    <td>
                                                        {!! $data->status == 1
                                                            ? '<button class="btn btn-success" onclick="changeStatus(' . $data->id . ')">Active</button>'
                                                            : '<button class="btn btn-danger" onclick="changeStatus(' . $data->id . ')">Inactive</button>' !!}
                                                    </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{ route('brochure.edit', ['id' => $data->id]) }}"
                                                                class="btn btn-primary">Edit</a>
                                                            <button id="deleteButton"
                                                                onclick="deleteModal('{{ $data->id }}')"
                                                                class="btn btn-danger">Delete</button>
                            </div>
                            </td>
                            </tr>
                            @endforeach 
                            @endif
                            --}}

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
    function changeStatus(id) {
        $.ajax({
            type: 'GET',
            url: '/change/brochure/status/' + id,
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
        modalToastrButton.attr('href', "{{ url('case-study/delete') }}/" + id);
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
