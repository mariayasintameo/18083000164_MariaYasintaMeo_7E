<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['no_telp'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"insert into dokter values('','$nama','$no_telp','$alamat')");

header("location:dokter.php");
?>