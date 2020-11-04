<?php
require 'connection.php';

if (isset($_POST['signup-submit'])) {
$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$birthday = mysqli_real_escape_string($conn, $_POST['birthday']);

if (empty($first_name) || empty($last_name) || empty($username) ||
empty($password) || empty($birthday)) {
   header("Location: ../index.php?error=emptyfields&first_name=".$first_name."&last_name=".$last_name);
   exit();
} else {
  $sql = "SELECT username FROM gifts_user WHERE username=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
     header("Location: ../index.php?signup=SQL ERROR");
     exit();
  } else {
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    if ($resultCheck > 0) {
      header("Location: ../index.php?error=usertaken&username=".$username);
      exit();
    } else {
      $sql = "INSERT INTO gifts_user (first_name, last_name, username, password, birthday)
       VALUES (?, ?, ?, ?, ?)";
       $stmt = mysqli_stmt_init($conn);
       if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../index.php?signup=SQL ERROR");
          exit();
        } else {
          $hashedPwdInDb = password_hash($password, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt, "sssss", $first_name, $last_name, $username, $hashedPwdInDb, $birthday);
          mysqli_stmt_execute($stmt);
          header("Location: ../index.php?signup=success");
          exit();
        }
    }
  }
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

} else {
  header("Location: ../index.php");
}
?>
