<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title>Pink</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/index__style.css">
  <link rel="icon" type="image/png" href="img/fav-icon.png" sizes="16x16">
</head>

<body>
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
            <li class="site-navigation__item active"><a href="#">Главная</a></li>
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
    <section class="intro">
      <div class="intro__wrapper">
        <h2>Взгляните на жизнь иначе!</h2>
        <div class="container">
          <a href="#" class="button">Скачать приложение</a>

          <ul class="system__list">
            <li class="system__item system__item--iphone">
              <a href="#"><img src="img/apple.svg" alt="iPhone"></a>
            </li>
            <li class="system__item system__item--anroind">
              <a href="#"><img src="img/android.svg" alt="Android"></a>
            </li>
            <li class="system__item system__item--windows">
              <a href="#"><img src="img/microsoft.svg" alt="Windows"></a>
            </li>
          </ul>

          <p class="intro__text">Доступно для iPhone, iPad, Android,
            Windows Phone, OS X, Windows 10</p>
            <div id="time-node"></div>
        </div>
      </div>
    </section>

    <section class="information">

      <div class="information__block">
        <h2 class="visually-hidden">Информация</h2>
        <p class="information__text">Устали от серости мегаполиса?<br><br>
          <span>Нам есть, что вам предложить!</span></p>
      </div>

      <div class="information__wrapper">

        <div class="container">
          <ul class="information__list">

            <li class="information__item">
              <h3>Поднимает настроение</h3>
              <p>Приложение позволит вам победить осеннюю хандру и депрессию буквально в несколько кликов</p>
            </li>

            <li class="information__item">
              <h3>Меняет мир вокруг</h3>
              <p>Сделайте снимок и украсьте его смайликом или текстовой подписью, чтобы усилить эффект</p>
            </li>

            <li class="information__item">
              <h3>Заводит новых друзей</h3>
              <p>Ставьте лайки, комментируйте, делитесь фотографиями с друзьями и заводите новых</p>
            </li>

          </ul>
        </div>
      </div>
    </section>

    <section class="diagram">
      <div class="diagram__wrapper">

        <h2 class="visually-hidden">Диаграмма</h2>

        <div class="diagram__text">
          <h2 class="diagram__title">Эффект<br>
            на 24 часа!</h2>
          <p>
            Британские ученые провели исследования
            и доказали, что положительный эффект
            от использования приложения длится
            целые сутки!
          </p>
          <a href="#">Узнать больше об исследовании</a>
        </div>

      </div>
    </section>

    <section class="reivews">
      <h2 class="visually-hidden">Фотогалерея</h2>
      <div class="slider">

        <input type="radio" id="btn-1" name="toggle" checked>
        <input type="radio" id="btn-2" name="toggle">
        <input type="radio" id="btn-3" name="toggle">

        <div class="slider-controls">
          <label for="btn-1"></label>
          <label for="btn-2"></label>
          <label for="btn-3"></label>
        </div>

        <div class="slides">

          <div class="slide">
            <h3>Николай Петров</h3>
            <b>25 лет, водитель трамвая</b>
            <p>«Это приложение перевернуло мой мир и позволило по-новому взглянуть на привычные серые вещи!
              А еще я познакомился со своей будущей женой в комментариях к выложенной фотографии!»</p>
          </div>

          <div class="slide">
            <h3>Николай Петров</h3>
            <b>25 лет, водитель трамвая</b>
            <p>«Это приложение перевернуло мой мир и позволило по-новому взглянуть на привычные серые вещи!
              А еще я познакомился со своей будущей женой в комментариях к выложенной фотографии!»</p>
          </div>

          <div class="slide">
            <h3>Николай Петров</h3>
            <b>25 лет, водитель трамвая</b>
            <p>«Это приложение перевернуло мой мир и позволило по-новому взглянуть на привычные серые вещи!
              А еще я познакомился со своей будущей женой в комментариях к выложенной фотографии!»</p>
          </div>

        </div>
      </div>
    </section>

    <section class="price">
      <div class="price__wrapper">
        <div class="dragscroll">
        <div class="price-table">

          <div class="price-table__item price-table__item--option">
            <ul class="price__list">
              <li class="price__item">Розовый фильтр</li>
              <li class="price__item">Смайлики</li>
              <li class="price__item">Комментарии</li>
            </ul>
          </div>

          <div class="price-table__item price-table__item1">
            <div class="price-table__header">
              <p class="price__title">Base</p>
              <p class="price__cost">1,99 USD</p>
            </div>

            <ul class="price__list">
              <li class="price__item price__item-on">Розовый фильтр</li>
              <li class="price__item price__item-off">Смайлики</li>
              <li class="price__item price__item-off">Комментарии</li>
            </ul>

          </div>

          <div class="price-table__item price-table__item2">
            <div class="price-table__header hit">
              <p class="price__title">Standard</p>
              <p class="price__cost">3,99 USD</p>
            </div>

            <ul class="price__list">
              <li class="price__item price__item-on">Розовый фильтр</li>
              <li class="price__item price__item-on">Смайлики</li>
              <li class="price__item price__item-off">Комментарии</li>
            </ul>
          </div>

          <div class="price-table__item price-table__item3">
            <div class="price-table__header">
              <p class="price__title">Unlimited</p>
              <p class="price__cost">9,99 USD</p>
            </div>

            <ul class="price__list">
              <li class="price__item price__item-on">Розовый фильтр</li>
              <li class="price__item price__item-on">Смайлики</li>
              <li class="price__item price__item-on">Комментарии</li>
            </ul>
          </div>

        </div>
      </div>
      </div>
    </section>

    <section class="contacts">
      <div class="contacts__wrapper">
        <h2 class="contacts__title">Остались вопросы?
          Свяжитесь с нами!</h2>


        <div class="contacts__main">
          <div class="contacts__phone">
            <b>Звоните:</b>
            <a href="tel:+380951373441">+38 (095) 137-34-41</a>
          </div>

          <div class="contacts__mail">
            <b>Пишите:</b>
            <a href="mailto:gonchxrov@gmail.com">gonchxrov@gmail.com</a>
          </div>

          <div class="contacts__map">
            <b>Приезжайте в гости:</b>
            <a href="https://goo.gl/maps/47Q6uq6aTkANPoHNA">пр-т. Науки, 14</a>
          </div>
        </div>
      </div>
      <a class="button contacts-button-map" href="#">Как проехать</a>
      <a class="button" href="#">Обратная связь</a>
      <div class="iframe__wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d34493.970456965166!2d36.21686446478781!3d50.015484336611586!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a1243f9e69d1%3A0x6daed05394f03251!2z0KXQsNGA0YzQutC-0LLRgdC60LjQuSDQvdCw0YbQuNC-0L3QsNC70YzQvdGL0Lkg0YPQvdC40LLQtdGA0YHQuNGC0LXRgiDRgNCw0LTQuNC-0Y3Qu9C10LrRgtGA0L7QvdC40LrQuA!5e0!3m2!1sru!2sua!4v1614297559938!5m2!1sru!2sua"
         allowfullscreen=""
         loading="lazy"></iframe>
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
<script type="text/javascript" src="js/timer.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/dragscroll.js"></script>
</body>

</html>
