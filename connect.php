<?php
$severname = 'localhost';
$name = 'root';
$pass = '';
$dbname = 'Final_Test';
//MADE BY SHLOK GHIMIRE
$conn = mysqli_connect($severname,$name,$pass,$dbname);
if(!$conn){
    die ("Connection failed".mysqli_error($conn));
}
else{
    echo"Database created successfully";
}
mysqli_close($conn);
?>

