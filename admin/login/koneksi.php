<?php
$koneksi = mysqli_connect("localhost", "root", "", "penjualann");

if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>