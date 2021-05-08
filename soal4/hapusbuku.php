<?php

require 'config.php';

$id = $_GET['id'];
$del =  mysqli_query($conn, "DELETE FROM books WHERE idbook = '$id' ");

if ($del) {
    echo '<script>alert("Buku berhasil di hapus!");  window.location.href="databuku.php";</script>';
} else {
    echo '<script>alert("Buku masih berhubungan dengan tabel lain!");  window.location.href="category.php";</script>';
    exit;
}

return mysqli_affected_rows($conn);
