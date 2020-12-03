<?php
	

	function get_product_once($conn, $Wine_ID){
		$query = "SELECT image FROM wines WHERE wine_id = ? LIMIT 1";

		$stmt = $conn->prepare($query);
		$stmt->bind_param('i', $Wine_ID);

		$stmt->execute();

		return $stmt;
	}
?>