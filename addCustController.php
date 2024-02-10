<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $username = $_POST['user_name'];
        $usercollage = $_POST['user_collage'];
        $Certification = $_POST['Certification'];
        $userduration = $_POST['user_duration'];
        $Domain = $_POST['Domain'];


       
         $insert = mysqli_query($conn,"INSERT INTO customers
         (user_name,user_collage, Certification,user_duration,Domain) 
         VALUES ('$username','$usercollage','$Certification','$userduration','$Domain')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?customers=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?customers=success");
         }
     
    }
        
?>