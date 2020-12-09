<?php
   include_once "Includes/dbconnect.inc.php";
   session_start();

   $user_id = $_SESSION['id'];

   $query = "SELECT first_name, last_name, city, state, zip, country, phone FROM customer WHERE id = ? LIMIT 1";

   $stmt = $conn->prepare($query);
   $stmt->bind_param("i", $user_id);
   $stmt->execute();
   $result = $stmt->get_result()->fetch_assoc();

   //var_dump($result);
   
   
   
   
   $errors=[];
   
   if(isset($_POST['Create_Button'])):        
            $First_Name=$_POST['First_Name'];
            $Last_Name=$_POST['Last_Name']; 
            $City=$_POST['City'];
            $State=$_POST['State'];
            $ZipCode=$_POST['Zip_Code'];
            $Country=$_POST['Country'];
            $Phone=$_POST['Phone_Number'];
          
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
               

              // UPDATE `customer` SET `id`=[value-1],`first_name`=[value-2],`last_name`=[value-3],`state`=[value-4],`zip`=[value-5],`country`=[value-6],`email`=[value-7],`phone`=[value-8],`password`=[value-9],`created_at`=[value-10],`updated_at`=[value-11] WHERE 1
               
               
    
                $Usql="UPDATE  customer SET first_name=?, last_name=?, City=?, state=?, zip=?, country=?,phone=? WHERE id=? LIMIT 1 ";
                $stmt= $conn->prepare($Usql);
                $stmt->bind_param("ssssisii",$First_Name,$Last_Name,$City,$State,$ZipCode,$Country,$Phone,$user_id);
               //var_dump($_SESSION);
               
               
               if($stmt->execute())
                {   
                 

                    //var_dump($_SESSION);
               
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