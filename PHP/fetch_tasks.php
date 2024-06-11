<?php
require_once 'db_connection.php';

session_start();

if (!isset($_SESSION['logged_in']) || !isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM tasks WHERE user_id = '$user_id'";
$result = $conn->query($sql);

if ($result !== false) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<li class='todo " . ($row["task_status"] == 'completed' ? 'completed' : '') . "' data-id='" . $row["task_id"] . "'>
            <span class='todo-item'>" . $row["task_description"] . "</span>
            <button class='check-btn' onclick='toggleComplete(this)'>
            <i class='fas fa-check'></i></button>
            <button class='delete-btn' onclick='deleteTask(this)'>
            <i class='fas fa-trash'></i></button></li>";
        }
    } else {
        echo "<li class='todo'>No tasks found.</li>";
    }
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
