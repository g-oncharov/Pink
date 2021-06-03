<?php require('model/m_registration.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title>Pink</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/registration__style.css">
  <link rel="icon" type="image/png" href="img/fav-icon.png" sizes="16x16">
  <script type="text/javascript" src="js/validateRegistration.js"></script>
</head>

<body class="contest-page inner-page <? if ($serverPost && !$validation): ?>overflow-h<? endif; ?>">
<!-- <body class="contest-page inner-page"> -->
  <header class="page-header">
    <nav class="page-navigation">
      <div class="header__wrapper">
        <div class="page-header__logo">
          <a href="#">
            <picture>
              <source srcset="img/logo-w-desktop.png" media="(min-width: 1200px)">
              <source srcset="img/logo-w-tablet.png" media="(min-width: 660px)">
              <source srcset="img/logo-w-mobile.png" media="(max-width: 659px)">
              <img src="img/logo.svg" alt="Pink">
            </picture>
          </a>
        </div>

        <button class="main-nav__toggle main-nav__toggle--open" type="button">Открыть меню</button>

        <div class="main-navigation-wraper">
          <button class="main-nav__toggle main-nav__toggle--close" type="button">Закрыть меню</button>
          <ul class="site-navigation">
            <li class="site-navigation__item"><a href="index.php">Главная</a></li>
            <li class="site-navigation__item"><a href="photo.php">Лента</a></li>
            <? if ($_SESSION['auth']): ?>
            <li class="site-navigation__item"><a href="cabinet.php"><?=$_SESSION['login']?></a></li>
            <li class="site-navigation__item"><a href="logout.php">Выход</a></li>
            <? else: ?>
            <li class="site-navigation__item"><a href="https://g-oncharov.github.io">Портфолио</a></li>
            <li class="site-navigation__item"><a href="login.php">Вход</a></li>
            <? endif; ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>

    <section class="title">
      <h2>Присоеденяйтесь к новой социальной сети Пинк</h2>
    </section>

    <section class="feedback">
      <b>Регистрация</b>
    </section>

    <section class="user-contacts">
      <form method="post" onsubmit="return validateRegistration(this)">
        <fieldset class="user-contacts__fieldset">
          <legend>Контактная информация</legend>

          <div class="user-contacts__block user-contacts__block--login <?= $erorrs[0] ?>">
              <label for="login">Логин: <span class="error-messange">Длина логина должна быть от 2 до 30 символов</span></label>
              <input type="text" name="login" value="<?=$loginText?>" placeholder="Введите ваш логин" id="login" class="input login-name">
          </div>

          <div class="user-contacts__block user-contacts__block--address <?= $erorrs[1] ?>">
            <label for="email">Адрес почты: <span class="error-messange">Почта должна быть в валидном формате</span></label>
            <input type="text" name="email" value="<?=$mailText?>" placeholder="Введите почту" id="email" class="input address">
          </div>

          <div class="user-contacts__block user-contacts__block--telephone <?= $erorrs[2] ?>">
            <label for="telephone">Номер телефона: <span class="error-messange">Длина номера телефона должна быть от 4 до 20 символов</span></label>
            <input type="text" name="telephone" value="<?=$telText?>" placeholder="Номер, пожалуйста" id="telephone" class="input telephone">
          </div>

          <div class="user-contacts__block user-contacts__block--password <?= $erorrs[3] ?>">
              <label for="password">Пароль:  <span class="error-messange">Пароль должен быть от 4 до 20 символов и не содержать спец. символов</span></label>
              <input type="password" name="password" placeholder="Введите пароль" id="password" class="input input--password">
          </div>

          <div class="user-contacts__block user-contacts__block--password2 <?= $erorrs[4] ?>">
              <label for="password2">Повторите пароль:  <span class="error-messange">Пароли должны совпадать</span></label>
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
    </section>

  </main>
  <footer class="main__footer">
    <div class="company-block">
      <a href="#">
        <picture>
          <source srcset="img/logo-f-desktop.png" media="(min-width: 1200px)">
          <source srcset="img/logo-f-tablet.png" media="(min-width: 660px)">
          <img src="img/logo-f-tablet.png" alt="Pink">
        </picture>
      </a>
    </div>

    <div class="social-block">
      <a class="icon icon--tw" href="#"><span class="visually-hidden">Твиттер</span></a>
      <a class="icon icon--fb" href="#"><span class="visually-hidden">Фейсбук</span></a>
      <a class="icon icon--yt" href="#"><span class="visually-hidden">Ютуб</span></a>
    </div>

    <div class="info-block">
      <a href="https://g-oncharov.github.io"></a>
    </div>
  </footer>


  <? if ($serverPost && !$validation): ?>
  <section class="modal modal-error">
    <div class="modal_wrapper">
      <div class="modal__main">
        <h3 class="modal__title">Ошибка входа</h3>
        <p class="modal__text"><?=$errorText?></p>
      </div>
      <div class="modal__footer">
        <button class="button--rectangular button-modal--closed">Закрыть окно</button>
      </div>
    </div>
  </section>
  <? endif; ?>
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
