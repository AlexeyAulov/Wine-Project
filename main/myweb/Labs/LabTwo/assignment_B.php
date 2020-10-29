  <?php
    $errors=[];
    $success=[];
    
    $Data = array(
      "WillSmith@gmail.com"=>"Prince",
      "BruceLee@outlook.com"=> "Likewater",
      "JeffyJeff@hotmail.com"=>"Jeff",
      );
      
    if(isset($_POST['submit'])):
    
      $username=$_POST['Name'];
      $password=$_POST['Pswd'];
    
      htmlspecialchars($username);
      htmlspecialchars($password);
      stripslashes($username);
      stripslashes($password);
      trim($username);
      trim($password);


      
      
      
        if(empty($username)):
        
          $errors['Name']="Empty Username";
           header("refresh: 3;");
        endif;
        
        if(empty($password)):
        

          $errors['Pswd']="Empty Password";
          header("refresh: 3;");
        endif;
        
        
        if(empty($errors))
        {
        foreach ($Data as $key => $val): 
        
          if($key===$username && $val===$password)
          {
          header('Location:  welcome.php?username='.$username);
          $success['Name']="Valid Username";
          $success['Pswd']="Valid Password";  
        }
          elseif($username!==$key)
          {
            $errors['Name']="Username Not Matched";
            header("refresh: 5;");
          } 
          if($password!==$val)
          {
            $errors['Pswd']="Password Not Matched";
            header("refresh: 5;");
          }
          
      
         endforeach;
      }
    
  endif; 
    
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
        <title>assignment_B</title>
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
      
    
         <form  method="POST" class="main-form needs-validation">
              <div class="form-group">
              <label for="Username">Username (Email)</label>
              <input type="email" name="Name" id="Username" class="form-control" value=<?php echo $username??""; ?>>
              <div class="form-group">
              <label for="password">Password</label>
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
            
             <?php endif;?>
            
              
            
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
             <?php endif;?>
            
            
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

            <?php endif; ?> 
            
            <br>   
          
                  <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
          </form>


        <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item "><a class="page-link" href="http://localhost/main/myweb/Labs/LabTwo/assignment_A.php" tabindex="-1" aria-disabled="true">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="http://localhost/main/myweb/Labs/LabTwo/assignment_A.php">1</a></li>
                            <li class="page-item"><a class="page-link" href="http://localhost/main/myweb/Labs/LabTwo/assignment_B.php">2</a></li>
                            <li class="page-item"><a class="page-link" href="http://localhost/main/myweb/Labs/LabTwo/assignment_C.php">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="http://localhost/main/myweb/Labs/LabTwo/assignment_C.php">Next</a>
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