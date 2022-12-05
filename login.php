<!DOCTYPE html>
<html>
<head>
	<title>StudentSpace Login</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="registration.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="Username" placeholder="User name" required="">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="password" name="Password" placeholder="Password" required="">
					<input type="number" name="PhoneNumber" placeholder="PhoneNumber" required="">
					<button>Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="validation.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="Username" placeholder="Username">
					<input type="password" name="Password" placeholder="Password">
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</html>