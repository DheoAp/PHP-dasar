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
  
  //upload gambar. Jalankan fungsi upload gambar
  $gambar = upload(); // upload(); adalah sebuah fungsi
  if(!$gambar){ // jika upload gambar gagal, fungsi tambah di hentikan
    return false; 
  }

  $query = "INSERT INTO mahasiswa VALUES(
    null,'$nama','$nim','$email','$jurusan','$gambar')";

  mysqli_query($conn, $query); // jalankan query nya
  
  return mysqli_affected_rows($conn);
}


function upload(){
  // untuk mengelola function upload file ini, ambil isi dari $_FILES
  // ambil tiap - tiap data dan masukan ke variable
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error']; // gambar untuk mengetahui gambar yang di upload atau tidak
  $tmpName = $_FILES['gambar']['tmp_name']; // tempat penyimpanan sementara

  // cek apakah tidak ada gambar yang di upload
  if( $error === 4){ // 4 adalah tidak ada gambar yang di upload
    echo "<script>
            alert('Pilih gambar terlebih dahulu');
          </script>";
    return false;

  }

  // cek apakah yang di upload adalah gambar

  $ekstensiGambarValid = ['jpg','jpeg','png'];
  
  // ambil ekstensi file dari gambar yang di upload
  // $ekstensi = pathinfo($namaFile,PATHINFO_EXTENSION); ini untuk yang lebih simpel-nya
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
    echo "<script>
            alert('Yang anda upload bukan gambar!!');
          </script>";
    return false;
  }

  // cek ukuran gambar (dalam satuan byte) 1mb = 1000000
  if($ukuranFile > 1000000){
    echo "<script>
            alert('Ukuran gambar terlalu besar!!');
          </script>";
    return false;
  }
  // generate nama baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;
  // cek, gambar siap di upload
  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

  return $namaFileBaru;




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
  $gambarLama = htmlspecialchars($ubah["gambarLama"]); // ambil gambar lama

  // cek user memilih gambar baru atau tidak
  if($_FILES['gambar']['error'] === 4){
    $gambar = $gambarLama; // jika user tidak mengubah gambarnya
  }else{
     $gambar = upload(); // untuk menyimpan gambar baru
  }
 

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

function registrasi($data){
  global $conn;

  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn,$data["password"]);
  $password2 = mysqli_real_escape_string($conn,$data["password2"]);

  // cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if(mysqli_fetch_assoc($result)){
    echo "<script>
            alert('Username sudah terdaftar!');
          </script>";
    return false;
  }
  // cek konfrimasi password
  if($password !== $password2){
    echo "<script>
            alert('Password tidak sama');
          </script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);


  // masukan ke database

  mysqli_query($conn, "INSERT INTO user 
              VALUES(null,'$username','$password')");

  return mysqli_affected_rows($conn);
}



?>