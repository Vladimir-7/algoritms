<?php
//Алгоритм на php сортировка пузырьком

  $int = [1,4,5,9,0,-1,-3,5];
  echo "<pre>";
  print_r($int);
  echo "</pre>";
  //перебираем массив
  for ($j=0; $j<count($int)-1; $j++){
    for($i=0; $i<count($int)-$j-1; $i++){
      //Если текущий элемент больше следующего
      if($int[$i] > $int[$i+1]){
        //меняем местами элементы
        $min_var = $int[$i+1];//i+1 элемент массива присваевается переменой ибо он меньше
        $int[$i+1]=$int[$i];//происходит замена элементов друг с другом, который был позади стал в переди
        $int[$i] = $min_var;
        echo "<pre>";
        print_r($int);
        echo "</pre>";
      }
    }
  }
//вводим получившийся массив
echo "Resultat" . "<br />";
echo "<pre>";
print_r($int);
echo "</pre>";
  echo "<br />";
  //выводим по строчно значения массива по ключам
  foreach ($int as $key => $value) {
  	echo $key . " = " . $value;
  	echo "<br>";
  	}

?>
