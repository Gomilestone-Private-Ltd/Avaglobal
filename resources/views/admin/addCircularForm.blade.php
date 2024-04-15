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
    <h3 class="text-center " style="font-weight: bold;color:#181516">
        Add Circulars
    </h3>
    <div class="container-fluid">
        <!-- Input -->
        <div class="row clearfix">
            <form enctype="multipart/form-data" id="circularCreate">
                @csrf
                <div class="container mt-4 card p-3 bg-white">

                    <div class="row">

                        <div class="form-group col-md-12 required">
                            <label for="">File Title:</label>
                            <input type="text" name="circulartitle" id="" class="form-control"
                                value="" placeholder="Add File Title">


                            <span class="text-danger">
                                @error('circulartitle')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group col-md-12 required">
                            <label for="">Upload file:(Pdf only)</label>
                            <div class="file-box">
                                <input type="file" name="circularfile" id="caseimageinput" class="form-control"
                                    value="" placeholder="" />
                                <i class="fa fa-close close-icon" id="closeIcon"></i>
                            </div>

                            <span class="text-danger">
                                @error('circularfile')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div id="imagePreview">

                            </div>
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
                    if (selectedFile.type.includes("image")) {
                        $('#imagePreview').html('<img src="' + e.target.result +
                            '" alt="Preview">');
                    } else if (selectedFile.type.includes("pdf")) {
                        $('#imagePreview').html('');
                    } else {
                        $('#imagePreview').html('');
                        $('.close-icon').hide();
                    }
                };
                reader.readAsDataURL(selectedFile);
            } else {
                $('#imagePreview').html('');
                $('.close-icon').hide();
            }
        });

    });
    $('#circularCreate').submit(function(e) {
        e.preventDefault();
        if (selectedFile) {
            var formData = new FormData($("#circularCreate")[0]);
            console.log(formData);

            $.ajax({
                url: "{{ url('admin/store-records') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,

                success: function(response) {
                    $("#submit").attr("disabled", true)
                    $('#circularCreate').trigger("reset");

                    $('#imagePreview').html('');
                    $('.close-icon').hide();
                    console.log(response.message);
                    toastr.options = {
                        'closeButton': true,
                        'progressBar': true
                    }
                    toastr.success(response.message);
                    setTimeout(function() {
                        window.location.href = "circular";
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
        } else {
            var formData = new FormData($("#circularCreate")[0]);
            console.log(formData);

            $.ajax({
                url: "{{ url('admin/store-records') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,


                success: function(response) {
                    $("#submit").attr("disabled", true)
                    $('#circularCreate').trigger("reset");

                    $('#imagePreview').html('');
                    $('.close-icon').hide();
                    console.log(response.message);
                    toastr.options = {
                        'closeButton': true,
                        'progressBar': true
                    }
                    toastr.success(response.message);
                    window.location.href = "circular";
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
