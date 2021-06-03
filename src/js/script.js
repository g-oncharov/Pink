//открытие/закрытие меню
let buttonMenuOpen = document.querySelector(".main-nav__toggle--open");
let buttonMenuClose = document.querySelector(".main-nav__toggle--close");

let toggleMenu = status => {
  if (status === 'close' || status === 'open') {
    let menu = document.querySelector(".main-navigation-wraper");
    let logo = document.querySelector(".header__wrapper");

    if (status === 'open') {
      menu.classList.add("open");
      logo.classList.add("header__wrapper--open")
      buttonMenuOpen.classList.add("closed")
    }

    if (status === 'close') {
      menu.classList.remove("open");
      logo.classList.remove("header__wrapper--open")
      buttonMenuOpen.classList.remove("closed")
    }

  }else {
    console.log('ERROR: Incorrect status in toggleMenu()');
  }
}

  buttonMenuOpen.addEventListener("click", (e) => {
    e.preventDefault();
    toggleMenu('open');
  });

  buttonMenuClose.addEventListener("click", (e) => {
    e.preventDefault();
    toggleMenu('close');
  });

//закрытие модальных окон

let closeModal = el => {
  el.classList.add("d-none");
  document.querySelector("body").classList.remove("overflow-h");
}

let hasModal = document.getElementsByClassName("modal").length;
if (hasModal) {
  let buttonModalClose = document.querySelector(".button-modal--closed");
  let modal = document.querySelector(".modal");

  buttonModalClose.addEventListener("click", (e) => {
    e.preventDefault();
    closeModal(modal);
  });
}


//центрирование таблицы
let windowWidth = document.body.clientWidth;
let tableAlignment = () => {
  let table = document.querySelector('.dragscroll');
  let сontentWidth = document.querySelector('.price-table');
  let scrollx = (сontentWidth.clientWidth - windowWidth) * 0.5;
  table.scrollLeft += scrollx;
}

let hastable = document.getElementsByClassName('price__wrapper').length;
if (hastable && windowWidth < 660) {
  document.addEventListener("DOMContentLoaded", tableAlignment);
}

function loadFile(e) {
    if (this.files && this.files[0]) {
        document.querySelector('.preview-block').classList.add('d-block');
        let reader = new FileReader();
        reader.addEventListener('load', function(e) {
          document.querySelector('.preview-block__image img').src = e.target.result;
        });
        reader.readAsDataURL(this.files[0]);
    }
}
document.querySelector(".input--file").addEventListener('change', loadFile);
