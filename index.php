<?php
require_once 'connect.php';
if(isset($_SESSION["login"])){
  sdhLogin();
}
if(isset($_POST["login"])){
  login($_POST["username"], $_POST["password"], $_POST["type"]);
  $_SESSION["error"] = true;
  header("Location: ./");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log-In</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/login.css">
  </head>
  <body>
<div class="container">
    <div class="login-img">
      <h1>Sistem Informasi Dagang</h1>
      <img src="./assets/img/img-login/undraw_dashboard_nklg.svg" alt="" />
    </div>
    <div class="login-container">
      <form action="" method="POST">
        <img src="./assets/img/img-login/undraw_male_avatar_323b.svg" alt="" />
        <div class="input-username">
          <h2>Sign-In</h2>
          <?php if(isset($_SESSION["error"])):?>
            <p style="color:red; margin:auto; width:200px; text-align:center;">Username / Password salah</p>
          <?php endif;?>
          <h5>Username</h5>
          <input type="text" name="username" id="username" class="form" />
        </div>
        <div class="input-password">
          <h5>Password</h5>
          <input type="password" name="password" id="password" class="form" />
        </div>
        <input type="submit" class="btn" name="login" value="Log-In">
      </form>

    </div>
</div>
</div>
  </body>
</html>
