<?php
  session_start();
  include 'koneksi.php';
  $sid = session_id();

  function isi(){
    $isi_keranjang = array();
    include 'koneksi.php';
    $sid = session_id();
    $data = mysqli_query($koneksi, "SELECT * FROM keranjang WHERE jenisproduk='$sid'");
    while ($datanya=mysqli_fetch_array($data)) {
      $isi_keranjang[] = $datanya;
    }
    return $isi_keranjang;
  }
  $tanggal = date("Ymd");
  mysqli_query($koneksi, "INSERT INTO pesanan(tanggal) VALUES('$tanggal')");
  $isi_keranjang = isi();
  $jumlah = count($isi_keranjang);
  for ($i=0; $i<$jumlah; $i++) { 
    mysqli_query($koneksi, "INSERT INTO detail(jenisproduk, jumlahpesanan) VALUES({$isi_keranjang[$i]['jenisproduk']}, {$isi_keranjang[$i]['jumlahpesanan']})");
  }
  for ($i=0; $i<$jumlah ; $i++) { 
    mysqli_query($koneksi, "DELETE FROM keranjang WHERE jenisproduk={isi_keranjang[$i]['jenisproduk']}");
  }
?>
<table>
<?php
        $total = 0;
        $data = mysqli_query($koneksi, "SELECT keranjang.jenisproduk, keranjang.jumlahpesanan, produk.jenisproduk, produk.hargaproduk FROM keranjang, produk WHERE keranjang.jenisproduk=produk.jenisproduk");       
        while($datanya=mysqli_fetch_array($data)){
          $subtotal = $datanya['hargaproduk'] * $datanya['jumlahpesanan'];
          $total += $subtotal;
      ?>
        <div class="kiri">
        <?php echo $datanya['jenisproduk']; ?>
        <br>
        <?php echo $datanya['jumlahpesanan'] . " x " . "Rp. " . number_format($datanya['hargaproduk'],2,',','.'); ?>
        <br>
      </div>
      <div class="kanan">
        <?php echo "Rp. " . number_format($subtotal,2,',',','); ?>
      </div>
      <?php
      }
      ?>
      <div class="foot">
        <hr>
        <?php echo "Rp. " . number_format($total,2,',','.'); ?>
        <br>
      <br>
      </div>
      <hr>
    </div>
    <div class="footer">
      <p>Terima Kasih! <br>Selamat Datang Kembali</p>
      <i>Jl. --------------</i>
    </div>
</table>
<a href="hapuskeranjang.php?id=<?php echo $datanya['jenisproduk']; ?>">Selesai</a>
