<?php
require_once 'db_connection.php';

$name = $_POST['logname'];
$email = $_POST['logemail'];
$password = $_POST['logpass'];

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../login.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
