<?php
    include 'connection.php';
  //  echo "Your form is Submitted!!<br>";
    //echo "<a href='form.php'>Add More</a><br>";

    $target_dir ="image/";
    $target_file = $target_dir . basename($_FILES["profile"]["name"]);

    $check = getimagesize($_FILES["profile"]["tmp_name"]);
    if($check !== false) {

    if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
    $profile = $_FILES ["profile"]["name"];
  }
  else {
      echo "Error Uploading";
  }

}
   // insertQuery($_POST);
      $fname=$_POST["firstname"];
      $lname=$_POST["lastname"];
      $email=$_POST["email"];
      $address=$_POST["address"];
      $age=$_POST["age"];
      $gender=$_POST["gender"];
    //$profile = $_POST['profile'];

    $query = "INSERT INTO form (`id`, `profile`, `firstname`, `lastname`, `email`, `address`, `age`, `gender`) VALUES (NULL, `$profile`, '$fname', '$lname', '$email', '$address', '$age', '$gender');";

    
    mysqli_query($connection, $query);
    header ("Location: crud.php");
    exit();
?>
