<?php
include_once 'Includes/dbconnect.inc.php';
session_start();

if(!isset($_SESSION['id']))
{
    echo"Check out as Guest";

}

$Wine_ID = htmlspecialchars($_POST['Wine_ID']);
$Wine_ID = (int)$Wine_ID;
$quan=htmlspecialchars($_POST['quantity']);

$count_query="SELECT COUNT(wine_id) as R FROM orders where user_id = ? AND wine_id = ?";
$stmt=$conn->prepare($count_query);
$stmt->bind_param("ii",$_SESSION['id'], $Wine_ID);
$stmt->execute();
$result = $stmt->get_result()->fetch_assoc();
$records=$result['R'];



if(!isset($_POST['Edit']))
{
    echo"I am so hansome";
    
}
else
{    
    if($records>0)
    {
    /*$updatequery="UPDATE orders SET quantity = ? WHERE user_id = ? AND wine_id = ?";
    $stmt=$conn->prepare($updatequery);
    $stmt->bind_param("iii",$quan,$_SESSION['id'],$Wine_ID);
    $stmt->execute(); */
    
    $editquery="UPDATE orders SET quantity = ? WHERE user_id = ? AND wine_id = ?";
    $stmt=$conn->prepare($editquery);
    $stmt->bind_param("iii",$quan,$_SESSION['id'],$Wine_ID);
    $stmt->execute();  
    }
}  

if(!isset($_POST['Delete']))
{
    echo"I am so hansome and beautiful";
    
}
else
{    
    if($records>0) 
    {
        $deletequery="DELETE FROM orders WHERE user_id=? AND wine_id=? ";
        $stmt=$conn->prepare($deletequery);
        $stmt->bind_param("ii",$_SESSION['id'],$Wine_ID);
        $stmt->execute();
    }
}


$cart_query = "SELECT w.wine_name, w.price_btl, o.quantity FROM orders o ";
$cart_query .= "JOIN wines w ON o.wine_id = w.wine_id ";
$cart_query .= "WHERE o.user_id = ?";
 
$stmt = $conn->prepare($cart_query);
$stmt->bind_param("i", $_SESSION['id']);
$stmt->execute();

$cart = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);


?>