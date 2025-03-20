<?php
//MADE BY SHLOK GHIMIRE
include 'connect.php';
$id = 1;
$user = "Kumar";
$email = "Kumar@gmail.com";
$age = 50;
$sql = "UPDATE users SET user = '$user', email = '$email', age = $age WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    echo "Data update bhayo hai keto!";
} else {
    echo "Kei na kei ta bigaris: " . mysqli_error($conn);
}
mysqli_close($conn);
?>