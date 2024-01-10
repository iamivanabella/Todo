<?php
class TaskModel {
    // Method to get all statuses
    public function getAllStatuses($conn) {
        $statuses = [];

        $sql = "SELECT * FROM task_status";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $statuses[] = $row;
            }
        }

        return $statuses;
    }

    // Method to get tasks by status_id
    public function getTasksByStatusId($conn, $statusId) {
        $tasks = [];

        $sql = "SELECT * FROM task WHERE status_id = $statusId";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $tasks[] = $row;
            }
        }

        return $tasks;
    }
}
?>