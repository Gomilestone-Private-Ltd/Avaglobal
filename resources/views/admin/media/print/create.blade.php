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
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="back-btn-box">
                        <a href="{{ route('print-coverage') }}" class="back-btn"><img src="{{ asset('assets/images/back.png') }}"
                        alt="Back" class="back-icon"></a><h2>Add Print Media</h2>
                    </div>
                </div>
                <div class="col-md-6">
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
                                <div class="card p-3">
                                    <div class="row">
                                        <div class="form-group col-md-4 required">
                                            <label for="">Title</label>
                                            <input type="text" name="title" id="" class="form-control"
                                                placeholder="Enter Title" value="{{ old('title') }}">
                                            <span class="text-danger"> @error('title')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4 required">
                                            <label for="">Location</label>
                                            <input type="text" name="location" id="" class="form-control"
                                                placeholder="Enter location" value="{{ old('location') }}">
                                            <span class="text-danger"> @error('location')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-4 required">
                                            <label for="">Upload Image</label>
                                            <input type="file" name="printMediaImage" id=""
                                                class="form-control">
                                            <span class="text-danger"> @error('printMediaImage')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group col-md-12 required">
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
<script>
    function startToastr() {
        toastr.options = {
            'closeButton': true,
            'progressBar': true,
        }
        if (session('success')) {
            toastr.success("{{ session('success') }}");
        } else {
            toastr.error("{{ session('error') }}");
        }
    }
    if (session('error') || session('success')) {
        startToastr()
    }
</script>
@endsection
