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

        <title>forgot password</title>
    </head>
    <body>

        <div class="container">
            <div class="forms">
                <div class="form login">
                    <span class="title">Forgot password</span>

                    <?php if( isset($error)) : ?>
                        <p style="color: red; font-style:italic;">email / password salah bloookk!!</p>
                    <?php endif; ?>
                    <form action="" method="POST">
                        <div class="input-field">
                            <input type="text" placeholder="Enter your email" name="email" id="email" required="required">
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <div class="input-field button">
                            <button type="submit" name="login">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <script src="script.js"></script>

</body>
</html>