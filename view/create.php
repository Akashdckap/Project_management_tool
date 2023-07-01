<html>
<head>
    <title>Create</title>
    <style>
        .btn{
            border: none;
            background-color: transparent;
        }
        .addNew{
            display: flex;
        }
    </style>
</head>
<body>
<h2>Project Management Tool</h2>
<!--Project Insert Form-->
<div class="addNew">
<button id="new">Add new</button>
</div>
<form action="/insertProject" method="post" enctype="multipart/form-data">
    <label>Project Name</label>
    <input type="text" name="project_name">
<!--    <input type="hidden" name="action" value="create">-->
    <button type="submit">Submit</button>
</form>

<!--Project Name Fetches-->
<h3>Project Names</h3>
<table>
    <?php foreach ($fetchProjects as $projectNames): ?>
    <tr>
            <form method="post" action="/getProjectId">
                <th><button type="submit" value="<?php echo $projectNames->id?>" name="id" class="btn"><?php echo $projectNames->project_name ?></button></th>
            </form>
    </tr>
    <?php endforeach; ?>
</table>

<!--Assiging specific Project id to Add task button-->
<form method="post" action="/assignProjectId">
    <button type="submit" name="selectiveProjectId" value="<?php echo $project_id ?>">Add task</button>
</form>

<!--Fetching inserted tasks-->
<table>
    <?php foreach ($gettingAssigningTask as $taskDetails): ?>
        <tr>
            <form method="post" action="/getTaskId">
                <th>
                    <input type="hidden" value="<?php echo $taskDetails->id ?>" name="taskId">
                    <button type="submit"><?php echo $taskDetails->task_name?></button>
                </th>
            </form>
        </tr>
    <?php endforeach; ?>
    <form method="post" action="/unDeletedTask">
        <button type="submit" value="<?php echo $project_id?>" name="unDeleteBtn">Un Deleted(<?php echo $countOfUnDeleted[0]?>)</button>
    </form>
    <form method="post" action="/deletedTasks">
        <button type="submit" value="<?php echo $project_id?>" name="deleteTaskBtn">Deleted Task(<?php echo $countOfDeleted[0] ?>)</button>
    </form>
</table>
</body>
</html>
<!--JavaScript for opening insert project form-->
<script type="text/javascript">
    let form = document.querySelector("form")
    window.addEventListener("DOMContentLoaded",()=>{

        form.style.visibility = "hidden"

        let addNew =  document.querySelector("#new")
        let count = 0;
        addNew.addEventListener("click",()=>{
            form.style.visibility = "visible";
        })
    })
</script>
