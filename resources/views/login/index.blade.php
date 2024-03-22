<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://www.avaglobal.in/images/favicon.png" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Log In Page</title>

    <style>

            body {
                font-family: "Roboto Condensed", sans-serif!important;
            }

            ::placeholder {
                font-family: "Roboto Condensed", sans-serif!important;
}

        .forms-container {
            /* background-color: #efefef; */
            background-image: url('../images/login/bg-image.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: #000;
            opacity: 0.6;
        }

        .heading-box {
            margin-bottom: 30px;
            text-align: center;
            padding: 0px 50px;
        }

        .heading-box h1 {
            font-size: 32px;
            line-height: 20px;
            letter-spacing: 2.25px;
            font-weight: 700;
            text-transform: uppercase;
            font-family: "BebasNeueRegular";
            padding-top: 25px;
        }

        .heading-box p {
            font-size: 15px;
            text-transform: capitalize;
            margin-top: 20px;
            line-height: 22px;
        }

        .input-box {
            margin-bottom: 25px;
            position: relative;
        }

        .login-icon {
            position: absolute;
            left: 15px;
            bottom: 15px;
            color: #4e7ac7;
            font-size: 20px;
        }

        .input-box label {
            font-weight: 500;
            font-size: 18px;
            margin-bottom: 1px;
        }

        .input-box input {
            /* border: 1px solid #c7c7c7; */
            border-bottom: 2px solid #c7c7c7 !important;
            border: none;
            padding: 10px 15px;
            font-size: 15px;
            padding-left: 50px;
            border-radius: 5px;
            width: 100%;
            outline: none;
            height: 50px;
            color: #000;
            font-weight: 500;
        }

        .form-container {
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 20px 40px;
            align-items: center;
            background-color: #fff;
            height: 60vh;
            align-items: center;
            margin-top: 20vh;
            margin-bottom: 20vh;
            border-radius: 10px;
        }

        .toggle-container {
            width: 100%;
        }

        .toggle {
            background-image: url('../images/login/login3.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100%;
            color: #fff;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        form.login-form {
            width: 100%;
        }

        .login-btn {
                border: 1px solid transparent;
                text-transform: uppercase;
                margin-top: 10px;
                cursor: pointer;
                float: right;
                background: #4e7ac7;
                color: #fff;
                text-transform: uppercase;
                padding: 10px 40px;
                font-size: 18px;
                margin: 0 auto;
                font-weight: 500;
                text-align: center;
                font-family: "Roboto Condensed";
                letter-spacing: 1px;
            }
        .image {
            transition: transform 1.1s ease-in-out;
            transition-delay: 0.4s;
            width: 100%;
        }

        img.blogo {
            width: 100px;
            height: auto;
        }
    </style>
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
                                <form class="login-form">
                                    <div class="heading-box">
                                        <img src="../images/blogo.png" class="blogo">
                                        <h1>Employee Login</h1>
                                    </div>
                                    <div class="input-box">
                                        <label>Email-ID</label>
                                        <input type="email" name="email" id="email" placeholder="Enter Enail">
                                        <i class="fas fa-envelope login-icon"></i>
                                    </div>
                                    <div class="input-box">
                                        <label>Password</label>
                                        <input type="text" name="password" id="password" placeholder="Enter Password">
                                        <i class="fas fa-lock login-icon"></i>
                                    </div>
                                    <button type="button" class="login-btn">Log In</button>
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
    
    <!-- <div class="forms-container">
        <div class="overlay"></div>
       
    </div> -->

</body>

</html>