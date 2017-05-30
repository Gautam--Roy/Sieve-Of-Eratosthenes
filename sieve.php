<?php

/**
 *
 * Returns the count of prime numbers between a range of numbers
 *
 * @param    int  $lower Starting value for range of numbers
 * @param    int  $upper Ending value for range of numbers
 * @param    boolean $include Flag to include/exclude corner values
 * @return      int
 *
 */
 
 
echo getPrimeCount(1,1000000, true);
// Will return 78498

function getPrimeCount($lower, $upper, $include){

  $range = [];
  $primeCount = 0;

  for($i = 2; $i <= $upper; $i++)
    $range[$i] = true;

  //Algo
  for($ii = 2; $ii <= $upper; $ii ++ ){
    if($range[$ii]){
      if($ii >= $lower){
          if(!$include){
              {
                if($ii != $lower && $ii != $upper){
                  $primeCount++;
                  // echo $ii."<br>";
                }
              }
            }
            else{
              $primeCount++;
              // echo $ii."<br>";
            }
          }

      for($j = $ii * 2; $j <= $upper; $j += $ii){
        $range[$j] = false;
      }
    }
  }

  return $primeCount;
}
