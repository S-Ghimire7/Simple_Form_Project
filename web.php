<?php
$servername="localhost";
$username = "root";
$password = " ";
$connect =  mysqli_connect($servername,$username,$password);
if(!$scan){
    die("Connection Failed: .mysqli_connect-error() ");
}
$sql="CREATE DATABASE webTech";
if(mysql_query ($connect,$sql));{
    echo"Database created sucessfully.";
}
else{
    echo"Error:".mysqli_error($connect);
}
mysqli_close($connect)
?>