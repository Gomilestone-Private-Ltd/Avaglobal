@extends('admin.layouts.app')
@section('content')
@section('title', 'User Lists')
@section('header-title', 'User Lists')
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
                    {{-- <h2>User Lists</h2> --}}
                </div>
                @can('add-users')
                    <div class="col-md-6">
                        <a href="{{ route('users.create') }}" class="btn btn-primary float-right"><span><img
                                    src="{{ asset('assets/images/plus.png') }}" alt="All" class="add-icon"></span>Add
                            Users</a>
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
                                    <thead class="main-table">
                                        <tr>
                                            <th>S.No</th>
                                            <th>NAME</th>
                                            <th>EMAIL</th>
                                            <th>ROLES</th>
                                            @if (auth()->user()->can('edit-users') || auth()->user()->can('delete-users'))
                                                <th>ACTION</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($users) > 0)
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        @if (!empty($user->getRoleNames()))
                                                            @foreach ($user->getRoleNames() as $rolesName)
                                                                <span
                                                                    class="badge badge-primary">{{ $rolesName }}</span>
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                    @if (auth()->user()->can('edit-users') || auth()->user()->can('delete-users'))
                                                        <td>
                                                            <div class="d-flex">
                                                                @can('edit-users')
                                                                    <a href="{{ url('/admin/users/' . $user->id . '/edit') }}"
                                                                        class="edit-btn"><img
                                                                            src="{{ asset('assets/images/edit.png') }}"
                                                                            alt="Back" class="edit-icon"></a>
                                                                @endcan
                                                                @can('delete-users')
                                                                    <button id="deleteButton"
                                                                        onclick="deleteModal('{{ $user->id }}')"
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
                                                <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
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
        var url = baseUrl + "/admin/users/" + id + "/delete";
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
