<?php
session_start();
if ($_SESSION['auth']) {
  require('data/db.php');
  require('model/function.php');
  $userId = $_SESSION['user_id'];
  $nickName = filter_var(trim($_POST['nickname']), FILTER_SANITIZE_STRING);
  $serverPost = $_SERVER['REQUEST_METHOD'] == 'POST';
  $validation = true;
  $outputTitle = 'Ошибка загрузки картинки';
  $outputMessage = '';

  if ($serverPost && $nickName != "") {
    if ($_SESSION['user_status'] != 10) {
      header('Location: /index.php');
    }
    $query = "SELECT `posts`.`id` as post_id , `users`.`id` as user_id , `login`, `img`, `description`, `date`
    FROM `posts` INNER JOIN `users` ON `posts`.user_id = `users`.`id`
    WHERE `login` LIKE '$nickName'
    ORDER BY `post_id` DESC";

    $items = getItems($mysql, $query);
    $items = getLikes($mysql, $items);
    if (empty($items)) {
      $validation = false;
      $outputTitle = 'Ошибка поиска';
      $outputMessage = 'Пользователь с ником ' . $nickName . ' не найден';
    }

  }else {
    $query = "SELECT `posts`.`id` as post_id , `users`.`id` as user_id , `login`, `img`, `description`, `date`
    FROM `posts` INNER JOIN `users` ON `posts`.user_id = `users`.`id`
    WHERE `user_id` = $userId
    ORDER BY `post_id` DESC";

    $items = getItems($mysql, $query);
    $items = getLikes($mysql, $items);
  }
  if (isset($_FILES['image'])) {
  // Получаем нужные элементы массива "image"
  $fileTmpName = $_FILES['image']['tmp_name'];
  $errorCode = $_FILES['image']['error'];
  // Проверим на ошибки
  if ($errorCode !== UPLOAD_ERR_OK || !is_uploaded_file($fileTmpName)) {
      // Массив с названиями ошибок
      $errorMessages = [
        UPLOAD_ERR_INI_SIZE   => 'Размер файла превысил значение upload_max_filesize в конфигурации PHP.',
        UPLOAD_ERR_FORM_SIZE  => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE в HTML-форме.',
        UPLOAD_ERR_PARTIAL    => 'Загружаемый файл был получен только частично.',
        UPLOAD_ERR_NO_FILE    => 'Файл не был загружен.',
        UPLOAD_ERR_NO_TMP_DIR => 'Отсутствует временная папка.',
        UPLOAD_ERR_CANT_WRITE => 'Не удалось записать файл на диск.',
        UPLOAD_ERR_EXTENSION  => 'PHP-расширение остановило загрузку файла.',
      ];
      // Зададим неизвестную ошибку
      $unknownMessage = 'При загрузке файла произошла неизвестная ошибка.';
      // Если в массиве нет кода ошибки, скажем, что ошибка неизвестна
      $outputMessage = isset($errorMessages[$errorCode]) ? $errorMessages[$errorCode] : $unknownMessage;
  } else {
      // Создадим ресурс FileInfo
      $fi = finfo_open(FILEINFO_MIME_TYPE);
      // Получим MIME-тип
      $mime = (string) finfo_file($fi, $fileTmpName);
      // Проверим ключевое слово image (image/jpeg, image/png и т. д.)
      if (strpos($mime, 'image') === false) {
        $outputMessage = 'Можно загружать только изображения.';
      }

      // Результат функции запишем в переменную
      $image = getimagesize($fileTmpName);

      // Зададим ограничения для картинок
      $limitBytes  = 1024 * 1024 * 5;

      // Проверим нужные параметры
      if (filesize($fileTmpName) > $limitBytes) {
        $outputMessage = 'Размер изображения не должен превышать 5 Мбайт.';
      }

      // Сгенерируем новое имя файла через функцию getRandomFileName()
      $name = md5_file($fileTmpName);

      // Сгенерируем расширение файла на основе типа картинки
      $extension = image_type_to_extension($image[2]);

      // Сократим .jpeg до .jpg
      $format = str_replace('jpeg', 'jpg', $extension);
      if ($format != '.png' && $format != '.jpg') {
        $outputMessage = 'Можно загружать изображения только .jpg или .png формата.';
      }
      $path =  dirname(__DIR__, 1) . "\\" ."post/";
      $file = $name . $format;
      // Переместим картинку с новым именем и расширением в папку /upload
      if (!move_uploaded_file($fileTmpName, $path . $file)) {
        $outputMessage = 'При записи изображения на диск произошла ошибка.';
      }
      if ($outputMessage == '') {
        $description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);
        $date = date("F d Y");
        $sql = "INSERT INTO `posts` (`img`, `description`, `date`, `user_id`) VALUES('$file', '$description', '$date', '$userId')";
        mysqli_query($mysql, $sql);
        header('Location: /cabinet.php');
      }
    }
  };
}else {
  header('Location: /index.php');
}
