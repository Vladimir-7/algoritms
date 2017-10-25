
<meta charset="utf-8">
<?php
//Простой пример по регулярным выражениям
  $num = 123456756755235;
  $count = preg_match_all("/5/",$num,$arr);
  $res = count($arr);
  echo "цыфра 5 встречается " . $count . " раз!";
  echo "<br />";

  var_dump($arr);


?>
