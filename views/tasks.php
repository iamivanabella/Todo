<?php
// Include database configuration and necessary files
// include_once('config/db.php');
include_once('models/TaskModel.php'); // Include the TaskModel

// Instantiate the TaskModel
$taskModel = new TaskModel();

// Get all task statuses and their IDs from the task_status table
$statuses = $taskModel->getAllStatuses($conn); // Implement this method in TaskModel

// Display tasks for each section
?>

<div class="col-lg-9 col-md-8 col-sm-12 content-body">
    <div class="tasks container">
        <?php foreach ($statuses as $status) : ?>
            <div class="section">
                <div class="section-title">
                    <h5><?php echo $status['status_name']; ?></h5>
                </div>
                <div class="section-tasks">
                    <?php
                    // Get tasks for this section's status_id
                    $tasks = $taskModel->getTasksByStatusId($conn, $status['status_id']); // Implement this method in TaskModel

                    // Display tasks
                    if (!empty($tasks)) {
                        foreach ($tasks as $task) {
                            echo '<div class="task"><p>' . $task['description'] . '</p><div class="delete-task"><i class="fa-regular fa-circle-xmark"></i></div></div>';
                        }
                    } else {
                        echo '<p>No tasks in this section.</p>';
                    }
                    ?>
                </div>
                <div class="task add-task">
                    <i class="fa-solid fa-circle-plus"></i><span>Add Task</span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
