<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="polo.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="loginBox">
		<div class="glass">
			<img src="kuliah.png" class="user">
			<h3>Masuk Disini</h3>
			<form action="login.php" method="post">
				<div class="inputBox">
					<input id="user" type="text" name="username" placeholder="username">
					<span><i class="fa fa-user" aria-hidden="true"></i></span>
				</div>
				<div class="inputBox">
					<input type="password" name="password" placeholder="password">
					<span><i class="fa fa-lock" aria-hidden="true"></i></span>
				</div>
					<input type="submit" name="Login" value="Login">
			</form>
			<a href="#">Lupa Password?</a>
		</div>
	</div>
</body>
</html>