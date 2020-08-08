<?php 
$koneksi = mysqli_connect("localhost","root","admin123","db_barang");


function query($query){
  global $koneksi;
  $result = mysqli_query($koneksi, $query);
  $rows = [];
  while ( $row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}


function tambah_data($tambah_data){
  global $koneksi;
  
  $nama_barang = htmlspecialchars($tambah_data["nama_barang"]);
  $jenis_barang = htmlspecialchars($tambah_data["jenis_barang"]);
  $jumlah_barang = htmlspecialchars($tambah_data["jumlah_barang"]);
  $nama_vendor = htmlspecialchars($tambah_data["nama_vendor"]);

  $query = "INSERT INTO barang 
  values(null,'$nama_barang','$jenis_barang','$jumlah_barang','$nama_vendor')";

  mysqli_query($koneksi, $query);

  return mysqli_affected_rows($koneksi);
}


function hapus_data($hapus_data){
  global $koneksi;
  mysqli_query($koneksi,"DELETE FROM barang WHERE id = $hapus_data");

  return mysqli_affected_rows($koneksi);
}
?>