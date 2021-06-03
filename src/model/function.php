<?php
require('data/db.php');

function getItems($mysql, $query, $limit = 0) {
if ($limit != 0) {
   $query = $query . " LIMIT " . $limit;
}
$items = [];
$result = mysqli_query($mysql, $query);
  while ($item = mysqli_fetch_assoc($result)) {
      $items[] = $item;
  }
  return $items;
}

function getLikes($mysql, $items) {
    for ($i = 0; $i < count($items); $i++) {
      $postId =$items[$i]['post_id'];
      $userId = $_SESSION['user_id'];
      $query = "SELECT COUNT(`id`) as 'count' FROM `likes` WHERE `post_id` = '$postId'";
      $items[$i]['likes'] = getItems($mysql, $query)[0]['count'];
      $query = "SELECT COUNT(`id`) as 'user_like' FROM `likes` WHERE `user_id` = '$userId' AND `post_id` = '$postId'";
      $items[$i]['user_like'] = getItems($mysql, $query)[0]['user_like'];
    }
    return $items;
};
