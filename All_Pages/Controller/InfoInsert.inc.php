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
        
        $F=$_POST['First_Name'];
        $L=$_POST['Last_Name'];   
        $C=$_POST['City'];
        $S=$_POST['State'];
        $Z=$_POST['Zip_Code'];
        $CY=$_POST['Country'];
        $P=$_POST['Phone_Number'];
        
        $html_First_Name=htmlspecialchars($F);
        $html_Last_Name=htmlspecialchars($L);
        $html_City=htmlspecialchars($C);
        $html_State=htmlspecialchars($S);
        $html_Zip_Code=htmlspecialchars($Z);
        $html_Country=htmlspecialchars($CY);
        $html_Phone_Number=htmlspecialchars($P);
    
        
        
        
        
        $Slash_First_Name=stripslashes($html_First_Name);
        $Slash_Last_Name=stripslashes($html_Last_Name);
        $Slash_City=stripslashes($html_City);
        $Slash_State=stripslashes($html_State);
        $Slash_Zip_Code=stripslashes($html_Zip_Code);
        $Slash_Country=stripslashes($html_Country);
        $Slash_Phone_Number=stripslashes($html_Phone_Number);
        
        
        $First_Name=trim($Slash_First_Name);
        $Last_Name=trim($Slash_Last_Name);
        $City=trim($Slash_City);
        $State=trim($Slash_State);
        $ZipCode=trim($Slash_Zip_Code);
        $Country=trim($Slash_Country);
        $Phone=trim($Slash_Phone_Number);
    
    
    
    
    
    
    
          
            
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
            
            
           /* if(empty($Terms))
            {
                $errors['Terms']="Please Select the Term Required!";
            }*/
            

            if(count($errors)===0):
            
               
                
              

              // UPDATE `customer` SET `id`=[value-1],`first_name`=[value-2],`last_name`=[value-3],`state`=[value-4],`zip`=[value-5],`country`=[value-6],`email`=[value-7],`phone`=[value-8],`password`=[value-9],`created_at`=[value-10],`updated_at`=[value-11] WHERE 1
               
               
    
                $Usql="UPDATE  customer SET first_name=?, last_name=?, City=?, state=?, zip=?, country=?,phone=? WHERE id=? LIMIT 1 ";
                $stmt= $conn->prepare($Usql);
                $stmt->bind_param("ssssisii",$First_Name,$Last_Name,$City,$State,$ZipCode,$Country,$Phone,$user_id);
               //var_dump($_SESSION);
               
               
               if($stmt->execute())
                {   
                   
                    header("Location:../All_Pages/CG.php");  
            
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