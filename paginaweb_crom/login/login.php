<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="csslogin.css">
    <link rel="stylesheet" href="../estilo.css">
    <link rel="stylesheet" href="../movil.css">
    <script src='https://kit.fontawesome.com/2ee0245f3d.js' crossorigin='anonymous'></script>

</head>
<body>
<?php
    include "../header.php";
?>
<div class="form-wrap">
    <div class="tabs">
      <h3 class="signup-tab"><a class="active" href="#signup-tab-content">Sign Up</a></h3>
      <h3 class="login-tab"><a href="#login-tab-content">Login</a></h3>
    </div><!--.tabs-->

    <div class="tabs-content">
      <div id="signup-tab-content" class="active">
        <form class="signup-form" action="" method="post">
          <input type="email" class="input" id="user_email" autocomplete="off" placeholder="Email">
          <input type="text" class="input" id="user_name" autocomplete="off" placeholder="Username">
          <input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
          <input type="submit" class="button" value="Sign Up">
        </form><!--.login-form-->
        <div class="help-text">
          <p>By signing up, you agree to our</p>
          <p><a href="#">Terms of service</a></p>
        </div><!--.help-text-->
      </div><!--.signup-tab-content-->

      <div id="login-tab-content">
        <form class="login-form" action="" method="post">
          <input type="text" class="input" id="user_login" autocomplete="off" placeholder="Email or Username">
          <input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
          <input type="checkbox" class="checkbox" id="remember_me">
          <label for="remember_me">Remember me</label>

          <input type="submit" class="button" value="Login">
        </form><!--.login-form-->
        <div class="help-text">
          <p><a href="#">Forget your password?</a></p>
        </div><!--.help-text-->
      </div><!--.login-tab-content-->
    </div><!--.tabs-content-->
  </div><!--.form-wrap-->
  <script src="funcioneslogin.js"></script>
  <script src="<?php $nivel."funciones.js"?>"></script>
<?php
    include "../footer.php";
?>
  </body>
</html>