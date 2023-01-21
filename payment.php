<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Payment</title>
  <link rel="stylesheet" type="text/css" href="styles/payment.css">
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
<form action="payment-success.html" method="post">
  <label for="card-number">Card Number:</label>
  <input required type="text" id="card-number" name="card-number">
  <br>
  <label for="expiration-date">Expiration Date:</label>
  <input required type="text" id="expiration-date" name="expiration-date">
  <br>
  <label for="cvv">CVV:</label>
  <input required type="text" id="cvv" name="cvv">
  <br>
  <input type="submit" value="Submit Payment">
  <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){

      $dailycost=100;

      $dropoff=$_POST['dropoff-date'];
      $dropoff*=$dailycost;
      echo "<h2>$dropoff $</h2>";
    }
  ?>
    
</form>
</body>
</html>