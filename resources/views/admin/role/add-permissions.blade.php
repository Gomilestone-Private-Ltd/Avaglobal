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

    label {
        display: block;
        margin-bottom: .5rem;
        font-size: 20px;
        margin: 0 !important;
        font-weight: 600;
        margin-bottom: 10px;
        padding-bottom: 15px;
    }

    .pr-box {
        width: 25%;
        display: flex;
        align-items: center;
        margin-bottom: 10px
    }

    .pr-container {
        display: flex;
        flex-wrap: wrap;
    }

    input[type=checkbox], input[type=radio] {
        box-sizing: border-box;
        padding: 0;
        width: 20px;
        height: 20px;
        margin-right: 10px;
    }
</style>
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="back-btn-box">
                        <a href="{{ route('roles.index') }}" class="back-btn"><img src="{{ asset('assets/images/back.png') }}"
                        alt="Back" class="back-icon"></a><h2>Role : {{ $role->name }}</h2>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
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
                            <form action="{{ url('/admin/roles/' . $role->id . '/give-permissions') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card p-3">
                                        <label for="">Permissions:</label>
                                        <div class="pr-container">
                                                @foreach ($permissions as $key => $permission)
                                                <diV class="pr-box">
                                                    <input type="checkbox" name="permissions[]" id="{{ $key }}"
                                                        value="{{ $permission }}"
                                                        {{ in_array($key, $roleHasPermissions) ? 'checked' : '' }} />
                                                    {{ $permission }}
                                                </diV>
                                                @endforeach
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
