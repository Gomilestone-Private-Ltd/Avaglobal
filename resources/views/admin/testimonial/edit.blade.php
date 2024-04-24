@extends('admin.layouts.app')
@section('content')
@section('title', 'Edit Testimonial')
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
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="back-btn-box">
                        <a href="{{ route('testimonial.index') }}" class="back-btn"><img
                                src="{{ asset('assets/images/back.png') }}" alt="Back" class="back-icon"></a>
                        <h2>Edit Testimonial</h2>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Input -->
            <div class="row clearfix">
                <div class="form-box">
                    <form enctype="multipart/form-data" id="testimonialEdit">
                        @csrf
                        <div class="container card p-3 bg-white">

                            <div class="row">

                                <div class="form-group col-md-6 required">
                                    <label for="">Name:</label>
                                    <input type="text" name="monialname" id="" class="form-control"
                                        value="{{ $testimonialRecords->name }}" placeholder="Testimonial Name">


                                    <span class="text-danger">
                                        @error('monialname')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group col-md-6 required">
                                    <label for="">Text:</label>
                                    <textarea name="monialtext" id="" class="form-control" placeholder="Add Text Here">{{ $testimonialRecords->text }}</textarea>


                                    <span class="text-danger">
                                        @error('monialtext')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <input type="hidden" name="monialId" value="{{ $testimonialRecords->id }}">
                                <div class="form-group col-md-6">
                                    <label for="">Testimonial Image:</label>
                                    <div class="file-box">
                                        <input type="file" name="monialimage"
                                            accept="image/png, image/jpg, image/jpeg" id="testimonialimage"
                                            class="form-control" value="" />
                                        <i class="fa fa-close close-icon" id="closeIcon"></i>
                                    </div>

                                    <span class="text-danger">
                                        @error('monialimage')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <div id="imagePreview">
                                        @if (isset($testimonialRecords->testimonialImage))
                                            <img src="{{ asset($testimonialRecords->testimonialImage->path) }}"
                                                style="width:70px;height:60px;border-radius:20%" />
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group col-md-12 ">
                                    <button type="submit" id="submit"
                                        class="btn btn-primary float-right from-prevent-multiple-submits">Update</button>

                                </div>


                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>


<script>
    var selectedFile;
    $(document).ready(function() {
        $('#closeIcon').on('click', function() {
            $('#imagePreview').empty();
            $('#testimonialimage').val('');
            $('.close-icon').hide();
        });
        $('#testimonialimage').on('change', function(e) {
            var file = this.files[0];
            if (file) {
                selectedFile = file;

                var reader = new FileReader();
                $('.close-icon').show();
                reader.onload = function(e) {
                    $('#imagePreview').html('<img src="' + e.target.result +
                        '" alt="Preview" style="width:70px;height:60px;border-radius:20%"">');
                };
                reader.readAsDataURL(selectedFile);
            } else {
                $('#imagePreview').html('');
                $('.close-icon').hide();
            }
        });
    });

    $('#testimonialEdit').submit(function(e) {
        e.preventDefault();
        $(".from-prevent-multiple-submits").prepend('<i class="fa fa-spinner fa-spin"></i>');
        $(".from-prevent-multiple-submits").attr("disabled", 'disabled');
        if (selectedFile) {
            var formData = new FormData($("#testimonialEdit")[0]);
            console.log(formData);

            $.ajax({
                url: "{{ url('admin/update/testimonial') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,

                success: function(response) {
                    $("#submit").attr("disabled", true);
                    $(".from-prevent-multiple-submits").find(".fa-spinner").remove();
                    $(".from-prevent-multiple-submits").removeAttr("disabled");
                    $('#testimonialEdit').trigger("reset");

                    $('#imagePreview').html('');
                    $('.close-icon').hide();
                    console.log(response.message);
                    toastr.options = {
                        'closeButton': true,
                        'progressBar': true
                    }
                    toastr.success(response.message);
                    setTimeout(function() {
                        window.location.href = response.route;
                    }, 1000);
                },

                error: function(response) {
                    $(".from-prevent-multiple-submits").find(".fa-spinner").remove();
                    $(".from-prevent-multiple-submits").removeAttr("disabled");
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
            var formData = new FormData($("#testimonialEdit")[0]);
            console.log(formData);

            $.ajax({
                url: "{{ url('admin/update/testimonial') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,


                success: function(response) {
                    $("#submit").attr("disabled", true);
                    $(".from-prevent-multiple-submits").find(".fa-spinner").remove();
                    $(".from-prevent-multiple-submits").removeAttr("disabled");
                    $('#testimonialEdit').trigger("reset");

                    $('#imagePreview').html('');
                    $('.close-icon').hide();
                    console.log(response.message);
                    toastr.options = {
                        'closeButton': true,
                        'progressBar': true
                    }
                    toastr.success(response.message);

                    window.location.href = response.route;
                },
                error: function(response) {
                    $(".from-prevent-multiple-submits").find(".fa-spinner").remove();
                    $(".from-prevent-multiple-submits").removeAttr("disabled");
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
