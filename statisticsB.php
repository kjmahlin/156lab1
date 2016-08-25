<?php

  /* PHP code starts with a <?php and ends with a ?> so that it can
     be interleaved with static HTML content.
   */

/* functions can be declared which will have global scope */

function getMin($array) {
  if($array == null || count($array) == 0) {
    return null;
  }

  $min = $array[0];
  for($i=1; $i<count($array); $i++) {
    if($min > $array[$i]) {
      $min = $array[$i];
    }
  }
  return $min;
}

function getMax($array) {
  //TODO: implement this function
  if ($array == null){
	return null;  
  }
  $max = null;
  
  for ($i = 1; $i < count($array); $i++){
    if ($array[$i] > $max){  
      $max = $array[$i];
    }
  }
  return $max;
}

function getAverage($array) {
  if($array == null) {
    return null;
  }

  $sum = getSum($array);
  return ($sum / count($array));
}

function getSum($array) {
  //TODO: implement this function
  if ($array == null){
    return null;  
  }
  $sum = null;
  for ($i = 1; $i < count($array); $i++){
    $sum += $array[$i];
  }
  
  return $sum;
}

  $numbers = $argv;
  

  $min = getMin($numbers);
  $max = getMax($numbers);
  $average = getAverage($numbers);
  $sum = getSum($numbers);

  /*
    Output can be done with echo, print, or printf, string concatenation is done
    with the period operator.
   */
  echo "The sum is ".$sum."\n";
  echo "The average is ".$average."\n";
  echo "The highest is ".$max."\n";
  echo "The lowest is ".$min."\n";
?>
