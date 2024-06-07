<?php
session_start();
$time = $_SERVER['REQUEST_TIME'];
$timeout_duration = 3600;
if (!isset($_SESSION['login']) || ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
  header("Location: /php_project_demo/views/login.php");
  exit();
}
?>