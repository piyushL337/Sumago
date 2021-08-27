<?php
/*
 * PHP program
 * if else statement check age is greater than 30.
 * By Piyush
 */
if(isset($_POST['check_age'])){
  $age=$_POST['age'];
  if($age<30){
     echo '<p>age is less than 30</p>';
  }
  else{
     echo '<p>age is over than 30</p>';
  }
}
