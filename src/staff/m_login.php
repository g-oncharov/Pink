<?php
require('data/db.php');
session_start();
$serverPost = $_SERVER['REQUEST_METHOD'] == 'POST';
$validation1 = true;
$validation2 = true;
if ($serverPost) {
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass  = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $errorClass = 'user-contacts__block--error';
    $erorrs = [];
    // if (mb_strlen($login) < 2 || mb_strlen($login) > 30) {
    //     $erorrs[0] = $errorClass;
    // }
    // if (mb_strlen($pass) < 2 || mb_strlen($pass) > 60) {
    //     $erorrs[1] = $errorClass;
    // }

    if (empty($erorrs)) {
        $result = mysqli_query($mysql, "SELECT `id`, `pass`, `status` FROM `users` WHERE `login` = '".$login."'");
        $user = mysqli_fetch_assoc($result);

        if (password_verify($pass, $user['pass'])) {
            $validation2 = true;
            $_SESSION['auth'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['login'] = $login;
            $_SESSION['user_status'] = $user['status'];
            header('Location: /index.php');
        }else {
          $validation2 = false;
        }

        mysqli_close($mysql);
    }else {
      $validation1 = false;
    }
  }
$loginText = $_POST['login'] ?? '';
// echo "$validation1";
// echo "$validation2";
