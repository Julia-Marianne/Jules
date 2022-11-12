<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
	<?php
		require('../controllers/customer_controller.php');
		
	?>

    <h1>Register</h1>

	<form action="register_process.php" method="POST">
		<input type="text" name="fullname" placeholder="enter your name" id="fullname" required>
		<input type="text" name="email" placeholder="enter your email address" id="email" required>
        <input type="password" name="password" placeholder="enter your password" id="password" required>
        <input type="text" name="country" placeholder="enter your country" id="country" required>
        <input type="text" name="city" placeholder="enter your city" id="city" required>
        <input type="text" name="contact" placeholder="enter your contact" id="contact" required>
		<input type="submit" name="enter">
	</form>

	<a href="../view/home.php">home</a>
	
</body>
</html>