<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: sessions.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="./welcome.css" rel="stylesheet" type="text/css" />
    <style>
        body{ font: 14px sans-serif; text-align: center; background: #eaffff;}
    </style>
</head>
<body>
    
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
          <a href="basics.php">Basics</a>
        </li>
        <li>
          <a href="watIndex.html">Home</a>
        </li>
      </ul> 
    </nav>

  <section id="content">
    <div class="wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
        <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        </p>
        </form>
    </div>   
  </section>

  <footer>
   <h4>Name: Sabin Joshi<br>Student Id: c7229123</h4>
  </footer>

  </div>


</body>
</html>