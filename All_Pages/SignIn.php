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
		  <a class="dropdown-item" href="../All_Pages/SignUp.php">Sign in</a>
          <a class="dropdown-item" href="#">Sign out</a>
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


<body>
      
<form action='Controller/FormHandler.php' method="POST" class="main-form needs-validation">
              <div class="form-group">
              <label for="Username">Type Username (Email)</label>
              <input type="email" name="Name" id="Username" class="form-control" value=<?php echo $username??""; ?>>
              <div class="form-group">
              <label for="password">Type Password</label>
              <input type="password" name="Pswd" id="Password" class="form-control" value=<?php echo $password??""; ?>>
             
                   <!--ONE BEG-->
          <?php
             if(isset($errors['Name'])): 
            ?>        
            <div class="alert alert-danger">
            
              <?php
              echo $errors['Name'];
              ?> 
            
             </div>
            
             <?php endif?>
            
              
            
            <!--ONE ENDING-->
            
             <!--TWO BEG-->
            
             <?php
              if(isset($errors['Pswd'])):
              ?>        
             
             <div class="alert alert-danger">
             
             <?php
             echo $errors['Pswd'];
              ?>
             
             </div>
              <?php 
              endif;
              ?>
            
            
            <!--TWO END-->
            
            <!--THREE BEG-->
            
            <?php 
            if(isset($success['Name'])):
		        ?>
            <div class="alert alert-success">
             <?php
             echo $success['Name'];
             ?>        
            </div>

            <?php 
            endif; 
            ?> 
            
            <br>   
          
                  <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
</form>
  
              
            
          

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>