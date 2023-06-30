<?php

require 'connection.php';

class userModel extends database{

    public function newProject($newProject){
        $this->db->query("INSERT INTO projects(project_name) VALUES('$newProject')");
    }
    public function listProjects(){
        $statement = $this->db->query("SELECT * FROM projects");
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function newTask($taskName,$taskFile,$taskDes,$projectId){
        $this->db->query("INSERT INTO tasks(task_name,task_file,task_description,project_id) VALUES ('$taskName','$taskFile','$taskDes','$projectId')");
    }
    public function getTasks($projectMatchId){
        $getTask = $this->db->query("SELECT * FROM tasks WHERE project_id = '$projectMatchId' and is_delete is null");
        return $getTask->fetchAll(PDO::FETCH_OBJ);
    }
    public function getTasksDetail($specificTaskId){
        $taskDetail = $this->db->query("SELECT * FROM tasks WHERE id = '$specificTaskId'");
        return $taskDetail->fetchAll(PDO::FETCH_OBJ);
    }
    public function delete_Task($taskID){
        $this->db->query("UPDATE tasks SET is_delete = now() WHERE id =  $taskID");
    }
    public function getDeletedTasks(){
        $getDelete = $this->db->query("SELECT * FROM tasks WHERE is_delete is not null");
        return $getDelete->fetchAll(PDO::FETCH_OBJ);
    }
    public function cntDeleted($id){
        $cntDel = $this->db->query("select count(id) from tasks where project_id = '$id' and is_delete is not null");
        return $cntDel->fetch(PDO::FETCH_NUM);
    }
    public function cntUnDelete($unDelID){
        $unDelCnt = $this->db->query("SELECT COUNT(id) FROM tasks WHERE project_id = '$unDelID' and is_delete is null");
        return $unDelCnt->fetch(PDO::FETCH_NUM);
    }
    public function unDeleted($id){
        $unDel = $this->db->query("SELECT * FROM tasks where project_id = '$id' and is_delete is null");
        return $unDel->fetchAll(PDO::FETCH_OBJ);
    }

}