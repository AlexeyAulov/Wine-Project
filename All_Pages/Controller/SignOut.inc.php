<?php
session_start();
if(!isset($_SESSION['Name']))
{
    header('Location:../HM.php');  
   
exit();
}
else
{
    $_SESSION = [];
    session_destroy();
header('Location:../HM.php');
exit();
}
?>