<?php
   session_start();
   
   include_once "Includes/dbconnect.inc.php";
   
   $errors=[];
   

   
   if(isset($_POST['SignUpButton'])):
     {
        $e=$_POST['Name'];
        $p=$_POST['Pswd'];
        $pc=$_POST['Pswd2'];

        
        $html_email=htmlspecialchars($e);
        $html_password=htmlspecialchars($p);
        $html_passwordCon=htmlspecialchars($pc);
        
        $Slash_email=stripslashes($html_email);
        $Slash_password=stripslashes($html_password);
        $Slash_passwordCon=stripslashes($html_passwordCon);
        
        $email=trim($Slash_email);
        $password=trim($Slash_password);
        $passwordCon=trim($Slash_passwordCon);
        

     }   
     if(empty($email))
     {
         $errors['Name']="Email is needed!";
     }
     if(empty($password))
     {
        $errors['Pswd']="Password is needed!";
     }
    if(empty($passwordCon))
    {
        $errors['Pswd2']="Please retype password";
    }
    if($password!==$passwordCon)
    {
        $errors['Pswd']="Password do not match";
    }
    

$emailQuery="SELECT * FROM customer WHERE email=? LIMIT 1";
$stmt = $conn -> prepare($emailQuery);
$stmt->bind_param("s",$email);
$stmt->execute();
    
$result=$stmt->get_result();
$userCount=$result->num_rows;
if($userCount>0)
{
$errors['email']="Email already exists";
}

if(count($errors)===0)
{
    //$password=password_hash($password,PASSWORD_DEFAULT);
    $sql="INSERT INTO customer(email, password,created_at)";
    $sql.="VALUES(?,?,FROM_UNIXTIME(UNIX_TIMESTAMP()))";
    $stmt= $conn->prepare($sql);
    $stmt->bind_param("ss",$email,$password);

    if($stmt->execute())
    {

    $user_email=$conn->insert_id;
    $_SESSION['email']=$user_email;
    $_SESSION['password']=$password;

    $_SESSION['message'] = "You are logged in!";
    $_SESSION['alert-class']="alert-success";
    header('Location:../All_Pages/SignIn.php');
    exit();
    }
    else
    {
        $errors['db_errror'] = "Database error:failed to register";
    }


}



//CREATE INSERT FOR EVERYTHING ELSE IN CHECKOUT
//CHECK IF INSERT WORKS

    
    
    endif;






?>