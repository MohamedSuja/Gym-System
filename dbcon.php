<?php
/* $servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymnsb";
$socket = "/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock";


$con = new mysqli($host, $user, $password, $db, $port); */


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymnsb";
$socket = "/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, null, $socket);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
    echo "Connected";
  }
  


?><!-- Visit codeastro.com for more projects -->
