@extends('admin.layouts.app')
@section('content')
@section('title', 'Case Study Records')
@section('header-title', 'Case Study Records')
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

    table.dataTable {
        border-collapse: collapse !important;
    }

    .main-table {
        background-color: #0050a4;
        color: #fff;

    }

    .main-table th {
        font-weight: 500;
    }
</style>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css">
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    {{-- <h2>Case Study Records</h2> --}}
                </div>
                @can('add-case-study')
                    <div class="col-md-6">
                        <a href="{{ url('admin/add-case') }}" class="btn btn-primary float-right"><span><img
                                    src="{{ asset('assets/images/plus.png') }}" alt="All"
                                    class="add-icon"></span>Add</a>
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
                                <table id="datatable" class="display">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th data-sortable="true">Case</th>
                                            <th data-sortable="false">Case Title</th>
                                            <th data-sortable="false">Case Image</th>
                                            <th data-sortable="false">Posted By</th>
                                            <th data-sortable="false">Description</th>
                                            @can('edit-status-casestudy')
                                                <th data-sortable="false">Status</th>
                                            @endcan
                                            @if (auth()->user()->can('edit-case-study') || auth()->user()->can('delete-case-study'))
                                                <th data-sortable="false">Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
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
    var table = '';
    $(document).ready(function() {
        table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            order: [
                [0, "desc"]
            ],
            ajax: "{{ url('admin/casestudy/data') }}",
            columns: [{
                    data: 'id'
                },
                {
                    data: 'case'
                },
                {
                    data: "case_title"
                },
                {
                    data: "caseImage",
                    render: function(data) {
                        console.log(data);

                        if (!data || data.length === 0) {
                            return 'No Image Found';
                        }

                        var imagesHtml = '';
                        data.forEach(function(imageUrl) {
                            imagesHtml += '<div><img src="' + imageUrl +
                                '" width="50px"/></div> ';
                        });

                        return imagesHtml;
                    }

                },
                {
                    data: "posted_by"
                },
                {
                    data: "eye_description",

                },
                {
                    data: "status_button",

                },
                {
                    data: "action_button",

                }
            ]

        });

    });
</script>
<script>
    function changeStatus(id) {
        toastr.options = {
            'progressBar': true,
            'closeButton': true,
            'timeOut': 5000
        }
        $.ajax({
            type: 'GET',
            url: baseUrl + '/admin/casestudy-status/' + id,
            data: id,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success == true) {
                    toastr.success(response.message);
                    // window.location.href = "";
                    table.draw();
                } else {
                    toastr.error(response.message);
                    // window.location.href = "";
                    table.draw();
                }
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
                    table.draw();
                    // window.location.href = response.route;
                },
                error: function(response) {
                    toastr.error(response.message);
                    // window.location.href = response.route;
                    table.draw();

                }
            });
        });
    }
</script>

@endsection
