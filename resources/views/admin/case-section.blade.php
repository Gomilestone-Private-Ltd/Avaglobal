@extends('admin.layouts.app')
@section('content')
@section('title', ' Add Case')
@section('header-title', 'Add Case')
{{-- TinyMce --}}
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
        margin-top: 2px;
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
        padding: 6px;

    }

    .fa-minus {
        color: black;
    }

    .plus {
        color: #010b48 !important;
        position: absolute;
        right: 10px;
        top: 10px;
        z-index: 9;
    }

    .minus {
        color: #010b48 !important;
        position: absolute;
        right: 10px;
        top: 10px;
        z-index: 9;
    }

    #caseimage {
        position: relative;
        padding-right: 20px;
    }

    /* //added */
    #files-area {
        /* width: 30%;
        margin: 0 auto; */
        overflow: hidden;
    }

    .file-block {
        border-radius: 10px;
        background-color: rgba(144, 163, 203, 0.2);
        margin: 5px;
        color: initial;
        display: inline-flex;

        &>span.name {
            padding-right: 10px;
            width: max-content;
            display: inline-flex;
        }
    }

    .file-delete {
        display: flex;
        width: 24px;
        color: initial;
        background-color: #6eb4ff00;
        font-size: large;
        justify-content: center;
        margin-right: 3px;
        cursor: pointer;

        &:hover {
            background-color: rgba(144, 163, 203, 0.2);
            border-radius: 10px;
        }

        &>span {
            transform: rotate(45deg);
        }
    }
</style>

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">

                    <div class="back-btn-box">
                        <a href="{{ route('case-section') }}" class="back-btn"><img
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
            <!-- Input -->
            <div class="row clearfix">
                <div class="form-box">
                    <form enctype="multipart/form-data" id="caseCreate">
                        @csrf
                        <div class="container card p-3 bg-white">

                            <div class="row">
                                <div class="form-group col-md-6 required">
                                    <label for="">Case Name:</label>
                                    <input type="text" name="case" id="case" class="form-control"
                                        value="" placeholder="Case Name">
                                    <span class="text-danger case-error"></span>

                                </div>
                                <div class="form-group col-md-6 required">
                                    <label for="">Case Title:</label>
                                    <input type="text" name="casetitle" id="casetitle" class="form-control"
                                        value="" placeholder="Case Title">


                                    <span class="text-danger">
                                        @error('casetitle')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group col-md-6 required">
                                    <label for="">Posted By:</label>
                                    <input type="text" name="postedby" id="postedby" class="form-control"
                                        value="" placeholder="Posted By">
                                    <span class="text-danger">
                                        @error('dob')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group col-md-6 required">
                                    <label for="">Case Image: (Max 5 files allowed | Size less than 1 MB)

                                    </label>
                                    <input type="file" onchange="return fileValidation()"
                                        accept="image/png, image/jpg, image/jpeg" class="form-control"
                                        name="caseimage[]" id="caseimage" multiple />
                                    {{-- <p class="notice-text">(Image Dimension should be 1366*550)</p> --}}
                                    <span class="text-danger">
                                    </span>
                                    <div>
                                        <p id="files-area">
                                            <span id="filesList">
                                                <span id="files-names"></span>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 required">
                                    <label for="">Description:</label>
                                    <textarea id="tinymce" name="tinymce" class="form-control" placeholder="Add Description Here"
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
        </div>
