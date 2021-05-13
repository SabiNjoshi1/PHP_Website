<?php
  include 'connection.php';

  $sql = "SELECT * FROM form";
  $result = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link href="./search.css" rel="stylesheet" type="text/css" />
    <title>Web Applications</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
          <a href="sortSearch">Search</a>
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

    <div id="search">
      <form action="crud.php" method="post">
        <input type="text" name="search" placeholder="Search" value="<?php echo $_POST['search'];?>">
        <input type="submit" value="Submit">
      </form>
    </div>

  <section id="content">
    <table border='1' width='100%'>
      <tr>
          <th>Id</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Address</th>
          <th>Age</th>
          <th>Gender</th>
          <th>Edit &#9988;</th>
          <th>Delete &#10006;</th>
      </tr>

      <?php
      while($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>
        <td><?php echo $row["id"];?></td>
          <td><?php echo $row["firstname"];?></td>
          <td><?php echo $row["lastname"];?></td>
          <td><?php echo $row["email"];?></td>
          <td><?php echo $row["address"];?></td>
          <td><?php echo $row["age"];?></td>
          <td><?php echo $row["gender"];?></td>
          <td>
            <a href="#?id=<?php echo $row['id']?>">&#9988;</a>
          </td>
          <td>
            <a href="delete.php?id=<?php echo $row['id']?>"onclick="return confirm('Are you sure you want to remove the record?')">&#10006;</a>
          </td>
      </tr>
      <?php
      }
      ?>

</table>
  </section>

  <footer>
   <h4>Name: Sabin Joshi<br>Student Id: c7229123</h4>
  </footer>

  </div>

</body>
</html>