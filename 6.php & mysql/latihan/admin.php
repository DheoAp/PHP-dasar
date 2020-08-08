<?php 
  require "functions.php";
  $barang = query("SELECT * FROM barang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <style>
    table, th, td{
      border: 1px solid black;
      border-collapse: collapse;
      margin: 50px auto;
    }
    h3{
      margin: 10px;
    }
  </style>
</head>
<body>
  <table>
    <tr>
      <th colspan="6"><h3>Daftar Barang</h3></th>
    </tr>
    <tr>
      <th>No</th>
      <th>Nama Barang</th>
      <th>Jenis Barang</th>
      <th>Jumlah Barang</th>
      <th>Nama Vendor</th>
      <th>Aksi</th> 
    </tr>  

    <?php $i = 1;?>
    <?php foreach( $barang as $brg) :?>    
    <tr>
      <td><?= $i; ?></td>
      <td><?= $brg["nama_barang"] ?></td>
      <td><?= $brg["jenis_barang"] ?></td>
      <td><?= $brg["jumlah_barang"] ?></td>
      <td><?= $brg["nama_vendor"] ?></td>
      <td>
        <a href="">Hapus</a>
        <a href="">Ubah</a>
      </td>
    </tr>
    <?php $i++?>
    <?php endforeach;?>

  
  </table>

</body>
</html>