<?php

    
    include('../db/db.php');

    
    $id = $_GET['id'];

    $sql = "DELETE FROM products WHERE id=$id";
 
    $res = mysqli_query($conn, $sql);

    

    if($res = true)
    {
       
        echo "Product Deleted";
        
    }
    else
    {
        
        echo "Product could not be deleted";
       
    }

?>