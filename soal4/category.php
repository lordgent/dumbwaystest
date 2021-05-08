<?php
require 'config.php';

$datactg = mysqli_query($conn, "SELECT * FROM category");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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

    <section>
        <h2 class="text-center">Data Category</h2>
    </section>
    <br>
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
                <a href="tbhctg.php" class="btn btn-primary">Tambah</a>
                <table class="table" style="text-align: center;" border="1">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Category</th>
                            <th scope="col">Configuration</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($datactg as $cg) : ?>

                            <tr>

                                <th scope="row"><?= $i; ?></th>
                                <td><?= $cg['namactg']; ?></td>
                                <td>
                                    <a href="hapusctg.php?id=<?= $cg['idctg']; ?>"" onclick=" return confirm('kamu yakin mau hapus?');"><img src="img/remove (2).png" alt=""></a>
                                    <a href="editctg.php?id=<?= $cg['idctg']; ?>"><img src="img/edit.png" alt="gmbr"></a>
                                </td>

                            </tr>
                            <?php $i++; ?>
                        <?php endforeach;  ?>

                    </tbody>
                </table>



            </div>
        </div>

    </div>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>