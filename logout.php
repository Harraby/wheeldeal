<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="2;url=login.php">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logged out</title>
</head>
<body>
Logging out...
</body>
</html>
<?php 

session_start();
session_destroy();

?>