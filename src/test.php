<?php
$serverPost = $_SERVER['REQUEST_METHOD'] == 'POST';
if ($serverPost) {
  echo $_POST["email"];
  echo "<br>";
  echo $_POST["login"];
  echo "<br>";
  echo $_POST["telephone"];
  echo "<br>";
  echo $_POST["password"];
  echo "<br>";
  echo $_POST["password2"];
}
?>
<html>
    <head>
        <title>Форма обратной связи</title>
</head>
<body>
    <form method="POST" action="#" onsubmit="return validateRegistration(this)">
      <fieldset class="user-contacts__fieldset">
        <legend>Контактная информация</legend>

        <div class="user-contacts__block user-contacts__block--login <?= $erorrs[0] ?>">
            <label for="login">Логин:</label>
            <input type="text" name="login" value="<?=$loginText?>" placeholder="Введите ваш логин" id="login" class="input login-name">
        </div>

        <div class="user-contacts__block user-contacts__block--address <?= $erorrs[1] ?>">
          <label for="email">Адрес почты:</label>
          <input type="text" name="email" value="<?=$mailText?>" placeholder="Введите почту" id="email" class="input address">
        </div>

        <div class="user-contacts__block user-contacts__block--telephone <?= $erorrs[2] ?>">
          <label for="telephone">Номер телефона:</label>
          <input type="text" name="telephone" value="<?=$telText?>" placeholder="Номер, пожалуйста" id="telephone" class="input telephone">
        </div>

        <div class="user-contacts__block user-contacts__block--password <?= $erorrs[3] ?>">
            <label for="password">Пароль:</label>
            <input type="password" name="password" placeholder="Введите пароль" id="password" class="input input--password">
        </div>

        <div class="user-contacts__block user-contacts__block--password2 <?= $erorrs[4] ?>">
            <label for="password2">Повторите пароль:</label>
            <input type="password" name="password2" placeholder="Повторите пароль" id="password2" class="input input--password2">
        </div>
      </fieldset>
    <div class="confirmation">
      <p class="confirmation__text">У тебя уже есть аккаунт? <a href="login.php">Заходи!</a></p>
      <div class="confirmation-wrapper">
        <button class="button--rectangular button-modal--open" type="submit">Зарегистрироваться</button>
      </div>
    </div>
    </form>
</body>
</html>
