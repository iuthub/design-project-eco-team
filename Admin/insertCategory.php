<?php
   include('../config.php');

$sql="INSERT INTO category (Category_Name, Discription, Picture) 
VALUES ('$_POST[categoryName]', '$_POST[description]', '$_POST[picture]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  header("location: add_category.php");
  

 mysqli_close($mysqli);
?> 
 <?php
 echo "1 record added";
 ?>