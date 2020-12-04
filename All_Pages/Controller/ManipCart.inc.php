<?php
include_once 'Includes/dbconnect.inc.php';
session_start();

if(!isset($_SESSION['id']))
{
    echo"Check out as Guest";

}

$cart_query = "SELECT w.wine_name, w.price_btl, o.quantity FROM orders o ";
$cart_query .= "JOIN wines w ON o.wine_id = w.wine_id ";
$cart_query .= "WHERE o.user_id = ?";
 
$stmt = $conn->prepare($cart_query);
$stmt->bind_param("i", $_SESSION['id']);
$stmt->execute();

$cart = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

?>