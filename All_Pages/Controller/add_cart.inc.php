<?php
include_once 'Includes/dbconnect.inc.php';

if(!isset($_GET['add_to_cart']))
{
    header('Location: ../CT.php');
    exit();
}

session_start();
$id = htmlspecialchars($_GET['WNAME']);
$qual=htmlspecialchars($_GET['quality']);

$cart_item = [$id => $qual];
if(!isset($_SESSION['orders']))
{
    $_SESSION['orders']=[];

}
if(array_key_exists($id,$_SESSION['order']))
{
    $_SESSION['order'][$id]+=$qual;
    header('Location:../product_detail.php?id='.$id.'&add_to_cart=1');
}
else
{
$_SESSION['order'][$id]=$qual;
header('Location:../product_detail.php?id='.$id.'&add_to_cart=1');
}