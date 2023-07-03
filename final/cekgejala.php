<?php
    $error = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $kolesterolCount = 0;
        $asamUratCount = 0;
        $diabetesCount = 0;
    
      // Menghitung jumlah "Ya" untuk setiap penyakit
      for ($i = 1; $i <= 5; $i++) {
        $kolesterolKey = 'kolesterol' . str_pad($i, 2, "0", STR_PAD_LEFT);
        $asamUratKey = 'asam_urat' . str_pad($i, 2, "0", STR_PAD_LEFT);
        $diabetesKey = 'diabetes' . str_pad($i, 2, "0", STR_PAD_LEFT);
    
        if (isset($_POST[$kolesterolKey]) && $_POST[$kolesterolKey] === 'ya') {
          $kolesterolCount++;
        }
    
        if (isset($_POST[$asamUratKey]) && $_POST[$asamUratKey] === 'ya') {
          $asamUratCount++;
        }
    
        if (isset($_POST[$diabetesKey]) && $_POST[$diabetesKey] === 'ya') {
          $diabetesCount++;
        }
      }
    
      // Mengevaluasi hasil penyakit
      $kolesterolResult = ($kolesterolCount >= 3) ? "Positif Kolesterol" : "Negatif Kolesterol";
      $asamUratResult = ($asamUratCount >= 3) ? "Positif Asam Urat" : "Negatif Asam Urat";
      $diabetesResult = ($diabetesCount >= 3) ? "Positif Diabetes" : "Negatif Diabetes";
    
      // Validasi pemilihan opsi
      for ($i = 1; $i <= 5; $i++) {
        $kolesterolKey = 'kolesterol' . str_pad($i, 2, "0", STR_PAD_LEFT);
        $asamUratKey = 'asam_urat' . str_pad($i, 2, "0", STR_PAD_LEFT);
        $diabetesKey = 'diabetes' . str_pad($i, 2, "0", STR_PAD_LEFT);
    
        if (!isset($_POST[$kolesterolKey]) || ($_POST[$kolesterolKey] !== 'ya' && $_POST[$kolesterolKey] !== 'tidak')) {
          $error = "Silakan pilih back lalu pilih opsi untuk gejala kolesterol pada Nomor " . $i;
          break;
        }
    
        if (!isset($_POST[$asamUratKey]) || ($_POST[$asamUratKey] !== 'ya' && $_POST[$asamUratKey] !== 'tidak')) {
          $error = "Silakan pilih back lalu pilih opsi untuk gejala asam urat pada Nomor " . $i;
          break;
        }
    
        if (!isset($_POST[$diabetesKey]) || ($_POST[$diabetesKey] !== 'ya' && $_POST[$diabetesKey] !== 'tidak')) {
          $error = "Silakan pilih back lalu pilih opsi untuk gejala diabetes pada Nomor " . $i;
          break;
        }
      }
    
      if ($error === "") {
        // Redirect ke halaman hasil evaluasi
        header("Location: hasil_evaluasi.php?kolesterol=$kolesterolResult&asam_urat=$asamUratResult&diabetes=$diabetesResult");
        exit();
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DarahKu</title>
    <link rel="stylesheet" href="../assets/css/cekgejala.css">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"/>
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

    <div class="container">
    <form method="POST">
      <?php if ($error !== "") : ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
      <?php endif; ?>

      <h3>Kolesterol</h3>
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Gejala</th>
            <th>Jawaban</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $kolesterolGejala = array("Rasa sakit di kepala", "Pegal sampai ke pundak", "Mudah mengantuk", "Kaki bengkak", "mudah lelah");
          for ($i = 1; $i <= 5; $i++) : ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $kolesterolGejala[$i - 1]; ?></td>
              <td>
                <select name="kolesterol<?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?>" class="form-control">
                  <option selected>pilih</option>
                  <option value="ya">Ya</option>
                  <option value="tidak">Tidak</option>
                </select>
              </td>
            </tr>
          <?php endfor; ?>
        </tbody>
      </table>

      <h3>Asam Urat</h3>
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Gejala</th>
            <th>Jawaban</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $asamUratGejala = array("sendi terasa nyeri", "sendi terasa membengkak", "Sendi kaku", "jempol kaki terasa nyeri", "sendi terasa panas");
          for ($i = 1; $i <= 5; $i++) : ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $asamUratGejala[$i - 1]; ?></td>
              <td>
                <select name="asam_urat<?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?>" class="form-control">
                  <option selected>pilih</option>
                  <option value="ya">Ya</option>
                  <option value="tidak">Tidak</option>
                </select>
              </td>
            </tr>
          <?php endfor; ?>
        </tbody>
      </table>

      <h3>Diabetes</h3>
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Gejala</th>
            <th>Jawaban</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $diabetesGejala = array("sering merasa haus", "sering buang air kecil", "Sering merasa lapar", "sering merasa lelah", "sering mengalami penurunan berat badan");
          for ($i = 1; $i <= 5; $i++) : ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $diabetesGejala[$i - 1]; ?></td>
              <td>
                <select name="diabetes<?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?>" class="form-control">
                  <option selected>pilih</option>
                  <option value="ya">Ya</option>
                  <option value="tidak">Tidak</option>
                </select>
              </td>
            </tr>
          <?php endfor; ?>
        </tbody>
      </table>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

    <div id="copyright">
        <div class="wrapper" style="align-items: center">
            &copy; 2023. <b>DarahKu</b> Dicoding Academy.
        </div>
    </div>
    
</body>
</html>