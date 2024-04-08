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
            <form action="" enctype="multipart/form-data" id="caseEdit" method="POST">
                @csrf
                <div class="container mt-4 card p-3 bg-white">

                    <div class="row">
                        <div class="form-group col-md-6 required">
                            <label for="">Case:</label>
                            <input type="text" name="case" id="" class="form-control"
                                value="{{ $data->case }}">
                            <span class="text-danger">
                                @error('case')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>

                        <div class="form-group col-md-6 required">
                            <label for="">Case Title:</label>
                            <input type="text" name="casetitle" id="" class="form-control"
                                value="{{ $data->case_title }}">


                            <span class="text-danger">
                                @error('casetitle')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                        <div class="form-group col-md-6 required">
                            <label for="">Posted By:</label>
                            <input type="text" name="postedby" id="" class="form-control"
                                value="{{ $data->posted_by }}">
                            <span class="text-danger">
                                @error('dob')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>



                        <div class="form-group col-md-6">
                            <label for="">Case Image:</label>

                            <div class="file-box">
                                <input type="file" name="caseimage" id="caseimageinput" class="form-control"
                                    value="" placeholder="Case Image" />
                                <i class="fa fa-close close-icon" id="closeIcon"></i>
                            </div>

                            <span class="text-danger">
                                @error('caseimage')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div id="imagePreview">
                                <img src="{{ asset($data->avaDocs->path) }}" height="50" width="50"
                                    alt="">
                            </div>
                        </div>
                        <div class="form-group col-md-12 required">
                            <label for="">Description:</label>
                            <textarea id="tinymce" name="description" class="form-control" placeholder="Description"
                                OnClientClick="tinyMCE.triggerSave(false,true);">{!! $data->description !!}</textarea>
                            <span class="text-danger">
                                @error('description')
                                    {{ $message }}
                                @enderror

                            </span>
                        </div>
                        <input type="hidden" name="id" value="{{ $data->id }}">


                        <div class="form-group col-md-12 ">
                            <button type="submit" class="btn btn-primary ">Submit</button>

                        </div>


                    </div>

                </div>
            </form>
        </div>
    </div>

</section>


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
            plugins: "code",
            branding: false,
            height: 400
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
    $("#caseEdit").validate({
        rules: {
            case: {
                required: true
            },
            casetitle: {
                required: true
            },
            postedby: {
                required: true
            },
            description: {
                required: true
            }
        },
        messages: {
            case: {
                required: "Please fill the case name"
            },
            casetitle: {
                required: "Please fill the case title"
            },
            postedby: {
                required: "Fill the company name",

            },
            description: {
                required: "Please add Case description"
            }
        },
    });
    // submitHandler: function(form, e) {
    $('#caseEdit').submit(function(e) {
        e.preventDefault();
        tinymce.triggerSave(false, true)
        if (selectedFile) {
            var formData = new FormData($("#caseEdit")[0]);
            console.log(formData);

            // var descriptionValue = $('textarea#tinymce').val();
            // console.log(descriptionValue);
            // formData.append('description', descriptionValue);

            $.ajax({
                url: "{{ url('/case/update') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,


                success: function(response) {
                    $('#caseEdit').trigger("reset");

                    $('#imagePreview').html('');
                    $('.close-icon').hide();
                    console.log(response.message);
                    toastr.options = {
                        'closeButton': true,
                        'progressBar': true
                    }
                    toastr.success(response.message);
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
                        });
                    }
                }
            });
        } else {
            var formData = new FormData($("#caseEdit")[0]);
            console.log(formData);

            $.ajax({
                url: "{{ url('/case/update') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,


                success: function(response) {
                    $('#caseEdit').trigger("reset");

                    $('#imagePreview').html('');
                    $('.close-icon').hide();
                    console.log(response.message);
                    toastr.options = {
                        'closeButton': true,
                        'progressBar': true
                    }
                    toastr.success(response.message);
                    // setTimeout(function() {
                    //     window.location.href = "";
                    // }, 3000);
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
                        });
                    }
                }

            });
        }
    });
</script>
{{-- Toastr script --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- Jquery Core Js -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{ asset('assets/plugins/momentjs/moment.js') }}"></script> <!-- Moment Plugin Js -->
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
</script>


<script src="{{ asset('assets/js/pages/forms/basic-form-elements.js') }}"></script>
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
@endsection
