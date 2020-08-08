<?php
include 'functions.php';

if(isset($_POST["daftar"])){
  if (registrasi($_POST) > 0){
    echo "<script>
          alert('User berhasil terdaftar');
          </script>";
  }else{
    echo mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <style>
    table{
      margin: 50px auto;
    }
  </style>
</head>
<body>
  
  <form action="" method="post">
    <table>
      <tr>
        <td colspan="2"><h1>Halaman Registrasi</h1></td>
      </tr>
      <tr>
        <td>
          <label for="username">Username</label>
        </td>
        <td>
          <input type="text" id="username" name="username">
        </td>
      </tr>

      <tr>
        <td>
          <label for="password">Password</label>
        </td>
        <td>
          <input type="password" id="password" name="password">
        </td>
      </tr>
      <tr>
        <td>
          <label for="password2">Konfrimasi Password</label>
        </td>
        <td>
          <input type="password" id="password2" name="password2">
        </td>
      </tr>
      
      <tr>
        <td>
          <button type="submit" name="daftar">Daftar</button>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>