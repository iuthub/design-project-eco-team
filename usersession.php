<?php
include('config.php');
session_start();
$check=$_SESSION['login_username'];
$session=mysqli_query($mysqli, "select Email from customer where Email='$check' ");
$row=mysqli_fetch_array($session);
$login_session=$row['Email'];
if(!isset($login_session))
{
echo "You Failed !!";
 header('Location: Sign In.php');
}
?>