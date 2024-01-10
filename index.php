<?php
include_once('config/db.php');
include_once('controllers/TaskController.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>To-do</title>
  <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet"> <!-- Add your custom styles if needed -->
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <?php include 'views/sidebar.php'; ?>
      <?php include 'views/header.php'; ?>
      <div class="gap"></div>
      <?php include 'views/tasks.php'; ?>
    </div>
  </div>

  <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>
  <script src="assets/js/tasks.js" defer></script>
</body>
</html>