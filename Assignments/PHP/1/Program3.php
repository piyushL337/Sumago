<?php
/*
 * PHP program if statement
 * Check Age Is Less Than 30
 * By Piyush
 */
if(isset($_POST['check_age'])){
  $age=$_POST['age'];
  if($age<30){
     echo '<p>age is less than 30</p>';
  }
}
