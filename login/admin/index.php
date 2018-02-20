<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include 'cek-login.php'; ?>
<div class="isi">
	<h1>MENU UTAMA</h1>
	<?php
	$nama = ucfirst($_SESSION['username']);
	echo "Selamat Datang, Mas ".$nama." Ganteng";
	?>
	<div class="kotak">
		<a href="logout.php">Logout</a>
	</div>
</div>
<style media="screen">
	body{
		background: url("wallku.jpg") no-repeat center fixed;
    	background-size: 100% 100%;
		margin: 200px 500px;
		font-family: sans-serif;
		text-align: center;
	}
	h1{
		margin: 10px 0px 5px;
	}
	.isi{
		width: 350px;
		background-color: rgba(255,255,255,0.7);
		border-radius: 10px;
		padding: 10px;
	}
	.kotak{
		margin: 40px 0px 30px;
	}
	a{
		width: 320px;
		padding: 10px 15px;
		border-radius: 55px;
		font-size: 24px;
		background-color: #0099ff;
		text-decoration: none;
		color: #fff;
		font-weight: bold;
	}
	a:hover{
		background-color: #ff9900;
		color: #000;
	}
</style>
</body>
</html>