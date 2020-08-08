<?php 
$mahasiswa = [ 
  ["Dheo Apriansyah","032342","Sistem Informatika","dheo@gmail.com"], 
  ["Dede","042232","Teknik Informatika","dede@gmail.com"], 
  ["Rian","011131","Sistem Informatika","dheo@gmail.com"] 
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs) :?>
<ul>
  <li>Nama : <?= $mhs[0]; ?></li>
  <li>NIM : <?= $mhs[1]; ?></li>
  <li>Jurusan : <?= $mhs[2]; ?></li>
  <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach;?>
</body>
</html>