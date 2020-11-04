<?php
require 'connection.php';
session_start();

if (isset($_POST['create-list-submit'])) {
  $g_name = stripslashes(mysqli_real_escape_string($conn, $_POST['g_name']));
  $g_price = mysqli_real_escape_string($conn, $_POST['g_price']);
  $g_store = mysqli_real_escape_string($conn, $_POST['g_store']);
  $g_notes = stripslashes(mysqli_real_escape_string($conn, $_POST['g_notes']));

if (empty($g_name) || empty($g_price) ||
empty($g_store)) {
   header("Location: ../my_gifts.php?error=emptyfields&g_name=".$g_name."&g_price=".$g_price."&g_store=".$g_store."&g_notes=".$g_notes);
   exit();
} else {
        $sql = "INSERT INTO user_lists (g_name, g_price, g_store, g_notes, user_id)
       VALUES (?, ?, ?, ?, ?)";
       $stmt = mysqli_stmt_init($conn);
       if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../my_gifts.php?error=sqlerror");
          exit();
        } else {
          mysqli_stmt_bind_param($stmt, "sssss", $g_name, $g_price, $g_store, $g_notes, $_SESSION['user_id']);
          mysqli_stmt_execute($stmt);
          header("Location: ../my_gifts.php?upload=success");
          exit();
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

} else {
  header("Location: ../my_gifts.php");
}

?>
