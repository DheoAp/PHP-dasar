<!-- 
= Super Global = memiliki prilaku sperti array associative
$_GET
$_POST
$_REQUEST
$_SESSION
$_COOKIE
$_SERVER
$_ENV
 -->
<?php 
// variable scope / lingkup variable

$x = 10;

function tampilX(){
  global $x; // cari variable di luar function
  echo $x;
}
tampilX();
?>