<!DOCTYPE html>
<html>
<head>
    <link href="./basics.css" rel="stylesheet" type="text/css" />
    <title>Basics</title>
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
          <a href="fundamentals.php">Fundamentals</a>
        </li>

        <li>
          <a class="active" href="#">Basics</a>
        </li>
        <li>
          <a href="watIndex.html">Home</a>
        </li>
      </ul> 
    </nav>

  <section id="content">
    <h2>PHP</h2>
      <p>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.</p>
      <p>What is PHP?</p>
      <p>PHP is an acronym for "PHP: Hypertext Preprocessor" and it is a widely-used, open source scripting language</p>
  </section>

  <section id="sidebar">
     <h3>PHP Basics</h3>
      <p>
      <?php 

          $collegeName = "The British College"; 
          echo "Hello, World!! <br>";
          echo "This is the server side.<br>";
          print "My college name is $collegeName.<br>";
          echo str_replace("HTML and CSS", "PHP", "We are learning HTML and CSS at Level5.")."<br>";
          echo strtoupper("print throug echo function.")."<br>";
          echo trim("   We will submit our assingment in March 26.   ");
       ?>  
      </p>
  </section>

  <footer>
   <h4>Name: Sabin Joshi<br>Student Id: c7229123</h4>
  </footer>

  </div>

</body>
</html>