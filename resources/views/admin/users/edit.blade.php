@extends('admin.layouts.app')
@section('content')
@section('title', 'create permissions')
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
        EDIT USERS
    </h3>

    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="form-group col-md-12">
                    <a href="{{ route('users.index') }}" class="btn btn-primary float-left ">BACK</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <form action="{{ url('users/' . $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mt-4 card p-3">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="">User Name</label>
                                            <input type="text" name="name" id="" class="form-control"
                                                placeholder="Enter Name" value="{{ $user->name }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">User Email</label>
                                            <input type="email" name="email" id="" class="form-control"
                                                placeholder="Enter Email" value="{{ $user->email }}">
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
                                        </div>

                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" id="submit"
                                            class="btn btn-primary btn-lg float-right">UPDATE USER</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
{{-- <span class="text-danger">
    @error('title')
        {{ $message }}
    @enderror
</span> --}}
