﻿<!doctype html>
<html class="no-js " lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

        <title>AvaGlobal::Admin</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Custom Css -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    </head>

    <body class="theme-blush">

        <div class="authentication">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <form class="card auth_form" action="{{ route('authenticate') }}" method="post">
                            @csrf
                            <div class="header">
                                <img src="{{ asset('/images/blogo.png') }}" width="100" alt="AvaGlobal">
                                <h5>Log in</h5>
                            </div>
                            <div class="body">
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><a href="forgot-password.html" class="forgot"
                                                title="Forgot Password"><i class="zmdi zmdi-lock"></i></a></span>
                                    </div>

                                </div>
                                {{-- <div class="checkbox">
                                    <input id="remember_me" type="checkbox">
                                    <label for="remember_me">Remember Me</label>
                                </div> --}}
                                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">SIGN
                                    IN</button>
                                {{-- here the code is in faaltu.txt now --}}
                            </div>
                        </form>

                        <div class="copyright text-center">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            <span><a href="templatespoint.net">Templates Point</a></span>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="card">
                            <img src="assets/images/signin.svg" alt="Sign In" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jquery Core Js -->
        <script>
            @if (Session::has('error'))
                toastr.options = {
                    'closeButton': true,
                    'progressBar': true
                }
                toastr.error("{{ Session::get('error') }}");
            @endif
        </script>
        <script src="assets/bundles/libscripts.bundle.js"></script>
        <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    </body>


</html>
