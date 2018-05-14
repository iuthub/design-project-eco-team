

<?php
include '../config.php';

?>

<?php 

if (isset($_POST['submit'])){

echo $fname=$_POST['categoryName'];
echo  $desp=$_POST['description'];
echo $image=$_POST['file'];
$id=$_POST['ID'];

echo $query="update category  set CategoryName = '$fname', Discription = '$desp', Picture = '$image' where Category_ID = $id";
$rows=mysqli_query($mysqli,$query);
echo "succes full updated ".$rows;
mysqli_close($con);
header("location: add_category.php?msg=succes full update one record");
exit();
}

?>

