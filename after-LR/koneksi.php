<?php 
$koneksi = mysqli_connect("localhost", "root", "","fivent_database");


if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
}


?>