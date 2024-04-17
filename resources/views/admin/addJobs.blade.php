@extends('admin.layouts.app')
@section('content')
@section('title', 'Jobs')
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
</style>
<section class="content">
    <div class="row">

    </div>
    <div class="container-fluid">
        <div class="col-lg-7 col-md-6 col-sm-12">
            <h2>Add Job Openings</h2>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="form-box">
                <form action="" id="postjob">
                    @csrf
                    <div class="container mt-4 card p-3 bg-white">
                        <div class="row">

                            <div class="form-group col-md-3 required">
                                <label for="">Department:</label>
                                <input type="text" name="department" class="form-control"
                                    value="{{ $department = isset($jobData->department) ? $jobData->department : '' }}"
                                    placeholder="Department">
                                <span class="text-danger">
                                    @error('department')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group col-md-3 required">
                                <label for="">Job Role:</label>
                                <input type="text" name="jobRole" class="form-control"
                                    value="{{ $jobRole = isset($jobData->job_role) ? $jobData->job_role : '' }}"
                                    placeholder="Job Role">
                                <span class="text-danger">
                                    @error('jobRole')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group col-md-3 required">
                                <label for="">Location:</label>
                                <input type="text" name="location" class="form-control"
                                    value="{{ $location = isset($jobData->location) ? $jobData->location : '' }}"
                                    placeholder="Location">
                                <span class="text-danger">

                                </span>
                            </div>

                            <div class="form-group col-md-3 required">
                                <label for="">Time Period:</label>
                                <select name="timePeriod" class="form-control">
                                    <option value="">-- Please select --</option>
                                    @if (isset($jobData))
                                        <option value="Full Time"
                                            {{ $jobData->time_period == 'Full Time' ? 'selected' : '' }}>Full
                                            Time
                                        </option>
                                        <option value="Part Time"
                                            {{ $jobData->time_period == 'Part Time' ? 'selected' : '' }}>Part
                                            Time
                                        </option>
                                    @else
                                        <option value="Full Time">Full Time</option>
                                        <option value="Part Time">Part Time</option>
                                    @endif

                                </select>
                                <span class="text-danger">

                                </span>
                            </div>
                            <input type="hidden" name="id"
                                value="{{ $jobId = isset($jobData->id) ? $jobData->id : '' }}">

                            <div class="form-group col-md-3 required">
                                <label for="">Job Status:</label>
                                <select name="jobStatus" class="form-control">
                                    <option value="">-- Please select --</option>
                                    @if (isset($jobData))
                                        <option value="Active" {{ $jobData->is_active == 'Active' ? 'selected' : '' }}>
                                            Active
                                        </option>
                                        <option value="Inactive"
                                            {{ $jobData->is_active == 'Inactive' ? 'selected' : '' }}>
                                            Inactive
                                        </option>
                                    @else
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    @endif

                                </select>
                                <span class="text-danger">

                                </span>
                            </div>
                            <div class="form-group col-md-3 required">
                                <label for="">Experience:</label>
                                <input type="text" name="experience" class="form-control"
                                    value="{{ $experience = isset($jobData->experience) ? $jobData->experience : '' }}"
                                    placeholder="Experience">
                                <span class="text-danger">

                                </span>
                            </div>
                            <div class="form-group col-md-12 required">
                                <label for="">Description:</label>
                                <textarea id="tinymce" name="description" class="form-control" placeholder="Description"
                                    OnClientClick="tinyMCE.triggerSave(false,true);">{!! $description = isset($jobData->description) ? $jobData->description : '' !!}</textarea>
                                <span class="text-danger">
                                    @error('description')
                                        {{ $message }}
                                    @enderror

                                </span>
                            </div>

                            <div class="form-group col-md-12">
                                <input type="submit" id="submit" class="btn btn-primary float-right "
                                    value="Submit">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // TinyMCE initialization code here
        tinymce.init({
            selector: 'textarea#tinymce',
            plugins: "preview",
            theme_advanced_buttons3_add: "preview",
            plugin_preview_width: "500",
            plugin_preview_height: "600",
            promotion: false,
            plugins: ["image", "code"],
            branding: false,
            height: 400,

            toolbar: 'undo redo | link image | code ',
            // enable title field in the Image dialog
            image_title: true,
            // enable automatic uploads of images represented by blob or data URIs
            automatic_uploads: true,
            // add custom filepicker only to Image dialog
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                input.onchange = function() {
                    var file = this.files[0];
                    var reader = new FileReader();

                    reader.onload = function() {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        // call the callback and populate the Title field with the file name
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            }

        });
    });

    $(document).ready(function() {

        $('#postjob').submit(function(e) {
            e.preventDefault();

            // Serialize the form data
            const formData = new FormData($(this)[0]);

            // Send an AJAX request
            $.ajax({
                type: 'POST',
                url: "{{ route('post-job-openings') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $("#submit").attr("disabled", true)
                    console.log(response);
                    toastr.options = {
                        'closeButton': true,
                        'progressBar': true
                    }
                    toastr.success(response.message);
                    setTimeout(function() {
                        window.location.href = "/admin/job-opening-details";
                    }, 1000);
                },
                error: function(response) {
                    if (response.responseJSON && response.responseJSON.errors) {
                        $('.text-danger').html('');
                        $.each(response.responseJSON.errors, function(field, errorMessage) {
                            var errorHtml = '<span class="text-danger">' +
                                errorMessage + '</span>';
                            $('[name="' + field + '"]').closest(
                                    '.form-group')
                                .find('.text-danger').html(errorHtml);
                            $('[name="' + field + '"]').on('input',
                                function() {
                                    $('.text-danger').html('');
                                });
                        });
                    }


                }
            });
        });
    });
</script>

@endsection
