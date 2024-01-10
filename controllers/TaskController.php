<?php
// TaskController.php

class TaskController {
    // Method to fetch tasks from model
    public function fetchTasks() {
        include_once('./models/TaskModel.php');
        $taskModel = new TaskModel();
        return $taskModel->getTasks();
    }
}
?>
