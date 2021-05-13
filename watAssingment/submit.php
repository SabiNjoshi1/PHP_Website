<?php
include 'connection.php';

$profile = $_POST['profile'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$address = $_POST['address'];
$age = $_POST['age'];
$gender = $_POST['gender'];

$query = "INSERT INTO form (`profile`, `firstname`, `lastname`, `email`, `address`, `age`, `gender`)VALUES('".$profile."', '".$fname."', '".$lname."', '".$email."', '".$address."', '".$age."', '".$gender."')";

//echo $query;
mysqli_query($connection, $query);      
?>

<!DOCTYPE html>
<html>
<head>
    <link href="./submit.css" rel="stylesheet" type="text/css" />
    <title>Web Applications</title>
</head>
<body>
  <div id="body">
      <img src="image/second.jpg" alt="picture_of_mountain" />
  </div>

  <div id="pagewrap">
    <header>
      <h1>Web Applications and Technologies</h1>
      <h2> Portfolio of Work </h2>
    </header>
    <nav>
      <ul id="navlist">
        <li>
          <a href="sortSearch.php">Search</a>
        </li>

        <li>
            <a href="register.php">Register</a>
        </li>

        <li>
            <a href="sessions.php">Sessions</a>
        </li>

        <li>
            <a href="crud.php">CRUD</a>
        </li>

        <li>
            <a class="active" href="mysql.php">MySQL</a>
        </li>

        <li>
            <a href="forms.php">Forms</a>
        </li>

        <li>
          <a href="fundamentals.php">Fundamentals</a>
        </li>

        <li>
          <a href="basics.php">Basics</a>
        </li>
        <li>
          <a href="watIndex.html">Home</a>
        </li>
      </ul> 
    </nav>

  <section id="content">
  	<h2>Thank You <br> Your Details has been Submitted and save in Database.<br>It will display in crud page.</h2>
  </section>

  <footer>
   <h4>Name: Sabin Joshi<br>Student Id: c7229123</h4>
  </footer>

  </div>

  <script>
  	alert("Form is Connected to Database!!");
  </script>

</body>
</html>