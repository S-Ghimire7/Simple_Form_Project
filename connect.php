<?php
$servername = "localhost";
$username = "root";
$password = "";
$sql = "CREATE DATABASE KUMAR1";
$conn = mysqli_connect($servername, $username, $password);
if (mysqli_query($conn,$sql)){
    echo"Banyo Hai Keto aba table ahal";
}
if (!$conn) {
    die("Gu Khayo: " . mysqli_connect_error());
}
?>