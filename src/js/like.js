let likesPanel = document.querySelectorAll('.user-photo__footer');
 for (let i = 0; i < likesPanel.length; i++) {
   let like = likesPanel[i].querySelector('.user-photo__like');
   let likeCount = likesPanel[i].querySelector('b');
   like.addEventListener("click", function(e) {
     e.preventDefault();
     like.classList.toggle("user-photo__like--active");
     let userId = like.getAttribute('data-user_id');
     let postId = like.getAttribute('data-post_id');

     const request = new XMLHttpRequest();
     if (this.getAttribute('data-user_like') === "1") {
        likeCount.innerText = parseInt(likeCount.textContent) - 1;
        this.setAttribute('data-user_like', "0")
     }else {
        likeCount.innerText = parseInt(likeCount.textContent) + 1;
        this.setAttribute('data-user_like', "1")
     }
     const url = `like.php`;
     const params = `like=${this.getAttribute('data-user_like')}&user_id=${userId}&post_id=${postId}`;
     request.open("POST", url, true);
     request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     request.send(params);
   });
 }

// let likes = document.querySelectorAll('.user-photo__like');
//  for (let i = 0; i < likes.length; i++) {
//    likes[i].addEventListener("click", function(e) {
//      e.preventDefault();
//      likes[i].classList.toggle("user-photo__like--active");
//      let userLike = likes[i].getAttribute('data-user_like');
//      let userId = likes[i].getAttribute('data-user_id');
//      let postId = likes[i].getAttribute('data-post_id');
//      console.log(userLike);
//      console.log(userId);
//      console.log(postId);
//      // Создаём объект класса XMLHttpRequest
//      const request = new XMLHttpRequest();
//
//      /*  Составляем строку запроса и кладем данные, строка состоит из:
//      пути до файла обработчика ? имя в GET запросе где будет лежать значение запроса id_product и
//      через & мы передаем количество qty_product. */
//      const url = `like.php?like=${userLike}&user_id=${userId}&post_id=${postId}`;
//      /* Здесь мы указываем параметры соединения с сервером, т.е. мы указываем метод соединения GET,
//      а после запятой мы указываем путь к файлу на сервере который будет обрабатывать наш запрос. */
//      if (userLike) {
//
//      }else {
//
//      }
//      request.open('GET', url);
//
//      // Указываем заголовки для сервера, говорим что тип данных, - контент который мы хотим получить должен быть не закодирован.
//      request.setRequestHeader('Content-Type', 'application/x-www-form-url');
//
//      // Здесь мы получаем ответ от сервера на запрос, лучше сказать ждем ответ от сервера
//      request.addEventListener("readystatechange", () => {
//
//       /*   request.readyState - возвращает текущее состояние объекта XHR(XMLHttpRequest) объекта,
//       бывает 4 состояния 4-е состояние запроса - операция полностью завершена, пришел ответ от сервера,
//       вот то что нам нужно request.status это статус ответа,
//       нам нужен код 200 это нормальный ответ сервера, 401 файл не найден, 500 сервер дал ошибку и прочее...   */
//      	if (request.readyState === 4 && request.status === 200) {
//
//            // выводим в консоль то что ответил сервер
//      	  console.log( request.responseText );
//          }
//      });
//
//      // Выполняем запрос
//      request.send();
//    });
//  }
