<?php
**/ Connects to Database **/

$con = mysqli_connect('localhost','patrickk_testuse','Calvinand77!!','patrickk_test');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
?>