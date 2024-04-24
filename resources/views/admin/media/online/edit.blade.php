@extends('admin.layouts.app')
@section('content')
@section('title', 'Edit Media Coverage')
@section('header-title', 'Edit Media Coverage')
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
                        <a href="{{ route('online-coverage') }}" class="back-btn"><img
                                src="{{ asset('assets/images/back.png') }}" alt="Back" class="back-icon">
                                <h3>Back</h3></a>
                        
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="form-box">
                            <form action="{{ route('update-online-coverage', $records->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mt-4 card p-3">
                                    <div class="row">
                                        <div class="col-md-4 required">
                                            <label for="">Media Title</label>
                                            <input type="text" name="title" id="" class="form-control"
                                                placeholder="Enter Title" value="{{ $records->title }}">
                                            <span class="text-danger"> @error('title')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4 required">
                                            <label for="">Location</label>
                                            <input type="text" name="location" id="" class="form-control"
                                                placeholder="Enter location" value="{{ $records->location }}">
                                            <span class="text-danger"> @error('location')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Upload Image</label>
                                            <input type="file" name="onlineMediaImage" id=""
                                                class="form-control">
                                            <div class="mt-3">
                                                @if (isset($records->onlineDocsImage->path))
                                                    <img src="{{ asset($records->onlineDocsImage->path) }}"
                                                        alt="profile Pic" height="50" width="50">
                                                @endif
                                            </div>
                                            <span class="text-danger"> @error('onlineMediaImage')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-12 required">
                                            <label for="">Media URL</label>
                                            <input type="text" name="mediaUrl" id="" class="form-control"
                                                placeholder="Enter Url" value="{{ $records->media_url }}">
                                            <span class="text-danger"> @error('mediaUrl')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" id="submit"
                                            class="btn btn-primary btn-lg float-right">Update</button>
                                    </div>
                                </div>
                            </form>
                        
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
