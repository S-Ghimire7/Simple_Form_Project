<?php
// MADE BY SHLOK GHIMIRE
include 'connect.php';
$sql = "CREATE TABLE IF NOT EXISTS std (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    age INT
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully.";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>