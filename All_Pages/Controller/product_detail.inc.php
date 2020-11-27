<?php
include_once 'includes/dbconnect.inc.php';
include_once 'includes/get_product.inc.php';
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
<!DOCTYPE html>
<html>
<head>
<style>
.card{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	max-width: 300px;
	margin: auto;
	text-align: center;
	font-family: arial;
}

.price {
	color: grey;
	font-size: 22px;
}
</style>
</head>
<body>

<h2><a href="shopping_cart.php" target="_blank"> Shopping Cart </a></h2>
<h2 style="text-align: center">Product Card</h2>
<p><<?php echo $addedMsg ?? ''; ?></p>
<div class="card">
	<img src="<?php echo $image['image']; ?>" alt="Denim Jeans" style="width: 100%">
	<h1><?php echo $image['image']; ?></h1>
	<p class="price">$199.99</p>
	<p>Created a <?php echo $image['created_at'];?></p>
	<p>Updated at <?php echo $image['updated_at'];?></p>
	<form action="includes/add_cart.inc.php" method="GET">
		<input type='text' name="quality" value=1 size="2">
		<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<input type='submit' name="submit" value='Add to Cart'>
	</form>
</div>

</body>
</html>