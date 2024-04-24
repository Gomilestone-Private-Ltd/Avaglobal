@extends('admin.layouts.app')
@section('content')
@section('title', 'Testimonial Records')
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
                    <h2>Testimonial Records</h2>
                </div>
                @can('add-testimonial')
                    <div class="col-md-6">
                        <a href="{{ url('admin/create-testimonial') }}" class="btn btn-primary float-right"><span><img
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
                                            <th>Name</th>
                                            <th>Text</th>
                                            <th>Testimonial Image</th>
                                            @can('edit-status-testimonial')
                                                <th>Status</th>
                                            @endcan
                                            @if (auth()->user()->can('edit-testimonial') || auth()->user()->can('delete-testimonial'))
                                                <th>Action</th>
                                            @endif
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @if (count($testimonialData) > 0)
                                            @foreach ($testimonialData as $data)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->text }}</td>
                                                    @if (isset($data->testimonialImage->path))
                                                        <td> <img src="{{ asset($data->testimonialImage->path) }}"
                                                                alt="profile Pic" height="50" width="50">
                                                        @else
                                                        <td> No Image</td>
                                                    @endif
                                                    </td>
                                                    @can('edit-status-testimonial')
                                                        <td>
                                                            {!! $data->status == 1
                                                                ? '<button class="btn btn-success" onclick="changeStatus(' . $data->id . ')">Active</button>'
                                                                : '<button class="btn btn-danger" onclick="changeStatus(' . $data->id . ')">Inactive</button>' !!}
                                                        </td>
                                                    @endcan
                                                    @if (auth()->user()->can('edit-testimonial') || auth()->user()->can('delete-testimonial'))
                                                        <td>

                                                            <div class="d-flex">
                                                                @can('edit-testimonial')
                                                                    <a href="{{ route('testimonial.edit', ['id' => $data->id]) }}"
                                                                        class="edit-btn"><img
                                                                            src="{{ asset('assets/images/edit.png') }}"
                                                                            alt="Back" class="edit-icon"></a>
                                                                @endcan
                                                                @can('delete-testimonial')
                                                                    <button id="deleteButton"
                                                                        onclick="deleteModal('{{ $data->id }}')"
                                                                        class="delete-btn"><img
                                                                            src="{{ asset('assets/images/trash.png') }}"
                                                                            alt="Back" class="delete-icon"></button>
                                                                @endcan
                                                            </div>
                                                        </td>
                                                    @endif
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
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Testimonial's
                                                    Record
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
    function changeStatus(id) {
        toastr.options = {
            'progressBar': true,
            'closeButton': true,
            'timeOut': 5000
        }
        $.ajax({
            type: 'GET',
            url: baseUrl + '/admin/testimonial-status/' + id,
            data: id,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success == true) {
                    toastr.success(response.message);
                    window.location.href = "";
                } else {
                    toastr.error(response.message);
                    window.location.href = "";
                }
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
        modalToastrButton.attr('href', "{{ url('admin/delete-testimonial') }}/" + id);
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
