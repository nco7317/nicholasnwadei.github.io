<?php
session_start();
require 'connection.php';


if (isset($_POST['delete-button'])) {

  $key = mysqli_real_escape_string($conn, $_POST['keyToDelete']);
  $sql = "SELECT * FROM user_lists WHERE gift_id = ?";
  $stmt = mysqli_stmt_init($conn);
  if ($key == true) {
 if (!mysqli_stmt_prepare($stmt, $sql)) {
     header("Location: ../my_gifts.php?signup=SQL ERROR");
     exit();
  } else {
    mysqli_stmt_bind_param($stmt, "s", $key);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    $resultCheck = mysqli_stmt_num_rows($stmt);
    if ($resultCheck > 0) {
    $queryDelete = "DELETE FROM user_lists WHERE gift_id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $queryDelete)) {
       header("Location: ../my_gifts.php?error=deleteerror");
       exit();
     } else{
       mysqli_stmt_bind_param($stmt, "s", $key);
       mysqli_stmt_execute($stmt);
       header("Location: ../my_gifts.php?delete=success");
       exit();
     }
   }
 }
} else {
  header("Location: ../my_gifts.php?error=deleteerror");
}

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
 else {
  header("Location: ../mygifts.php");
}
?>
