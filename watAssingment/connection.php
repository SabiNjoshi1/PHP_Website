<?php
$connection = new mysqli('localhost', 'root', 'root', 'wat');
// server, username, password, database_name

// Check connection
if ($connection -> connect_errno) {
    echo "Failed to connect to MySQL: " . $connection -> connect_error;
    exit();
}

function deleteQuery($id = null, $tableName){
    global $connection;
    if($id !== null){
        $query = "DELETE FROM $tableName WHERE id = ".$id;
        return mysqli_query($connection, $query);
    }else {
        return false;
    }
}

function selectQuery($filter = NULL){
    global $connection;
    $query = "SELECT * from form ";
    if(!empty($filter)){
        $query = $query."where firstname like '%".$filter['search']."%'";
    }

    return mysqli_query($connection, $query);
}

function updateQuery($date){
    global $connection;
    $query = "UPDATE form SET 
                firstname='".$_POST['firstname']."',
                lastname='".$_POST['lastname']."',  
                email='".$_POST['email']."',
                address='".$_POST['address']."',
                age='".$_POST['age']."', 
                gender='".$_POST['gender']."' 
    WHERE id=".$_POST['id']."";

    return mysqli_query($connection, $query);
}

?>