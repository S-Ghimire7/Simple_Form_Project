<?php
//MADE BY SHLOK GHIMIRE
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $age = $_POST['age']; 
    $stmt = $conn->prepare("DELETE FROM std WHERE user = ? AND email = ? AND age = ?");
    $stmt->bind_param("ssi", $user, $email, $age);
    if ($stmt->execute()) {
        header("Location: retireve.php"); 
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
mysqli_close($conn);
?>

