<?php

require 'Core/router.php';
require 'Controller/usercontroller.php';
$router = new router();

$router->get('/','list');
$router->post('/insertProject','create');
$router->get('/getProjectId','projectId');
$router->get('/assignProjectId','assignedId');
$router->post('/insertNewTask','assignNewTask');
$router->get('/getInsertedTask','viewInsertedTask');
$router->get('/getTaskId','specificTaskId');
$router->post('/deleteTask','deleteTask');
$router->get('/deletedTasks','deletedTasks');
$router->get('/unDeletedTask','unDeletedTasks');
$router->routing();