<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
require_once 'connect.php'; // подключаем скрипт

$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

$query ="SELECT * FROM account"; //запрос, чтобы показать всю таблицу

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк

    echo "<table border=2px solid black><tr><th>Id</th><th>Имя</th>
    <th>Фамилия</th><th>Отчество</th><th>Email</th><th>Телефон</th><th>Город</th><th>Страна</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 8 ; ++$j) echo "<td> $row[$j] </td>";
        echo "</tr>";
    }
    echo "</table>";

    // очищаем результат
    mysqli_free_result($result);
}

mysqli_close($link);
?>
</body>
</html>