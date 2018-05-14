

<?php
   include('../config.php');

$sql="INSERT INTO warehouse (Country, City, Address, PostalCode, Email, Warehouse) VALUES  
('$_POST[country]', '$_POST[city]', '$_POST[address]', '$_POST[pcode]', '$_POST[email]', '$_POST[wname]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  header("location: add_warehouse.php");
  echo "1 record added";

 mysqli_close($mysqli);
?> 


