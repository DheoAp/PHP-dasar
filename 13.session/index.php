<?php 
session_start();

if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}


require 'functions.php';
// ambil data / query data
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

if(isset($_POST["cari"])){
  $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <div class="container">
  <h1>Data Mahasiswa</h1>
  <a href="logout.php">Logout</a>
  <br>
  <br>
  <form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="Masukan keyword pencarian" autocomplete="off">
    <button type="submit" name="cari">Cari</button>
  </form>
  <br>
  <table border="1px" cellpadding="10" cellspacing="0">
    <tr>
      <td colspan="7"><a href="tambah.php">Tambah Data</a></td>
    </tr>
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
        <a href="ubah.php?id=<?= $row["id"];?>">Ubah</a> |
        <a href="delete.php?id=<?= $row["id"];?>" onclick="return confirm('yakin?');" >Hapus</a>
      </td>
      <td><img src="img/<?= $row["gambar"]; ?>" alt=""></td>
      <td><?= $row["nim"]; ?></td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["email"]; ?></td>
      <td><?= $row["jurusan"]; ?></td>
    </tr>
  <?php $i++ ?>
  <?php endforeach; ?>
  </table>
  </div>
</body>
</html>