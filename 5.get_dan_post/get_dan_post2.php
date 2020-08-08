<!-- Latihan POST -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST</title>
</head>
<?php if ( isset( $_POST["submit"]) ) :?> <!-- Jika tombol sumbit sudah di tekan, tampilkan data -->
  <h1>Selamat Datang, <?= $_POST["nama"]; ?></h1>
<?php endif;?>
<body>
  <!-- <form action="tampil_get.php" method="POST">
    Masukan Nama:
    <input type="text" name="nama_post">
    <br>
    <button type="submit" name="submit">Kirim</button>
  </form> -->

  <form action="" method="post">
    Masukan Nama:
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim</button>
  </form>
</body>
</html>