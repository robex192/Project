<?php
$con = mysqli_connect("localhost","root","","kopms");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: Unable to connect. " . mysqli_connect_error();
  }
?>
