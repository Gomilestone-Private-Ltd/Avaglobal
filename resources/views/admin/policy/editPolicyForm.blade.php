@extends('admin.layouts.app')
@section('content')
@section('title', 'Edit Policy')
@section('header-title', 'Edit Policy')
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
                        <a href="{{ route('data-policy') }}" class="back-btn"><img
                                src="{{ asset('assets/images/back.png') }}" alt="Back" class="back-icon">
                            <h3>Back </h3>
                        </a>

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
                    <form enctype="multipart/form-data" id="policyEdit">
                        @csrf
                        <div class="container card p-3 bg-white">

                            <div class="row">
                                <input type="hidden" name="policyId" value="{{ $data->id }}">

                                <div class="form-group col-md-6 required">
                                    <label for="">File Title:</label>
                                    <input type="text" name="policytitle" id="" class="form-control"
                                        value="{{ $data->policy_title }}" placeholder="Add File Title">


                                    <span class="text-danger">
                                        @error('policytitle')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group col-md-6 required">
                                    <label for="">Upload file:(Pdf only)</label>
                                    <div class="file-box">
                                        <input type="file" onchange="return fileValidationPdf()" name="policyfile"
                                            accept=" application/pdf" id="caseimageinput" class="form-control"
                                            value="" placeholder="" />
                                        <i class="fa fa-close close-icon" id="closeIcon"></i>
                                    </div>

                                    <span class="text-danger">
                                        @error('policyfile')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    @if ($data->filetype == 'pdf')
                                        <p id="filename" class="filename">
                                            {{ $data->filename }}
                                        </p>
                                    @endif
                                    <div id="imagePreview">
                                        @if (isset($data) && $data->filetype != 'pdf')
                                            <img src="{{ asset(isset($data->path) ? $data->path : '') }}" height="50"
                                                width="50" alt="">
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
    function fileValidationPdf() {
        var fileInput = document.getElementById('caseimageinput');
        var fileSize = (fileInput.files[0].size / 1024 / 1024).toFixed(2);
        if (fileSize > 5) {
            // alert("File size must be less than 5 MB.");
            toastr.error("File size must be less than 5 MB.")
            toastr.options = {
                'closeButton': true,
                'progressBar': true,
            }
            fileInput.value = '';
            return false;
        }
    }
</script>

<script>
    var selectedFile;
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
        $('#caseimageinput').on('change', function(e) {
            var file = this.files[0];
            if (file) {
                selectedFile = file;
                // extension = selectedFile.split('.').pop().toLowerCase();

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#filename').html('');
                    $('#imagePreview').html('');
                };
                reader.readAsDataURL(selectedFile);
            }
        });
    });
    $('#policyEdit').submit(function(e) {
        e.preventDefault();
        $(".from-prevent-multiple-submits").prepend('<i class="fa fa-spinner fa-spin"></i>');
        $(".from-prevent-multiple-submits").attr("disabled", 'disabled');
        if (selectedFile) {
            var formData = new FormData($("#policyEdit")[0]);
            console.log(formData);

            $.ajax({
                url: "{{ url('admin/edit-policy') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,

                success: function(response) {
                    $("#submit").attr("disabled", true);
                    $(".from-prevent-multiple-submits").find(".fa-spinner").remove();
                    $(".from-prevent-multiple-submits").removeAttr("disabled");
                    $('#policyEdit').trigger("reset");

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
            var formData = new FormData($("#policyEdit")[0]);
            console.log(formData);

            $.ajax({
                url: "{{ url('admin/edit-policy') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,


                success: function(response) {
                    $("#submit").attr("disabled", true);
                    $(".from-prevent-multiple-submits").find(".fa-spinner").remove();
                    $(".from-prevent-multiple-submits").removeAttr("disabled");
                    $('#policyEdit').trigger("reset");

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
