<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/favicon.png') }}" />
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/login.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>Log In Page</title>

    </head>

    <body>
        <div class="login-container">
            <div class="fp-tableCell" style="height:703px;">
                <div class="contactbannerblk">
                    <div class="eva-container">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-7 p-0">
                                </div>
                                <div class="col-md-5 p-0">
                                    <div class="form-container">
                                        <form class="login-form" action="{{ route('authenticate') }}" method="post">
                                            @csrf
                                            <div class="heading-box">
                                                <img src="{{ asset('/images/blogo.png') }}" class="blogo">
                                                <h1>Admin Login</h1>
                                            </div>
                                            <div class="input-box">
                                                <label>Email-ID</label>
                                                <input type="email" name="email" id="email"
                                                    placeholder="Enter Email">
                                                <i class="fas fa-envelope login-icon"></i>
                                            </div>
                                            <div class="input-box">
                                                <label>Password</label>
                                                <input type="password" name="password" id="password"
                                                    placeholder="Enter Password">
                                                <i class="fas fa-lock login-icon"></i>
                                            </div>
                                            <button type="submit" class="login-btn">Log In</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="greyoverlaybig"></div>
                <div class="greyoverlaysml"></div>
            </div>
        </div>

        <script>
            function startToastr() {
                toastr.options = {
                    'closeButton': true,
                    'progressBar': true,
                }

                @if (session('error'))
                    {
                        toastr.error("{{ session('error') }}");
                    }
                @else
                    {
                        toastr.error("{{ session('failed') }}");
                    }
                @endif
            }
            @if (session('error'))
                {
                    startToastr()
                }
            @elseif (session('failed')) {
                    startToastr()
                }
            @endif
        </script>

    </body>

</html>
