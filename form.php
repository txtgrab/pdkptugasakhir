<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

require 'functions.php';
if(isset($_POST['submit'])){
    if( registrasi2($_POST) > 0) {  
        echo "<script>
              alert('Data baru telah ditambahkan');
              </script>";
        header("Location:final.php");
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
        <title>Form Titip</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="style5.css"> 
        <style>
            label{
                display:block;
            }
            body{
                background-image:url(sayur/avif1.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            h1{
                text-align:center;
                color:brown;
                padding-top:10px;
                font-weight:32px;
                box-shadow: 0 8px 32px hsla(12, 32%, 8%, .6); 
                margin-bottom:30px;

            }
            a{
                margin: 200px 50px;
                text-decoration: none;
                border:1px solid white;
                width:200px;
                padding: 10px 10px;
                transition:  transform .3s;
            }
            a:hover{
                background-color: chartreuse;
                transform: translateY(.35rem);
            }

        </style>
    </head>
    <body>
        <div class="form_container">
            <h1 class="form_title">
                Form Penitipan
            </h2>
            <a href="logout.php" class="logout">Logout</a>
            <div class="form_content">
                <form action="" method="post">
                    <div class="data">
                        <div class="data_hewan">
                            <h2>Data Hewan</h2>

                            <div class="jenis">
                                <label for="jenis">Jenis Hewan</label>
                                <select name="jenis" required  >
                                    <option value="" selected disabled>Pilih satu opsi</option>
                                    <option value="Anjing">Anjing</option>
                                    <option value="Kucing">Kucing</option>
                                    <option value="Hamster">Hamster</option>
                                    <option value="Kelinci">Kelinci</option>
                                </select>
                            </div>

                            <div class="namahewan">
                                <label for="namahewan">Nama Hewan(jika ada)</label>
                                <input type="text" name="namahewan">
                            </div>

                            <div class="ras">
                                <label for="ras">Ras (jika ada)</label>
                                <input type="text" name="ras">
                            </div>

                           <div class="warna">
                                <label for="warna">Warna</label>
                                <input type="text" name="warna" required>
                           </div>
                            
                            <div class="umur">
                                <label for="umur">Umur (Tahun) </label>
                                <input type="number" name="umur">
                            </div>

                            <div class="kelamin">
                                <label for="kelamin">Jenis Kelamin:</label>
                                <select name="kelamin"  id='kelamin' required>
                                    <option value="" selected disabled>Pilih satu opsi</option>
                                    <option value="Betina">Betina</option>
                                    <option value="Jantan">Jantan</option>
                                </select>
                            </div>
                           
                            <div class="tgltitip">
                                <label for="Tanggal Penitipan">Tanggal Penitipan</label>
                                <input type="date" name="tgltitip" id="tanggalPenitipan" required>
                            </div>

                            <div class="tglambil">
                                <label for="Tanggal Pengambilan">Tanggal Pengambilan</label>
                                <input type="date" name="tglambil" id="tanggalPengambilan" required>
                            </div>
                            
                            <div class="pesan">
                                <label for="pesan">Berikan Pesan/Catatan Khusus Mengenai Hewan Anda(Jika ada)</label>
                                <textarea name="pesan" id="pesan" cols="38" rows="10" ></textarea>
                            </div>
                        </div>
                        <div class="bungkus">
                            <div class="data_pemilik">
                                <h2>Data Pemilik</h2>
                                
                                <div class="nama-pemilik">
                                    <label for="nama pemilik">Nama Pemilik</label>
                                    <input type="text" name="namapemilik" required>
                                </div>
                                
                                <div class="notelp">
                                    <label for="notelp">No.Telp</label>
                                    <input type="tel" name="notelp" minlength="8" required>
                                </div>
                                
                                <div class="alamat">
                                    <label for="alamat">Alamat Lengkap Pemilik</label>
                                    <textarea name="alamat" id="alamat" cols="38" rows="10" required></textarea>
                                </div>
                            </div>
                            <div class="alert">
                                    <p class="catatan">
                                        <i>*Kami hanya memberikan pelayanan full-service dan tidak ada <br> pemilihan paket layanan</i>
                                    </p>
                            </div>
                            <div class="submit">
                                    <input type="submit" name="submit" value="submit">
                            </div>

                        </div> 
                    

                   
                </form>
            </div>
        </div>
    </body>
</html>