<?php
include_once 'Includes/dbconnect.inc.php';
session_start();

if(!isset($_SESSION['id']))
{
    echo"Check out as Guest";

}    
    
if(isset($_POST['Edit']))
{    

    $Wine_ID = htmlspecialchars($_POST['Wine_ID']);
    $Wine_ID = (int)$Wine_ID;
    $quan=htmlspecialchars($_POST['quantity']);

   // echo $quan;

   // echo $_SESSION['id']." ".$Wine_ID;

    /*$updatequery="UPDATE orders SET quantity = ? WHERE user_id = ? AND wine_id = ?";
    $stmt=$conn->prepare($updatequery);
    $stmt->bind_param("iii",$quan,$_SESSION['id'],$Wine_ID);
    $stmt->execute(); */
    
    $editquery="UPDATE orders SET quantity = ? WHERE user_id = ? AND wine_id = ?";
    $stmt=$conn->prepare($editquery);
    $stmt->bind_param("iii",$quan,$_SESSION['id'],$Wine_ID);
    $stmt->execute(); 
    
    
}  

if(isset($_POST['Delete']))
{    
    $Wine_ID = htmlspecialchars($_POST['Wine_ID']);
    $Wine_ID = (int)$Wine_ID;
    
    $deletequery="DELETE FROM orders WHERE user_id=? AND wine_id=? ";
    $stmt=$conn->prepare($deletequery);
    $stmt->bind_param("ii",$_SESSION['id'],$Wine_ID);
    $stmt->execute();
}


$cart_query = "SELECT w.wine_id, w.wine_name, w.price_btl, o.quantity FROM orders o ";
$cart_query .= "JOIN wines w ON o.wine_id = w.wine_id ";
$cart_query .= "WHERE o.user_id = ?";
 
$stmt = $conn->prepare($cart_query);
$stmt->bind_param("i", $_SESSION['id']);
$stmt->execute();

$cart = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);


?>