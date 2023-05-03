<?php 
	include "models/utils.php";
	include "models/lang.php";
?>
<!DOCTYPE html>
<html lang="<?php echo $dict["lang_code"]; ?>">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Food4Foodies</title>
	</head>
	<body>
		<!-- NAVIGATION BAR -->
		<div class="content">
			<header>
				<aside>
					<nav>
						<a href="index.php"> <img src="img/logo.png" alt="logo"> </a>
						<div class="nav-links" id="navLinks">
							<i class="fa fa-times" onclick="hideMenu()"></i>
							<select class="language" onchange="location=this.value;">
								<option> <?php echo $dict["lang_abbr"]; ?> </option>
								<option value="index.php?lang=<?php 
									echo $dict["lang_abbr"] == "БГ" ? "en" : "bg"; 
								?>"> 
									<?php echo $dict["lang_abbr"] == "БГ" ? "EN" : "БГ"; ?>
								</option>
							</select> 
							<button class ="navbar_btn"> <a href=""> <?php echo $dict["start"]; ?> </a>  </button>
							<button class ="navbar_btn"> <a href="#about_us"> <?php echo $dict["about us"]; ?> </a>  </button>
							<button class ="navbar_btn"> <a href= <?php
								echo "'view/";
								if(Utils::current_user())
									 echo "profile.php'>" . Utils::current_user();
								else echo "login.php'>" . $dict["log in"];
							?> </a> </button>
							<button class ="navbar_btn"> <a href= <?php
								echo "'view/";
								if(isset($_SESSION["usr"]))
									 echo "forms/signout.php'>" . $dict["log out"];
								else echo "forms/register.php'>" . $dict["sign up"];
							?> </a> </button>
						</div>
						<i class="fa fa-bars" onclick="showMenu()"></i>
					</nav>
				</aside>
					<div class="text-box">
					<h3>Worl\rsity</h>
					<p>st thing in the world.</p>
					<button class= "button_about_recipe">  <a href="" class="link_color">Visit us to see more</a> </button>
					</div>
			</header>

			<main>
				<h3 class="about_us" id="about_us"> <?php echo $dict["about us"]; ?> </h3>
			</main>

			<footer>
				<div class="icons">
					<i class="fa fa-facebook"></i>
					<i class="fa fa-twitter"></i>
					<i class="fa fa-instagram"></i>
					<i class="fa fa-snapchat"></i>
					<i class="fa fa-linkedin"></i>
				</div>
				<p>&copy;2023 Food4Foodies.com. <?php echo $dict["all rights reserved"]; ?>. </p>
			</footer>
		</div>
		<!-- JS -->
		<script src="js/script.js"></script>
	</body>
</html>