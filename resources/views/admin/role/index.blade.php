@extends('admin.layouts.app')
@section('content')
@section('title', 'view permissions')
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
                    <h2>ROLES</h2>
                </div>
                @can('add-roles')
                    <div class="col-md-6">
                        <a href="{{ route('roles.create') }}" class="btn btn-primary float-right"><span><img
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
                                            <th>NAME</th>
                                            <th>PERMISSIONS</th>
                                            @if (auth()->user()->can('edit-role-permissions') || auth()->user()->can('delete-roles'))
                                                <th>ACTION</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($roles) > 0)
                                            @foreach ($roles as $role)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $role->name }}</td>
                                                    <td>
                                                        @if (!empty($role->getPermissionNames()))
                                                            @foreach ($role->getPermissionNames() as $permissions)
                                                                <span
                                                                    class="badge badge-primary">{{ $permissions }}</span>
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                    @if (auth()->user()->can('edit-role-permissions') || auth()->user()->can('delete-roles'))
                                                        <td>
                                                            <div class="d-flex">
                                                                @can('edit-role-permissions')
                                                                    <a href="{{ url('/admin/roles/' . $role->id . '/give-permissions') }}"
                                                                        class="btn btn-warning mr-3">Add / Edit Role
                                                                        Permission</a>
                                                                @endcan
                                                                {{-- <a href="{{ url('roles/' . $role->id . '/edit') }}"
                                                                class="btn btn-primary mr-3">Edit</a> --}}
                                                                @can('delete-roles')
                                                                    <button id="deleteButton"
                                                                        onclick="deleteModal('{{ $role->id }}')"
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
    // Delete function 
    function deleteModal(id) {
        var modalToastrButton = $('#modalToastr');
        $('#deleteModal').modal('show');
        var url = baseUrl + "/admin/roles/" + id + "/delete";
        $('#modalToastr').on('click', function(event) {
            event.preventDefault();
            $.ajax({
                type: 'GET',
                url: url,
                success: function(response) {
                    if (response.success == true) {
                        toastr.options = {
                            'progressBar': true,
                            'closeButton': true,
                            'timeOut': 5000
                        }
                        toastr.success(response.message);
                        window.location.href = response.route;
                    } else {
                        toastr.options = {
                            'progressBar': true,
                            'closeButton': true,
                            'timeOut': 5000
                        }
                        toastr.error(response.message);
                    }

                },
                error: function(response) {
                    console.log(response.message);
                    toastr.error(response.message);
                }
            });
        });
    }
</script>

@endsection
