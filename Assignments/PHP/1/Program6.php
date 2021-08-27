<?php
/*
 * PHP program switch case statement 
 *check grade is Good, Passed, Failed, 
Unknown grade.
 * By Piyush
 */
$grade = "b";

switch ($grade) {
  case "a":
    echo "Good!";
    break;
  case "b":
    echo "Passed!";
    break;
  case "c":
    echo "Failed!";
  default:
    echo "Unknown Grade!";
}
?>
