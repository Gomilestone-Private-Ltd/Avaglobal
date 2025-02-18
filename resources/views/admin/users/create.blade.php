@extends('admin.layouts.app')
@section('content')
@section('title', 'Add User')
@section('header-title', 'Add User')
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
                    <div class="back-btn-box">
                        <a href="{{ route('users.index') }}" class="back-btn"><img
                                src="{{ asset('assets/images/back.png') }}" alt="Back" class="back-icon">
                            <h3>Back</h3>
                        </a>

                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="form-box">
                    <form action="{{ url('/admin/users') }}" method="POST" id="createUser">
                        @csrf
                        <div class="card p-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">User Name</label>
                                    <input type="text" name="name" id="" class="form-control"
                                        placeholder="Enter Name">
                                    <span class="text-danger"> @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <label for="">User Email</label>
                                    <input type="email" name="email" id="" class="form-control"
                                        placeholder="Enter Email">
                                    <span class="text-danger"> @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Password</label>
                                    <input type="password" name="password" id="" class="form-control"
                                        placeholder="Enter Password">
                                    <span class="text-danger"> @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Roles</label>
                                    <select name="roles[]" id="" class="form-control" multiple>
                                        <option value="">Select Role</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger"> @error('roles')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                            </div>
                            <div class="form-group col-md-12 mt-3">
                                <button type="submit" id="submit"
                                    class="btn btn-primary float-right from-prevent-multiple-submits">Create
                                    User</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('#createUser').on('submit', function(e) {
        $(".from-prevent-multiple-submits").prepend('<i class="fa fa-spinner fa-spin"></i>');
        $(".from-prevent-multiple-submits").attr("disabled", 'disabled');
    })
</script>
@endsection
