@extends('admin.layouts.app')
@section('content')
@section('title', 'Event PopUp')
@section('header-title', 'Event Popup Records')
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

    /* added */
    /* added */
</style>
<section class="content">

    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    {{-- <h2>Event Popup Records</h2> --}}
                </div>
                @can('add-popup')
                    <div class="col-md-6">
                        <a href="{{ url('admin/add-event-popup') }}" class="btn btn-primary float-right"><span><img
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
                                            <th>Popup Title</th>
                                            <th>Location</th>
                                            <th>Popup Image</th>
                                            <th>Brochure Image/Pdf</th>
                                            @can('edit-status-popup')
                                                <th>Status</th>
                                            @endcan
                                            @if (auth()->user()->can('edit-popup') || auth()->user()->can('delete-popup'))
                                                <th>Action</th>
                                            @endif
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @if (count($brochure) > 0)
                                            @foreach ($brochure as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->title }}</td>
                                                    <td>{{ $data->location }}</td>
                                                    @if (isset($data->avaDocsPopUpImage->path))
                                                        <td><img src="{{ asset(isset($data->avaDocsPopUpImage->path) ? $data->avaDocsPopUpImage->path : 'assets/img/1711805669avaglobal.png') }}"
                                                                style="width:70px;height:60px;border-radius:20%" /></td>
                                                    @endif

                                                    @if (isset($data->avaDocsBrochureFiles->path) && strtoupper($data->avaDocsBrochureFiles->filetype) == 'PDF')
                                                        <td>
                                                            <a href="{{ asset($data->avaDocsBrochureFiles->path) }}"
                                                                download>Download FILE</a>
                                                        </td>
                                                    @elseif (isset($data->avaDocsBrochureFiles->path) && strtoupper($data->avaDocsPopUpImage->filetype) != 'PDF')
                                                        <td><img src="{{ asset(isset($data->avaDocsBrochureFiles->path) ? $data->avaDocsBrochureFiles->path : 'assets/img/1711805669avaglobal.png') }}"
                                                                style="width:70px;height:60px;border-radius:20%" />
                                                        </td>
                                                    @else
                                                        <td>No FIle</td>
                                                    @endif
                                                    @can('edit-status-popup')
                                                        <td>
                                                            {!! $data->status == 1
                                                                ? '<button class="btn btn-success" onclick="changeStatus(' . $data->id . ')">Active</button>'
                                                                : '<button class="btn btn-danger" onclick="changeStatus(' . $data->id . ')">Inactive</button>' !!}
                                                        </td>
                                                        {{-- <td>
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="statusToggle{{ $data->id }}"
                                                                    {!! $data->status == 1 ? 'checked' : '' !!}
                                                                    onchange="changeStatus({{ $data->id }})">
                                                                <label class="custom-control-label"
                                                                    for="statusToggle{{ $data->id }}"></label>
                                                            </div>
                                                        </td> --}}
                                                    @endcan
                                                    @if (auth()->user()->can('edit-popup') || auth()->user()->can('delete-popup'))
                                                        <td>
                                                            <div class="d-flex">
                                                                @can('edit-popup')
                                                                    <a href="{{ route('edit-event-popup', ['id' => $data->id]) }}"
                                                                        class="edit-btn"><img
                                                                            src="{{ asset('assets/images/edit.png') }}"
                                                                            alt="Back" class="edit-icon"></a>
                                                                @endcan
                                                                @can('delete-popup')
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


                                {{-- endModal --}}
                                {{-- Delete Model --}}
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete PopUp Record</h5>
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
    toastr.options = {
        'progressBar': true,
        'closeButton': true,
        // 'timeOut': 5000
    }

    function changeStatus(id) {

        $.ajax({
            type: 'GET',
            url: baseUrl + '/admin/event-popup-status/' + id,
            data: id,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success == true) {
                    toastr.options = {
                        'progressBar': true,
                        'closeButton': true,
                        // 'timeOut': 5000
                    }
                    toastr.success(response.message);

                    setTimeout(function() {
                        window.location.href = response.route
                    }, 1000);

                } else {
                    toastr.options = {
                        'progressBar': true,
                        'closeButton': true,
                        // 'timeOut': 5000
                    }
                    toastr.error(response.message);
                    // setTimeout(function() {
                    //     window.location.href = response.route
                    // }, 1000);

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
        modalToastrButton.attr('href', "{{ url('admin/delete-event-popup') }}/" + id);
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
