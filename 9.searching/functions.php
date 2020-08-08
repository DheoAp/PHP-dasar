<?php 
$conn = mysqli_connect("localhost","root","admin123","phpdasar");

function query($query){
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ( $row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}


function tambah($data){
  global $conn;

  $nama = htmlspecialchars($data["nama"]);
  $nim = htmlspecialchars($data["nim"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "INSERT INTO mahasiswa VALUES(
    null,'$nama','$nim','$email','$jurusan','$gambar')";

  mysqli_query($conn, $query); // jalankan query nya
  
  return mysqli_affected_rows($conn);
}

function hapus($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id= $id");

  return mysqli_affected_rows($conn);
}

function ubah($ubah){
  global $conn;

  $id = $ubah["id"];
  $nama = htmlspecialchars($ubah["nama"]);
  $nim = htmlspecialchars($ubah["nim"]);
  $email = htmlspecialchars($ubah["email"]);
  $jurusan = htmlspecialchars($ubah["jurusan"]);
  $gambar = htmlspecialchars($ubah["gambar"]);

  $query = "UPDATE mahasiswa SET 
              nama = '$nama',
              nim='$nim',
              email='$email',
              jurusan='$jurusan',
              gambar='$gambar'
            WHERE id=$id
          ";

  mysqli_query($conn, $query); //jalankan query nya
  
  return mysqli_affected_rows($conn);
}


function cari($keyword){
  $query = "SELECT * FROM mahasiswa WHERE 
            nama LIKE '%$keyword%' OR
            nim LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%' 
          ";

  return query($query); // memangil query yang sudah di buat ke function baru
}
?>