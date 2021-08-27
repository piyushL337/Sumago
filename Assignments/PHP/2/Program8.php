<?php
/*
   * PHP program using passing argument by reference.
     *
       * By PIYUSH
      *
     *
   *
 */

function adder(&$str2)  
{  
    $str2 .= 'is created by Piyush';  
}  
$str = 'This program ';
  
adder($str);  

echo $str;  

?>  
