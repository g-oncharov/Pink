<?php require('model/m_cabinet.php'); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title>Pink</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/cabinet__style.css">
  <link rel="icon" type="image/png" href="img/fav-icon.png" sizes="16x16">
</head>

<body class="inner-page <? if (!$validation || !empty($outputMessage)): ?>overflow-h<? endif; ?>">
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
            <li class="site-navigation__item active"><a href="cabinet.php"><?=$_SESSION['login']?></a></li>
            <li class="site-navigation__item"><a href="logout.php">Выход</a></li>
            <? else: ?>
            <li class="site-navigation__item"><a href="login.php">Вход</a></li>
            <? endif; ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>

    <section class="title">
      <h2>Мой кабинет</h2>
    </section>

    <section class="feedback">
      <b>Загружайте новые фотографии</b>
    </section>
    <? if ($_SESSION['user_status'] == 10): ?>
      <section class="search">

            <form method="post" enctype="multipart/form-data">
              <fieldset class="search__fieldset">
                <legend>Поиск постов</legend>

                <div class="search__block search__block--text">
                  <label for="nickname">Ник: </label>
                  <input type="text" name="nickname" placeholder="Введите ник" id="nickname" class="input input--nickname">
                </div>
              </fieldset>

              <div class="confirmation">
                <div class="confirmation-wrapper">
                  <button class="button--rectangular" type="submit">Поиск</button>
                </div>
              </div>
            </form>
      </section>
    <? endif; ?>
    <section class="user-contacts search">
      <form method="post" enctype="multipart/form-data">
        <fieldset class="user-contacts__fieldset">
          <legend>Информация</legend>

          <div class="user-contacts__block user-contacts__block--text">
            <label for="description">Описание: </label>
            <input type="text" name="description" placeholder="Введите ваш описание" id="description" class="input input--description">
          </div>

          <div class="user-contacts__block user-contacts__block--file">
            <label for="image">Файл: </label>
            <input type="file" name="image" id="image" class="input input--file">
          </div>

        <div class="user-contacts__block preview-block">
          <p>Превью фотографии</p>
          <div class="preview-block__image">
            <img src="" alt="">
          </div>
        </div>
        </fieldset>

        <div class="confirmation">
          <div class="confirmation-wrapper">
            <button class="button--rectangular button-modal--open" type="submit">Загрузить</button>
          </div>
        </div>
      </form>
    </section>

    <section class="photo">
      <?php if (!empty($items)): ?>
        <?php if (empty($_POST['nickname'])): ?>
          <h2>Ваши посты</h2>
        <?php else: ?>
          <h2>Посты <?=$_POST['nickname']?></h2>
        <?php endif; ?>
      <?php endif; ?>
    <div class="photo-wrapper">
      <?php foreach ($items as $item): ?>
      <section class="user-photo">
        <div class="user-photo__img">
          <img src="post/<?= $item['img'];?>" alt="">
        </div>

        <div class="user-photo__block">
          <div class="user-photo__title">
            <h3><?= $item['login'];?></h3>
            <b><?= $item['date'];?></b>
          </div>

          <div class="user-photo__text">
            <p><?= $item['description'];?></p>
          </div>

          <div class="user-photo__footer">
            <button class="user-photo__like<?if ($item['user_like']):?> user-photo__like--active<?endif;?>"
              data-user_like="<?=$item['user_like'];?>" data-user_id="<?=$_SESSION['user_id'];?>"
              data-post_id="<?=$item['post_id'];?>" type="button">Нравится</button>
            <p>Нравится:</p> <b><?= $item['likes'];?></b>
            <? if ($_SESSION['user_status'] == 10 || $_SESSION['user_id'] == $item['user_id']): ?>
            <p data-post_id="<?=$item['post_id'];?>" class="user-photo__delete">Удалить</p>
            <? endif; ?>
          </div>
        </div>
      </section>
      <?php endforeach; ?>
    </div>
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

    <? if (!$validation || !empty($outputMessage)): ?>
    <section class="modal modal-error">
      <div class="modal_wrapper">
        <div class="modal__main">
          <h3 class="modal__title"><?=$outputTitle?></h3>
          <p class="modal__text"><?=$outputMessage?></p>
        </div>
        <div class="modal__footer">
          <button class="button--rectangular button-modal--closed">Закрыть окно</button>
        </div>
      </div>
    </section>
    <? endif; ?>
<script type="text/javascript" src="js/like.js"></script>
<script type="text/javascript" src="js/delete.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>
