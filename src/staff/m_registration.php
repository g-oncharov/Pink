<?php
require('data/db.php');
session_start();
$serverPost = $_SERVER['REQUEST_METHOD'] == 'POST';
if ($serverPost) {
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $tel = filter_var(trim($_POST['telephone']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $pass2 = filter_var(trim($_POST['password2']), FILTER_SANITIZE_STRING);
    $errorClass = 'user-contacts__block--error';
    $errorText = '';
    $erorrs = [];
    $validation = false;
    // if (mb_strlen($login) < 3 || mb_strlen($login) > 30) {
    //     $erorrs[0] = $errorClass;
    // }
    // if (mb_strlen($email) < 8 || mb_strlen($email) > 30) {
    //     $erorrs[1] = $errorClass;
    // }
    // if (mb_strlen($tel) < 3 || mb_strlen($tel) > 14) {
    //     $erorrs[2] = $errorClass;
    // }
    // if (mb_strlen($pass) < 4 || mb_strlen($pass) > 60) {
    //     $erorrs[3] = $errorClass;
    // }
    // if ($pass != $pass2 || $pass2 == '') {
    //     $erorrs[4] = $errorClass;
    // }

    $passH = password_hash($pass, PASSWORD_BCRYPT);

    $resultEmail = mysqli_fetch_assoc(mysqli_query($mysql, "SELECT `mail`  FROM `users` WHERE `mail` = '".$email."'"))['mail'];
    $resultLogin = mysqli_fetch_assoc(mysqli_query($mysql, "SELECT `login` FROM `users` WHERE `login` = '".$login."'"))['login'];
    if ($resultEmail == $email) {
        $errorText = "Эта почта уже занята";
    }else if ($resultLogin == $login) {
        $errorText = "Этот логин уже занят";
    }else {
        $validation = true;
    }
    if (empty($erorrs) && $validation) {
        mysqli_query($mysql, "INSERT INTO `users` (`login`, `pass`, `mail`, `tel`) VALUES('$login', '$passH', '$email', '$tel')");
        $result = mysqli_query($mysql, "SELECT `id` FROM `users` WHERE `login` = '$login'");
        $user = mysqli_fetch_assoc($result);
        $_SESSION['auth'] = true;
        $_SESSION['login'] = $login;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_status'] = 0;
        header('Location: /index.php');
    }
    mysqli_close($mysql);
}
$loginText = $_POST['login'] ?? '';
$mailText  = $_POST['email'] ?? '';
$telText   = $_POST['telephone'] ?? '';
