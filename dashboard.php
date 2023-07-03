<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DarahKu</title>
    <link rel="stylesheet" href="../assets/css/GlobalStyle.css">
    <!-- Include Bootstrap CSS -->
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"
        />
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="#home">DarahKu</a></div>
            <div class="menu">
                <a href="home" class="tombol-menu">
                    <span class="garis"></span>
                    <span class="garis"></span>
                    <span class="garis"></span>
                </a>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#artikelcekdarah">Artikel</a></li>
                    <li><a href="cekgejala.php">Cek gejala</a></li>
                    <li><a href="#tutors">Our Team</a></li>
                    <li><a href="logout.php">log out</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src='../assets/img/image_1.png'/>
            <div class="kolom">
                <h2><?= "Welcome ".$_SESSION['sendusername']; ?></h2>
                <p class="deskripsi">Mecegah lebih baik dari pada mengobati. cegah Diabetes, Asam Urat, dan Kolestrol dengan DarahKu</p>
                <h2>Mengapa DarahKu Hadir?</h2>
                <p>Penyakit Diabetes, Kolestrol, serta Asam Urat ialah penyakit yang rentan bagi tubuh kita. Dengan Begitu hadirlah DarahKu sebagai platform untuk kita semua guna untuk pengecekan apakah di tubuh kita terdapat penyakit Diabetes, Kolestrol, serta Asam Urat. Serta kami memberikan solusi untuk mencegah penyakit tersebut dengan Tips dan Cara pengobatan nya</p>
            </div>
        </section>

        <!-- untuk fitur -->
        <section id="artikelcekdarah">
            <div class="kolom">
                <h2>Artikel</h2>
                <p>Artikel kesehatan yang kami tawarkan akan membantu anda untuk mendapatkan informasi mengenai kesehatan</p>
                <p><a href="artikel1.php" class="tbl-biru">Baca Artikel</a></p>
            </div>
            <div class="kolom">
                <h2>Cek DarahMu</h2>
                <p>Cek Darahmu yuk, biar kamu mengetahui bagaimana tingkat kemungkinan anda terserang penyakit terutama Diabetes, Kolestrol, serta Asam Urat</p>
                <p><a href="cekgejala.php" class="tbl-biru">Cek gejala</a></p>
            </div>
            <img src='../assets/img/image_2.png'/>
        </section>

        <!-- untuk team -->
        <section id="tutors">
            <div class="tengah">
                <div class="kolom">
                    <h2>Our Team</h2>
                </div>

                <div class="tutor-list">
                    <div class="kartu-tutor">
                        <a href="http://www.linkedin.com/in/ailza-zandra-05813021b">
                            <img src='../assets/img/ailzaa.png' alt="Ailza Zandra">
                        </a>
                        <p>Ailza Zandra</p>
                    </div>
                    <div class="kartu-tutor">
                        <a href="https://www.linkedin.com/in/firdaa-nur-syahrani-46b988220/">
                            <img src='../assets/img/firdaa.png' alt="Firda Nur Syahrani">
                            </a>
                        <p>Firda Nur Syahrani </p>
                    </div>
                </div>
            </div>
        </section>


    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <img src='../assets/img/DarahKu.png'/>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2023. <b>DarahKu</b> Dicoding Academy.
        </div>
    </div>
    
</body>
</html>