<?php

//if uder id is not in session redirect to catalog page, else redirect to about us page
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