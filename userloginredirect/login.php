<?php
// session_start();
require_once('loginfunc.php');

if (isset($errors) && !empty($errors)) {
    echo '<h1>ERROR!</h1>
    <p class="error">The following error(s) occured:<br />';
    foreach ($errors as $msg) {
        echo " - $msg<br />\n";
    }
    echo '</p><p>Please try again</p>';
}
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login-style.css">
    <link href="//db.onlinewebfonts.com/c/112ec584bfc481ccde03444e67f8fc3f?family=Circular+Spotify+Tx+T+Bold" rel="stylesheet" type="text/css" />


    <title>Spotify Login</title>
</head>

<body>
    <script src="https://use.fontawesome.com/9fb76ae2a3.js"></script>
    <div class="top">
        <a href="#" class="logo">
        </a>
    </div>
    <div class="container">
        <div class="butwrap">
            <p>To continue, login into Spotify</p>
            <a class="fbbut"><i class="fa fa-facebook" aria-hidden="true"></i>Continue with Facebook</a>
            <a class="appbut"><i class="fa fa-apple" aria-hidden="true"></i>Continue with
                Apple</a>
            <a class="gbut"><i class="fa fa-google" aria-hidden="true"></i>Continue with
                Google</a>
        </div>
        <div class="line">
            <h2>Or</h2>
        </div>

        <div class="login-container">
            <!--Changed action from # to loginredirect.php-->
            <form method="POST" action="loginredirect.php" class="login-form">
                <p>
                    <label for="username" class="text">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username">
                </p>
                <p>
                    <label for="password" class="text">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password">
                </p>
                <!--Password Recovery Section-->
                <div id="password-recovery">
                    <a class="p-recover-link" href="https://www.spotify.com/password-reset/">Forgot your password?</a>
                </div>
                <!--Checkbox section-->
                <div id="check-container">
                    <div id="checkBox">
                        <label class="btn btn-primary active">
                            <input type="checkbox" name="remember" id="check-button" checked autocomplete="off">Remember
                            me
                        </label>
                        <button type="submit" name="submit" id="login-btn">LOG IN</button>
                    </div>
                </div>

                <div class="line-bot"></div>
                <!--Sign up Section-->
                <div class="sign-up">
                    <p>Don't have an account?</p>
                    <button class="sign-up-btn">SIGN UP FOR SPOTIFY</button>
                </div>
            </form>
        </div>
    </div>



</body>

</html>