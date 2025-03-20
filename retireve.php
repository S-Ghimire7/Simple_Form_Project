<?php
//MADE BY SHLOK GHIMIRE
include 'connect.php';
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . " <br>" .
             "User:  " . $row['user'] . "<br>" .
             "Age: " . $row['age'] . "<br> <br> <br>";
    }
} else {
    echo "Kei bhetena keto";
}
mysqli_close($conn);
?>