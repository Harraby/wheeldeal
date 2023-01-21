<?php
  session_start();


  if(!isset($_SESSION['username'])) {
    header('location:login.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
   <link rel="stylesheet" type="text/css" href="styles/home.css">
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
<ul class="slideshow">
  <li><span></span></li>
  <li><span>2</span></li>
  <li><span></span></li>
  <li><span></span></li>
  <li><span></span></li>
</ul>

    <header>
      <nav>
        <?php if(!isset($_SESSION['username'])) {echo '<a href="login.php">Login</a>';}
        else {
          echo '<a href="logout.php">Logout</a>';
        } ?>
        <a href="signup.php">Sign Up</a>
      </nav>


    </header>

    <main>
      <h1>Welcome to our website <?php echo $_SESSION['username']; ?> !</h1>
      <section id="featured">
        
         <nav>
  
          <a href="car-list.php">See our cars</a>
      </nav>
      </section>
    </main>
    <footer>
      <nav>
        <a href="terms-services.html">Terms of Service</a>
        <a href="privacy.html">Privacy Policy</a>
        <a href="contact.html">Contact Us</a>
      </nav>
    </footer>
</body>
</html>