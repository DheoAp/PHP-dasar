<?php 
session_start();

if(isset($_SESSION["login"])){
  header("Location: index.php");
  exit;
}

require 'functions.php';

if(isset($_POST["login"])){

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");

  // cek username
  if(mysqli_num_rows($result) === 1){

    // cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password,$row["password"])){
      // cek/set session
      $_SESSION["login"] = true;
      header("Location:index.php");
      exit;
      
    }
  }

  $error = true;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    table{
      margin: 50px auto;
    }
    p{
      color: red;
      padding: 5px;
      background-color: lightsalmon;
      font-style: italic;
    }
  </style>
</head>
<body>
  <form action="" method="post">
    <table>
      <tr>
        <td colspan="2">
          <h1>Halaman Login</h1>
          <?php if(isset($error)): ?>
            <p>Username/password salah</p>
          <?php endif; ?>
        </td>
      </tr>

      <tr>
        <td>
          <label for="username">Username</label>
        </td>
        <td>
          <input type="text" id="usernmae" name="username" autocomplete="off" required>
        </td>
      </tr>

      <tr>
        <td>
          <label for="password">Password</label>
        </td>
        <td>
          <input type="password" id="password" name="password" required>
        </td>
      </tr>
      <tr>
        <td><button type="submit" name="login">Login</button></td>
      </tr>
    </table>
  </form>
</body>
</html>