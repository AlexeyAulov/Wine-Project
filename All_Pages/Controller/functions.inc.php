<?php
	function get_product_once($conn, $id){
		$query = "SELECT image, created_at, updated_at FROM products WHERE id = ? LIMIT 1";

		$stmt = $conn->prepare($query);
		$stmt->bind_param('i', $id);

		$stmt->execute();

		return $stmt;
	}
?>