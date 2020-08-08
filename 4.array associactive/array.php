<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan array</title>
</head>
<style>
  .kotak{
    width: 90px;
    height: 90px;
    line-height: 90px;
    margin: 3px;
    font-size: 50px;
    float: left;
    text-align: center;
    background-color: #BADA55;
    transition: 1s;
  }
  .kotak:hover{
    transform: rotate(360deg);
    border-radius: 50%;
    background-color: red;
  }
  .clear{
    clear: both;
  }
</style>
<body>

<?php 
$angka = [[1,2,3],[4,5,6],[7,8,9]];
?>

<?php foreach( $angka as $a) : ?>
  <?php foreach($a as $b) : ?>
    <div class="kotak"><?= $b; ?></div>
  <?php endforeach ; ?>
  <div class="clear"></div>
<?php endforeach ; ?>

</body>
</html>