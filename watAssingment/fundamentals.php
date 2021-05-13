<!DOCTYPE html>
<html>
<head>
    <link href="./fundamentals.css" rel="stylesheet" type="text/css" />
    <title>Fundamentals</title>
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
            <a href="mysql.php">MySQL</a>
        </li>

        <li>
            <a href="forms.php">Forms</a>
        </li>

        <li>
          <a class="active"  href="#">Fundamentals</a>
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
    <h3>Escape Characters</h3>
    <p>
      <h5>Without using Escape Characters</h5>
      <p>“most programmers say it’s better to use ‘echo’ rather than ‘print’” says who?</p>
      
      <h5>After using Escape Characters</h5>
      <?php
        echo("\"most programmers say it’s better to use ‘echo’ rather than ‘print’\" says who?");
      ?>
    </p>
  </section>

  <section id="sidebar">
    <h3>Variables</h3>
    <p>
      <?php
        $name = "Sabin Joshi";
        $age = 21;
        echo "Hi my name is $name and I am $age years old<br><br>Mi nombres es $name y tengo $age anos de edad";
      ?>
    </p>
  </section>

  <section id="right-sidebar">
    <h3>Function</h3>
    <p>
      <h5>gettype()returns is</h5>
      <?php
        echo gettype($name);
        echo '<br />';
      ?>
      <h5>strlen() returns is</h5>
      <?php
        echo strlen($name);
        echo '<br />';
      ?>
      <h5>strtoUpper()returns is</h5>
      <?php
        echo strtoUpper($name);
      ?>
    </p>
  </section>
  <section id="left-sidebar">
    <h3>Arithmetic</h3>
    <p>
      <?php
        $num1 = 9;
        $num2 = 12;
        echo "num1 = $num1 <br>";
        echo "num2 = $num2 <br>";
        echo "num1 x num2 =" .$num1 * $num2. "<br>";
        echo "num1 as a percentage of num2 = ".(($num1/$num2)*100)." % <br>";
        echo "num2 divided by num1 = ".floor($num2/$num1)." remainder ".fmod($num2,$num1)." <br>";
      ?>
    </p>
  </section>
  <section id="mid-sidebar">
    <h3>Calculate height in feet and inches</h3>
    <p>
      <?php
        echo "Name: Sabin Joshi <br>";
        echo "Age: 21 <br>";
        $height=1.8;
        echo "Height in Meters: $height <br>";
        $height_inches=($height*100)/2.54;
        $height_feet=($height*100)/(2.54*12);
        echo "Height in Feet and inches: ".floor($height_feet)."ft ".floor(fmod($height_inches,21))." inches";
      ?>
    </p>
  </section>


  <footer>
   <h4>Name: Sabin Joshi<br>Student Id: c7229123</h4>
  </footer>

  </div>

</body>
</html>