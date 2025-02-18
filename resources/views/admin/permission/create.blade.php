@php
    // dd($permissions);
@endphp
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
        CREATE PERMISSION
    </h3>

    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="form-group col-md-12">
                    <a href="{{ route('permissions.index') }}" class="btn btn-primary float-left ">BACK</a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="body">
                            <form action="{{ url('/admin/permissions') }}" method="POST">
                                @csrf
                                <div class="container mt-4 card p-3 bg-white">
                                    <div class="row">
                                        <div class="form-group col-md-12 required">
                                            <label for="">Permission Name:</label>
                                            <input type="text" name="name" id="" class="form-control"
                                                placeholder="Permission Name">
                                            <span class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            <button type="submit" id="submit"
                                                class="btn btn-primary btn-lg float-right from-prevent-multiple-submits">SAVE</button>
                                        </div>
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
