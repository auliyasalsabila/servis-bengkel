<?php 
  session_start();    
  $sid = session_id();
  include "koneksi.php";
?>
 <h1>Keranjang Belanja</h1>

  <table border=1>
      <tr>
        <th>Nama Produk</th>
        <th>jumlah</th>
        <th>Harga</th>
        <th>Sub Total</th>
      </tr>
      <br><br>
      <?php
        $total = 0;
        $data = mysqli_query($koneksi, "SELECT keranjang.jenisproduk, keranjang.jumlahpesanan, produk.jenisproduk, produk.hargaproduk FROM keranjang, produk WHERE keranjang.jenisproduk=produk.jenisproduk");       
        while($datanya=mysqli_fetch_array($data)){
          $subtotal = $datanya['hargaproduk'] * $datanya['jumlahpesanan'];
          $total += $subtotal;
      ?>
        <tr>
            <td><?php echo $datanya['jenisproduk']; ?></td>
            <td><?php echo $datanya['jumlahpesanan']; ?></td>
            <td><?php echo $datanya['hargaproduk']; ?></td>
            <td><?php echo $subtotal; ?></td>
        </tr>
        <?php
        }
        ?>
        </table>
        <h2>Total Belanja : <b><?php echo $total; ?></b></h2>
        <ul>
        <li><a href='produk.php'>Tambah Barang</a></li>
        <li><a href='struknya.php'>Selesai belanja</a></li>
        </ul>
