<?php
require 'config.php';

$ctg = mysqli_query($conn, "SELECT * FROM category");


if (isset($_POST['tambah'])) {

    $nama = $_POST['namebook'];
    $stok = $_POST['stok'];
    $des = $_POST['deskripsi'];
    $jns = $_POST['idctg'];

    $rand = rand();
    $ekstensi = array('jpg', 'jpeg', 'png');
    $nama_file = $_FILES['image']['name'];
    $tmp = $_FILES['image']['size'];
    $ext = pathinfo($nama_file, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {

        echo 'gagal!';
        return false;
    } else {

        if ($tmp < 20971500) {



            $xx = $rand . '_' . $nama_file;
            move_uploaded_file($_FILES['image']['tmp_name'], 'img/' . $rand . '_' . $nama_file);


            $masuk = mysqli_query($conn, "INSERT INTO books VALUES (NULL,'$nama','$stok', '$xx', '$des', '$jns')");

            if ($masuk) {
                echo '<script>alert("Buku berhasil di Tambahkan!");  window.location.href="databuku.php";</script>';
            } else {
                echo 'gagal di tambahkan';
            }
        }
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
        <h2 class="text-center">Tambah Buku</h2>
    </section>

    <div class="container">

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Judul Buku</label>
                <input type="text" class="form-control" name="namebook" placeholder="contoh: Kisah Bambang">
            </div>

            <div class="form-group">
                <label for="">Stok</label>
                <input type="number" class="form-control" name="stok" placeholder="contoh : 1-100">
            </div>


            <div class="form-group">
                <label for="">Gambar</label>
                <input type="file" class="form-control" name="image" placeholder=" warning: format jpg/Png">
            </div>
            <div class="form-group">
                <label for="">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder=" Contoh : Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamuquaerat">
            </div>
            <label for="form-control">Jenis Buku</label>
            <select name="idctg" class="form-control">

                <?php foreach ($ctg as $riw) :  ?>
                    <option value="<?= $riw['idctg']; ?>"> <?= $riw['namactg']; ?> </option>
                <?php endforeach;  ?>
            </select>
            <br>
            <button type="submit" class="btn btn-primary" name="tambah">Submit</button>
            <a href="index.php" class="btn btn-danger">Batal</a>
        </form>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>