<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: login.php");
  exit;
}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Final Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="style6.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css" rel="stylesheet">
        <style>
            body{
                background-image:url(sayur/avif1.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            }
        </style>
    </head>
    <body>
        <div class="container-pet">
            <div class="container-sub">
                <img src="sayur/van.png" alt="">
                <h3 class="pesan-1">
                    Hewan Peliharaan Akan Segera Kami Jemput
                </h3>
                <h3 class="pesan-2">
                    Harap Bersabar 
                </h3>
                <div class="icon">
                    <i class="ri-loader-line"></i>
                </div>
            </div>
            <div class="tombol">
                <a href="index.php" class="balik">Kembali Ke Halaman Utama</a>
                <a href="form.php" class="isilagi">Ingin Titip Hewan Lain?</a>
             </div>
             <div class="footer">
                <p class="footer-1">
                    Apabila ada Kesalahan Teknis / Dalam Pengisian Data 
                </p>
                <p class="footer-2">
                    Contact Admin :
                </p>
                <div class="telp">
                    <div class="link1">
                        <i class="ri-phone-fill"></i> 081311523074 (Admin1)
                    </div>
                    <div class="link2">
                        <i class="ri-phone-fill"></i> 085694787893 (Admin2)
                    </div>
 
                </div>
             </div>
        </div>

    </body>
</html>