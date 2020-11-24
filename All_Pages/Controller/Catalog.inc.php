<?php
   include_once "Includes/dbconnect.inc.php";
   $pagerows=3;
   if ((isset($_GET['page'])&& is_numeric($_GET['page']))){
       $current_page=htmlspecialchars($_GET['page']);
   }else{
       $current_page=1;
   }
  
  //Counts total Wine all together in order to figure out how many wines there needs to be
   $offset=($current_page-1)*$pagerows;
   
   //calculate the number of pages
   $count_query="SELECT COUNT(wine_id) as R FROM wines";
   $stmt=$conn->prepare($count_query);
   
   //execute query
   $stmt->execute();

   //count how many records in total
   $result = $stmt->get_result()->fetch_assoc();
   
   //var_dump($result);

   $records=$result['R'];

   //echo $records;

   //Counts How Many Pages are suppose to be there 
   if ($records>$pagerows){
       $total_pages=ceil($records/$pagerows);
   }else{
       $total_pages=1;
   }

   
   //Selects all wines from wines
   $query1= "SELECT wine_name";
   $query1 .= " FROM wines";
   $query1 .= " LIMIT ?,?";
   
   //display wines out on front end
   
   echo $query1;
   $stmt=$conn->prepare($query1);
   $stmt->bind_param("ii", $offset, $pagerows);
   $stmt->execute();

   $result=$stmt->get_result()->fetch_all(MYSQLI_ASSOC);

if ($result){
    var_dump($result);


foreach($result as $wines){
    
}
}else{
    echo "<p>There is no records!!! </p>";
    exit();
}
$stmt->close();
if($current_page>1){
    echo '<a href="CG.php?page='.($current_page-1).'">Previous</a>';
}
if ($current_page<$total_pages){
    echo'<a href="CG.php?page='.($current_page+1).'"> Next </a>';

}



   




   ?>