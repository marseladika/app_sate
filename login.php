<?php
session_start();
if(isset($_SESSION['username'])){
	header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>

<h2>Login </h2>

<form method="POST" action="proses_login.php">
	


	<label>Username</label><br><br>
	<input type="text" name="username"><br><br>

	<label>Password</label><br><br>
	<input type="password" name="password"><br><br>

	<button type="submit" name="login">Masuk</button>
</form>

</body>
</html>