<?php
	include_once 'Includes/dbconnect.inc.php';


	function get_product_once($conn, $id){
		$query = "SELECT image FROM wines WHERE wine_name = ? LIMIT 1";

		$stmt = $conn->prepare($query);
		$stmt->bind_param('i', $id);

		$stmt->execute();

		return $stmt;
	}
?>