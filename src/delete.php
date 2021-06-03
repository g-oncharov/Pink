<?php
session_start();
require('data/db.php');
require('model/function.php');
$postId = $_POST['post_id'];
$sql = "SELECT `user_id` FROM `posts` WHERE `id` = '$postId'";
$items = getItems($mysql, $sql)[0];
if ($_SESSION['user_status'] == 10 || $_SESSION['user_id'] == $items['user_id']) {
  $sql = "DELETE FROM `posts` WHERE `id` = '$postId'";
  mysqli_query($mysql, $sql);
}
header("Location: " . $_SERVER["HTTP_REFERER"]);
