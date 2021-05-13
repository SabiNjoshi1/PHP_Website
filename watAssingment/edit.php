<?php
    include 'connection.php';
   
    if(updateQuery($_POST)){
        header("Location: crud.php"); 
        exit();
    }else{
        echo "Record couldn't be updated";
    }
    
    
        
?>