<?php 
// Menampilkan array dengan cara yang benar
// Pengulangan pada array
// for / foreach array
$angka = [1,4,6,2,8,23,277];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Array</title>
  <style>
    .kotak{
      width: 50px;
      height: 50px;
      background-color: salmon;
      text-align: center;
      line-height: 50px;
      margin: 3px;
      float: left;
    }
    .clear{clear: both;}  
  </style>
</head>
<body>
  
<?php for($i = 0; $i < count($angka); $i++):?> <!-- count() menghitung jumlah element yang ada di array -->
  <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php endfor?>

<div class="clear"></div>

<?php foreach( $angka as $a){?> <!-- foreach() untuk setiap elemen array, lakukan sesuatu  -->
  <div class="kotak"><?php echo $a ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach($angka as $a) : ?>
  <div class="kotak"><?= $a ?></div>
<?php endforeach;?>


</body>
</html>