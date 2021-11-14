<html>
<head>
    <title>Halaman Data Dokter - www.prodensiana.site</title>
</head>
<body>
    <center>
    <h2>Data Dokter - www.prodensiana.site</h2>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>No.Telpon</th>
            <th>Alamat</th>
            <th>OPSI</th>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "select * from dokter");
    while($d = ($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['no_telp']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td>
                <a href="edit_dokter.php?id=<?php echo $d['id']; ?>">Edit</a>
                <a href="hapus_dokter.php?id=<?php echo $d['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
    <br/>
    <a href="tambah_dokter.php">Tambah Data Dokter</a><br/>
    <a href="halaman_utama.php">HOME</a>
    </center>

</body>
</html>