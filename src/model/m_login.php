<?php
require('data/db.php');
session_start();
$serverPost = $_SERVER['REQUEST_METHOD'] == 'POST';
$validation = true;
if ($serverPost) {
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass  = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $errorClass = 'user-contacts__block--error';
    $erorrs = [];

    if (empty($erorrs)) {
        $result = mysqli_query($mysql, "SELECT `id`, `pass`, `status` FROM `users` WHERE `login` = '".$login."'");
        $user = mysqli_fetch_assoc($result);

        if (password_verify($pass, $user['pass'])) {
            $validation = true;
            $_SESSION['auth'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['login'] = $login;
            $_SESSION['user_status'] = $user['status'];
            header('Location: /index.php');
        }else {
          $validation = false;
        }

        mysqli_close($mysql);
    }else {
      $validation1 = false;
    }
  }
$loginText = $_POST['login'] ?? '';