</section>
<script>
    function fileValidation() {
        var fileInput = document.getElementById('caseimage');
        var fileSize = (fileInput.files[0].size / 1024 / 1024).toFixed(2);
        if (fileSize > 1) {
            // alert("File size must be less than 5 MB.");
            toastr.error("File size must be less than 1 MB.")
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
    const dt = new DataTransfer(); // Permet de manipuler les fichiers de l'input file

    $("#caseimage").on('change', function(e) {
        for (var i = 0; i < this.files.length; i++) {
            let fileBloc = $('<span/>', {
                    class: 'file-block'
                }),
                fileName = $('<span/>', {
                    class: 'name',
                    text: this.files.item(i).name
                });
            fileBloc.append('<span class="file-delete"><span>+</span></span>')
                .append(fileName);
            $("#filesList > #files-names").append(fileBloc);
            // $('input').val('');

        };
        // Ajout des fichiers dans l'objet DataTransfer
        for (let file of this.files) {
            dt.items.add(file);
        }
        // Mise à jour des fichiers de l'input file après ajout
        this.files = dt.files;
        // if (this.files == 1) {
        //     $('input').val('');
        // }

        // EventListener pour le bouton de suppression créé
        $('span.file-delete').click(function() {
            let name = $(this).next('span.name').text();
            // Supprimer l'affichage du nom de fichier
            $(this).parent().remove();
            for (let i = 0; i < dt.items.length; i++) {
                // Correspondance du fichier et du nom
                if (name === dt.items[i].getAsFile().name) {
                    // Suppression du fichier dans l'objet DataTransfer
                    dt.items.remove(i);
                    continue;
                }
            }
            // Mise à jour des fichiers de l'input file après suppression
            document.getElementById('caseimage').files = dt.files;
        });
    });
</script>

<script>
    var selectedFile;

    document.addEventListener("DOMContentLoaded", function() {
        // TinyMCE initialization code here
        const example_image_upload_handler = (blobInfo, progress) => new Promise((resolve, reject) => {

            // In case which the max file size is 1Mb
            if (blobInfo.blob().size > 1024 * 1024) {
                return reject({
                    message: 'File size should be less than 1 MB !',
                    remove: true
                });
            }

            // Do the rest
        });
        tinymce.init({
            selector: 'textarea#tinymce',
            plugins: "preview",
            theme_advanced_buttons3_add: "preview",
            plugin_preview_width: "500",
            plugin_preview_height: "600",
            //added
            images_upload_handler: example_image_upload_handler,
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



    $('#caseCreate').submit(function(e) {
        e.preventDefault();
        $(".from-prevent-multiple-submits").prepend('<i class="fa fa-spinner fa-spin"></i>');
        $(".from-prevent-multiple-submits").attr("disabled", 'disabled');
        tinymce.triggerSave(false, true)
        if (selectedFile) {
            var formData = new FormData($("#caseCreate")[0]);
            $.ajax({
                url: "{{ url('admin/create-case') }}",
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
                        window.location.href = response.route;
                    }, 1000);
                },
                error: function(response) {
                    $(".from-prevent-multiple-submits").find(".fa-spinner").remove();
                    $(".from-prevent-multiple-submits").removeAttr("disabled");
                    if (response.responseJSON && response.responseJSON.errors) {

                        $('.text-danger').html('');
                        $.each(response.responseJSON.errors, function(field, errorMessage) {
                            var fieldName = field.split('.');
                            var errorHtml = '<span class="text-danger">' +
                                errorMessage + '</span>';

                            $('#' + fieldName).closest(
                                    '.form-group')
                                .find('.text-danger').html(errorHtml);

                            $('#' + fieldName).on('input',
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
                url: "{{ url('admin/create-case') }}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,


                success: function(response) {
                    $("#submit").attr("disabled", true);
                    $(".from-prevent-multiple-submits").find(".fa-spinner").remove();
                    $(".from-prevent-multiple-submits").removeAttr("disabled");
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
                    $(".from-prevent-multiple-submits").find(".fa-spinner").remove();
                    $(".from-prevent-multiple-submits").removeAttr("disabled");
                    if (response.responseJSON && response.responseJSON.errors) {
                        $('.text-danger').html('');
                        $.each(response.responseJSON.errors, function(field,
                            errorMessage) {
                            var fieldName = field.split('.');
                            var errorHtml = '<span class="text-danger">' +
                                errorMessage + '</span>';

                            $('#' + fieldName).closest(
                                    '.form-group')
                                .find('.text-danger').html(errorHtml);

                            $('#' + fieldName).on('input',
                                function() {
                                    $('.text-danger').html('');
                                });
                        });
                    }

                    // if (response.responseJSON && response.responseJSON.errors) {

                    //     $('.text-danger').html('');
                    //     console.log(response.responseJSON.errors);

                    //     var errorMessage = '<span class="text-danger">' + response
                    //         .responseJSON.errors + '</span>';

                    //     // Update the content of the span with the error message
                    //     $('input[name="caseimage[]"]').closest('.form-group').find('.text-danger')
                    //         .html(errorMessage);

                    // }
                }

            });

        }
    });
</script>

@endsection
