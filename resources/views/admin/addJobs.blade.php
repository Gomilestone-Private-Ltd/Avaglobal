<!doctype html>
<html class="no-js " lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

        <title>:: Ava Global</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Favicon-->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <!-- Bootstrap Material Datetime Picker Css -->
        <link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
            rel="stylesheet" />
        <!-- Bootstrap Select Css -->
        <link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

        <!-- jQuery DataTable link -->
        <link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">

        <!-- Custom Css -->
        <link rel="stylesheet" href="assets/css/style.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <style>
            label {
                color: black;
            }

            .required label::after {
                content: " *";
                color: red;
            }

            .error {
                color: red;
            }

            h3 {
                margin-bottom: -9px;
            }
        </style>
    </head>

    <body class="theme-blush">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48"
                        height="48" alt="Aero"></div>
                <p>Please wait...</p>
            </div>
        </div>

        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>

        <!-- Main Search -->
        <div id="search">
            <button id="close" type="button"
                class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
            <form>
                <input type="search" value="" placeholder="Search..." />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <!-- Right Icon menu Sidebar -->
        <div class="navbar-right">
            <ul class="navbar-nav">


                <li><a href="{{ route('logout') }}" class="mega-menu" title="Sign Out"><i
                            class="zmdi zmdi-power"></i></a>
                </li>
            </ul>
        </div>

        @include('admin.layouts.sidebar')


        <section class="content">
            <h3 class="text-center " style="font-weight: bold;color:#e83e8c">
                JOB OPENINGS
            </h3>
            <div class="container-fluid">
                <!-- Input -->
                <div class="row clearfix">
                    <form action="" id="postjob">
                        @csrf
                        <div class="container mt-4 card p-3 bg-white">
                            <div class="row">
                                <div class="form-group col-md-3 required">
                                    <label for="">Department:</label>
                                    <input type="text" name="department" class="form-control" value=""
                                        placeholder="Department">
                                    <span class="text-danger">
                                        @error('department')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group col-md-3 required">
                                    <label for="">Job Role:</label>
                                    <input type="text" name="jobRole" class="form-control" value=""
                                        placeholder="Job Role">
                                    <span class="text-danger">
                                        @error('jobRole')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group col-md-3 required">
                                    <label for="">Location:</label>
                                    <input type="text" name="location" class="form-control" value=""
                                        placeholder="Location">
                                    <span class="text-danger">

                                    </span>
                                </div>

                                <div class="form-group col-md-3 required">
                                    <label for="">Time Period:</label>
                                    <select name="timePeriod" class="form-control">
                                        <option value="">-- Please select --</option>
                                        <option value="Full Time">Full Time</option>
                                        <option value="Part Time">Part Time</option>
                                    </select>
                                    <span class="text-danger">

                                    </span>
                                </div>

                                <div class="form-group col-md-3 required">
                                    <label for="">Job Status:</label>
                                    <select name="jobStatus" class="form-control">
                                        <option value="">-- Please select --</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>

                                    </select>
                                    <span class="text-danger">

                                    </span>
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="submit" id="submit" class="btn btn-primary float-right"
                                        value="Submit">
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>

        </section>






        <script>
            $(document).ready(function() {

                $('#postjob').submit(function(e) {
                    e.preventDefault();

                    // Serialize the form data
                    const formData = new FormData($(this)[0]);

                    // Send an AJAX request
                    $.ajax({
                        type: 'POST',
                        url: '{{ url('/post-jobs') }}',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {

                            console.log(response);
                            toastr.options = {
                                'closeButton': true,
                                'progressBar': true
                            }
                            toastr.success(response.message);
                            setTimeout(function() {
                                window.location.href = "/get-jobs";
                            }, 3000);
                        },
                        error: function(response) {
                            console.log("hii");

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
                });
            });
        </script>



        {{-- Toastr script --}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <!-- Jquery Core Js -->
        <script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
        <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

        <script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js -->
        <!-- Bootstrap Material Datetime Picker Plugin Js -->
        <script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>


        <script src="assets/js/pages/forms/basic-form-elements.js"></script>
        <script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->




    </body>


</html>
