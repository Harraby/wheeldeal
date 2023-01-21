<?php

session_start();

$success=0;
$user=0;

if($_SERVER['REQUEST_METHOD']=='POST') {
  include 'connect.php';
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $cin=$_POST['cin'];


  $sql="SELECT * FROM account WHERE username='$username'";

  $result=mysqli_query($con,$sql);

  if($result) {
    $num=mysqli_num_rows($result);

    if($num > 0) {
      $user=1;
    }
    else {
      $sql="INSERT INTO account (username,password,email,cin) VALUES ('$username','$password','$email','$cin')";

      $result=mysqli_query($con,$sql);

      if(!$result) {
        die(mysqli_error($con));
      }
      else {
        $success=1;
        header('location:login.php');
      }
    }
  }
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Login/Signup Page</title>
    <link rel="stylesheet" type="text/css" href="styles/signup.css">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
<header>
      <nav>
      <a href="car-list.php">Cars</a>
      <?php if(!isset($_SESSION['username'])) {echo '<a href="login.php">Login</a>';}
        else {
          echo '<a href="logout.php">Logout</a>';
        } ?>   
</nav>
</header>
<?php 

if($user) {
  echo '<div class="alert">Username already in use</div>';
}
if($success) {
  echo '<div class="alert">User added</div>';
}

?>
<form action="signup.php" method="post">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" autocomplete="off" required>
  
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" autocomplete="off" required>
  
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" autocomplete="off" required>
  
  <label for="cin">CIN:</label>
  <input type="text" id="cin" name="cin" pattern="[0-9]{8}" required title="CIN number must be 8 digits">
  
  <input type="submit" value="Sign Up">
</form>

</body>
</html>