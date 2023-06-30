<html>
<head>
    <title>fetch tasks</title>
</head>
<body>
<table>
    <tr>
        <?php foreach ($taskDetails as $Details):?>
    <form>

            <label>Task Name:</label>
            <br>
            <?php echo $Details->task_name?>
            <br>

            <label>Task File:</label>
            <br>
            <img src="<?php echo $Details->task_file?>" width="75px" height="75px">
            <br>

            <label>Task Description:</label>
            <br>
            <?php echo $Details->task_description?>
            <br>

    </form>
        <form method="post" action="/deleteTask">
            <button type="submit" value="<?php echo $Details->id?>" name="taskId" >Delete Task</button>
        </form>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>