<?php

$log=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST') {

  include 'connect.php';
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql="SELECT * FROM account WHERE username='$username' AND password='$password'";

  $result=mysqli_query($con,$sql);

  if($result) {
    $num=mysqli_num_rows($result);

    if($num>0) {
      $log=1;
      session_start();
      $_SESSION['username']=$username;
      header('location:index.php');
    }
    else {
      $invalid=1;
    }
  }
}

?>




<!DOCTYPE html>
<html>
<head>
  <title>Login/Signup Page</title>
  <link rel="stylesheet" type="text/css" href="styles/login.css">
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
<header>
      <nav>
        <a href="signup.php">Sign up</a>
        <a href="car-list.php">Cars</a>
      </nav>
</header>
<?php

if($log) {
  echo '<div class="alert"> User logged in</div>';
}

if($invalid) {
  echo '<div class="alert">False credentials</div>';
}

?>
  <h1>Log in</h1>

  <form action="login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>

    <input type="submit" value="Login">
  </form>

</body>
</html>