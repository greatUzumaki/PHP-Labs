<?php
include 'connect.php'; // данные подключения
$conn = new mysqli($host,$user,$password,$database);
if ($conn->connect_error) { // проверка на коннект
die("Ошибка: " . $conn->connect_error);
}

$search = $_POST['search'];
$sql = "SELECT * FROM `account` WHERE `Фамилия` like '%".$search."%'"; // запрос поиска
$result = $conn->query($sql);

if ($result->num_rows > 0) { // если найдена запись, то выводим её
    echo "<table border=2px solid black><tr><th>Id</th><th>Имя</th><th>Фамилия</th><th>Отчество</th>
    <th>Email</th><th>Телефон</th><th>Город</th><th>Страна</th></tr>";
while($row = $result->fetch_assoc()) {
echo "<tr>";

echo "<td>".$row["id"]."</td>"."<td>".$row["Имя"]."</td>"."<td>".$row["Фамилия"]."</td>"."<td>".$row["Отчество"].
"</td>"."<td>".$row["Email"]."</td>"."<td>".$row["Телефон"]."</td>".
"<td>".$row["Город"]."</td>"."<td>".$row["Страна"]."</td>"."<br>";
echo "</tr>";
echo "</table>";
echo "<br>";
    echo "<a href='index.php'>На главную</a>";
    echo "<br>";
    echo "<a href='write.php'>Назад</a>";
}
} else {
echo "Нет результатов";
echo "<br>";
echo "<a href='index.php'>На главную</a>";
echo "<br>";
echo "<a href='write.php'>Назад</a>";
}
$conn->close();
?>