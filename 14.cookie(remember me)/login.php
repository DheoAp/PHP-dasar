<?php 
session_start();
require 'functions.php';

// cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  $result = mysqli_query($conn,"SELECT username FROM user WHERE id=$id"); // mengambil id yang ada di cookie
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if($key === hash('sha256', $row['username'])){
    $_SESSION['login'] = true;
  }

}

if(isset($_SESSION["login"])){
  header("Location: index.php");
  exit;
}



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

      // cek remember me
      if( isset($_POST['remember'])){
        // buat cookie
        // setcookie('id', ... .) klu bisa jangan gunakan id, bebas
        setcookie('id', $row['id'],time()+60);
        setcookie('key', hash('sha256', $row['username']),time()+60); // hash('sha256', $row['username'] sha256 ada di php.net
      }

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
        <td><input type="checkbox" name="remember"> <label for="remember">Remember Me</label></td>
      </tr>
      <tr>
        <td><button type="submit" name="login">Login</button></td>
      </tr>
      
    </table>
  </form>
</body>
</html>