<?php 

//manggil json 
$json = 'data.json';
$data = json_decode(file_get_contents($json));

function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Darahku</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/GlobalStyle.css">
</head>
<body>
    <nav>
        <div class="wrapper">
                <div class="logo"><a href="dashboard.php">DarahKu</a></div>
                <div class="menu">
                    <a href="home" class="tombol-menu">
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

    <div class="row px-4 m0">
        
        <?php foreach($data->result as $artikel) { 
            //data array artikel
            $judul = $artikel->judul;   
            $summary = $artikel->summary;   
            $image = $artikel->image;   
            
        ?> 
            <div class="col-sm-4 mb-3 mb-sm-0 my-4 d-flex">
                <div class="card">
                    <input type="hidden" value="<?= $artikel->id ?>">
                    <img src="<?= $image ?>" class="gbr-card" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $judul ?></h5>
                        <p class="card-text"><?= limit_text($summary, 20) ?></p>
                        
                    </div>
                    <div class="card-footer">
                    <a href="<?= $artikel->link ?>" class="btn btn-primary">selengkapnya</a>
                    </div> 
                </div>
            </div>
        <?php } ?>

    </div>
</body>
</html>

</body>
</html>