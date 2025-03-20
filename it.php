<?php
//MADE BY SHLOK GHIMIRE
include 'connect.php';
$user = "Sea";
$email = "Sea@gmail.com";
$age = 25;
$sql = "INSERT INTO users (user, email, age) VALUES ('$user', '$email', $age)";
if (mysqli_query($conn, $sql)) {
    echo "Waah! Data pani haldeko don";
} else {
    echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?>