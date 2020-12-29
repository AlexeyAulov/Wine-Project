<?php
include_once 'Includes/dbconnect.inc.php';
session_start();

//if session not created redirect user to signinwarning

if(!isset($_SESSION['id']))
{
   header("Location:..\All_Pages\SignInWarning.php");
                

}    
    
//if user does edit, then use update query

if(isset($_POST['Edit']))
{    

    $Wine_ID = htmlspecialchars($_POST['Wine_ID']);
    $Wine_ID = (int)$Wine_ID;
    $quan=htmlspecialchars($_POST['quantity']);

  
    
    $editquery="UPDATE orders SET quantity = ? WHERE user_id = ? AND wine_id = ?";
    $stmt=$conn->prepare($editquery);
    $stmt->bind_param("iii",$quan,$_SESSION['id'],$Wine_ID);
    $stmt->execute(); 
    
    
}  


//if user does delete, then delete query

if(isset($_POST['Delete']))
{    
    $Wine_ID = htmlspecialchars($_POST['Wine_ID']);
    $Wine_ID = (int)$Wine_ID;
    
    $deletequery="DELETE FROM orders WHERE user_id=? AND wine_id=? ";
    $stmt=$conn->prepare($deletequery);
    $stmt->bind_param("ii",$_SESSION['id'],$Wine_ID);
    $stmt->execute();
}

//join query to store information from two tables


$cart_query = "SELECT w.wine_id, w.wine_name, w.price_btl, o.quantity FROM orders o ";
$cart_query .= "JOIN wines w ON o.wine_id = w.wine_id ";
$cart_query .= "WHERE o.user_id = ?";
 
$stmt = $conn->prepare($cart_query);
$stmt->bind_param("i", $_SESSION['id']);
$stmt->execute();

$cart = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);


?>