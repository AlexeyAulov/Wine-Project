<?php
	include_once 'Includes/dbconnect.inc.php';
	//include_once 'functions.inc.php';


	if (!isset($_GET['wine_id'])) 
	{
		echo "<h1>No Record</h1>";
		exit();
	}

	$Wine_ID = htmlspecialchars($_GET['wine_id']);
	echo "<h1>Getting Image </h1>";
	$stmt = get_product_once($conn, $Wine_ID);
	$image = $stmt->get_result()->fetch_assoc();
	$stmt->close();
?>