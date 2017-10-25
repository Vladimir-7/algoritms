<?php
//Сумма чисел, введенные числа складываются друг сдругом.
class Num
{
public function schet($num)
{
  $result = 0;

  for($i=0;$i<=strlen($num);$i++){
    $result = $result+$num[$i];
  }
  return $result;
}
}
$num = new Num();
echo $num->schet("01234569");
 ?>
