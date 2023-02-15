<?php session_start(); ?>
<!DOCTYPE html>
<html lang="bg">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<title> Food For Foodies </title>
	</head>
	<body>
		<header>
			<aside>
				<nav>
					<a href="."><img src="images/logo.png" alt="logo"></a>
					<h1> Food4Foodies </h1>
					<div class="nav-links">
						<i class="fa fa-times" onclick="hideMenu()"></i>
						<select class="language" onchange="location = this.value">
							<!-- <option value="" hidden disabled selected>-</option>-->
							<option value="." selected>БГ</option>
							<option value="other_languages/en/index.php">EN</option>
						</select> |
						<a href=".">НАЧАЛО</a> |
						<a href="">ЗА НАС</a> |
						<a href= <?php
							if(isset($_SESSION["usr"]))
								echo "'profile.php'>" . $_SESSION["usr"];
							else
								echo "'forms/login.php'>ВХОД";
						?> </a> |
						<a href= <?php
							if(isset($_SESSION["usr"]))
								echo "'forms/signout.php'>ИЗХОД";
							else
								echo "'forms/register.php'>РЕГИСТРАЦИЯ";
						?> </a>
					</div>
					<i class="fa fa-bars" onclick="showMenu()"></i>
				</nav>
			</aside>
		</header>

		<main>
			
		</main>

		<script src="script.js"> </script>
	</body>
</html>