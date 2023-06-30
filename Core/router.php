<?php

class router{
    public $router = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new userController();
    }
    public function get($uri,$action){
        $this->router[] = [
            'uri'=>$uri,
            'action'=>$action,
            'method'=>'GET'
        ];
    }
    public function post($uri,$action){
        $this->router[] = [
            'uri'=>$uri,
            'action'=>$action,
            'method'=>'POST'
        ];
    }
    public function routing(){
        foreach ($this->router as $key){
            if($key['uri']===$_SERVER['REQUEST_URI']){
                if($key['action']){
                 switch ($key['action']){
                     case 'create':
                         $this->controller->createProject($_POST);
                             break;
                     case 'projectId':
                         $this->controller->getProjectId($_POST['id']);
                         break;
                     case 'assignedId':
                         $this->controller->assignedProjectId($_POST);
                         break;
                     case 'assignNewTask':
                         $this->controller->assignNewTask($_POST,$_FILES);
                         break;
                     case 'viewInsertedTask':
                         $this->controller->getInsertedTask($_POST);
                         break;
                     case 'specificTaskId':
                         $this->controller->getTaskId($_POST['taskId']);
                         break;
                     case 'deleteTask':
                         $this->controller->deleteTask($_POST);
                         break;
                     case 'deletedTasks':
                         $this->controller->getDeletedTasks();
                         break;
                     case 'unDeletedTasks':
                         $this->controller->unDeletedTasks($_POST);
                         break;

                     default:
                         $this->controller->listAll();
                 }
                }
                else{
                    $this->controller->listAll();
                }
            }
        }

    }
}