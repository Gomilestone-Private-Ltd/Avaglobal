@extends('admin.layouts.app')
@section('content')
@section('title', 'Create Role')
@section('header-title', 'Create Role')
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
                                src="{{ asset('assets/images/back.png') }}" alt="Back" class="back-icon"><h3>Back</h3></a>
                        
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="form-box">
                            <form action="{{ url('/admin/roles') }}" method="POST">
                                @csrf
                                <div class="container card p-3 bg-white">
                                    <div class="row">
                                        <div class="form-group col-md-12 required">
                                            <label for="">Role Name:</label>
                                            <input type="text" name="name" id="" class="form-control"
                                                placeholder="Role Name">
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
</section>
@endsection
