<?php

session_start();

//creates the session then destroys it

if(!isset($_SESSION['created']))
{
    echo"Created at:"/time();
    $_SESSION['created']=time();
}

if(isset($_SESSION['created'])&&(time()-$_SESSION['created']>60))
{
    echo "Over at: ".time();
    $_SESSION=[];
    session_destroy();
}
?>