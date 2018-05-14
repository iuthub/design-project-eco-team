<?php
   include('config.php');

$sql="INSERT INTO customer (FullName, UserName, Phone, Email, Password, Re_Password, Country, City, Adress, PostalCode) 
VALUES ('$_POST[name]', '$_POST[username]', '$_POST[tell]', '$_POST[email]', '$_POST[password1]', '$_POST[password2]', '$_POST[country]', '$_POST[City]', '$_POST[address]', '$_POST[pcode]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
  header("location: index.php");
  echo "1 record added";

 mysqli_close($mysqli);
?> 