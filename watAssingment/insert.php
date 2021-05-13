<?php
include 'connection.php';

$query = "INSERT INTO form (`id`, `firstname`, `lastname`, `email`, `address`, `age`, `gender`) VALUES (NULL, 'Shushant', 'Chapagain', 'cshushant18@tbc.edu.np', 'Kathmandu', '21', 'Male');";

//echo $query;
mysqli_query($connection, $query);

?>