<?php
      //inserting data in database by form 
      include 'connection.php';
      // updateQuery($_GET['id']);
      $query ="SELECT * from form where id=".$_GET['id'];
      $result = mysqli_query($connection, $query);
      $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <link href="./mysqledit.css" rel="stylesheet" type="text/css" />
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
            <a class="active" href="#">MySQL</a>
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
    <div class="form">
          <h2>PHP Form</h2> 

          <form action="submitedit1.php" method="POST">
            <label for="fname">First Name:</label>
            <input type="text" name="firstname" value="<?php echo $row['firstname'];?>"/>

            <label for="lname">Last Name:</label>
            <input type="text" name="lastname" value="<?php echo $row['lastname'];?>"/>

            <label for="email">Email:</label>
            <input type="text" name="email" value="<?php echo $row['email'];?>"/>

            <label for="address">Address:</label>
            <input type="text" name="address" value="<?php echo $row['address'];?>"/>

            <label for="age">Age:</label>
            <select class="age" name="age" value="<?php echo $row['age'];?>">
              <option disabled="disabled" selected="selected">Choose your Age</option>
                <?php 
                  for($i=1; $i<=100; $i++)
                  {
                    echo "<option value=".$i.">".$i."</option>";
                  }
                ?>  
            </select><br><br>

            <label>Gender:</label>
            <input type="radio" name="gender" id="Male" value="<?php echo $row['gender'];?>" />Male
            <input type="radio" name="gender"  id="Female" value="<?php echo $row['gender'];?>" />Female
            <input type="radio" name="gender" id="Other" value="<?php echo $row['gender'];?>" />Other

            <label>For Confirmation:</label>
            <input type="checkbox" name="checkbox" value="Y" /><br>

            <label>Profile Image:</label>
            <input type="file" name="profile" id="profile" />

            <button type="SUBMIT" class="submit">SUBMIT</button>
            <button type="RESET" class="reset">RESET</button>

            <input type="hidden" name="id" value="<?php echo $row['id'];?>"/><br>

          </form>
      </div>
  </section>

  <footer>
   <h4>Name: Sabin Joshi<br>Student Id: c7229123</h4>
  </footer>

  </div>

  <script>
    alert("Please Fill the Form your details will be submitted and store in Datbase!!");
  </script>

</body>
</html>