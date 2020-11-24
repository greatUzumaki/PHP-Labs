<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
require_once 'connect.php'; // подключаем скрипт

if(isset($_POST['id'])){ // если id вписан то идем дальше

$link = mysqli_connect($host, $user, $password, $database)
            or die("Ошибка " . mysqli_error($link));
    $id = mysqli_real_escape_string($link, $_POST['id']);

    $query ="DELETE FROM account WHERE id = '$id'"; // запрос на удаление
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    echo "Строка успешно удалена!";
    mysqli_close($link);
    echo "<br>";
    echo "<a href='index.php'>На главную</a>";
    echo "<br>";
    echo "<a href='delete.php'>Назад</a>";

}
?>
</body>
</html>
