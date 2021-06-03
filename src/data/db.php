<?php
//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysql = mysqli_connect('localhost', 'root', 'root', 'pink');
if ($mysql == false) {
  echo "База данных не подключенна";
  exit();
}
