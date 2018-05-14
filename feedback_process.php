<?php
   include('config.php');

$sql="INSERT INTO contact (Name, Email, Phone, Subject) 
VALUES ('$_POST[name]', '$_POST[email]', '$_POST[phone]', '$_POST[text]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  header("location: index.php");
  echo "1 record added";

 mysqli_close($mysqli);
?> 