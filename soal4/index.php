<?php
require 'config.php';


if (isset($_POST['cari'])) {
    $cari = $_POST['namebook'];
    $select = mysqli_query($conn, "SELECT * FROM books INNER JOIN category ON books.idctg = category.idctg WHERE namebook LIKE '%$cari%' ");
} else {
    $select = mysqli_query($conn, "SELECT * FROM books INNER JOIN category ON books.idctg = category.idctg");
}



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

    <div class="row">

        <div class="col-md-3">

            <div class="list-group">

                <a href="category.php" class="list-group-item list-group-item-action">Data Category</a>
                <a href="databuku.php" class="list-group-item list-group-item-action">Data Buku</a>
                <a href="#" class="list-group-item list-group-item-action">Transaksi</a>

            </div>
        </div>
        <div class="col-md-9">

            <section>

                <h1 class="text-center">Data Perpustakaan</h1>
            </section>


            <div class="container">

                <a href="tambahdata.php" class="btn btn-success">Tambah</a>
                <form action="" method="post">

                    <input type="text" name="namebook" placeholder="cari Judul buku.." class="form-control">
                    <button class="btn btn-outline-primary" name="cari">Cari</button>

                </form>
                <div class="row">

                    <?php foreach ($select as $row) :  ?>
                        <div class="col-md-6">
                            <div class="card" style="width: 18rem;">
                                <img src="img/<?= $row['image']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['namebook']; ?></h5>
                                    <p class="card-text">Jenis : <?= $row['namactg']; ?> </p>
                                    <p class="card-text">Stock : <?php

                                                                    $stok = $row['stok'];
                                                                    if ($stok <= 1) {
                                                                        echo 'stok habis';
                                                                        echo '<br>';
                                                                        echo '<br>';

                                                                        echo ' <a href="#" class="btn btn-primary disabled"  aria-disabled="true">Pinjam</a> ';
                                                                        echo ' <a href="#" class="btn btn-warning"  aria-disabled="false">Kembali</a> ';
                                                                    } else {
                                                                        echo $row['stok'];
                                                                        echo '<br>';
                                                                        echo '<br>';
                                                                        echo ' <a href="#" class="btn btn-primary"  aria-disabled="true">Pinjam</a> ';
                                                                        echo ' <a href="#" class="btn btn-warning"  aria-disabled="false">Kembali</a>';
                                                                    }
                                                                    ?></p>



                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>



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