<?php
require_once 'db_connection.php';

$email = $_POST['logemail'];
$password = $_POST['logpass'];

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $user = $result->fetch_assoc();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['logged_in'] = true;
    header("Location: ../index.php");
} else {
    header("Location: ../login.php");
}
$conn->close();
?>
