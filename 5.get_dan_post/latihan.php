  <?php 
  // $_GET["nama"] = "Dheo Apriansyah";
  // $_GET["nrp"] = "02347982734";

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
  ]
];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
<ul>  
  <?php foreach( $mahasiswa as $mhs) : ?>
    <li>
      <a href="detail.php?nama_get=<?= $mhs["nama"]?>
      &nim_get=<?= $mhs["nim"]?>&email=<?= $mhs["nim"]?>
      &email_get=<?= $mhs["email"]?>
      &jurusan_get=<?= $mhs["jurusan"]?>"><?= $mhs["nama"]?></a>
    </li>
  <?php endforeach; ?>
</ul>
</body>
</html>























