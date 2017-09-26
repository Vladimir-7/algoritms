<?php

function quickSort(&$arr, $low, $high)
{
	$i = $low;
	$j = $high;
	//$middle  - опорный элемент
	$middle = $arr[($low+$high)/2];
	do{
		//ищем элементы для правой части
		while($arr[$i] < $middle) ++$i;
		//ищем элементы для левой части
		while($arr[$j] > $middle) -$j;
		if($i <= $j){
			//перебрасываем элементы
			$temp = $arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $temp;
			//следущая итерация
			$i++; $j--;
		} 
	}
	while($i < $j);

	if($low < $j){
		//рекурсивно вызываем сортировку для левой части
		quickSort($arr, $low, $j);
	}
	if($i< $high){
		//рекурсивно вызываем сортировку для правой части
		quickSort($arr, $i, $high);
	}
}
$massive = [1,34,33,23,4,6,57,88,11,32,15,18,99,21,65];
$er = count($massive) - 1;
echo quickSort($massive,0,$er);
//echo $sort->quickSort();
?>