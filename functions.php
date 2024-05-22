<?php
if (!isset($_SESSION)) {
    session_start();
}
ob_start();
$conn = mysqli_connect("localhost","root","","sim");
function registrasi($data) {
    global $conn;

    $email = $data['email'];
    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn,$data['password']);
    $password2 = mysqli_real_escape_string($conn,$data['password2']);


    // cek email yg sudah ada
    $result = mysqli_query($conn,"SELECT email FROM users WHERE  email='$email' ");

    if( mysqli_fetch_assoc($result)){
        echo "<script>
               alert('E-Mail Sudah Digunakan');
               </script>";
        return false;
    }
    // cek username yg sudah ada
    $result = mysqli_query($conn,"SELECT username FROM users WHERE  username='$username' ");

    if( mysqli_fetch_assoc($result)){
        echo "<script>
               alert('Username Sudah Digunakan');
               </script>";
        return false;
    }


    // cek konfirmasi password
    if($password !== $password2){
        echo "<script>
                alert('password tidak sama'); 
              </script>";
        return false;
    }

    // enkripsi password

    $password = password_hash($password,PASSWORD_DEFAULT);
    //var_dump($password);die;

    mysqli_query($conn,"INSERT INTO users VALUES('','$email','$username','$password')");

    return mysqli_affected_rows($conn);

}

function registrasi1($data1){
    global $conn;

    $email1 = $data1['email1'];
    $result1 = mysqli_query($conn,"SELECT email FROM email WHERE  email='$email1'");
    // cek email yg sudah ada

    if( mysqli_fetch_assoc($result1)){
        return false;
    }

    mysqli_query($conn,"INSERT INTO email VALUES('$email1')");


    return mysqli_affected_rows($conn);

}



function registrasi2($data2){
    global $conn;

    $jenis=$data2['jenis'];
    $namahewan=$data2['namahewan'];
    $ras=$data2['ras'];
    $warna=$data2['warna'];
    $umur=$data2['umur'];
    $kelamin = $data2['kelamin'];
    $tgltitip=$data2['tgltitip'];
    $tglambil=$data2['tglambil'];
    $pesan=$data2['pesan'];

    $namapemilik=$data2['namapemilik'];
    $notelp=$data2['notelp'];
    $alamat=$data2['alamat'];
    $usernameses = isset($_SESSION['usernameses']) ? $_SESSION['usernameses'] : 'Default';

    mysqli_query($conn, "INSERT INTO isian (username, namahewan, jenis, ras, warna, umur, kelamin, tgltitip, tglambil, pesan, namapemilik, notelp, alamat)
                          VALUES ('$usernameses', '$namahewan', '$jenis', '$ras', '$warna', '$umur', '$kelamin', '$tgltitip', '$tglambil', '$pesan', '$namapemilik', '$notelp', '$alamat')");
    return mysqli_affected_rows($conn);
}
ob_end_flush();
?>



