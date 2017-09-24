<?php
//Выборка не четных элементов массива и их сумма в переменной $count
function odd($var)
{
	return($var & 1);
	//четные значения
}
$count =0;
$int = [1,4,5,9,0,-1,5];
//филтруем по четным значениям массива $int
$odd = array_filter($int, "odd");
//Вывод построчно элементо массива и ключей
foreach ($odd as $key => $value) {
	echo $key . " = " . $value;
	echo "<br>";
	$count+=$value;
}
echo $count;
