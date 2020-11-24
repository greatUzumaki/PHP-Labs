<?php
require_once 'connect.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

// создание таблицы с полями
$query ="CREATE Table account
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Имя VARCHAR(200) NOT NULL,
    Фамилия VARCHAR(200) NOT NULL,
    Отчество VARCHAR(200) NOT NULL,
    Email VARCHAR(200) NOT NULL,
    Телефон BIGINT(20) NOT NULL,
    Город VARCHAR(200) NOT NULL,
    Страна VARCHAR(200) NOT NULL,
    Фотография BLOB NOT NULL
)";

//таблица либо создается ,и оповещает об этом, либо выводит ошибку
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    echo "Создание таблицы прошло успешно";
}

$query = 'ALTER TABLE `account` ADD UNIQUE(`Фамилия`);'; //указываем поле уникальным
// закрываем подключение
mysqli_close($link);

echo '<br>';
echo '<a href="index.php">На главную</a>'
?>