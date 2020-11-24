<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2</title>
</head>
<body>
<?php
for ($i = 0; $i < 6; $i++)      //цикл строк
for ($j = 0; $j <= $i; $j++)    //цикл столбцов
echo chr(70-$j).( $j == $i ? "<br>\r\n" : " "); /*вывод букв по ascii коду и условие, если номер строки = номеру столбца
                                                то перенос строки иначе пробел  */
?>
</body>
</html>