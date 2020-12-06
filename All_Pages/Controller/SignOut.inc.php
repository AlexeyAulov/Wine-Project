<?php
session_start();
if(!isset($_SESSION['Name']))
{
    header('Location:../CG.php');  
   
exit();
}
else
{
    $_SESSION = [];
    session_destroy();
header('Location:../CG.php');
exit();
}
?>