<?php 
session_start();
include("Controller\Catalog.inc.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link  rel="stylesheet" href="../CSS/Cool.css">
    <title>Home!</title>
  </head>
  <body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../All_Pages/HM.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="../All_Pages/CG.php">Catalog <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../All_Pages/CT.php">Cart</a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link" href="../All_Pages/AU.php">About us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="../All_Pages/LISU.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../All_Pages/SignUp.php">Sign up</a>
          <div class="dropdown-divider"></div>
		  <a class="dropdown-item" href="../All_Pages/Signin.php">Sign In</a>
          <a class="dropdown-item" href="Controller/SignOut.inc.php">Sign out</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  
  </header>
    <br>





  for
   
    <div class="card-deck">
      <div class="card bg-secondary text-white">
       <img src="../Pic/Wine_CG_1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title" name='wineName' value=<?php echo $wine_name??""; ?>></h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-outline-info">Go somewhere</a>
        </div>
      </div>   
    </div>
<?php



  foreach($result as $wines)
  echo $wine_name;

  
 
 
if($current_page>1){

 ?>
    <button type="" name="Previous" class="btn btn-primary" 
    value="<?php echo '<a href="CG.php?page='.($current_page-1).'"></a>'?>" >Previous</button>
   <?php
}
if ($current_page<$total_pages){
    ?>
    <button type="" name="Next" class="btn btn-primary" 
    value="<?php echo'<a href="CG.php?page='.($current_page+1).'"></a>'?>">Next</button>
  
  <?php  
}
?>

<!--

 if (isset($_POST["sendPhoto"])){
     var_dump($_FILES["photo"]);

     //check if the file is uploaded with success
     if (isset( $_FILES["photo"]["type"]) && $_FILES["photo"]["error"]
            ==UPLOAD_ERR_OK){  //if there is no error

           $target_dir="photos/";//define folder to save the uploaded file
           //expecting string "photos/minion.jpg"
           $target_file=$target_dir.basename($_FILES["photos"]["name"]);

           echo "<br><br>".$target_file."<br>";

           //getting extension of the uploaded file
           $file_type =pathinfo($target_file, PATHINFO_EXTENSION);
           echo "EXTENSION:$file_type<br>";

           $accepted=array("jpg","JPG", "png", "gif");

           //if $file_type is not in array $accepted
           if(!in_array($file_type,$accepted)){
               echo "JPG only";   
           }
           //move the uploade file from temporary folder to project folder
           //move uploaded_file ($_FILES["photo"]["tmp_name"]), $target_file))
           else if(!move_uploaded_file($_FILES["photo"]["temp_name"],$target_file))
           {
                  echo "there was a problem uploading that photo".$_FILES["photo"]["error"];
           }else{
                 $query="INSERT INTO products (image, created_at)";
                 $query="Values(?,FROM_UNIXTIME(UNIX_TIMESTAMP()))";

                 $stmt=$conn->prepare($query);
                 $stmt->bind_param('s', $target_file);
                 if ($stmt->execute()){
                    echo "thank you".$_POST['username'].;
                 }   
           }
    }else{
        //checking errors
switch($_FILES["photo"]["error"]):
    case UPLOAD_ERR_INI_SIZE:
    $message="THE PHOTO IS LARGER";
    break;
 }

}*/
-->
   



 <!--
<button type="submit" name="Previous" class="btn btn-primary" >Previous</button>
<button type="submit" name="Next" class="btn btn-primary" >Next</button>
 -->
<br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>