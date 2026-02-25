<?php
$severname = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($severname, $username, $password);
if($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}
echo "connect successfully";
?>