<?php
// MADE BY SHLOK GHIMIRE
include 'connect.php';
$user = "shyam";
$email = "shyam@gmail.com";
$age = 22;
$sql = "UPDATE Users SET std = '$user', email = '$email', age = $age WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    echo "Data update bhayo hai keto!";
} else {
    echo "Kei na kei ta bigaris: " . mysqli_error($conn);
}
mysqli_close($conn);
?>