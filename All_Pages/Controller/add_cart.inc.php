<?php
include_once 'Includes/dbconnect.inc.php';
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



$Wine_ID = htmlspecialchars($_GET['wine_id']);
$quan=htmlspecialchars($_GET['quantity']);


//Precondition: create cart_item to store wine_id key and quan as value

//postcondition: if session has no orders then the button array is null

$cart_item = [$Wine_ID => $quan];

if(!isset($_SESSION['cart']))
{
    $_SESSION['cart']=[];

}

//Precondition:If wine_id exists in Session

//postcondition: amount of wine per id, displays item ID

if(array_key_exists($Wine_ID,$_SESSION['cart']))
{
    $_SESSION['cart'][$Wine_ID]+=$quan;
    header('Location:../product_detail.php?id='.$Wine_ID.'&add_to_cart=1');
}
else
//Precondition:?
 
{
$_SESSION['cart'][$Wine_ID]=$quan;
header('Location:../product_detail.php?id='.$Wine_ID.'&add_to_cart=1');
}

//$insertquery="INSERT INTO orders(quantity,wine_name)";
//$insertquery.="VALUES(?,?)";
//$stmt=$conn->prepare($insertquery);
//$stmt->bind_param("ii ",$quan,$Wine_ID);
//$stmt->execute();   


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
    $guestMsg="Check out as Guest";
}
$cart =$_SESSION['cart'];

?>