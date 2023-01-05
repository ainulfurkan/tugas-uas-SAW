<?php
session_start();
require 'functions.php';

//cek cookie
if( isset($_COOKIE['nama']) && isset($_COOKIE['key']) ) {
    $nama = $_COOKIE['nama'];
    $key = $_COOKIE['key'];

    //ambil email berdasarkan nama
    $result = mysqli_query($coon, "SELECT email FROM user1 WHERE nama = '$nama'");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan email
    if( $key === hash('sha256', $row['email']) ) {
        $_SESSION['login'] = true;
    }

}

if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

if( isset($_POST["login"]) ) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($coon, "SELECT * FROM user1 WHERE email = '$email'");

    //cek email
    if( mysqli_num_rows($result) === 1 ) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"]) ) {
            //set session
            $_SESSION["login"] = true;

            //cek remember me
            if( isset($_POST['remember']) ) {
                //buat cookie
                setcookie('nama', $row['nama'], time() + 60);
                setcookie('key', hash('sha256', $row['email']), time() + 60);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
    

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
        <link rel="stylesheet" href="style.css">

        <title>Login</title>
    </head>
    <body>

        <div class="container">
            <div class="forms">
                <div class="form login">
                    <span class="title">Login</span>

                    <?php if( isset($error)) : ?>
                    <p style="color: red; font-style:italic;">email / password salah bloookk!!</p>
                    <?php endif; ?>
                    <form action="" method="POST">
                        <div class="input-field">
                            <input
                                type="text"
                                placeholder="Enter your email"
                                name="email"
                                id="email"
                                required="required">
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <div class="input-field">
                            <input
                                type="password"
                                class="password"
                                name="password"
                                id="password"
                                placeholder="Enter your password"
                                required="required">
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember" class="text">Remember me</label>
                            </div>

                            <a href="forgot.php" class="text">Forgot password?</a>
                        </div>

                        <div class="input-field button">
                            <button type="submit" name="login">Login Now</button>
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">Not a member?
                            <a href="register.php" class="text signup-link">Signup Now</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <script src="script.js"></script>

    </body>
</html>