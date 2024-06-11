<?php
require_once 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task_id = $_POST['task_id'];

    $sql = "DELETE FROM tasks WHERE task_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $task_id);

    if ($stmt->execute()) {
        echo "Task deleted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
