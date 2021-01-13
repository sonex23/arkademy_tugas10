<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sona Ermando</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins');

        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-5">
        <a class="navbar-brand" href="index.php">Arkademy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="index.php?menu=view_produk" class="list-group-item list-group-item-action">Produk</a>
                </div>
            </div>
            <div class="col-md-9 text-center">
                <?php
                if (isset($_GET['menu'])) {
                    $menu = $_GET['menu'];
                    include "$menu.php";
                } else {
                ?>
                    <h2>Selamat Datang di Website Sona Ermando</h2>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>