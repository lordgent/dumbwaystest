<?php

require 'config.php';

$id = $_GET['id'];
$del =  mysqli_query($conn, "DELETE FROM category WHERE idctg = '$id' ");

if ($del) {
    echo '<script>alert("Data berhasil di hapus!");  window.location.href="category.php";</script>';
} else {
    echo '<script>alert("Data masih berhubungan dengan tabel lain!");  window.location.href="category.php";</script>';
    exit;
}

return mysqli_affected_rows($conn);
