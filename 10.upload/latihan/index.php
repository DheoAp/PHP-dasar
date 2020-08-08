<?php 
require 'functions.php';

$barang = query("SELECT * FROM barang");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Barang</title>
</head>
<body>
  <h3>Data Barang</h3>
  <a href="tambah.php">Tambah Barang</a>
  <table border="1px" cellpadding="10" cellspacing="0">
    <tr>
      <td>No</td>
      <td>Nama Barang</td>
      <td>Jenis Barang</td>
      <td>Jumlah Barang</td>
      <td>Nama Vendor</td>
      <td>Aksi</td>      
    </tr>
    <?php $i =1; ?>
    <?php foreach($barang as $data) : ?>
      <tr>
        <td><?= $i?></td>
        <td><?= $data["nama_barang"];?></td>
        <td><?= $data["jenis_barang"];?></td>
        <td><?= $data["jumlah_barang"];?></td>
        <td><?= $data["nama_vendor"];?></td>
        <td>
        <a href="hapus.php?id=<?=$data["id"];?>" onclick="return confirm('Yakin ingin hapus?');">Hapus</a>
        <a href="">Ubah</a>
      </td>
      </tr>
    <?php $i++;?>
    <?php endforeach; ?>
  </table>
</body>
</html>