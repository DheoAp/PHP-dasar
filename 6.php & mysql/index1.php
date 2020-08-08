<?php 
require 'functions.php';
// ambil data / query data
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <style>
    table{
      margin: 50px auto;
    }
    h1{
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
  <h1>Daftar Mahasiswa</h1>
  <table border="1px" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>Nim</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>
  <?php $i = 1; ?>
  <?php foreach($mahasiswa as $row) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href="">Ubah</a> |
        <a href="">Hapus</a>
      </td>
      <td><img src="img/<?= $row["gambar"] ?>" alt=""></td>
      <td><?= $row["nim"] ?></td>
      <td><?= $row["nama"] ?></td>
      <td><?= $row["email"] ?></td>
      <td><?= $row["jurusan"] ?></td>
    </tr>
  <?php $i++ ?>
  <?php endforeach; ?>
  </table>
  </div>
</body>
</html>