<?php
include_once 'Includes/dbconnect.inc.php';
include_once 'get_product.inc.php';
//$addedMsg = '';
if(isset($_GET['add_to_cart'])){
	if($_GET['add_to_cart'] == 1){
		echo"Item is added to cart!";
	}
	else{
		echo"There was an error adding this item to your cart!";
	}
}
?>

