<?php include("../connection.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt="" class="image-1">
				<form action="">
					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="uname" class="form-control" placeholder="Username">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" name="phoneno" class="form-control" placeholder="Phone Number">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" name="email" class="form-control" placeholder="Email">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" name="add" class="form-control" placeholder="Address">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" name="pass" class="form-control" placeholder=" Password">
					</div>
					<button type="submit" name="btn">
						<span>Register</span>
					</button>
				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>


	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
	<?php
	if(isset($_POST["btn"])){
	$Name=$_POST["uname"];
	$phone=$_POST["phoneno"];
	$Email=$_POST["email"];
	$Address=$_POST["add"];
	$Password=$_POST["pass"];		
	}
	?>
</html>