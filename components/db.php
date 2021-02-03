<?
$dbhost = "localhost"; //Адрес сервера
$dbuser = "usvet17u_base13"; //Имя пользователя (логин)
$dbpass = "6R8O&rrS"; //Пароль от БД
$dbname = "usvet17u_base13"; //Название БД
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$mysqli->set_charset("utf-8");

if ($mysqli->connect_error) {
  die("Не удалось подключиться к БД " . $mysqli->connect_error);
}