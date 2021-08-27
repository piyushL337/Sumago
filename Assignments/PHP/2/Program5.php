<?php
/*
   *    PHP program using string manipulation.
     *
       * By PIYUSH
      *
     *
   *
 */
$marks = array(
    "piyush" => array (
      "physics" => 95,
      "maths" => 90,
    ),
    "ajinkya" => array (
      "physics" => 92,
      "maths" => 97,
    ),
);
   echo "Marks for PIYUSH in physics : " ;

   echo $marks['piyush']['physics'] . "\n";

   echo "Marks for AJINKYA in maths : ";

   echo $marks['ajinkya']['maths'] . "\n";

?>
