<?php include("../config.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "you don't select any record";

}else{
$query="delete from employee where Employee_ID=".$delete."";
$result=mysqli_query($mysqli,$query);
header("location:Employee.php?msg= Successfully Deleted !!");
exit();
mysqli_close($mysqli);
}
?>

