<!DOCTYPE html>
<html>
<head>
    <link href="./forms.css" rel="stylesheet" type="text/css" />
    <title>Web Applications</title>
</head>
<body>

  <?php
    error_reporting(0);
    $fname=$lname=$address=$email=$age=$gender="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
      $fname=$_POST["firstname"];
      $lname=$_POST["lastname"];
      $email=$_POST["email"];
      $address=$_POST["address"];
      $age=$_POST["age"];
      $gender=$_POST["gender"]; 
    }
  ?>

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
            <a href="mysql.php">MySQL</a>
        </li>

        <li>
            <a class="active" href="#">Forms</a>
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
        <div class="form">
          <h2>PHP Form</h2> 
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
            <label for="fname">First Name:</label>
            <input type="text" name="firstname" required>

            <label for="lname">Last Name:</label>
            <input type="text" name="lastname" required>

            <label for="email">Email:</label>
            <input type="text" name="email" required>

            <label for="address">Address:</label>
            <input type="text" name="address" required>

            <label for="age">Age:</label>
            <select class="age" name="age">
              <option disabled="disabled" selected="selected">Choose your Age</option>
                <?php 
                  for($i=1; $i<=100; $i++)
                  {
                    echo "<option value=".$i.">".$i."</option>";
                  }
                ?>  
            </select><br><br>

            <label>Gender:</label>
            <input type="radio" name="gender" id="Male" value="Male" />Male
            <input type="radio" name="gender"  id="Female" value="Female" />Female
            <input type="radio" name="gender" id="Other" value="Other" />Other

            <label>Check For Confirmation:</label>
            <input type="checkbox" name="checkbox" value="Y" /><br>

            <button type="SUBMIT" class="submit">SUBMIT</button>
            <button type="RESET" class="reset">RESET</button> 
          </form>
        </div>

        <div class="form">
          <h2>Output</h2>
          <?php
            echo " Name   :   " . $fname . $lname;
            echo "<br>";

            echo "Email   :   ".$email;
            echo "<br>";
  
            echo "Address :   ".$address;
            echo "<br>";
   
            echo "Age     :   " .$age;
            echo "<br>";
  
            echo "Gender  :   " .$gender;
            echo "<br>";
            echo "<br>";

          ?>
        </div>
  </section>

  <footer>
   <h4>Name: Sabin Joshi<br>Student Id: c7229123</h4>
  </footer>

  </div>

</body>
</html>