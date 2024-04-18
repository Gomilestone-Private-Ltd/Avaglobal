@extends('admin.layouts.app')
@section('content')
@section('title', 'Edit Case Study')
<style>
    label {
        color: black;
    }

    .required label::after {
        content: " *";
        color: red;
    }

    h3 {
        margin-bottom: -9px;
    }

    .close-icon {
        position: absolute;
        right: 21px;
        top: 61px;
        color: red;
        font-size: 18px;
        display: none;

        cursor: pointer;
    }

    .form-group label.error {
        color: #ee2558;
        font-size: 16px;
    }

    #imagePreview img {
        width: 28%;
        height: 90px;
        margin-top: 0px;

    }

    #imagePreview {
        display: flex;
        flex-wrap: wrap;

    }

    .main-image-select-box {
        margin-top: 20px;
        display: flex;
        flex-wrap: wrap;
    }

    .select-image-box {
        position: relative;
        margin-bottom: 10px;
    }

    .crossIcon {
        font-size: 20px;
        position: absolute;
        color: red;
        top: -10px;
        font-weight: 100;
        right: -6px;
        background-color: #fff;
        height: 25px;
        width: 25px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0px 0px 5px #ff1212;
        cursor: pointer;
    }
</style>

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h2>Edit Case Section</h2>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    <div class="container-fluid">
        <!-- Input -->
        <div class="row clearfix">
            <div class="form-box">
                <form action="" enctype="multipart/form-data" id="caseEdit" method="POST">
                    @csrf
                    <div class="container card p-3 bg-white">

                        <div class="row">
                            <div class="form-group col-md-6 required">
                                <label for="">Case Name:</label>
                                <input type="text" name="case" id="case" class="form-control"
                                    value="{{ $data->case }}" placeholder="Case Name">
                                <span class="text-danger">
                                    @error('case')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </div>

                            <div class="form-group col-md-6 required">
                                <label for="">Case Title:</label>
                                <input type="text" name="casetitle" id="casetitle" class="form-control"
                                    value="{{ $data->case_title }}" placeholder="Case Title">


                                <span class="text-danger">
                                    @error('casetitle')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>


                            <div class="form-group col-md-6 required">
                                <label for="">Posted By:</label>
                                <input type="text" name="postedby" id="postedby" class="form-control"
                                    value="{{ $data->posted_by }}" placeholder="Posted By">
                                <span class="text-danger">
                                    @error('dob')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>



                            <div class="form-group col-md-6">
                                <label for="">Case Image: (max 5 files allowed with extension jpg,jpeg,png)<br>
                                    (select images at once)
                                </label>

                                <div class="file-box">
                                    <input type="file" name="caseimage[]" accept="image/png, image/jpg, image/jpeg"
                                        id="caseimage" class="form-control" value="" placeholder="Case Image"
                                        multiple />
                                    <i class="fa fa-close close-icon" id="closeIcon"></i>
                                </div>
                                <div class="main-image-select-box">
                                    @foreach ($data->avaDocs as $images)
                                        <div class="ml-3 select-image-box">
                                            <img src="{{ asset($images->path) }}"
                                                style="width:70px;height:60px;border-radius:20%" />
                                            <i class="fa fa-close crossIcon"
                                                onclick="deleteImage('{{ $images->filename }}')"></i>
                                        </div>
                                    @endforeach
                                    <div id="imagePreview">

                                        {{-- <img src="{{ asset($data->avaDocs->path) }}" height="50" width="50"
                                            alt=""> --}}
                                    </div>
                                </div>

                                <span class="text-danger">
                                    @error('caseimage')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-md-12 required">
                                <label for="">Description:</label>
                                <textarea id="tinymce" name="tinymce" class="form-control" placeholder="Add Description Here"
                                    OnClientClick="tinyMCE.triggerSave(false,true);">{!! $data->description !!}</textarea>
                                <span class="text-danger">
                                    @error('description')
                                        {{ $message }}
                                    @enderror

                                </span>
                            </div>
                            <input type="hidden" name="id" value="{{ $data->id }}">


                            <div class="form-group col-md-12 ">
                                <button type="submit" id="submit"
                                    class="btn btn-primary float-right from-prevent-multiple-submits">Submit</button>

                            </div>


                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

