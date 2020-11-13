<?php
    include_once"Includes/dbconnect.inc.php";

   $errors=[]; //because we have multiple error messages

    
    $Data = array(
      "WillSmith@gmail.com"=>"Prince1",
      "BruceLee@outlook.com"=> "Likewater2",
      "JeffyJeff@hotmail.com"=>"Jeff3",
      );
      
    if(isset($_POST['submit'])):
    
      $username=$_POST['Name'];
      $password=$_POST['Pswd'];
    
      $username=htmlspecialchars($username);
      $password=htmlspecialchars($password);
      /*$username=stripslashes($username);
      $password=stripslashes($password);
      $username=trim($username);
      $password=trim($password);*/

      $pattern = '/[a-zA-Z0-9]/';
      
        
      
      
      
        if(empty($username)):
        
          $errors['Name'] = 'Empty UserName!'; 
          //header("refresh: 5;");
        endif;

        if(empty($password)){   //check if password is empty
          $errors['Pswd'] = 'Empty Password';
        
        } else if(!preg_match($pattern, $password)){  //check the pattern of the password
          $errors['Pswd'] = 'Invalid Password';
         
        }


        
        /*if(!empty($password))
        {

          if(preg_match($pattern,$password)
          
        }
      else
       {
        $errors['Pswd'] = 'Empty Password!';
        header("refresh: 5;"); 
      }*/
        
          if(empty($errors)):
                foreach ($Data as $key => $val):
                  if($key !== $username){
                    $errors['Name'] = 'No matched record!';
               
                  } else{
                    if($val !== $password){
                      $erros['Pswd'] = 'No matched record!';
                     
                    } else{
                    if(array_key_exists($username,$Data))
                    {
                    if($password === $Data[$username])
                    {
                      session_start();
                     $_SESSION['Name']= $username;
                     //var_dump($_SESSION);
                     header("Location:../All_Pages/CG.php");
                     exit();  
                     
                    }
                   
                    }
                      //  $success = "Matched Account"; 
                    //break;
                    }
                  }
                  
                
                      /*  if($key===$username && $val===$password)
                        {
                          $success['Name']="Username signed in successfully";
                          
                         // header('refresh:5; Location:welcome.php? username='.$username);
                        }
                        if($key !== $username )
                        {
                          $errors['Name']="Username not correct";
                          header("refresh: 5;");
                        } 
                        if($val !== $password) 
                        {
                        $errors['Pswd']="Password is incorrect";
                        header("refresh: 5;");  
                        }*/
                endforeach;
          endif;
     
    endif; 
   
   
  ?>
