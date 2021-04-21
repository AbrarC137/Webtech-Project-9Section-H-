<?php

    
    include('../db/db.php');

    
    $id = $_GET['id'];

    $sql = "DELETE FROM addproduct WHERE id=$id";
 
    $res = mysqli_query($conn, $sql);

    

    if($res = true)
    {
       
        echo "User Deleted";
        
    }
    else
    {
        
        echo "Member could not be deleted";
       
    }

?>