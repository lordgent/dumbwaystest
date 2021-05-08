<?php
require 'config.php';

if (isset($_POST['tambah'])) {
    $nama = $_POST['namactg'];

    $sel = mysqli_query($conn, "INSERT INTO category VALUES (NULL, '$nama')");
    if ($sel) {
        echo '<script>alert("Data masih berhasil di tambahkan");  window.location.href="category.php";</script>';
    } else {
        echo 'gagal ditambahkan';
        return false;
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
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
        <br>
        <h2 class="text-center">Tambah Category</h2>
    </section>

    <div class="container">

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Jenis Category</label>
                <input type="text" class="form-control" name="namactg" placeholder="contoh: Novel, Horror, Biografi dll">
            </div>


            <br>
            <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
            <a href="category.php" class="btn btn-danger">Batal</a>
        </form>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>