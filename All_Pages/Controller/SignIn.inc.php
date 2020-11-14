<?php
    include_once "Includes/dbconnect.inc.php";
 
    $query1="SELECT * FROM CUSTOMER WHERE EMAIL=? AND PASSWORD=? ";
   
    $stmt=$conn->prepare($query1);

    $stmt->bind_param("ss",$email,$password);
    $stmt->execute();
    
    $result=$stmt->get_result();
    if( $result->num_rows===0) exit('No rows');
   
    

   
//$stmt->close();

    $errors=[]; //because we have multiple error messages 
    if(isset($_POST['submit'])):

      $email=$_POST['Name'];
      $password=$_POST['Pswd'];
    
      $email=htmlspecialchars($email);
      $password=htmlspecialchars($password);
      /*$username=stripslashes($username);
      $password=stripslashes($password);
      $username=trim($username);
      $password=trim($password);*/

      $pattern = '/[a-zA-Z0-9]/';
      
        
      
      
      
        if(empty($email)):
        
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
                foreach ($row as $key => $val):
                  if($key !== $email){
                    $errors['Name'] = 'No matched record!';
               
                  } else{
                    if($val !== $password){
                      $errors['Pswd'] = 'No matched record!';
                     
                    } else{
                    if(array_key_exists($email,$row))
                    {
                    if($password === $row[$email])
                    { 
                      while($row=$result->fetch_assoc()){
                        $arr[]=$row;
                        }
                        var_dump($arr);
                    //  session_start();
                    // $_SESSION['Name']= $email;

                   //  var_dump($_SESSION);
                    
                   //  header("Location:../All_Pages/CG.php");
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


Comments:
                        1. data might not be recieving from client side and comparing to server side
                        2. not displaying var_dump


                        }*/
                endforeach;
          endif;
     
    endif; 
   
   
  ?>
  
