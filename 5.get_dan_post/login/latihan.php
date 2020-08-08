<?php 
if(isset($_POST["submit"])){
  if($_POST["username"] == "admin" && $_POST["password"] == "admin123"){
    header("Location:admin_latihan.php");
    exit;
  }else{
    $error = True;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan</title>
</head>
<body>
  <?php if(isset($error)) :?>
  <p>usernam/password salah</p>
<?php endif;?>
  <h1> latihan Login</h1>
  <form action="" method="post">
  <label for="username">Username</label>
  <input type="text" id="username" name="username">
  <br>
  <label for="password">Password</label>
  <input type="password" id="password" name="password">
  <br>
  <button type="submit" name="submit">Kirim</button>
  </form>
  
</body>
</html>