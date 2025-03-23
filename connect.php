<?php
// MADE BY SHLOK GHIMIRE
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = trim($_POST['user']);
    $email = trim($_POST['email']);
    $age = (int)$_POST['age']; 

    $servername = 'localhost';
    $serverroot = 'root';
    $serverpass = '';
    $dbname = "Final_test";
    $conn = mysqli_connect($servername, $serverroot, $serverpass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $stmt = $conn->prepare("INSERT INTO registration (user, email, age) VALUES (?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("ssi", $user, $email, $age);
            if ($stmt->execute()) {
                echo "Registration successful";
            } else {
                echo "Error executing statement: " . $stmt->error;
            }
            mysqli_close($stmt)
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
        mysqli_close($conn);
    }
} else {
    echo "Invalid request method.";
}
?>