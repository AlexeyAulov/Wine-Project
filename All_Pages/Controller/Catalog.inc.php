<?php
 
 include_once "Includes/dbconnect.inc.php";
 //include_once "Controller\add_cart.inc.php";
   
 $pagerows=2;
   if ((isset($_GET['page'])&& is_numeric($_GET['page']))){
       $current_page=htmlspecialchars($_GET['page']);
   }else{
       $current_page=1;
   }
   $start=($current_page-1)*$pagerows;
   
   //Just counting wine rows
   $count_query="SELECT COUNT(wine_name) as R FROM wines";
   $stmt=$conn->prepare($count_query);
   
   //execute query
   $stmt->execute();

   //count how many records in total
   $result = $stmt->get_result()->fetch_assoc();
   
  
   //displays number of rows in database for wine name
   $records=$result['R'];
   //var_dump($result);
   //echo $records;

   //{totalpages=ceil(7/3)} totalpages = 2.33 ceil rounds up to 3 total pages
   //defualt is one page
   
   if ($records>$pagerows)
   {
    $total_pages = ceil($records/$pagerows);

    }
    else
    {
    $total_pages = 1;
    }
    /*Select a wine from wines where offset is up to 3 and page rows is 3 for page 1
    offset is 6 on page 2 rows is 3 for page 1
    offset is 9 but prints 1 row because its the last row*/


   $query1= "SELECT *";
   $query1 .= " FROM wines";
   $query1 .= " LIMIT ?,?";

   /*Echos out all wine per row and after row limit goes to next page etc*/
   //echo $query1;
   $stmt=$conn->prepare($query1);
   $stmt->bind_param("ii", $start, $pagerows);
    $stmt->execute();   

   $result=$stmt->get_result()->fetch_all(MYSQLI_ASSOC);


$stmt->close();

?>






