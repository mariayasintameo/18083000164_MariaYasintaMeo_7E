<?php

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from dokter where id='$id'");

header("location:dokter.php");
?>