<?php
session_start();
include_once("config.php");

//empty cart by distroying current session
if(isset($_GET["emptycart"]) && $_GET["emptycart"]==1)
{
	$return_url = base64_decode($_GET["return_url"]); //return url
	session_destroy();
	header('Location:'.$return_url);
}

//add item in shopping cart
if(isset($_POST["type"]) && $_POST["type"]=='add')
{
	$Product_ID 	= filter_var($_POST["Product_ID"], FILTER_SANITIZE_STRING); //product code
	$product_qty 	= filter_var($_POST["product_qty"], FILTER_SANITIZE_NUMBER_INT); //product code
	$return_url 	= base64_decode($_POST["return_url"]); //return url
	
	//MySqli query - get details of item from db using product code
	$results = $mysqli->query("SELECT productName,Price FROM product WHERE Product_ID ='$Product_ID' LIMIT 1");
	$obj = $results->fetch_object();
	
	if ($results) { //we have the product info 
		
		//prepare array for the session variable
		$new_product = array(array('name'=>$obj->productName, 'code'=>$Product_ID , 'TiradaProductTiga'=>$product_qty, 'Qiimaha'=>$obj->Price));
		
		if(isset($_SESSION["cart_session"])) //if we have the session
		{
			$found = false; //set found item to false
			
			foreach ($_SESSION["cart_session"] as $cart_itm) //loop through session array
			{
				if($cart_itm["code"] == $Product_ID){ //the item exist in array

					$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'TiradaProductTiga'=>$product_qty, 'Qiimaha'=>$cart_itm["Qiimaha"]);
					$found = true;
				}else{
					//item doesn't exist in the list, just retrive old info and prepare array for session var
					$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'TiradaProductTiga'=>$cart_itm["TiradaProductTiga"], 'Qiimaha'=>$cart_itm["Qiimaha"]);
				}
			}
			
			if($found == false) //we didn't find item in array
			{
				//add new user item in array
				$_SESSION["cart_session"] = array_merge($product, $new_product);
			}else{
				//found user item in array list, and increased the quantity
				$_SESSION["cart_session"] = $product;
			}
			
		}else{
			//create a new session var if does not exist
			$_SESSION["cart_session"] = $new_product;
		}
		
	}
	
	//redirect back to original page
	header('Location:'.$return_url);
}

//remove item from shopping cart
if(isset($_GET["removep"]) && isset($_GET["return_url"]) && isset($_SESSION["cart_session"]))
{
	$Product_ID 	= $_GET["removep"]; //get the product code to remove
	$return_url 	= base64_decode($_GET["return_url"]); //get return url

	
	foreach ($_SESSION["cart_session"] as $cart_itm) //loop through session array var
	{
		if($cart_itm["code"]!=$Product_ID){ //item does,t exist in the list
			$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'TiradaProductTiga'=>$cart_itm["TiradaProductTiga"], 'Qiimaha'=>$cart_itm["Qiimaha"]);
		}
		
		//create a new product list for cart
		$_SESSION["cart_session"] = $product;
	}
	
	//redirect back to original page
	header('Location:'.$return_url);
}
?>