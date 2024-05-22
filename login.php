<?php
session_start();
if(isset($_SESSION['login'])){
  header("Location: form.php");
  exit;
} 

require 'functions.php';


if(isset($_POST['login'])){

    $username= $_POST['username'];
    $password= $_POST['password'];
    $result = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' ");
    if(mysqli_num_rows($result)===1){
        //cek password
        $row= mysqli_fetch_assoc($result);
        if(password_verify($password,$row['password'])){
          $_SESSION['login']= true;
          $_SESSION['usernameses']=$username;
          echo '<script>window.location.href = "form.php";</script>';
          exit;
        }

    } 

    $error =true;

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="style4.css">
        <style>
          body{
            background-image:url(sayur/blue-pink-halftone-background_53876-99004.avif);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
          }
          .grid{
            display:grid;
            row-gap:20px;
          }
          .keutama{
            margin:20px;
          }
          .utama{
            text-decoration:none;
            border:1px solid white;
            padding: 7px;
          }
          .utama:hover{
            background-color:bisque;
          }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
          <div class="keutama">
              <a href="index.php" class="utama">Balik Ke Halaman Utama</a>
          </div>
        <div class="form_container grid">
          <h2 class="regis_header">Login</h2>
          <div class="form_content">
            <form action="" method="post">
              <input type="text" name= "username" placeholder="Username">
              <input type="password" name="password" placeholder="Password">
              <?php if(isset($error)): ?>
                  <div class="hidden" id="popup">
                    <p>Username/Password Salah</p>
                  </div>
              <?php endif; ?>
              <input type="submit" class="submit" name="login" value="Login">
            </form>
              <div class="other-log">
                Belum Punya Akun? <a href="register.php">Registrasi</a>
              </div>
          </div>
        </div>
        <script src="main.js"></script>

    </body>
</html>