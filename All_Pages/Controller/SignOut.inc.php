<?php
session_start();
if(!isset($_SESSION['id']))
{
    header('Location:../CG.php');  
   
exit();
}
else
{
    $_SESSION = [];
  
    session_destroy();
header('Location:../AU.php');
exit();
}
?>