<script>
    function deleteImage(name) {

        var filename = name;
        $.ajax({
            type: 'GET',
            url: baseUrl + '/admin/case-study/delete-image/' + filename,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response == true) {
                    window.location.href = "";
                } else {
                    toastr.error("file not found");
                }

            },
            error: function(response) {
                console.log("something went wrong");
            }
        });
    }
</script>

<script>
    var selectedFile;
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

        $('#closeIcon').on('click', function() {
            $('#imagePreview').empty();
            $('#caseimage').val('');
            $('.close-icon').hide();
        });
        $('#caseimage').on('change', function(e) {
            var files = this.files; // Get the array of files
            if (files.length > 0) {
                $('.close-icon').show();
                // $('#imagePreview').html(''); // Clear previous previews
                // Loop through each file
                for (var i = 0; i < files.length; i++) {
                    var reader = new FileReader();
                    reader.onload = (function(file) {
                        return function(e) {

                            $('#imagePreview').append('<div class="ml-3"><img src="' + e
                                .target.result +
                                '" alt="Preview" style="width:70px;height:60px;border-radius:20%"></div>'
                            );
                        };
                    })(files[i]);
                    reader.readAsDataURL(files[i]); // Read the file as a data URL
                }
            } else {
                $('#imagePreview').html(''); // Clear preview if no file selected
                $('.close-icon').hide();
            }
        });
    });

    $('#caseEdit').submit(function(e) {
        e.preventDefault();
        tinymce.triggerSave(false, true)
        if (selectedFile) {
            var formData = new FormData($("#caseEdit")[0]);
            console.log(formData);

            $.ajax({
                url: "{{ url('admin/case/update') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,


                success: function(response) {
                    $("#submit").attr("disabled", true)
                    $('#caseEdit').trigger("reset");

                    $('#imagePreview').html('');
                    $('.close-icon').hide();
                    console.log(response.message);
                    toastr.options = {
                        'closeButton': true,
                        'progressBar': true
                    }
                    toastr.success(response.message);
                    window.location.href = "/admin/case-study";
                },
                error: function(response) {
                    if (response.responseJSON && response.responseJSON.errors) {
                        $('.text-danger').html('');
                        $.each(response.responseJSON.errors, function(field, errorMessage) {


                            var errorHtml = '<span class="text-danger">' +
                                errorMessage + '</span>';
                            // $('[name="' + field + '"]').closest(
                            //         '.form-group')
                            //     .find('.text-danger').html(errorHtml);
                            // $('[name="' + field + '"]').on('input',
                            //     function() {
                            //         $('.text-danger').html('');
                            //     });
                            $('#' + field).closest(
                                    '.form-group')
                                .find('.text-danger').html(errorHtml);


                            $('#' + field).on('input',
                                function() {
                                    $('.text-danger').html('');
                                });
                        });
                    }
                }
            });
        } else {
            // $('#caseEdit').submit(function(e) {
            // e.preventDefault();
            var formData = new FormData($("#caseEdit")[0]);
            console.log(formData);

            $.ajax({
                url: "{{ url('admin/case/update') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,


                success: function(response) {
                    $("#submit").attr("disabled", true)
                    $('#caseEdit').trigger("reset");

                    $('#imagePreview').html('');
                    $('.close-icon').hide();
                    console.log(response.message);
                    toastr.options = {
                        'closeButton': true,
                        'progressBar': true
                    }
                    toastr.success(response.message);

                    window.location.href = "/admin/case-study";
                },
                error: function(response) {
                    if (response.responseJSON && response.responseJSON.errors) {
                        $('.text-danger').html('');

                        $.each(response.responseJSON.errors, function(field,
                            errorMessage) {


                            var errorHtml = '<span class="text-danger">' +
                                errorMessage + '</span>';
                            // $('[name="' + field + '"]').closest(
                            //         '.form-group')
                            //     .find('.text-danger').html(errorHtml);
                            // $('[name="' + field + '"]').on('input',
                            //     function() {
                            //         $('.text-danger').html('');
                            //     });
                            $('#' + field).closest(
                                    '.form-group')
                                .find('.text-danger').html(errorHtml);


                            $('#' + field).on('input',
                                function() {
                                    $('.text-danger').html('');
                                });
                        });
                    }
                }

            });
            // });
        }


    });
</script>

@endsection
