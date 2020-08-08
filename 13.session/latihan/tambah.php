<?php 
require 'functions.php';

if(isset($_POST["submit"])){
  if(tambah_data($_POST) > 0){
    echo "<script>
      alert('Data Berhasil ditambah');
      document.location.href='index.php';
    </script>";
  }else{
    echo "<script>
    alert('Data gagal ditambah');
    document.location.href='index.php';
  </script>";
  }
}
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Barang</title>
</head>
<body>
  <h2>Tambah Barang</h2>
  <form action="" method="post">
    <table>
      <tr>
        <td><label for="nama_barang">Nama Barang:</label></td>
        <td><input require type="text" name="nama_barang" id="nama_barang"></td>
      </tr>
      <tr>
        <td><label for="jenis_barang">Jenis Barang:</label></td>
        <td><input require type="text" name="jenis_barang" id="jenis_barang"></td>
      </tr>
      <tr>
        <td><label for="jumlah_barang">Jumlah Barang:</label></td>
        <td><input require type="text" name="jumlah_barang" id="jumlah_barang"></td>
      </tr>
      <tr>
        <td><label for="nama_vendor">Nama Vendor:</label></td>
        <td><input require type="text" name="nama_vendor" id="nama_vendor"></td>
      </tr>
      <tr>
        <td><button type="submit" name="submit">Tambah Data</button></td>
      </tr>
    </table>
  </form>
</body>
</html>