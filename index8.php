<?php
//Сортировка слиянием.
function mergeSort(&$mas, $s, $f)
//$s - первый элемент массива $f - последний элемент массива
{
  //если первый элемент меньше последнего
  if ($s<$f){
    $q = (int)(($s+$f)/2);//находим середину массива
    mergeSort($mas,$s,$q);//рекурсивно выполняем функцию
    mergeSort($mas,$q+1,$f);//еще раз рекурсия

    merge($mas,$s,$q,$f);
  }
}
function merge(&$mas, $s,$q,$f)
{
  for($i=$s;$i<=$q; $i++){
    $subMasLeft[]=$mas[$i];

  }
  for($i=$q+1;$i<=$f;$i++){
    $subMasRight[] = $mas[$i];
  }
  $subMasRight[]=INF;
  $subMasLeft[]=INF;
  $l = 0;
  $r = 0;
  for ($i=$s; $i<=$f; $i++){
    if($subMasLeft[$l]<= $subMasRight[$r]){
      $mas[$i] = $subMasLeft[$l];
      $l++;
    }
    else{
      $mas[$i] = $subMasRight[$r];
      $r++;
    }
  }
}
?>
