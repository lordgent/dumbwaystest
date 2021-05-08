<?php
require 'config.php';

$select = mysqli_query($conn, "SELECT * FROM books INNER JOIN category ON books.idctg = category.idctg");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <style>
        body {
            background-color: #E5E7E9;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/book.png" alt="">
                Perpustakaan
            </a>
        </div>
    </nav>

    <section>

        <h1 class="text-center">Data Perpustakaan</h1>
    </section>


    <div class="row">

        <div class="col-md-2">

            <div class="list-group">

                <a href="category.php" class="list-group-item list-group-item-action">Data Category</a>
                <a href="databuku.php" class="list-group-item list-group-item-action">Data Buku</a>
                <a href="#" class="list-group-item list-group-item-action">Transaksi</a>

            </div>
        </div>
        <div class="col-md-10">
            <div class="container">
                <a href="tambahdata.php" class="btn btn-success">Tambah</a>
                <form action="" method="post">

                    <input type="text" name="namebook" placeholder="cari Judul buku.." class="form-control">
                    <button class="btn btn-outline-primary">Cari</button>

                </form>
                <div class="row">

                    <?php foreach ($select as $row) :   ?>
                        <div class="col-md-6">
                            <div class="card" style="width: 18rem;">
                                <img src="img/<?= $row['image']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['namebook']; ?></h5>
                                    <p class="card-text">Jenis : <?= $row['namactg']; ?></p>

                                    <a href="#" class="btn btn-primary">Pinjam</a>
                                    <a href="" class="btn btn-warning">kembali</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;  ?>


                </div>
            </div>

        </div>


    </div>

    <br>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>