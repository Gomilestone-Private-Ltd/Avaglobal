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
    <h3 class="text-center " style="font-weight: bold;color:#36242c">
        ADD PRINT MEDIA
    </h3>

    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="form-group col-md-12">
                    <a href="{{ route('print-coverage') }}" class="btn btn-primary float-left ">BACK</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <form action="{{ route('save-print-coverage') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mt-4 card p-3">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="">Title</label>
                                            <input type="text" name="title" id="" class="form-control"
                                                placeholder="Enter Title" value="{{ old('title') }}">
                                            <span class="text-danger"> @error('title')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Location</label>
                                            <input type="text" name="location" id="" class="form-control"
                                                placeholder="Enter location" value="{{ old('location') }}">
                                            <span class="text-danger"> @error('location')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Upload Image</label>
                                            <input type="file" name="printMediaImage" id=""
                                                class="form-control">
                                            <span class="text-danger"> @error('printMediaImage')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Upload PDF</label>
                                            <input type="file" name="printMediaFile" id=""
                                                class="form-control">
                                            <span class="text-danger"> @error('printMediaFile')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" id="submit"
                                            class="btn btn-primary btn-lg float-right">Submit</button>
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
