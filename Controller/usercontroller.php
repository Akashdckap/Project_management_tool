<?php
require 'Model/usermodel.php';

class userController{
    public $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }

//    Inserting projects in Database
    public function createProject($creatingProject){
        $project_name = $creatingProject['project_name'];
        if(!empty($project_name)){
            $this->userModel->newProject($project_name);
        }
        header('location: /');
    }

//    Listing Project Name as list
    public function listAll(){
        $fetchProjects = $this->userModel->listProjects();
        require 'view/create.php';
    }

//    Getting specific project id
    public function getProjectId($getId){
        $fetchProjects = $this->userModel->listProjects();
        $project_id = $getId;
        $countOfDeleted = $this->userModel->cntDeleted($project_id);
        $countOfUnDeleted = $this->userModel->cntUnDelete($project_id);
        require 'view/create.php';

    }

//assign Add Task button to specific projectId
    public function assignedProjectId($id){
        $foreign_id = $id['selectiveProjectId'];
        require 'view/insertTaskForm.php';
    }

//    Assigning tasks to specific projects
    public function assignNewTask($newTask,$fileTask){
        $task_name = $newTask['taskName'];
        $fileTask = $fileTask['taskFile'];
        $path = 'view/imagesOrFiles/';
        $destination = $path.$fileTask['name'];
        move_uploaded_file($fileTask['tmp_name'],$destination);
        $task_des = $newTask['description'];
        $projectForeign_id = $newTask['project_id'];
        $this->userModel->newTask($task_name,$destination,$task_des,$projectForeign_id);
        header('location:/');
    }

//    Getting task id to view task details
    public function getTaskId($assignedTaskId){
        $gettedId = $assignedTaskId;
        $taskDetails = $this->userModel->getTasksDetail($gettedId);
        require 'view/fetchTaskDetails.php';
    }

    public function deleteTask($taskId){
        $task_id = $taskId['taskId'];
        $this->userModel->delete_Task($task_id);
        header('location:/');
    }
    public function getDeletedTasks($deleteId){
        $getDeleted = $this->userModel->getDeletedTasks($deleteId['deleteTaskBtn']);
        require 'view/deletedTasks.php';
    }
    public function unDeletedTasks($id){
        $unDeleted = $this->userModel->unDeleted($id['unDeleteBtn']);
        require 'view/unDeleted.php';
    }
}

//If there is no connectivity to the userModel the function is to be assign to get specific id's or datas that functions will be used in index.php and router.php and view/create.php'