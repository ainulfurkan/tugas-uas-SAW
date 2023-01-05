<?php
    require 'functions.php';
    if( isset($_POST["register"]) ) {
        if( register($_POST) > 0 ) {
            echo "<script>alert('sudah terdaftar!')</script>";
        } else {
            echo mysqli_error($coon);
        }
    }

    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link
            rel="stylesheet"
            href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="style1.css">

        <title>Registration</title>
    </head>
    <body>
        <!-- Registration Form -->
        <div class="container">
            <div class="forms">
                <div class="form signup">
                    <span class="title">Registration</span>

                    <form action="" method="POST">
                        <div class="input-field">
                            <input
                                type="text"
                                placeholder="Enter your name"
                                name="nama"
                                id="nama"
                                required="required">
                            <i class="uil uil-user"></i>
                        </div>
                        <div class="input-field">
                            <input
                                type="text"
                                placeholder="Enter your email"
                                name="email"
                                required="required">
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <div class="input-field">
                            <input
                                type="password"
                                class="password"
                                name="password"
                                id="password"
                                placeholder="Create a password"
                                required="required">
                            <i class="uil uil-lock icon"></i>
                        </div>
                        <div class="input-field">
                            <input
                                type="password"
                                class="password"
                                name="password2"
                                id="password2"
                                placeholder="Confirm a password"
                                required="required">
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="termCon">
                                <label for="termCon" class="text">I accepted all terms and conditions</label>
                            </div>
                        </div>

                        <div class="input-field button">
                            <button type="submit" name="register">Registerasi</button>
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">Already a member?
                            <a href="login.php" class="text login-link">Login Now</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <script src="script.js"></script>

    </body>
</html>