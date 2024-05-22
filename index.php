<?php
session_start();

$_SESSION=[];
session_unset();
session_destroy();
require 'functions.php';


if(isset($_POST['subscribe'])) {
    
    if(registrasi1($_POST) > 0) {
        $error1=true;
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
        <title>Your Pet</title>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="style3.css">
        <style>
            .testimonial__bg{
                background-color: var(--white-color);
                border-radius: var(--border-section);
                display: grid;
                row-gap: 20px;
                padding: 100px 30px;
            }
            .testi-head{
                background-color:white;
            }
            .testi-head h2{
                text-align:center;
                margin-bottom:25px;
            }
            .testi-1 p{
                text-align:initial;
            }
            .testi-unity{
                display:grid;
                grid-template-columns:repeat(3,1fr);
                gap: 15px;
                background-color:white;
            }
            .testi-1{
                border: 1px solid green;
                padding: 15px;
            }
            .makasih{
                text-align:center;
                margin-top:15px;
                font-size:20px;
            }
            .hidden1{
                color:white;
                border: 2px solid blue;
                border-radius: 12px;
                box-shadow: 0 8px 32px hsla(12, 32%, 8%, .6); 
                background: linear-gradient(180deg,
                            hsl(39,62%,75%) 0%,
                            hsl(39,62%,45%) 100%);
                margin-bottom: 15px;
                padding:10px;
            }
            .hidden1 p{
                 font-size:20px;
            }
            @media screen and (max-width:576px){
                .testi-unity{
                    grid-template-columns:repeat(1,1fr);
                }
            }
        </style>
    </head>
    <body>
        <header class="header" id="header">
            <div class="header__border"></div>

            <nav class="nav container">
                <a href="#home" class="nav__logo active-link">
                    <img src="sayur/151542-200.png" alt="foto anjg">
                    Your Pet
                </a>

                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link">
                                <i class="ri-home-5-fill"></i>
                                <span>Home</span>
                            </a>
                        </li>
                       
                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class="ri-award-fill"></i>
                                <span>About</span>
                            </a>
                        
                        </li>
                       
                        <li class="nav__item">
                            <a href="#steps" class="nav__link">
                                <i class="ri-compass-3-fill"></i>
                                <span>Services</span>
                            </a>
                        </li>
                       
                        <li class="nav__item">
                            <a href="#testimonial" class="nav__link">
                                <i class="ri-message-3-fill"></i>
                                <span>Policy</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="main">

            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__data">
                        <?php if(isset($error1)): ?>
                             <div class="hidden1" id="popup">
                                <p>E-Mail Anda Sudah Kami Simpan <br>Tunggu Info Selanjutnya !!</p>
                            </div>
                        <?php endif; ?>
                        <h1 class="home__title">
                            It's time for taking care<br>
                            to your pet
                        </h1>
                        <p class="home__description"> 
                            Saat kesibukan sehari-hari menghampiri, jangan biarkan hewan peliharaan Anda merasa ditinggalkan. Titipkan mereka di sini, di tempat yang penuh perhatian dan cinta. Kami adalah jasa penitipan hewan yang tidak hanya memberikan tempat aman, tetapi juga penuh dengan kehangatan dan keceriaan.   
                        </p>

                        <a href="login.php" class="button">
                            Titipkan Sekarang <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>

                    <img src="sayur/dog-6346068_960_720.png" alt="home image" class="home__img">
                </div>
            </section>

            <section class="products">
                <div class="products__bg section">
                    <div class="products__container container grid">
                        <div class="products__data">
                            <a href="#about" class="products__button">
                                Scroll Down <i class="ri-arrow-down-s-line"></i>
                            </a>

                            <p class="products__description">
                                Fasilitas kami dilengkapi dengan sistem keamanan canggih untuk memastikan keamanan dan kenyamanan maksimal. Tim kami yang berpengalaman dan penuh kasih sayang selalu siap memberikan perhatian khusus kepada setiap hewan, memastikan bahwa mereka mendapatkan perawatan yang dibutuhkan sesuai dengan kebutuhan individu mereka <br> Berikut beberapa fasilitas kami:
                            </p>
                        </div>
                        <div class="products__content">
                            <article class="products__card">
                                <img src="sayur/1.jpeg" alt="products image" class="products__img">
                                <h3 class="products__name">Ruangan Ideal</h3>
                            </article>
                           
                            <article class="products__card">
                                <img src="sayur/anjing berenang.webp" alt="products image" class="products__img img-1">
                                <h3 class="products__name">Kolam Renang</h3>
                            </article>
                          
                            <article class="products__card">
                                <img src="sayur/01gyvqvtznrr5tntqn53p446ek.jpg" alt="products image" class="products__img">
                                <h3 class="products__name">Kandang Nyaman</h3>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about" id="about">
                <div class="about__bg section">
                    <div class="about__container container grid">
                        <div class="about__data">
                            <h2 class="section__title">
                                Tentang Kami
                            </h2>

                            <p class="about__description">
                                Kami adalah tim penyedia penitipan hewan dengan hati yang penuh kasih. Dengan pengalaman panjang dalam merawat hewan, kami menyediakan lingkungan yang aman, nyaman, dan ramah hewan. Tim kami yang terlatih dengan baik memastikan setiap hewan menerima perhatian khusus sesuai dengan karakter dan kebutuhannya. Dengan fasilitas modern dan standar keamanan tinggi, kami berkomitmen untuk menjaga kesejahteraan dan kebahagiaan hewan peliharaan Anda. Terima kasih telah mempercayakan kami untuk merawat mereka dengan cinta dan perhatian yang pantas mereka terima.
                            </p>
                        </div>
                      
                        <img src="sayur/Usaha_Petshop_BFI Finance.jpg" alt="about image" class="about__img">
                    </div>
                </div>
            </section>

            <section class="steps" id="steps">
                <div class="steps__bg section">
                    <h2 class="section__title">
                        Some Of Our Services
                    </h2>
                    <div class="steps__content">
                        <article class="steps__card">
                            <img src="sayur/layanan 1.jpg" alt="steps image" class="steps__img">
                            <h3 class="steps__name">Pemantauan Kesehatan</h3>
                        </article>
                       
                        <article class="steps__card">
                            <img src="sayur/layanan 2.jpg" alt="steps image" class="steps__img">
                            <h3 class="steps__name">Perawatan Rambut</h3>
                        </article>
                      
                        <article class="steps__card">
                            <img src="sayur/layanan 3.jpg" alt="steps image" class="steps__img">
                            <h3 class="steps__name">Pembersihan</h3>
                        </article>

                        <article class="steps__card">
                            <img src="sayur/layanan 4.jpg" alt="steps image" class="steps__img">
                            <h3 class="steps__name">Memberikan Makanan Sehat</h3>
                        </article>

                        <article class="steps__card">
                            <img src="sayur/layanan 5.jpg" alt="steps image" class="steps__img">
                            <h3 class="steps__name">Playing Times</h3>
                        </article>

                        <article class="steps__card">
                            <img src="sayur/layanan 6.jpg" alt="steps image" class="steps__img">
                            <h3 class="steps__name">Controlling</h3>
                        </article>
                    </div>
                </div>
            </section>

            <section class="testimonial" id="testimonial">
                <div class="testimonial__bg section">

                    <div class="testi-head">
                        <h2 class="testi-title">
                            Kebijakan dan Syarat
                        </h2>
                        <p class="policy-mes">
                        Selamat datang di halaman Kebijakan dan Syarat Penggunaan Layanan Your Pet. Sebelum Anda melanjutkan penggunaan layanan kami, mohon untuk membaca dan memahami ketentuan-ketentuan berikut ini:
                        </p>    
                    </div>
                    <div class="testi-unity">
                        <div class="testi-1">
                            <h3>Perawatan Kesehatan Hewan</h3>
                            <p>- Hewan yang dititipkan harus memiliki catatan vaksinasi yang lengkap. <br>
                            - Jika hewan terlihat sakit selama penitipan, kami berhak untuk mengambil langkah-langkah yang dianggap perlu untuk menjaga kesehatan hewan dan hewan-hewan lainnya.</p>
                        </div>

                        <div class="testi-1">
                            <h3>Tanggung Jawab Pemilik</h3>
                            <p>
                                -Pemilik bertanggung jawab atas kebenaran informasi yang diberikan tentang kesehatan dan perilaku hewan.
                                <br>- Pemilik harus memberikan informasi kontak yang dapat dihubungi selama masa penitipan.
                            </p>
                        </div>

                        <div class="testi-1">
                            <h3>Fasilitas dan Perlengkapan</h3>
                            <p>
                                - Kami menyediakan tempat tidur dan mangkuk makan untuk hewan, tetapi pemilik dapat membawa perlengkapan pribadi jika diinginkan.
                                <br>- Kami tidak bertanggung jawab atas kerusakan atau kehilangan perlengkapan pribadi hewan.
                            </p>
                        </div>

                        <div class="testi-1">
                            <h3>Keamanan dan Perlindungan</h3>
                            <p>
                                - Kami berkomitmen untuk menjaga keamanan hewan di penitipan. Namun, kami tidak bertanggung jawab atas kejadian atau kecelakaan yang di luar kendali kami.
                            </p>
                        </div>

                        <div class="testi-1">
                            <h3>Privasi Pengguna</h3>
                            <p>
                                - Informasi pribadi yang diberikan oleh pengguna akan dijaga kerahasiaannya dan hanya digunakan untuk keperluan penitipan hewan.
                            </p>
                        </div>
                    </div>
                    
                    <div class="title-end">
                        <p class="end-title">
                            Dengan menggunakan layanan Your Pet, Anda setuju untuk mematuhi semua ketentuan dan kebijakan yang tercantum di halaman ini. Jika Anda memiliki pertanyaan lebih lanjut atau perlu klarifikasi, jangan ragu untuk menghubungi tim dukungan kami.
                        </p>
                        <div class="makasih">
                            <p>
                                Terima kasih atas pengertian dan kerjasama anda 
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="footer__bg">
                <div class="footer__container container grid">
                    <div class="footer__data grid ">
                        <div>

                            <h3 class="footer__title">
                                Subscribe untuk mendapatkan informasi seputar kami
                            </h3>
                        </div>

                        <form action="" class="footer__form grid" method="post">
                            <input type="email" name='email1' placeholder="Enter e-mail address" class="footer__input">
                            <button type = "submit" class="button footer__button" name="subscribe" >
                                Subscribe <i class="ri-arrow-right-s-line"></i>
                            </button>
                            <p class="footer__description">
                                We care about your data.
                            </p>
                        </form>
                    </div>

                    <div class="footer__content grid">
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            
                            <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                        <span class="footer__copy">
                            &#169; Copyright. All rights reserved
                        </span>
                    </div>
                </4div>
            </div>
        </footer>

        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-fill"></i>
        </a>





        <script src="main.js"></script>
    </body>
</html>