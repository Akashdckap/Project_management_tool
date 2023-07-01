<html>
<head>
    <title>Un Deleted Tasks</title>
</head>
<body>
    <table>
        <?php foreach ($unDeleted as $unDelTsk): ?>
        <tr>
            <?php echo $unDelTsk->task_name?>
            <br>
            <img src="<?php echo $unDelTsk->task_file?>" width="75px" height="75px">
            <br>
            <?php echo $unDelTsk->task_description?>
            <br>
            <form method="post" action="/deleteTask">
                <button type="submit" value="<?php echo $unDelTsk->id?>" name="taskId" >Delete Task</button>
            </form>
            <br>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>