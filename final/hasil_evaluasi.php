<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DarahKu</title>
    <link rel="stylesheet" href="../assets/css/hasil_evaluasi.css">
    <!-- Include Bootstrap CSS -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/GlobalStyle.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="dashboard.php">DarahKu</a></div>
            <div class="menu">
                <a href="#" class="tombol-menu">
                    <span class="garis"></span>
                    <span class="garis"></span>
                    <span class="garis"></span>
                </a>
                <ul>
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="artikel1.php">Artikel</a></li>
                    <li><a href="cekgejala.php">Cek Gejala</a></li>
                </ul>
            </div>
        </div>
    </nav>

    
    <?php
    $kolesterolResult = isset($_GET['kolesterol']) ? $_GET['kolesterol'] : '';
    $asamUratResult = isset($_GET['asam_urat']) ? $_GET['asam_urat'] : '';
    $diabetesResult = isset($_GET['diabetes']) ? $_GET['diabetes'] : '';

    echo '<div class="centered-text">';
    echo "Hasil Evaluasi:<br>";
    echo "Kolesterol: " . $kolesterolResult . "<br>";
    echo "Asam Urat: " . $asamUratResult . "<br>";
    echo "Diabetes: " . $diabetesResult;
    echo '</div>';
    
    ?>
    <br><br>
    <a href="cekgejala.php">Kembali ke Cek Gejala</a>
</body>
</html>