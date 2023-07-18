<?php

$data = file_get_contents('data/pizza.json');
$menu = json_decode($data, true);

//var_dump($menu["menu"][0]["nama"]);
$menu = $menu["menu"];
//echo $menu[0]["nama"];

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>WPU Hut</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navber-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" width="120">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home</a>
            </div>
        </div>
    </div>
</nav>

<div class="container">

    <div class="row" mt-3>
        <div class="col">
            <h1>All Menu</h1>
        </div>
    </div>

    <div class="row">
        <?php foreach($menu as $row): ?>
        <div class="col-md-4">
            <div class="card mb-3" style="width: 18rem;">
                <img src="img/menu/<?= $row["gambar"]; ?>" class="card-img-top">
                <div class="card">
                    <h5 class="card-title"><?= $row["nama"]; ?></h5>
                    <p class="card-text"> <?= $row["deskripsi"]; ?></p>
                    <h5 class="card-title">Rp. <?= $row["harga"]; ?></h5>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>

</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>