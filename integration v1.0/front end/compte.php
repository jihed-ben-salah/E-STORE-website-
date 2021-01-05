<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>créer un compte E-STORE</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/colorlib-regform-7/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/colorlib-regform-7/css/style.css">
</head>
<body>

<?php
include_once "header.php";
?>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="ajoutF.php" method="POST"  class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="login"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="login" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="user"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="user" id="user" placeholder="fournisseur ou client"/>
                            </div>
                            <div class="form-group">
                                <label for="mail"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="mail" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <button class="form-submit" type="submit">connecter</button>

                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="assets/colorlib-regform-7/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

</div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>