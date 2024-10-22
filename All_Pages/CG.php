<?php 
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
  
  <!--NavBar with drop down -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
          <a class="dropdown-item" href="../All_Pages/CI.php">Update Information</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../All_Pages/Signin.php">Sign In</a>
          <a class="dropdown-item" href="Controller/SignOut.inc.php">Sign out</a>
        </div>
      </li>
      
    </ul>
  </div>
</nav>
  
  <!--Title Header-->
  </header>
    <br>
<!--loop to display items from database-->
  
  <?php
    if ($result){
  ?>    
    <h2 style="text-align: center">Representing the Finest Wine</h2>
        <?php 
      foreach($result as $k => $wine){
    ?>
    
          <div class="card ">  
          <img src="../Pic/<?php echo $wine['image']; ?>" alt="wine_name" style="width: 100%">
          <h1><?php echo $wine['wine_name']; ?></h1>
          <p class="price">$<?php echo $wine['price_btl'];?></p>
  
          <!--get form for product to add to cart-->

          <form action="Controller/add_cart.inc.php" method="GET">
            <input type='text' name="quantity" value=1 size="2">
            <input type="hidden" name="Wine_ID" value="<?php echo $wine['wine_id']; ?>" />
            <input type='submit' name="add_to_cart" value='add to cart'>
          </form>
        </div>
    <?php
    
      }
    
    ?>
<?php
}

//Precautionary measure to check the database

else
{
    echo "<p>There is no records!!! </p>";
    exit();
}

?>
<br>
<br>

<!--pagination and button-->

<footer class="footer">
    <?php
      if($current_page>1){
        echo '<a href="CG.php?page='.($current_page-1).'"><div class="text-center"><button type="button"style="text-center" class="btn btn-outline-info">Previous</div></button></a>';
      }
      if ($current_page<$total_pages){
          echo'<a href="CG.php?page='.($current_page+1).'"> <div class="text-center"><button type="button"class="btn btn-outline-info">Next</div></button> </a>';
      }
    ?>
</footer>

<br>
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