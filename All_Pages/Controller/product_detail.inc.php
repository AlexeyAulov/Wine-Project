<?php
include_once 'Includes/dbconnect.inc.php';
include_once 'get_product.inc.php';
$addedMsg = '';
if(isset($_GET['added'])){
	if($_GET['added'] == 1){
		$addedMsg = "Item is added to cart!";
	}
	else{
		$addedMsg = "There was an error adding this item to your cart!";
	}
}
?>

