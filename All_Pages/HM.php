<?php 
  session_start();
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
  
 
          
  <div class="jumbotron jumbotron-fluid">
        <div class="container flex">
          
          <h1 class="display-4 text-white text-center">Wine Lovers</h1>
          <p class="lead text-white text-center ">The best wine will be delivered to you</p>
          
        </div> 
      </div>
<br>
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">

    <div class="card-group">
  <div class="card">
    <img src="../Pic/P1.JPG" class="card-img-top" alt="...">
    <div class="card-body bg-dark">
      <h5 class="card-title text-white ">ROSE</h5>
      <p class="card-text text-white "></p>
      <a href="cart.html" class="btn btn-outline-info">Add to cart</a>
    </div>
  </div>
  <div class="card">
    <img src="../Pic/P2.JPG" class="card-img-top" alt="...">
    <div class="card-body bg-dark">
      <h5 class="card-title text-white ">CHIANTI</h5>
      <p class="card-text text-white"></p>
      <a href="cart.html" class="btn btn-outline-info">Add to cart</a>
    </div>
  </div>
  <div class="card">
    <img src="../Pic/P3.JPG" class="card-img-top" alt="...">
    <div class="card-body bg-dark">
      <h5 class="card-title text-white">PINOT NOIR</h5>
      <p class="card-text text-white"></p>
      <a href="cart.html" class="btn btn-outline-info">Add to cart</a>
      
    </div>
  </div>
</div>
        
    </div>
    <div class="carousel-item">
    <div class="card-group">
  <div class="card">
    <img src="../Pic/P4.JPG" class="card-img-top" alt="...">
    <div class="card-body bg-dark">
      <h5 class="card-title text-white">CABERNET SAUVIGNON</h5>
      <p class="card-text text-white"></p>
      <a href="cart.html" class="btn btn-outline-info">Add to cart</a>
    </div>
  </div>
  <div class="card">
    <img src="../Pic/P5.JPG" class="card-img-top" alt="...">
    <div class="card-body bg-dark">
      <h5 class="card-title text-white">MOET CHANDON</h5>
      <p class="card-text text-white"></p>
      <a href="cart.html" class="btn btn-outline-info">Add to cart</a>
    </div>
  </div>
  <div class="card">
    <img src="../Pic/P6.JPG" class="card-img-top" alt="...">
    <div class="card-body bg-dark">
      <h5 class="card-title text-white">Amarone</h5>
      <p class="card-text text-white"></p>
      <a href="cart.html" class="btn btn-outline-info">Add to cart</a>

    </div>
  </div>
</div>
    </div>
    <div class="carousel-item">
    <div class="card-group">
  <div class="card">
    <img src="../Pic/P7.JPG" class="card-img-top" alt="...">
    <div class="card-body bg-dark">
      <h5 class="card-title text-white">SHIRAZ</h5>
      <p class="card-text text-white"></p>
      <a href="cart.html" class="btn btn-outline-info">Add to cart</a>
    </div>
  </div>
  <div class="card">
    <img src="../Pic/P8.JPG" class="card-img-top" alt="...">
    <div class="card-body bg-dark">
      <h5 class="card-title text-white">BARBARESCO</h5>
      <p class="card-text text-white"></p>
      <a href="cart.html" class="btn btn-outline-info">Add to cart</a>
    </div>
  </div>
  <div class="card">
    <img src="../Pic/P9.JPG" class="card-img-top" alt="...">
    <div class="card-body bg-dark">
      <h5 class="card-title text-white">SANTA MARGARITA</h5>
      <p class="card-text text-white"></p>
      <a href="cart.html" class="btn btn-outline-info">Add to cart</a>
    </div>
  </div>
</div>
    </div>
  </div>
</div>

    
     

    
      
      

	
    
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

