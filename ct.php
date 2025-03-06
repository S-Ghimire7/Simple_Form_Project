<?php
include 'connect.php';
$sql="CREATE TABLE Users(
id INT AUTO_INCREMENT PRIMARY KEY,
user VARCHAR (100)NOT NULL,
email VARCHAR (100)NOT NULL UNIQUE,
age INT)";
if(mysqli_query ($conn,$sql)){
    echo"Table banyo keto aba data hal";
}
mysqli_close($conn);
?>