<?php
// Definisikan variabel
$alas = 8; // panjang alas dalam cm
$tinggi_alas = 4; // tinggi alas dalam cm
$tinggi_prisma = 20; // tinggi prisma dalam cm
// Hitung luas alas segitiga
$luas_alas = 0.5 * $alas * $tinggi_alas;
// Hitung volume prisma segitiga
$volume_prisma = $luas_alas * $tinggi_prisma;
// Tampilkan hasil
echo "Volume prisma segitiga dengan alas $alas cm dan tinggi $tinggi_prisma cm adalah:
$volume_prisma cm^3";
?>