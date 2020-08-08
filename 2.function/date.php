<?php
// Date
// untuk menampilkan format tanggal tertentu
// https://www.php.net/manual/en/function.date
// echo date("l, d-M-Y");


// Time
// Unix Timestamp/ EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();

// echo date("l", time()+60*60*24*2); // +60 detik * 60 menit * 24 jam(1 hari)* hari yang akan datang

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun

// echo date("l",mktime(0,0,0,4,8,1997));

// strtime
echo date("l", strtotime("8 apr 1997"));
?>