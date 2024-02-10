<?php

    include_once "../config/dbconnect.php";
    
    $user_id=$_POST['record'];
    $query="DELETE FROM customers where user_id='$user_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"User Item Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>