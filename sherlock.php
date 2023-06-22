<?php
function sherlock($arr) {
  
  $leftSum = 0;
  $rightSum = array_sum($arr);
  
  foreach ($arr as $key => $value) {
      $rightSum -= $value;


      if ($leftSum == $rightSum) {
          return "YES";
      }


      $leftSum += $value;
  }


  return "NO";
}


$t = intval(trim(fgets(STDIN)));


while ($t--) 
{
      $n = intval(trim(fgets(STDIN)));


  $arr = array_map('intval', explode(' ', trim(fgets(STDIN))));


      $result = sherlock($arr);


     echo $result . "\n";
}


?>
