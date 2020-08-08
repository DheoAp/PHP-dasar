<?php 
require 'functions.php';

$hapus = $_GET["id"];

if(hapus_data($hapus) > 0){
  echo "
      <script>
        alert('data berhasil dihapus!');
        document.location.href = 'index.php';
      </script>
    ";
}else{
  echo "
      <script>
        alert('data gagal dihapus!');
        document.location.href = 'index.php';
      </script>
    ";
}

?>