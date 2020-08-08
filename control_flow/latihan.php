<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan</title>
  <style>
    .warna-baris{
      background-color: silver;
    }
  </style>
</head>
<body>
  <table border="1px" cellpadding="10" cellspacing="0">
    <?php for($row = 1; $row <= 5; $row++):?>

      <?php if($row % 2 == 1):?>
        <tr class="warna-baris">
      <?php else: ?>
        <tr>
      <?php endif; ?>

        <?php for($col = 1; $col <= 5; $col++):?>
          <td><?= "$row,$col"?></td>
        <?php endfor;?>
      </tr>
   <?php endfor;?>
  </table>
</body>
</html>