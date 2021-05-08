<?php

$conn = mysqli_connect('localhost', 'root', '', 'dbperpustakaan');

if ($conn) {
} else {
    echo 'error' . mysqli_connect_error();
    die;
}
