<?php
require_once 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task_id = $_POST['task_id'];
    $status = $_POST['status'];

    // Update task status in the database
    $sql = "UPDATE tasks SET task_status = ? WHERE task_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $status, $task_id);

    if ($stmt->execute()) {
        echo "Task status updated successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
