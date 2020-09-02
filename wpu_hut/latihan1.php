<?php
$json = file_get_contents("data/pizza.json");
$array = json_decode($json, true);
//decode untuk json ke array
//encode untuk json ke object


// // var_dump($menu = $array["menu"]);
// var_dump($menu = $array["menu"]);
$menu = $array["menu"];
$pizza = [];
foreach ($menu as $m) {
    if ($m['kategori'] == 'pizza') {
        array_push($pizza, $m);
    }
}

// $kat = [];
// foreach ($menu as $m) {
//     array_push($kat, $m['kategori']);
// }
// $kategori = array_unique($kat);

// var_dump($kategori);
// var_dump($pizza);
// die;

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Hello, world!</title>
    <link rel="stylesheet" type="text/css" href="stylee.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo.png" width="135"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary">All Menu</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="width: 77% ">
        <div class="row mt-2">
            <div class="col">
                <h1>All Menu</h1>
            </div>
        </div>

        <div class="row">
            <div class="card-deck">
                <?php foreach ($menu as $row) : ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="card mb-3">
                            <img src="img/pizza/<?= $row["gambar"]; ?>" class="gambar">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row["nama"]; ?></h5>
                                <p class="card-text"><?= $row["deskripsi"]; ?></p>
                                <h2 class="cards card-title "><strong> Rp.<?= $row["harga"]; ?></strong></h2>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>