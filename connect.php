<?php
// Create connection
$conn = new mysqli("localhost", "dev", "dev", "net_banking");

// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>
