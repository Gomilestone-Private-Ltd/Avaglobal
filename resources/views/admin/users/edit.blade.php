@extends('admin.layouts.app')
@section('content')
@section('title', 'Edit Users')
@section('header-title', 'Edit Users')
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
                        <a href="{{ route('roles.index') }}" class="back-btn"><img
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
                    <form action="{{ url('/admin/users/' . $user->id) }}" method="POST" id="createUser">
                        @csrf
                        @method('PUT')
                        <div class="card p-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">User Name</label>
                                    <input type="text" name="name" id="" class="form-control"
                                        placeholder="Enter Name" value="{{ $user->name }}">
                                    <span class="text-danger"> @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <label for="">User Email</label>
                                    <input type="email" name="email" id="" class="form-control"
                                        placeholder="Enter Email" value="{{ $user->email }}">
                                    <span class="text-danger"> @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Password</label>
                                    <input type="password" name="password" id="" class="form-control"
                                        placeholder="Enter Password" value="">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Roles</label>
                                    <select name="roles[]" id="" class="form-control" multiple>
                                        <option value="">Select Role</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role }}"
                                                {{ in_array($role, $userRoles) ? 'Selected' : '' }}>
                                                {{ $role }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger"> @error('roles')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                            </div>
                            @can('update-users')
                                {{-- <div class="mt-3">
                                    <button type="submit" id="submit" class="btn btn-primary btn-lg float-right">UPDATE
                                        USER</button>
                                </div> --}}
                                <div class="form-group col-md-12 mt-3">
                                    <button type="submit" id="submit"
                                        class="btn btn-primary float-right from-prevent-multiple-submits">UPDATE
                                        USER</button>
                                </div>
                            @endcan
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
