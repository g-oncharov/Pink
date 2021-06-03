<?php
  session_start();
  require('data/db.php');
  if ($_SESSION['auth']) {
  $postId = $_POST['post_id'];
  $userId = $_POST['user_id'];
  $like   = $_POST['like'];
    if ($userId == $_SESSION['user_id']) {
      if ($like) {
        $sql = "INSERT INTO `likes` (`user_id`, `post_id`) VALUES ('$userId', '$postId')";
      }else {
        $sql = "DELETE FROM `likes` WHERE `user_id` = '$userId' AND `post_id` = '$postId'";
      }
      mysqli_query($mysql, $sql);
      mysqli_close($mysql);
    }
  }else {
    header("Location: /login.php");
  }
