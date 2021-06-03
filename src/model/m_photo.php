<?php
  session_start();
  require('data/db.php');
  require('model/function.php');
  $query = "SELECT `posts`.`id` as post_id , `users`.`id` as user_id , `login`, `img`, `description`, `date` FROM `posts` INNER JOIN `users` ON `posts`.user_id = `users`.`id` ORDER BY `post_id` DESC";
  $items = getItems($mysql, $query, 9);
  $items = getLikes($mysql, $items);
