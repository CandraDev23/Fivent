<?php
include 'koneksi.php';

$id_event = $_GET['id_event'];

$id = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM data_event WHERE id_event='$id_event'");

header("location:myevent.php?id= $id");
die();
?>