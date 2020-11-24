<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1</title>
</head>
<body>
    <form method="POST" action="index.php"> <!--объявление формы для передачи данных -->
    <p>Ваше имя:</p>
    <input type="text" name='name' size="30"> <!--строка ввода имени -->
    <p>Ваша фамилия:</p>
    <input type="text" name="second_name" size="30"> <!--строка ввода фамилии -->
    <br> <!-- отступы -->
    <br>
    <input type="submit" value="Отправить"> <!--кнопка отправить -->
    </form>
    <br>
    <?php
    if(isset($_POST['name'])) { //проверяет, установлено ли значение
        echo 'Здравсвуйте, '; // если да, то выводим это
        echo $_POST['name']; // и выводим имя
    }
        echo ' ';
    if(isset($_POST['second_name'])) { //проверка на ввод фамилии
        echo $_POST['second_name']; //если да, выводим фамилию
        echo '<br>'; //отступ
        echo ' Добро пожаловать в мир PHP'; //и выводим текст
    }
    ?>
</body>
</html>