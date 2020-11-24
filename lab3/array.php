<?php
$arr1 = range(-20, 30); //первый массив
shuffle($arr1); //перемешываем
$arr2 = range(-20, 30); //второй массив
shuffle($arr2); //перемешываем
$arr = array_merge($arr1,$arr2); //объединяем первый и второй массив для перебора
$arrPlus = $arrMinus = array(); //массивы для плюсов и минусов
function plusMinus($val) //функция перебора
{
global $arrMinus,$arrPlus;
    ($val < 0)
        ? array_push($arrMinus, $val)
        : array_push($arrPlus, $val);
}

array_walk($arr, 'plusMinus'); //применение функции
echo '<pre>';
var_dump($arr1, $arr2, $arr, $arrPlus, $arrMinus); //вывод
echo '</pre>';
?>