<?php
// MADE BY SHLOK GHIMIRE
include 'connect.php';
    $user = $_POST['user'];
    $email = $_POST['email'];
    $age = (int)$_POST['age'];
    $sql = "INSERT INTO Users (user, email, age) VALUES ('$user', '$email', $age)";
    if (mysqli_query($conn, $sql)) {
        echo "Data has been inserted.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
mysqli_close($conn);
?>

