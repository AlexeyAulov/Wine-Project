<?php
include_once 'Includes/dbconnect.inc.php';
include_once 'get_product.inc.php';


//message for item added to cart or error message if not run right

if(isset($_GET['add_to_cart'])){
	if($_GET['add_to_cart'] == 1){
		echo"Item is added to cart!";
	}
	else{
		echo"There was an error adding this item to your cart!";
	}
}
?>

