<?php
function primeCheck($number)
{
    if ( $number < 10 ) return false; 
    $x = sqrt($number);
    $x = floor($x);
    for ( $i = 2 ; $i <= $x ; ++$i ) {
        if ( $number % $i == 0 ) {
            break;
        }
    }
 
    if( $x == $i-1 ) {
        return true;
    } else {
        return false;
    }
}
function string_to_tab($temp){
    for($i=0;$i<strlen($temp);$i++){
        $temp2[]=$temp[$i];
    }
    return $temp2;
}


function backwardsPrime($start, $stop){
  for($i=$start; $i<$stop; $i++){
    if(primeCheck($i)==true){
      $temp = strval($i);
      $temp = string_to_tab($temp);
      print_r($temp);
      $number=0;
      for($j=0;$j<count($temp);$j++){
        $number = $number + ($temp[$j]*pow(10, $j));
      }
      if(primeCheck($number)==true && $i != $number){
        $tab[]=$i;
      }
    }
  }
  return $tab;
}
?>