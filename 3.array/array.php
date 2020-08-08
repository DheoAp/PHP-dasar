<?php 
// Array
// array sebuah variable yang bisa menampung lebih dari satu nilai

// cara lama
$hari = array("Senin","Selasa","Rabu");
// cara baru
$bulan = ["Januari","Februari","Maret"];
// tipe data beda(boleh memiliki tipe data yang berbeda)
$arry1 = [123,"bulan",true];


// Menampilkan array
// echo tidak bisa mencetak array

// bisa gunakan var_dump() / print_r()
// pasangan antara key dan value
// key-nya adalah index, yang di mulai dari 0
// var_dump($hari); //mengecek isi dari sebuah variable
// echo"<br>";
// print_r($bulan);
// echo"<br>";

// menampilkan 1 element pada array
// echo $arry1[0];
// echo"<br>";
// echo $bulan[1];

// menambahkan element baru pada array

var_dump($hari);
$hari[] = "kamis"; // Menambahkan elemen Kamis di akhir array yang di buat
echo "<br>";
var_dump($hari);




















?>