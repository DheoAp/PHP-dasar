<?php
  function salam($waktu="Siang",$nama="Admin"){
    return "Selamat $waktu, $nama";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan function</title>
</head>
<body>
  <h1><?= salam(); ?></h1>
</body>
</html>
