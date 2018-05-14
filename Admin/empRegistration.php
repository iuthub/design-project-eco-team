
<?php
   include('../config.php');

$sql="INSERT INTO employee (Employee_Name, Username, Password,Picture) 
VALUES ('$_POST[fullname]', '$_POST[username]', '$_POST[password]', '$_POST[picture]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
   header("location: Employee.php");
  echo "1 record added";

 mysqli_close($mysqli);
?> 



