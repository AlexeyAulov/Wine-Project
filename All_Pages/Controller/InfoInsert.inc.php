<?php
   include_once "Includes/dbconnect.inc.php";
   session_start();

   $user_id = $_SESSION['id'];

   $query = "SELECT first_name, last_name, city, state, zip, country, phone FROM customer WHERE id = ? LIMIT 1";

   $stmt = $conn->prepare($query);
   $stmt->bind_param("i", $user_id);
   $stmt->execute();
   $result = $stmt->get_result()->fetch_assoc();

   var_dump($result);
   
   
   
   
   $errors=[];
   
   if(isset($_POST['Create_Button'])):        
            $First_Name=$_POST['First_Name'];
            $Last_Name=$_POST['Last_Name']; 
            $City=$_POST['City'];
            $State=$_POST['State'];
            $ZipCode=$_POST['Zip_Code'];
            $Country=$_POST['Country'];
            $Phone=$_POST['Phone_Number'];
          //  $Terms=$_POST['Term'];
            /*
            if(empty($First_Name))
            {
                $errors['First_Name']="First Name Required!";
            }
            if(empty($Last_Name))
            {
                $errors['Last_Name']="Last Name Required!";
            }
                
            if(empty($City))
            {
                $errors['City']="City Required!";
            }
            
            if(empty($State))
            {
                $errors['State']="State Required!";
            }
            
            if(empty($ZipCode))
            {
                $errors['Zip_Code']="Zip Code Required!";
            }
            
            if(empty($Country))
            {
                $errors['Country']="Country Required!";
            }
            
            if(empty($Phone))
            {
                $errors['Phone_Number']="Phone Number Required";
            }
            */
            
           /* if(empty($Terms))
            {
                $errors['Terms']="Please Select the Term Required!";
            }*/
            

            if(count($errors)===0):
            
                //isset($_POST('Term')):
                
               //Update
                
               $Insertsql="INSERT INTO customer(FIRST_NAME,LAST_NAME,CITY,STATE,ZIP,COUNTRY,PHONE ,created_at)";
                $Insertsql.="VALUES(?,?,?,?,?,?,?,FROM_UNIXTIME(UNIX_TIMESTAMP()))";
                $stmt= $conn->prepare($Insertsql);
                $stmt->bind_param("ssssisi",$First_Name,$Last_Name,$City,$State,$ZipCode,$Country,$Phone);
               
 
                if($stmt->execute())
                {   
                    $_SESSION['First_Name']=$First_Name;
                    $_SESSION['Last_Name']=$Last_Name;
                    $_SESSION['City']=$City;
                    $_SESSION['State']=$State;
                    $_SESSION['Zip_Code']=$ZipCode;
                    $_SESSION['Country']=$Country;
                    $_SESSION['Phone_Number']=$Phone;


                    var_dump($_SESSION);
               
                    $_SESSION['message'] = "Congatulation on creating an account!";
                    $_SESSION['alert-class']="alert-success";
                
             
                }
                else
                {
                $errors['db_errror'] = "Database error:failed to register";
                }
                
            

            endif;
    endif;

//CREATE INSERT FOR EVERYTHING ELSE IN CHECKOUT
//CHECK IF INSERT WORKS

    
    
    






?>