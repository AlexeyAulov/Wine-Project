<?php
include("Controller/InfoInsert.inc.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link  rel="stylesheet" href="../CSS/Cool.css">
    <title>Checkout Page</title>
  </head>
  <body>
  <!--Navbar with dropdown-->

  <header>
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
		     <a class="dropdown-item" href="../All_Pages/CI.php">Update Information</a>
         <a class="dropdown-item" href="Controller/SignOut.inc.php">Sign out</a>
        </div>
      </li>
      
    </ul>
  
  </div>
</nav>
  
  </header>
         <!--post form with security precautions--> 
        <br>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" class="needs-validation" novalidate>
            <div class="container m-auto">
                <h4 class="text-dark text-center">Enter Shipping Information</h4>
            
            <!--each div class represents there own column within a row. If infomation is missing from databse it will 
            echo out the missing information when user hits submit button, also shows what was previously there if there is one -->
            
            <div class="form-row" >
              <div class="col-md-4 mb-3 ">
                <label for="validationCustom01">First Name</label>
                <input type="text"  name="First_Name" class="form-control" id="validationCustom01" required>
                <?php
                 if(isset($errors['First_Name'])): 
                 ?>        
                <div class="alert alert-danger">
            
                <?php
                echo $errors['First_Name'];
                ?> 
            
                </div>
            
                <?php 
                endif;
                ?>
              </div>
              <div class="col-md-4 mb-3 ">
                <label for="validationCustom02">Last Name</label>
                <input type="text" name="Last_Name" class="form-control" id="validationCustom02"  required>
                <?php
                 if(isset($errors['Last_Name'])): 
                 ?>        
                <div class="alert alert-danger">
            
                <?php
                echo $errors['Last_Name'];
                ?> 
            
                </div>
            
                <?php 
                endif;
                ?>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3 ">
                <label for="validationCustom03">City</label>
                <input type="text" name="City" class="form-control" id="validationCustom03" required>
                <?php
                 if(isset($errors['City'])): 
                 ?>        
                <div class="alert alert-danger">
            
                <?php
                echo $errors['City'];
                ?> 
            
                </div>
            
                <?php 
                endif;
                ?>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom04">State</label>
                <input type="text" name="State" class="form-control" id="validationCustom03" required>
                <?php
                 if(isset($errors['State'])): 
                 ?>        
                <div class="alert alert-danger">
            
                <?php
                echo $errors['State'];
                ?> 
            
                </div>
            
                <?php 
                endif;
                ?>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom05">Zip Code</label>
                <input type="text" name="Zip_Code" class="form-control" id="validationCustom05" placeholder=""required>
                <?php
                 if(isset($errors['Zip_Code'])): 
                 ?>        
                <div class="alert alert-danger">
            
                <?php
                echo $errors['Zip_Code'];
                ?> 
            
                </div>
            
                <?php 
                endif;
                ?>
              </div>
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Country/Region</label>
                <input type="text" name="Country" id="disabledTextInput" class="form-control" placeholder="United States">
              </div>
              <?php
                 if(isset($errors['Country'])): 
                 ?>        
                <div class="alert alert-danger">
            
                <?php
                echo $errors['Country'];
                ?> 
            
                </div>
            
                <?php 
                endif;
                ?>
              <div class="form-group">
                <label for="exampleInputTel1">Phone Number</label>
                <input type="number" name= "Phone_Number" class="form-control" id="tel">
              </div>
              <?php
                 if(isset($errors['Phone_Number'])): 
                 ?>        
                <div class="alert alert-danger">
            
                <?php
                echo $errors['Phone_Number'];
                ?> 
            
                </div>
            
                <?php 
                endif;
                ?>
             
        <div class="row ml-5">
              <div class="form-check m-auto">
               
                <?php
                 if(isset($errors['Terms'])): 
                 ?>        
                <div class="alert alert-danger">
            
                <?php
                echo $errors['Terms'];
                ?> 
            
                </div>
            
                <?php 
                endif;
                ?>
              </div>
        
            </div>
            <div class=" text-center mt-3">
                <button class="btn btn-outline-info " name="Create_Button" type="submit">Enter</button>
                </div>
        </div>
    </div>
           <br>
        

          
         

        </form>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
</body>
</html>