<?php
require 'functions.php';


if(isset($_POST['register'])) {
    
    if( registrasi($_POST) > 0) {  
      echo "<script>
            alert('user baru telah ditambahkan');
            </script>";
    }
    else{
        echo mysqli_error($conn);
    }
}




?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrasi</title>
        <link rel="stylesheet" href="style4.css">
        <style>
          body{
            background-image:url(sayur/1688.jpg_wh860.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
          }
          .grid{
            display:grid;
            row-gap:20px;
          }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="form_container grid">
          <h2 class="regis_header">Form Registrasi</h2>
          <div class="form_content">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Email " required>
              <input type="text" name="username" placeholder="Username" required>
              <input type="password" name = "password" minlength="8" placeholder="Password" required>
              <input type="password" name="password2" minlength="8" placeholder="Konfirmasi Password" required>
              <input type="submit" name="register" class="submit" value="Register ">
            </form>
              <div class="other-reg">
                Sudah Punya Akun? <a href="login.php">Login</a>
              </div>
          </div>
        </div>
    </body>
</html>