<?php
$host = "bjasjyd2yjfbkaw4vruc-mysql.services.clever-cloud.com";
$db = "bjasjyd2yjfbkaw4vruc";
$user = "uhzwhhjq9hcftbyx";
$password = "XVviTUQiTpwZVfAY4Q2p";
$port = "3306";

// Create connection
$conn = new mysqli($host, $user, $password, $db, $port);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?><!-- Visit codeastro.com for more projects -->
