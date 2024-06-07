<?php
require_once dirname(__FILE__)."/db_check.php";

$query = [
  'username' => htmlspecialchars($_GET["username"]),
  'passwordOrg' => htmlspecialchars($_GET["passwordOrg"]),
  'passwordNew' => htmlspecialchars($_GET["passwordNew"])
];
changePassword($query['username'], $query['passwordOrg'], $query['passwordNew'], $conn);

function changePassword($username, $passwordOrg, $passwordNew, $conn) {
  $username_sql = "SELECT id FROM db_hw_login_system WHERE username = '$username'";
  $password_sql = "SELECT id FROM db_hw_login_system WHERE password = '$passwordOrg'";
  $username_result = mysqli_query($conn, $username_sql);
  $password_result = mysqli_query($conn, $password_sql);
  if(mysqli_num_rows($username_result) == 0) {
    echo "沒有該User Name";
    echo '<br>';
  } elseif(mysqli_num_rows($password_result) == 0) {
    echo "密碼錯誤";
  } elseif(mysqli_num_rows($username_result) > 0 && mysqli_num_rows($password_result) > 0) {
    $sql = "UPDATE db_hw_login_system SET password = '$passwordNew' WHERE username = '$username'";
    if (mysqli_query($conn, $sql)) {
      echo "密碼修改成功";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }  
  }
  $conn->close();
}
