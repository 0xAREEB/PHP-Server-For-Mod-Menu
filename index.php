<?php session_start(); ?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>C4F Admin Panel</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300'>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
	<style>
		.registration_form {
			border: none !important;
			padding: 30px 10px !important;
		}

		body {
			background: #b4b4b4;
			font-family: 'Ubuntu';
		}

		#cccccc {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100%;
		}

		#registration-form {
			font-family: "Ubuntu", sans-serif;
			width: 430px;
			min-width: 250px;
			margin: 30px auto;
			position: relative;

		}

		#registration-form .fieldset {
			background-color: rgba(255, 255, 255, 0.5);
			border-radius: 6px;
		}

		#registration-form legend {
			text-align: center;
			background: rgba(0, 0, 0, 0.7);
			width: 100%;
			padding: 15px 0;
			border-radius: 6px 6px 0 0;
			color: white;
			font-size: 1.8em;
		}

		.fieldset form {
			border: 1px solid #2f2f2f;
			margin: 0 auto;
			width: 100%;
			padding: 30px 20px;
			box-sizing: border-box;
			border-radius: 0 0 3px 3px;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.placeholder #registration-form label {
			display: none;
		}

		.no-placeholder #registration-form label {
			margin-left: 5px;
			position: relative;
			display: block;
			color: grey;
			text-shadow: 0 1px white;
			font-weight: bold;
		}

		/* all */
		::-webkit-input-placeholder {
			text-shadow: 1px 1px 1px white;
			font-weight: 700;
		}

		::-moz-placeholder {
			text-shadow: 0 1px 1px white;
			font-weight: 700;
		}

		/* firefox 19+ */
		:-ms-input-placeholder {
			text-shadow: 0 1px 1px white;
			font-weight: 700;
		}

		/* ie */
		#registration-form input[type="text"] {
			padding: 15px 20px;
			border-radius: 1px;
			margin: 5px auto;
			background-color: #f7f7f7;
			border: none;

			-webkit-box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.2);
			box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.2), 0 1px rgba(255, 255, 255, 0.8);
			width: 400px;

			-webkit-transition: background-color 0.5s ease;
			-moz-transition: background-color 0.5s ease;
			-o-transition: background-color 0.5s ease;
			-ms-transition: background-color 0.5s ease;
			transition: background-color 0.5s ease;
		}

		.no-placeholder #registration-form input[type="text"] {
			padding: 10px 20px;
		}

		#registration-form input[type="text"]:active,
		.placeholder #registration-form input[type="text"]:focus {
			outline: none !important;
			border: 1px solid red !important;
			background-color: #c7c7c7 !important;
		}

		#registration-form input[type="submit"] {
			font-family: "Ubuntu";
			outline: none;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			-ms-box-sizing: border-box;
			box-sizing: border-box;
			width: 400px;
			background-color: #5c8cf7;
			padding: 10px;
			color: white;
			border: 1px solid #5c8cf7;
			border-radius: 3px;
			font-size: 1.5em;
			font-weight: bold;
			margin-top: 5px;
			cursor: pointer;
			position: relative;
			top: 0;
			transition: all 0.5s;
			margin-top: 20px;
		}

		#registration-form input[type="submit"]:hover {
			background-color: #2960f9;
		}

		#registration-form input[type="submit"]:active {
			background-color: #2960f9;
		}

		#registration-form input[type="date"] {
			font-family: "Ubuntu";
			padding: 5px 8px;
			border: 2px solid #d4d4d4;
			border-radius: 6px;
			margin: 10px auto;
			cursor: pointer;
		}

		.parsley-error-list {
			background-color: #c34343;
			padding: 5px 11px;
			margin: 0;
			list-style: none;
			border-radius: 0 0 3px 3px;
			margin-top: -5px;
			margin-bottom: 5px;
			color: white;
			border: 1px solid #870d0d;
			border-top: none;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			position: relative;
			top: -1px;
			text-shadow: 0px 1px 1px #460909;
			font-weight: 700;
			font-size: 12px;
		}

		.parsley-error {
			border-color: #870d0d !important;
			border-bottom: none;
		}

		#registration-form select {
			width: 100%;
			padding: 5px;
		}

		::-moz-focus-inner {
			border: 0;
		}
	</style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>

<body>
	<div id="cccccc">
		<div id="registration-form">
			<div class='fieldset'>
				<legend>Admin Login</legend>
				<form action="" method="post" data-validate="parsley" class="registration_form">
					<div>
						<!--	<label for='firstname'>Username</label> -->
						<input type="text" placeholder="Username" name='adminuser' id='firstname' data-required="true" data-error-message="UserName is required" required>
					</div>
					<div>
						<!--	<label for="lastname">Password</label> -->
						<input type="text" placeholder="Password" name='aminpass' data-required="true" data-type="email" data-error-message="Password is required" required>
					</div>
					<input type="submit" value="Login" name="adminlogin">
				</form>
			</div>
		</div>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/parsley.js/1.2.2/parsley.min.js'></script>

	<?php   // this code is use to insert the form details and register and expiration date
	include 'DB.php';
	include 'Global.php';
	if (isset($_POST['adminlogin'])) {
		
		// FORM INPUTS
		$Username = $_POST['adminuser'];
		$Password  = $_POST['aminpass'];

		//! TO PREVENT SQL INJECTION
		$Username = str_replace("'", "", $Username);
		$Username = str_replace("\"", "", $Username);

		$fetch = "SELECT * FROM `admins` WHERE username = '$Username';";
		$fire = mysqli_query($conn, $fetch);
		$count = mysqli_num_rows($fire);

		// $count < 1 MEANS NO USER EXISTS WITH GIVEN USERNAME
		// $count > 1 MEANS SCRIPT HAS RETURNED MULTIPLE RECORDS WHICH IS ONLY POSSIBLE THROUGHT SQL INJECTION
		if ($count != 1) {
			// SHOW FAILED MESSAGE
			echo "<script>alert('Login Failed')</script>";
			
			// RELOAD PAGE AND PREVENT FURTHER EXECUTION OF SCRIPT
			$URI = $_SERVER['REQUEST_URI'];
			echo "<script>window.location.href='$URI'</script>";

			//END SCRIPT
			die();
		}

		// GET DATA FROM THE QUERY
		$row = mysqli_fetch_array($fire, MYSQLI_ASSOC);

		// USERNAME AND PASSWORD ACCORDING TO DATABASE
		$username = $row['username'];
		$password = $row['password'];

		// DOUBLE CHECK TO PREVENT ANY SQL INJECTION
		if ($Username == $username && $Password == $password) {
			// LOGIN SUCESSFULL 

			// CHECK IF A SESSION ALREADY EXISTS
			$_SESSION['admin'] = true;
			$_SESSION['adminUser'] = $username;
			$_SESSION['adminName'] = $row['name'];
			$_SESSION['superuser'] = $row['superuser'];   // SUPERUSER CAN VIEW AND DELETE USERS OF ANY VENDOR (ADMIN)
			echo "<script>alert('Login Successfull')</script>";
			echo "<script>window.location.href='register.php'</script>";
		} else {
			echo "<script>alert('Login Failed')</script>";
		}
	}
	?>
</body>

</html>