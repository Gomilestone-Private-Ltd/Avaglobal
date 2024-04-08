@extends('admin.layouts.app')
@section('content')
@section('title', 'Case Store')
{{-- TinyMce --}}
<style>
    label {
        color: black;
    }

    .required label::after {
        content: " *";
        color: red;
    }

    /* .error {
                color: red;

            } */

    h3 {
        margin-bottom: -9px;
    }

    .close-icon {
        position: absolute;
        right: 21px;
        top: 40px;
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
        margin-top: 5px;

    }
</style>

<section class="content">
    <h3 class="text-center " style="font-weight: bold;color:#e83e8c">
        Add Case Section
    </h3>
    <div class="container-fluid">
        <!-- Input -->
        <div class="row clearfix">
            <form enctype="multipart/form-data" id="caseCreate">
                @csrf
                <div class="container mt-4 card p-3 bg-white">

                    <div class="row">
                        <div class="form-group col-md-6 required">
                            <label for="">Case Name:</label>
                            <input type="text" name="case" id="" class="form-control" value=""
                                placeholder="Case Name">
                            <span class="text-danger">
                                @error('case')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>

                        <div class="form-group col-md-6 required">
                            <label for="">Case Title:</label>
                            <input type="text" name="casetitle" id="" class="form-control" value=""
                                placeholder="Case Title">


                            <span class="text-danger">
                                @error('casetitle')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                        <div class="form-group col-md-6 required">
                            <label for="">Posted By:</label>
                            <input type="text" name="postedby" id="" class="form-control" value=""
                                placeholder="Posted By">
                            <span class="text-danger">
                                @error('dob')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>



                        <div class="form-group col-md-6 required">
                            <label for="">Case Image:</label>
                            <div class="file-box">
                                <input type="file" name="caseimage" id="caseimageinput" class="form-control"
                                    value="" placeholder="Case Image" multiple />
                                <i class="fa fa-close close-icon" id="closeIcon"></i>
                            </div>

                            <span class="text-danger">
                                @error('caseimage')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div id="imagePreview">

                            </div>
                        </div>

                        <div class="form-group col-md-12 required">
                            <label for="">Description:</label>
                            <textarea id="tinymce" name="description" class="form-control" placeholder="Add Description Here"
                                OnClientClick="tinyMCE.triggerSave(false,true);"></textarea>
                            <span class="text-danger">
                                @error('description')
                                    {{ $message }}
                                @enderror

                            </span>
                        </div>


                        <div class="form-group col-md-12 ">
                            <button type="submit" id="submit"
                                class="btn btn-primary float-right from-prevent-multiple-submits">Submit</button>

                        </div>


                    </div>

                </div>
            </form>
        </div>
    </div>

</section>


<script>
    var selectedFile;
    // document.addEventListener("DOMContentLoaded", function() {
    //     // TinyMCE initialization code here
    //     tinymce.init({
    //         selector: 'textarea#tinymce',
    //         plugins: "preview",
    //         theme_advanced_buttons3_add: "preview",
    //         plugin_preview_width: "500",
    //         plugin_preview_height: "600",
    //         promotion: false,
    //         plugins: "code",
    //         // plugins: "image",
    //         branding: false,
    //         height: 400
    //     });
    // });
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
            $('#caseimageinput').val('');
            $('.close-icon').hide();
        });
        $('#caseimageinput').on('change', function(e) {
            var file = this.files[0];
            if (file) {
                selectedFile = file;

                var reader = new FileReader();
                $('.close-icon').show();
                reader.onload = function(e) {
                    $('#imagePreview').html('<img src="' + e.target.result + '" alt="Preview">');
                };
                reader.readAsDataURL(selectedFile);
            } else {
                $('#imagePreview').html('');
                $('.close-icon').hide();
            }
        });



    });

    $('#caseCreate').submit(function(e) {
        e.preventDefault();
        tinymce.triggerSave(false, true)
        if (selectedFile) {
            var formData = new FormData($("#caseCreate")[0]);
            console.log(formData);

            // var descriptionValue = $('textarea#tinymce').val();
            // console.log(descriptionValue);
            // formData.append('description', descriptionValue);

            $.ajax({
                url: "{{ url('/case/store') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                type: 'POST',
                cache: false,
                success: function(response) {
                    $("#submit").attr("disabled", true)
                    $('#caseCreate').trigger("reset");

                    $('#imagePreview').html('');
                    $('.close-icon').hide();
                    console.log(response.message);
                    toastr.options = {
                        'closeButton': true,
                        'progressBar': true
                    }
                    toastr.success(response.message);
                    setTimeout(function() {
                        window.location.href = "/admin/case-study";
                    }, 2000);
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
        } else {
            var formData = new FormData($("#caseCreate")[0]);
            console.log(formData);

            $.ajax({
                url: "{{ url('/case/store') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,


                success: function(response) {
                    $("#submit").attr("disabled", true)
                    $('#caseCreate').trigger("reset");

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

        }
    });
</script>

@endsection
