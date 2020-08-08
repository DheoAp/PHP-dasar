<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 2</title>
</head>
<body>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php for($row = 1; $row <= 3; $row++): ?>
      <tr>
        <?php for($col = 1; $col <= 5; $col++):?>
          <td><?= "$row,$col"; ?></td>
        <?php endfor?>
      </tr>
    <?php endfor?>
    
  </table>
</body>
</html>