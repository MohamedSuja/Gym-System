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

$sql = "SELECT SUM( curr_weight - ini_weight) FROM members WHERE user_id='$id'";
        $amountsum = mysqli_query($con, $sql) or die(mysqli_error($sql));
        $row_amountsum = mysqli_fetch_assoc($amountsum);
        $totalRows_amountsum = mysqli_num_rows($amountsum);
        echo $row_amountsum['SUM( curr_weight - ini_weight)'];

                
?>