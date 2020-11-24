<head>
    <title>Внесение данных</title>
</head>
<body>
<form method="POST" action="write_script.php">
  <input name="name" type="text" placeholder="Имя"/>
  <input name="second_name" type="text" placeholder="Фамилия"/>
  <input name="otche" type="text" placeholder="Отчество"/>
  <br>
  <br>
  <input name="email" type="text" placeholder="Email"/>
  <input name="phone" type="text" placeholder="Телефон"/>
  <input name="city" type="text" placeholder="Город"/>
  <input name="county" type="text" placeholder="Страна"/>
  <br>
  <p>Фотография</p>
  <input name="photo" type="file" placeholder="Фотография"/>
  <br>
  <br>
  <input type="submit" value="Отправить" />
 </form>

  <br>
  <br>
  <a href="index.php">На главную</a>
</body>
</html>