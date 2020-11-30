<?php
	include_once 'Includes/dbconnect.inc.php';
	include_once 'functions.inc.php';


	if (!isset($_GET['wine_name'])) 
	{
		echo "<h1>No Record</h1>";
		exit();
	}

	$id = htmlspecialchars($_GET['wine_name']);
	echo "<h1>Getting Image </h1>";
	$stmt = get_product_once($conn, $id);
	$image = $stmt->get_result()->fetch_assoc();
	$stmt->close();
?>