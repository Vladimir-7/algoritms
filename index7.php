<?php
//Быстрая сортировка
$array = [1,4,5,9,0,-1,-3,5];
echo "<pre>";
print_r($array);
echo "</pre>";

qsort($array);
function qsort($array)
{
  $left=0;
  $right=count($array)-1;//последний элемент массива
  my_sort($array,$left,$right);//запускаем саму функцию сортировки
}
function my_sort($array,$left,$right)
{
  //Создаем копии переменных
  $l=$left;
  $r=$right;
  //Вычисляем центр массива, опорный элемент
  $center=$array[(int)($left+$right)/2];
  echo $center;

  //Цикл начинающий саму сортировку
  do{
    //Ищем все значения больше центра
    while($array[$r]>$center){
      $r--;
    }
    //Ищем все значения меньше центра
    while ($array[$l]<$center){
      $l++;
    }
    echo "<br />" ."l = " . $l . " r = " . $r;
    //После прохода циклов проверяем счетчики циклов
    if($l<=$r){
      //list($array[$r], $array[$l]) = array($array[$l], $array[$r]);//меняем ячейки друг с другом
      $min_var = $array[$l];
      $array[$l]=$array[$r];
      $array[$r]=$min_var;
      $l++;
      $r--;
    }
    echo "<pre>";
    print_r($array);
    echo "</pre>";
  }
  
  while ($l<$r);
  echo "<br />" ."l = " . $l . " r = " . $r;
  if($r>$left){
    //Если условие true, совершаем рекурсию
    //Передаем массив, исходное начало и текущий конец
    my_sort($array, $left, $r);
  }
  if ($l < $right) {
    //Если условие true, совершаем рекурсию
    //Передаем массив, текущие начало и конец
    my_sort($array, $l, $right);
}
echo "<pre>";
print_r($array);
echo "</pre>";
}


 ?>
