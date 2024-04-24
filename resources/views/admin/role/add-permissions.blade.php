@extends('admin.layouts.app')
@section('content')
@section('title', 'update permissions')
@section('header-title', "Role : $role->name")
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
        /* width: 25%; */
        display: flex;
        align-items: center;
        margin-bottom: 10px
    }

    .pr-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    input[type=checkbox],
    input[type=radio] {
        box-sizing: border-box;
        padding: 0;
        width: 20px;
        height: 20px;
        margin-right: 10px;
    }

    .grouped-section {
        width: 23%;
        border: 1px solid #eaeaea;
        padding: 20px;
        margin-bottom: 30px;
    }

    .grouped-section .heading {
        font-size: 18px;
        text-transform: capitalize;
        margin-bottom: 10px;
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
                    <div class="search-box">
                    <input id="inputTxt" type="text" placeholder="Search ..." class="admin-search">
                    <img src="{{ asset('assets/images/search.png') }}" alt="User" class="search-icon">
                </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="form-box">
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

                                        @foreach ($groupedPermissionRecords as $groupName => $permissions)
                                            <div class="grouped-section">
                                                <h3 class="heading">{{ $groupName }}</h3>
                                                @foreach ($permissions as $key => $permission)
                                                    <diV class="pr-box">
                                                        <input type="checkbox" name="permissions[]"
                                                            id="{{ $permission->id }}" value="{{ $permission->name }}"
                                                            {{ in_array($permission->id, $roleHasPermissions) ? 'checked' : '' }} />
                                                        {{ $permission->name }}
                                                    </diV>
                                                @endforeach
                                            </div>
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
</section>
@endsection
