<html>
<head>
    <title>Deleted Tasks</title>
</head>
<body>
    <table>
        <?php foreach ($getDeleted as $Deleted):?>
        <tr>
            <?php echo $Deleted->task_name?>
            <br>
            <img src="<?php echo $Deleted->task_file?>" width="75px" height="75px">
            <br>
            <?php echo $Deleted->task_description?>
            <br>
            <label>Deleted Time</label>
            <?php echo $Deleted->is_delete?>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>