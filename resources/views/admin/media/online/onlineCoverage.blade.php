@extends('admin.layouts.app')
@section('content')
@section('title', 'Media Records')
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
                    <h2>Online Coverage Records</h2>
                </div>
                @can('add-online-coverage')
                    <div class="col-md-6">
                        <a href="{{ route('add-online-coverage') }}" class="btn btn-primary float-right"><span><img
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
                                <table
                                    class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>TITLE</th>
                                            <th>DATE</th>
                                            <th>LOCATION</th>
                                            <th>IMAGE</th>
                                            <th>MEDIA URL</th>
                                            @if (auth()->user()->can('edit-online-coverage') || auth()->user()->can('delete-online-coverage'))
                                                <th>ACTION</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($mediaRecord) > 0)
                                            @foreach ($mediaRecord as $record)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $record->title }}</td>
                                                    <td>{{ $record->created_at }}</td>
                                                    <td>{{ $record->location }}</td>
                                                    @if (isset($record->onlineDocsImage->path))
                                                        <td> <img src="{{ asset($record->onlineDocsImage->path) }}"
                                                                alt="profile Pic" height="50" width="50"></td>
                                                    @else
                                                        <td> No Image</td>
                                                    @endif

                                                    <td>{{ $record->media_url }}</td>
                                                    @if (auth()->user()->can('edit-online-coverage') || auth()->user()->can('delete-online-coverage'))
                                                        <td>
                                                            <div class="d-flex">
                                                                @can('edit-online-coverage')
                                                                    <a href="{{ url('admin/edit-online-coverage/' . $record->id) }}"
                                                                        class="edit-btn"><img
                                                                            src="{{ asset('assets/images/edit.png') }}"
                                                                            alt="Back" class="edit-icon"></a>
                                                                @endcan
                                                                @can('delete-online-coverage')
                                                                    <button id="deleteButton"
                                                                        onclick="deleteModal('{{ $record->id }}')"
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
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
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
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    // Delete function 
    function deleteModal(id) {
        var modalToastrButton = $('#modalToastr');
        $('#deleteModal').modal('show');
        var url = baseUrl + "/admin/delete-online-coverage/" + id;
        $('#modalToastr').on('click', function(event) {
            event.preventDefault();
            $.ajax({
                type: 'DELETE',
                url: url,
                data: {
                    "_token": token,
                },
                success: function(response) {
                    if (response.success == true) {
                        toastr.options = {
                            'progressBar': true,
                            'closeButton': true,
                            'timeOut': 5000
                        }
                        toastr.error(response.message);
                        setTimeout(() => {
                            window.location.href = response.route;
                        }, 1500);

                    }

                },
                error: function(response) {
                    toastr.error(response.message);
                }
            });
        });
    }
</script>

@endsection
