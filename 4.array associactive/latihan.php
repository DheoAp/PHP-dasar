<?php 
// $mahasiswa = [
//   ["Dheo Apriansyah","20201","dheo@gmail.com","Sistem Informatika"],
//   ["Dede","20202","dede@gmail.com","Teknik Informatika"],
//   ["Dewi","20202","dewi@gmail.com","Teknik Industri"],
// ];

// Array Associactivate
// key-nya adalah yang kita buat sendiri
$mahasiswa = [
  [
    "nama" => "Dheo Apriansyah",
    "nim" => "20201",
    "email" => "dheo@gmail.com",
    "jurusan" => "Sistem Informatika",
    "gambar" => "img1.jpg"
  ],
  [
    "nama" => "Dede",
    "nim" => "20202",
    "email" => "dede@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img2.jpg"
  ],
  [
    "nama" => "Dewi",
    "nim" => "20202",
    "email" => "dewi@gmail.com",
    "jurusan" => "Teknik Industri",
    "gambar" => "img3.jpg"
    // "tugas" => [90,80,80]
  ],
];

// echo $mahasiswa[2]["tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach($mahasiswa as $mhs) :?>
    <ul>
      <li><img src="img/<?= $mhs["gambar"]?> "></li>
      <li>Nama : <?= $mhs["nama"] ?></li>
      <li>NIM : <?= $mhs["nim"] ?></li>
      <li>Email : <?= $mhs["email"] ?></li>
      <li>Jurusan : <?= $mhs["jurusan"] ?></li>
    </ul>
  <?php endforeach;?>
</body>
</html>
