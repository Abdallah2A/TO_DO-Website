<?php
require_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['task'])) {
    $task = $_POST['task'];
    session_start();
    $user_id = $_SESSION['user_id'];
    
    $sql = "INSERT INTO tasks (user_id, task_description) VALUES ('$user_id', '$task')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
