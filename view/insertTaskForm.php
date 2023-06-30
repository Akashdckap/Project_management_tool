<html>
<head>
    <title>Add New Task</title>
</head>
<body>
<div class="container">
    <table>
        <form action="/insertNewTask" method="post" enctype="multipart/form-data">
            <label>Task Name</label>
            <input type="text" name="taskName" >
            <label>Task file</label>
            <input type="file" name="taskFile">
            <label>Task description</label>
            <input type="text" name="description">
            <button type="submit" name="project_id" value="<?php echo $foreign_id ?>">Submit</button>
            <input type="text" name="is_delete">
        </form>
    </table>
</div>
</body>
</html>
