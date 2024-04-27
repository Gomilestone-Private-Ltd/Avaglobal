@extends('admin.layouts.app')
@section('content')
@section('title', 'Brochure Records')
@section('header-title', 'Brochure Records')
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
                    {{-- <h2>Brochure Records</h2> --}}
                </div>
                @can('add-brochure')
                    <div class="col-md-6">
                        <a href="{{ url('admin/add-brochure') }}" class="btn btn-primary float-right"><span><img
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
                                    <thead class="main-table">

                                        <tr>
                                            <th>S.No</th>
                                            <th>Title</th>
                                            <th>Brochure File</th>
                                            @can('edit-status-brochure')
                                                <th>Status</th>
                                            @endcan
                                            @if (auth()->user()->can('edit-brochure') || auth()->user()->can('delete-brochure'))
                                                <th>Action</th>
                                            @endif
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @if (count($BrochureData) > 0)
                                            @foreach ($BrochureData as $data)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>{{ $data->brochure_title }}</td>
                                                    {{-- <td>
                                                        {{ $data->filename }}
                                                        <a href="{{ asset($data->path) }}" download>Download
                                                            Brochure</a>
                                                    </td> --}}
                                                    @if (isset($data->path) && strtoupper($data->filetype) == 'PDF')
                                                        <td>
                                                            <a href="{{ asset($data->path) }}" download>Download
                                                                FILE</a>
                                                        </td>
                                                    @elseif (isset($data->path) && strtoupper($data->filetype) != 'PDF')
                                                        <td><img src="{{ asset(isset($data->path) ? $data->path : 'assets/img/1711805669avaglobal.png') }}"
                                                                style="width:70px;height:60px;border-radius:20%" />
                                                        </td>
                                                    @else
                                                        <td>No FIle</td>
                                                    @endif
                                                    @can('edit-status-brochure')
                                                        <td>
                                                            {!! $data->downloadbrochurePdfStatus == 1
                                                                ? '<button class="btn btn-success" onclick="changeStatus(' . $data->id . ')">Active</button>'
                                                                : '<button class="btn btn-danger" onclick="changeStatus(' . $data->id . ')">Inactive</button>' !!}
                                                        </td>
                                                    @endcan
                                                    @if (auth()->user()->can('edit-brochure') || auth()->user()->can('delete-brochure'))
                                                        <td>

                                                            <div class="d-flex">
                                                                @can('edit-brochure')
                                                                    <a href="{{ route('downloadBrochure.edit', ['id' => $data->id]) }}"
                                                                        class="edit-btn"><img
                                                                            src="{{ asset('assets/images/edit.png') }}"
                                                                            alt="Back" class="edit-icon"></a>
                                                                @endcan
                                                                @can('delete-brochure')
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
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Brochure's Record
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
            url: baseUrl + '/admin/change-status/' + id,
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
        modalToastrButton.attr('href', "{{ url('admin/delete-brochure') }}/" + id);
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
