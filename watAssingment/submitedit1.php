<?php
    include 'connection.php';
   
    if(updateQuery($_POST)){
        header("Location: curd.php"); 
        exit();
    }else{
        echo "Record couldn't be updated";
    }
    
    
        
?>