<?php 
    session_start();
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Penjualan Jasa Service</title>
</head>
<body>
    <a href="service.php">Kembali</a>
    <center>
        <h3>Penjualan Jasa Service</h3>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Jenis Jasa Service</th>
                <th>Harga</th>
            </tr>
            <?php
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM pservice");
            while ($datanya = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <th><?php echo $no++; ?></th>
                <td><?php echo $datanya['tanggal']; ?></td>
                <td><?php echo $datanya['jenisservice']; ?></td>
                <td><?php echo $datanya['hargaservice']; ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </center>
</body>
</html>