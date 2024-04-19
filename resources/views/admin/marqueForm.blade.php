@extends('admin.layouts.app')
@section('content')
@section('title', 'Add Marque')
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
                                src="{{ asset('assets/images/back.png') }}" alt="Back" class="back-icon"></a>
                        <h2>Add Marque Text</h2>
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
                    <form enctype="multipart/form-data" id="marqueCreate">
                        @csrf
                        <div class="container card p-3 bg-white">

                            <div class="row">
                                <div class="form-group col-md-12 required">
                                    <label for="">Add Marque Text:(max 125 characters)</label>
                                    <textarea type="text" name="marquetext" id="" class="form-control" value=""
                                        placeholder="Add Marque Text Here"></textarea>
                                    <span class="text-danger">
                                        @error('marquetext')
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
        </div>

</section>
<script>
    $(document).ready(function() {

        $('#marqueCreate').submit(function(e) {
            e.preventDefault();
            $(".from-prevent-multiple-submits").prepend('<i class="fa fa-spinner fa-spin"></i>');
            $(".from-prevent-multiple-submits").attr("disabled", 'disabled');

            // Serialize the form data
            const formData = new FormData($(this)[0]);

            // Send an AJAX request
            $.ajax({
                type: 'POST',
                url: "{{ url('admin/post-marque') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $(".from-prevent-multiple-submits").find(".fa-spinner").remove();
                    $(".from-prevent-multiple-submits").removeAttr("disabled");
                    $("#submit").attr("disabled", true);


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
