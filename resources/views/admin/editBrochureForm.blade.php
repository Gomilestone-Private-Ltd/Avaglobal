@extends('admin.layouts.app')
@section('content')
@section('title', 'Edit Event PopUp')
@section('header-title', 'Edit Event PopUp')
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
                        <div class="back-btn-box">
                            <a href="{{ route('event-popup') }}" class="back-btn"><img
                                    src="{{ asset('assets/images/back.png') }}" alt="Back" class="back-icon"><h3>Back</h3></a>
                            
                        </div>
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
                    <form enctype="multipart/form-data" id="brochureCreate">
                        @csrf
                        <div class="container card p-3 bg-white">

                            <div class="row">
                                <div class="form-group col-md-6 required">
                                    <label for="">PopUp Title:</label>
                                    <input type="text" name="title" id="" class="form-control"
                                        value="{{ isset($brochure->title) ? $brochure->title : '' }}"
                                        placeholder="Brochure Title">
                                    <span class="text-danger">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>

                                <div class="form-group col-md-6 required">
                                    <label for="">Location:</label>
                                    <input type="text" name="location" id="" class="form-control"
                                        value="{{ isset($brochure->location) ? $brochure->location : '' }}"
                                        placeholder="Location">

                                    <span class="text-danger">
                                        @error('location')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <input type="hidden" name="brochureID"
                                    value="{{ isset($brochure->id) ? $brochure->id : '' }}">

                                <div class="form-group col-md-6 required">
                                    <label for="">PopUp Image:</label>
                                    <div class="file-box">
                                        <input type="file" name="brochureimage" id="caseimageinput"
                                            class="form-control" value="" placeholder="" />
                                        <i class="fa fa-close close-icon" id="closeIcon"></i>
                                    </div>

                                    <span class="text-danger">
                                        @error('brochureimage')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <div id="imagePreview" class="mt-3">
                                        @if (isset($brochure->avaDocsPopUpImage->path))
                                            <img src="{{ asset(isset($brochure->avaDocsPopUpImage->path) ? $brochure->avaDocsPopUpImage->path : '') }}"
                                                height="50" width="50" alt="">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-6 required">
                                    <label for="">Brochure Image/Pdf:</label>
                                    <div class="file-box">
                                        <input type="file" name="brochurepdf" id="brochurepdffile"
                                            class="form-control" value="" placeholder="" />
                                        {{-- <i class="fa fa-close close-icon" id="closeIcon"></i> --}}
                                    </div>

                                    <span class="text-danger">
                                        @error('brochurepdf')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    @if (isset($brochure->avaDocsBrochureFiles->filetype) && strtoupper($brochure->avaDocsBrochureFiles->filetype) == 'PDF')
                                        <p id="filename" class="filename">
                                            {{ $brochure->avaDocsBrochureFiles->filename }}
                                        </p>
                                    @else
                                        <div id="imagePreview" class="mt-3">
                                            @if (isset($brochure->avaDocsBrochureFiles->path))
                                                <img src="{{ asset(isset($brochure->avaDocsBrochureFiles->path) ? $brochure->avaDocsBrochureFiles->path : '') }}"
                                                    height="50" width="50" alt="">
                                            @endif
                                        </div>
                                    @endif
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
        </div>

</section>


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
        $('#brochurepdffile').on('change', function(e) {
            var file = this.files[0];
            if (file) {
                selectedFile = file;

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#filename').html('');
                };
                reader.readAsDataURL(selectedFile);
            }
        });
    });
    $('#brochureCreate').submit(function(e) {
        e.preventDefault();
        $(".from-prevent-multiple-submits").prepend('<i class="fa fa-spinner fa-spin"></i>');
        $(".from-prevent-multiple-submits").attr("disabled", 'disabled');
        tinymce.triggerSave(false, true)
        if (selectedFile) {
            var formData = new FormData($("#brochureCreate")[0]);
            console.log(formData);

            $.ajax({
                url: "{{ url('admin/edit/event-popup-record') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                type: 'POST',
                cache: false,
                success: function(response) {
                    $("#submit").attr("disabled", true);
                    $(".from-prevent-multiple-submits").find(".fa-spinner").remove();
                    $(".from-prevent-multiple-submits").removeAttr("disabled");
                    $('#brochureCreate').trigger("reset");

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
            var formData = new FormData($("#brochureCreate")[0]);
            console.log(formData);

            $.ajax({
                url: "{{ url('admin/edit/event-popup-record') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,


                success: function(response) {
                    $("#submit").attr("disabled", true);
                    $(".from-prevent-multiple-submits").find(".fa-spinner").remove();
                    $(".from-prevent-multiple-submits").removeAttr("disabled");
                    $('#brochureCreate').trigger("reset");

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
