@extends('admin.layouts.app')
@section('content')
@section('title', 'Edit Marque')
@section('header-title', 'Edit Marque Text')
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
                        <a href="{{ route('marque-records') }}" class="back-btn"><img
                                src="{{ asset('assets/images/back.png') }}" alt="Back" class="back-icon">
                            <h3>Back</h3>
                        </a>

                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="form-box">
                    <form enctype="multipart/form-data" id="marqueEdit">
                        @csrf
                        <div class="card p-3 bg-white">
                            <div class="row">
                                <div class="form-group col-md-12 required">
                                    <label for="">Add Marque Text:(max 125 characters)</label>
                                    <input type="hidden" name="marqueId" value="{{ $data->id }}">
                                    <textarea type="text" name="marquetext" id="" class="form-control" value=""
                                        placeholder="Add Marque Text Here">{{ $data->marque_text }}</textarea>
                                    <span class="text-danger">
                                        @error('marquetext')
                                            {{ $message }}
                                        @enderror
                                    </span>

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
    $(document).ready(function() {

        $('#marqueEdit').submit(function(e) {
            e.preventDefault();
            $(".from-prevent-multiple-submits").prepend('<i class="fa fa-spinner fa-spin"></i>');
            $(".from-prevent-multiple-submits").attr("disabled", 'disabled');

            // Serialize the form data
            const formData = new FormData($(this)[0]);

            // Send an AJAX request
            $.ajax({
                type: 'POST',
                url: "{{ url('admin/post-edit-marque') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $("#submit").attr("disabled", true);
                    $(".from-prevent-multiple-submits").find(".fa-spinner").remove();
                    $(".from-prevent-multiple-submits").removeAttr("disabled");

                    console.log(response);
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
        });
    });
</script>
@endsection
