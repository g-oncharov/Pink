<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title>Pink</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/contest__style.css">
  <link rel="icon" type="image/png" href="img/fav-icon.png" sizes="16x16">
</head>

<body class="contest-page inner-page">
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
            <li class="site-navigation__item active"><a href="#">Конкурс</a></li>
            <li class="site-navigation__item"><a href="login.php">Вход</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>

    <section class="title">
      <h2>Конкурс на самое безбашенное путешествие с Пинк</h2>
    </section>

    <section class="feedback">
      <b>Поделитесь своей историей и получите шанс выиграть ценный приз — 1000 миль на вашу бонусную карту!
        <span>Пожалуйста, заполните форму ниже:</span>
      </b>
    </section>

    <section class="name">
      <h2 class="visually-hidden">Ваше имя</h2>
      <div class="name__wrapper">
        <form action="" method="get">
          <label for="surname">Фамилия:</label>
          <input type="text" name="surname" placeholder="Укажите фамилию *" id="surname" class="input surname">

          <label for="first-name">Имя:</label>
          <input type="text" name="name" placeholder="Введите ваше имя *" id="first-name" class="input first-name">
        </form>
      </div>

    </section>

    <section class="criteria">
      <form class="criteria__form">
        <fieldset>

          <legend>Ваши безбашенные достижения в путешествии</legend>

          <ul class="criteria__list">
            <li class="filters-add__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-1" value="1" checked>
              <label for="filter-1">Сделал селфи с акулой</label>
            </li>

            <li class="filters-add__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-2" value="2" checked>
              <label for="filter-2">Обгорел на пляже</label>
            </li>

            <li class="filters-add__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-3" value="3">
              <label for="filter-3">Видел Чака Норриса</label>
            </li>

            <li class="filters-add__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-4" value="4">
              <label for="filter-4">Накупил сувениров</label>
            </li>

            <li class="filters-add__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-5" value="5" checked>
              <label for="filter-5">Удержал башню</label>
            </li>

            <li class="filters-add__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-6" value="6">
              <label for="filter-6">Разгромил отель</label>
            </li>
        </fieldset>

      </form>
    </section>

    <section class="user-contacts">
      <form>

        <fieldset class="user-contacts__fieldset">
          <legend>Контактная информация</legend>

          <div class="telephone-block">
            <label for="telephone">Номер телефона</label>
            <input type="text" name="telephone" placeholder="Номер, пожалуйста" id="telephone" class="input telephone">
          </div>

          <div class="address-block">
            <label for="address">Адрес почты</label>
            <input type="text" name="address" placeholder="Введите почту *" id="address" class="input address">
          </div>

        </fieldset>

      </form>

    </section>

    <section class="device">
      <h2 class="visually-hidden">С каким приложением путешествовали</h2>

      <fieldset>
        <legend>С каким приложением путешествовали?</legend>

        <ul class="device__list">
          <li class="filters__option">
            <input class="visually-hidden filters__input filters__input--radio" type="radio" id="filter-ios" name="filter" value="11" checked>
            <label for="filter-ios" class="filter-device">Pink для iOS</label>
          </li>

          <li class="filters__option">
            <input class="visually-hidden filters__input filters__input--radio" type="radio" id="filter-android" name="filter" value="12">
            <label for="filter-android" class="filter-device">Pink на Android</label>
          </li>

          <li class="filters__option">
            <input class="visually-hidden filters__input filters__input--radio" type="radio" id="filter-win" name="filter" value="13">
            <label for="filter-win" class="filter-device">Windows Phone</label>
          </li>
        </ul>
      </fieldset>
    </section>

    <section class="comment">
      <fieldset>
        <legend>Опишите свои эмоции</legend>
        <textarea name="name" placeholder="Можно прям в красках, не стесняясь в выражениях"></textarea>
      </fieldset>

      <div class="comment-wrapper">
        <button class="button--rectangular button-modal--open" type="submit">Отправить форму</button>
        <p><span class="span-pink">*</span> — Обязательные <span class="span-none">для заполнения</span> поля</p>
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

  <section class="modal modal-error" style="display: none;">
    <div class="modal_wrapper">
      <div class="modal__main">
        <h3 class="modal__title">Что-то пошло не так!</h3>
        <p class="modal__text">Проверьте поля, выделенные
          красным, скорее всего вы забыли их заполнить</p>
      </div>
      <div class="modal__footer">
        <button class="button--rectangular">Ок</button>
      </div>
    </div>
  </section>

  <section class="modal modal-sumbit" style="display: none;">
    <div class="modal_wrapper">
      <div class="modal__main">
        <h3 class="modal__title">Ваша заявка отправлена</h3>
        <p class="modal__text">
          Спасибо за ваше участие, ваша заявка уже поступила
          к нам. В ближайшее время мы рассмотрим ее и
          оповестим вас.</p>
      </div>
      <div class="modal__footer">
        <button class="button--rectangular button-modal--closed">Закрыть окно</button>
      </div>
    </div>
  </section>
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
