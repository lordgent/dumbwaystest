<?php
require 'config.php';

$databook = mysqli_query($conn, "SELECT * FROM books INNER JOIN category ON books.idctg = category.idctg");



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




    <div class="row">

        <div class="col-md-2">

            <div class="list-group">

                <a href="category.php" class="list-group-item list-group-item-action">Data Category</a>
                <a href="databuku.php" class="list-group-item list-group-item-action">Data Buku</a>
                <a href="#" class="list-group-item list-group-item-action">Transaksi</a>

            </div>
        </div>
        <div class="col-md-10">
            <section>
                <h2 class="text-center">Data Buku</h2>
            </section>
            <br>
            <div class="container">
                <a href="tambahdata.php" class="btn btn-primary">Tambah</a>
                <table class="table" style="text-align: center;" border="1" width="100%">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Buku</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Config</th>
                            <th scope="col">Info</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($databook as $bok) : ?>

                            <tr>

                                <th scope="row"><?= $i; ?></th>
                                <td><?= $bok['namebook']; ?></td>
                                <td><?= $bok['stok']; ?></td>
                                <td>
                                    <a href="hapusbuku.php?id=<?= $bok['idbook']; ?>" onclick="return confirm('kamu yakin mau menghapus buku ini?');"><img src="img/remove (2).png" alt=""></a>
                                    <a href="editbuku.php?id=<?= $bok['idbook']; ?>"><img src="img/edit.png" alt=""></a>
                                </td>
                                <td><a href="detail.php?id=<?= $bok['idbook']; ?>" class="btn btn-success">Detail</a></td>

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