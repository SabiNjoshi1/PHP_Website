<?php
    include 'connection.php';
    if(deleteQuery($_GET['id'], "form")){
        header("Location: crud.php"); 
        exit();
    }else{
        echo "Error deleting data";
    }
    
?>