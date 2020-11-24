<?php
if (isset($_POST['name']) && isset($_POST['second_name'])
&& isset($_POST['otche']) && isset($_POST['email']) && isset($_POST['phone'])
&& isset($_POST['city']) && isset($_POST['county'])){ // Проверка введены ли все данные

$name = $_POST['name'];
$second_name = $_POST['second_name'];
$otche = $_POST['otche'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$county = $_POST['county'];
$photo = $_POST['photo'];

include "connect.php"; // данные БД
$db_table = "account"; // имя таблицы БД

$mysqli = new mysqli($host,$user,$password,$database);
// Если есть ошибка соединения, выводим её и убиваем подключение
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
// Заполняем поля
$result = $mysqli->query("INSERT INTO ".$db_table." (Имя,Фамилия,Отчество,Email,
Телефон,Город,Страна,Фотография)
VALUES ('$name','$second_name','$otche',
'$email','$phone','$city','$county','$photo')");
if ($result == true){ // Проверка внесены ли данные
    echo "Информация занесена в  БД";
    echo "<br>";
    echo "<a href='index.php'>На главную</a>";
    echo "<br>";
    echo "<a href='write.php'>Назад</a>";
}else{
    echo "Информация не занесена в БД";
    echo "<br>";
    echo "<a href='index.php'>На главную</a>";
    echo "<br>";
    echo "<a href='write.php'>Назад</a>";
}
}