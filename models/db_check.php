<?php
function db_check() {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $conn = new mysqli($servername, $username, $password, "db_hw");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  return  $conn;
}
$conn = db_check();
