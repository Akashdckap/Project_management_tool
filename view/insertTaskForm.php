<html>
<head>
    <title>Add New Task</title>
    <style>
        h2{
            text-align: center;
            margin-top: 100px;
        }
        table{
            border: solid 1px;
            border-radius: 10px;
            height: 370px;
            margin:0 auto;
        }
        button{
            background-color: aqua;
            border: none;
            border-radius: 10px;
            height: 40px;
            width: 100px;
            font-weight: bold;
            margin-left: 200px;
        }
        input{
            height: 40px;

        }
    </style>
</head>
<body>
<div class="container">
    <h2>Enter the Details</h2>
        <form action="/insertNewTask" method="post" enctype="multipart/form-data" class="form">
            <table>
            <tr>
                <th><label>Task Name</label></th>
                <td><input type="text" name="taskName"></td>
            </tr>
            <tr>
                <th><label>Task file</label></th>
                <td><input type="file" name="taskFile"></td>
            </tr>
            <tr>
                <th><label>Task description</label></th>
                <td><input type="text" name="description"></td>
            </tr>
            <th class="subBtn"><button type="submit" name="project_id" value="<?php echo $foreign_id ?>" >Submit</button></th>
            <input type="hidden" name="is_delete">
            </table>
        </form>
</div>
</body>
</html>
