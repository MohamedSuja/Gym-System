<?php

$host = "bjasjyd2yjfbkaw4vruc-mysql.services.clever-cloud.com";
$db = "bjasjyd2yjfbkaw4vruc";
$user = "uhzwhhjq9hcftbyx";
$password = "XVviTUQiTpwZVfAY4Q2p";
$port = "3306";

// Create connection
$con = new mysqli($host, $user, $password, $db, $port);

if(!$con){
    die("Connection Failed");
}

$sql = "SELECT * FROM equipment";
                $query = $con->query($sql);

                echo "$query->num_rows";
                
?><!-- Visit codeastro.com for more projects -->