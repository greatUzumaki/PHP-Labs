<head>
    <title>Удаление</title>
</head>
<body>
    <p>Удаление по ID</p>
<form method="POST" action="delete_script.php">
    <input name="id" type="number">
    <br>
    <br>
    <input name="submit" type="submit" value="Удалить">
</form>
<br>
  <br>
  <a href="index.php">На главную</a>
  <?php
  include 'table.php'; // вывод всей таблицы
  ?>
</body>
</html>