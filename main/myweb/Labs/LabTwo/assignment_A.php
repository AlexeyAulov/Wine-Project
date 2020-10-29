<?php
   $errors=[];
   $success=[];
  
  
   if(isset($_GET['submit']))
  {
    $phone_number=$_GET['Number'];
   
    $pattern = "/^[1-9][0-9]{2}(\.|\-)[0-9]{3}(\.|\-)[0-9]{4}$/";
   
    $filtered=htmlspecialchars($phone_number);
    
    if(empty($phone_number))
    {
      $errors['Number']="Must enter a valid phone number!";
    
    }
    if(preg_match($pattern,$phone_number))
    {
    $success['Number'] = "Phone number is valid!";

    }
    else
    {
      $errors['Number']="Must enter a valid phone number!";
    }
    
   
  
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <title>assignment_A</title>
  </head>
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="http://localhost/main/myweb/AlexPort/Alex'sPortfolio.php">Alex's Projects</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/main/myweb/AlexPort/Alex'sPortfolio.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/main/myweb/AlexPort/LabFront.php">Labs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/main/myweb/AlexPort/FinalProject.php">Final Project</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="http://localhost/main/myweb/AlexPort/AboutMe.php">About Me</a>
                </li>
                </li>
                </ul>
            </div>
            </nav>
  
  
  </header>
 
 
  <body>
  
 
  <form  method="GET" class="main-form needs-validation">
      <div class="form-group">
       <label for="numbers">Phone Number</label>
       <input type="text" name="Number" id="numbers" class="form-control" value=<?php echo $phone_number??""; ?>>
       <small class="form-text text-muted">xxx.xxx.xxx or xxx-xxx-xxxx</small>
        
       <?php
             if(isset($errors['Number'])): 
            ?>        
            <div class="alert alert-danger">
            
              <?php
              echo $errors['Number'];
              ?> 
        </div>
      <?php endif;?>
		  
      <?php 
      if(isset($success['Number'])):
      ?>
      <div class="alert alert-success">
       <?php
       echo $success['Number'];
       ?>        
      </div>

      <?php endif; ?> 
     
      <br>
    
      <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
    </form>


    <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="http://localhost/main/myweb/Labs/LabTwo/assigment_A.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="http://localhost/main/myweb/Labs/LabTwo/assignment_B.php">2</a></li>
                        <li class="page-item"><a class="page-link" href="http://localhost/main/myweb/Labs/LabTwo/assignment_C.php">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="http://localhost/main/myweb/Labs/LabTwo/assignment_B.php">Next</a>
                        </li>
                    </ul>
                </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>