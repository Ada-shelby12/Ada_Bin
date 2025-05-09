<?php
  echo"<h1>Program to demonstrate for-each loop</h1><br/>";
  echo"<h3>TO find the sum of elements of an indexed array</h3><br/>";
  $a=array(1,2,3,4,5);
  $sum=0;
  echo"Array<br/>:";
  foreach($a as $val)
  {
    echo"$val<br/>";
    $sum=$sum+$val;
  }
  echo"<br/>Sum of array elements is $sum";
?>