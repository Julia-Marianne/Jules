<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
	<?php
		//require('../login/register.php');
		//$result = select_all_records_ctr();
		require('../controllers/customer_controller.php');
	?>

    <h1>LogIn</h1>

	<form action="login_process.php" method= "POST">
		<input type="text" name="email" placeholder="enter your email" id="fullname" required>
        <input type="password" name="password" placeholder="enter your password" id="password" required>
		<input type="submit" name="enter" value="Enter">
	</form>

	<a href="../view/home.php">home</a>

	<?php if(isset($_SESSION['user_id'])) {
        if(($_SESSION['user_role']) == 2){?>
        <li ><a  href="../admin/products.php" >Dashboard</a></li>
        <li><a href="../login/logout.php">Logout</a></li>
        <?php } else{?>
        <li><a href="../login/logout.php">Logout</a></li>
                                
        <?php }
                            
        }else{?>
       <li><a href="../login/login.php">Login</a></li>
         <li><a href="../login/register.php">register</a></li>
                           
        <?php }?>

</body>
</html>