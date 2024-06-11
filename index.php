<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A dynamic and aesthetic To-Do List WebApp.">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <link rel="shortcut icon" type="image/png" href="assets/favicon.png"/>
    <link rel="stylesheet" href="CSS/main.css">
    <script defer src="JS/bg.js"></script>
    <title>JUST DO IT</title>
</head>
<body>
    <div class="canvas">
        <canvas class="canvas-2"></canvas>
    </div>
    <div id="circularMenu" class="circular-menu">
        <form action="PHP/logout.php" method="POST">
            <div class="floating-btn">
                <button type="submit"><i class="input-icon fa fa-duotone fa-arrow-right"></i></button>
            </div>
        </form>
    </div>

    <div id="header">
        <h1 id="title">Just do it.</h1>
    </div>

    <div class="form2">
        <form action="PHP/add_task.php" method="POST">
            <input class="todo-input" type="text" name="task" placeholder="Add a task.">
            <button class="todo-btn" type="submit">I Got This!</button>
        </form>
    </div>

    <div id="myUnOrdList">
        <ul class="todo-list">
            <?php include 'PHP/fetch_tasks.php'; ?>
        </ul>
    </div>

    <script>
        function toggleComplete(element) {
            const taskElement = element.parentElement;
            const taskId = taskElement.getAttribute('data-id');
            const status = taskElement.classList.toggle('completed') ? 'completed' : 'pending';

            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'PHP/update_task.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status !== 200) {
                    alert('Failed to update task status.');
                }
            };
            xhr.send('task_id=' + taskId + '&status=' + status);
        }

        function deleteTask(element) {
            const taskElement = element.parentElement;
            const taskId = taskElement.getAttribute('data-id');

            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'PHP/delete_task.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    taskElement.remove();
                } else {
                    alert('Failed to delete task.');
                }
            };
            xhr.send('task_id=' + taskId);
        }
    </script>
</body>
</html>
