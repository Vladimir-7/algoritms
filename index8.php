<?php
//Сортировка слиянием. с подробным выводом результатов по шагово на экран.
function mergeSort(&$mas, $s, $f)
//$s - первый элемент массива $f - последний элемент массива
{
  //если первый элемент меньше последнего
  if ($s<$f){
    $q = (int)(($s+$f)/2);//находим середину массива
    echo "q = " . $q;
    mergeSort($mas,$s,$q);//рекурсивно выполняем функцию
    mergeSort($mas,$q+1,$f);//еще раз рекурсия
echo "<br />" . "Q после рекурсии = " . $q;
    merge($mas,$s,$q,$f);

  }
}
function merge(&$mas, $s,$q,$f)
{

  echo "<br />" . 's = ' . $s ." q= " . $q . " f= " . $f;
  for($i=$s;$i<=$q; $i++){
    //создание массива $subMasLeft
    $subMasLeft[]=$mas[$i];
    echo "<pre>" . "submasLeft =";
    print_r($subMasLeft);
    echo "</pre>";

  }
  for($i=$q+1;$i<=$f;$i++){
    $subMasRight[] = $mas[$i];
    echo "<pre>" . "submasRight =";
    print_r($subMasRight);
    echo "</pre>";

  }
  $subMasRight[]=INF;
  $subMasLeft[]=INF;
  echo "<pre>" . "submasLeft =";
  print_r($subMasLeft);
  echo "</pre>";
  echo "<pre>" . "submasRight =";
  print_r($subMasRight);
  echo "</pre>";

  $l = 0;
  $r = 0;
  $step =0;
  for ($i=$s; $i<=$f; $i++){
    //$l счетчик элементов по left массиву $r счетчик элементов по right массиву
    //ниже выполняется сравнение и пока subMasLeft[$l] > subMasRight[$r] счетчик $l не увеличиться
    //а это значит сравнение будет происходить до тех пор пока subMasRight[$r] не будет больше subMasLeft[$l]
    if($subMasLeft[$l]<= $subMasRight[$r]){
      $mas[$i] = $subMasLeft[$l];
      $l++;
      echo " l = " . $l;
      echo "<pre>" . "submasLeft =";
      print_r($mas);
      echo "</pre>";
      }
    else{
      $mas[$i] = $subMasRight[$r];
      $r++;
      $step++;
      echo "<pre>" . "submasRight =";
      print_r($mas);
      echo "</pre>";


    }
  }
  echo "<pre>";
  print_r($mas);
  echo "</pre>";
}
$mass = [1,4,5,9,0,-1,-3,5];
echo "<pre>";
print_r($mass);
echo "</pre>";
$s= 0;
$f=count($mass)-1;
mergeSort($mass,$s,$f);
echo "<pre>";
print_r($mass);
echo "</pre>";

?>
