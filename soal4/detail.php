<?php
require 'config.php';
$id = $_GET['id'];

$det = mysqli_query($conn, "SELECT * FROM books INNER JOIN category ON books.idctg = category.idctg WHERE idbook = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .detail {
            justify-content: center;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/book.png" alt="">
                Perpustakaan
            </a>
        </div>
    </nav>
    <br>
    <div class="container">
        <h2 class="text-center">Detail Buku</h2>
        <div class="detail">
            <?php foreach ($det as $da) :  ?>
                <img src="img/<?= $da['image']; ?>" alt="gambar">
                <h4>Judul: <?= $da['namebook']; ?></h4>
                <p>Jumlah Stok: <?= $da['stok']; ?> </p>
                <p>Deskripsi : <?= $da['deskripsi']; ?> </p>
                <p>Jenis : <?= $da['namactg']; ?> </p>
                <a href="databuku.php" class="btn btn-success">kembali</a>
        </div>
    <?php endforeach; ?>




    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>