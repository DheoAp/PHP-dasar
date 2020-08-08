<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root","admin123","phpdasar");

// ambil data / query data
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


// while( $mhs_assoc = mysqli_fetch_assoc($result) ){ 
//   var_dump($mhs_assoc);
// }
// ambil data mahasiswa daru object result (fetch/ambil)
// ada 4 cara mengambil data

// mysqli_fetch_row() => mengembalikan array numeric
//  $mhs_row = mysqli_fetch_row($result);
//  var_dump($mhs_row);
//  var_dump($mhs_row[3]); //menampilkan data nama dengan id
// ============================================
// mysqli_fetch_assoc() // mengembalikan array associactive
// $mhs_assoc = mysqli_fetch_assoc($result); 
// var_dump($mhs_assoc["jurusan"]); //menampilkan data jurusan
// ============================================
// mysqli_fetch_array() // mengembalikan keduanya
// $mhs_array = mysqli_fetch_array($result);
// var_dump($mhs_array["jurusan"]);
// atau
// var_dump($mhs_array[4]);
// ============================================
// mysqli_fetch_object()
// $mhs_objc = mysqli_fetch_object($result);
// var_dump($mhs_objc->nama);




// menampilkan error
// if(!$result){
//   echo mysqli_error($conn);
// }

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
  <?php while( $row = mysqli_fetch_assoc($result)) : ?>
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
  <?php endwhile; ?>
  </table>
  </div>
</body>
</html>