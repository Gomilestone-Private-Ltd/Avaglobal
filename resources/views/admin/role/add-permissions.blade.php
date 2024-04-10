@extends('admin.layouts.app')
@section('content')
@section('title', 'update permissions')
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
        ROLE : {{ $role->name }}
    </h3>
    <div class="form-group col-md-12">
        <a href="{{ route('roles.index') }}" class="btn btn-primary float-left ">BACK</a>
    </div>
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">


            </div>
        </div>

        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <span class="text-danger">
                                @error('permissions')
                                    {{ $message }}
                                @enderror
                            </span>
                            <form action="{{ url('roles/' . $role->id . '/give-permissions') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="container mt-4 card p-3">
                                    <div class="row">
                                        <label for="">Permissions:
                                            <div class="col-md-12">
                                                @foreach ($permissions as $key => $permission)
                                                    <input type="checkbox" name="permissions[]" id="{{ $key }}"
                                                        value="{{ $permission }}"
                                                        {{ in_array($key, $roleHasPermissions) ? 'checked' : '' }} />
                                                    {{ $permission }}
                                                @endforeach
                                            </div>
                                        </label>
                                    </div>
                                    <button type="submit" id="submit"
                                        class="btn btn-primary btn-lg float-right from-prevent-multiple-submits">UPDATE</button>
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
