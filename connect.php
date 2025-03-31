<?php
$severname = 'localhost';
$name = 'root';
$pass = '';
$dbname = 'shlok';
//MADE BY SHLOK GHIMIRE
$conn = mysqli_connect($severname,$name,$pass,$dbname);
if(!$conn){
    die ("Connection failed".mysqli_error($conn));
}
?>