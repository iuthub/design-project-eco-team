<?php
include '../config.php';

?>

<?php 

if (isset($_POST['submit'])){
$id=$_POST['ID'];

echo $fullname=$_POST['fname'];
echo  $cname =$_POST['cname'];
echo $model   =$_POST['model'];
echo $type   =$_POST['type'];
echo  $whouse  =$_POST['whouse'];
echo $desp     =$_POST['desp'];
echo $price   =$_POST['price'];
echo  $picture =$_POST['picture'];


echo $query="update product  set productName ='$fullname', Category_ID ='$cname', Model ='$model'   , Type ='$type' , Warehouse_ID='$whouse' , Description='$desp' , Price='$price'   , Picture='$picture'  where Product_ID =$id ";
$rows=mysqli_query($mysqli,$query);
echo "succes full updated ".$rows;
mysqli_close($mysqli);
header("location: add_Product.php?msg=succes full update one record");
exit();
}

?>

