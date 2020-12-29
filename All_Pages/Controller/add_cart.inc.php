<?php
include_once '../Includes/dbconnect.inc.php';
include_once 'functions.inc.php';


//Precondition:If button add to cart not pushed do something

//Postcondition: bring to location cart

if(!isset($_GET['add_to_cart']))
{
    header('Location: ../CT.php');
    exit();
}

session_start();

//Precondition:sanitizing
//postcondition:sanitizing is done


$Wine_ID = htmlspecialchars($_GET['Wine_ID']);
$Wine_ID = (int)$Wine_ID;
$quan=htmlspecialchars($_GET['quantity']);


//Precondition: create cart_item to store wine_id key and quan as value

//postcondition: if session has no orders then the button array is null

$count_query="SELECT COUNT(wine_id) as R FROM orders where user_id = ? AND wine_id = ?";
$stmt=$conn->prepare($count_query);
$stmt->bind_param("ii",$_SESSION['id'], $Wine_ID);
$stmt->execute();
$result = $stmt->get_result()->fetch_assoc();
$records=$result['R'];

//if it is empty then insert the wine type and the amount to the orders table
//else if there is quantity amount > update the amount to the value set

if($records === 0)
{
    $insertquery="INSERT INTO orders(user_id, quantity,wine_id)";
    $insertquery.="VALUES(?,?,?)";
    $stmt=$conn->prepare($insertquery);
    $stmt->bind_param("iii",$_SESSION['id'],$quan,$Wine_ID);
    $stmt->execute();  
    
}
elseif($records>0)
{
 
    $updatequery="UPDATE orders SET quantity = ? WHERE user_id = ? AND wine_id = ?";
    $stmt=$conn->prepare($updatequery);
    $stmt->bind_param("iii",$quan,$_SESSION['id'],$Wine_ID);
    $stmt->execute(); 
    
}

//resultorder stores everything from the record of the database table 

$orderquery= "SELECT *";
$orderquery .= " FROM orders";
$orderquery .= " LIMIT ?,?";
$stmt=$conn->prepare($orderquery);
$stmt->bind_param("ii", $Wine_ID,$quan);
$stmt->execute();   

$resultorder=$stmt->get_result()->fetch_all(MYSQLI_ASSOC);

$guestMsg='';
if(!isset($_SESSION['id']))
{
    echo"Check out as Guest";

}
$cart =$_SESSION['orders'];

if(!isset($_GET['update']))
{
    header('Location: ../CT.php');
    exit();
}

?>