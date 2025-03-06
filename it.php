<?php
include 'connect.php';
$user="Seabird";
$email="Seabird@gmail.com";
$age=25;
$sql="INSERT INTO random('$user','$email','$age','$pass')";
if (mysqli_query($conn,$sql)){
echo"waah data pani haldeko don";
}
else{
    echo"mysqli_error($conn)";
}
    mysqli_close($conn);
?>