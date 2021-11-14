<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"update dokter set nama='$nama', no_telp='$no_telp', alamat='$alamat' where id='$id'");

header("location:dokter.php");

?>