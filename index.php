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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Food4Foodies</title>
</head>

<body>
	<!-- NAVIGATION BAR -->
	<div class="content">
		<header>
			<nav class="navbar navbar-expand-sm navbar-light">
				<div class="container-fluid ">
					<a href="index.php"> <img class="logo-img" src="img/logo.png" alt="logo"> </a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
						<div class="dropdown">

							<select class="language mr-2" onchange="location=this.value;">
								<option> <?php echo $dict["lang_abbr"]; ?> </option>
								<option value="index.php?lang=<?php
																echo $dict["lang_abbr"] == "БГ" ? "en" : "bg";
																?>">
									<?php echo $dict["lang_abbr"] == "БГ" ? "EN" : "БГ"; ?>
								</option>
							</select>
						</div>
						<button class="btn btn-outline mr-2"> <a class=" text-dark text-decoration-none" href=""> <?php echo $dict["start"]; ?> </a> </button>
						<button class="btn btn-outline mr-2"> <a class="text-dark text-decoration-none" href="#about_us"> <?php echo $dict["about us"]; ?> </a> </button>
						<button class="btn btn-outline mr-2"> <a class="text-dark text-decoration-none" href=<?php
																												echo "'view/";
																												if (Utils::current_user())
																													echo "profile.php'>" . Utils::current_user();
																												else echo "forms/login.php'>" . $dict["log in"];
																												?> </a> </button>
						<button class="btn btn-outline mr-2"> <a class="text-dark text-decoration-none" href=<?php
																												echo "'view/";
																												if (isset($_SESSION["usr"]))
																													echo "forms/signout.php'>" . $dict["log out"];
																												else echo "forms/register.php'>" . $dict["sign up"];
																												?> </a> </button>
					</div>
				</div>
			</nav>
		</header>

		<main>
		<img class="img" src="img/home_page1.jpg" width="100%" alt="Responsive image">
		</main>
		<footer>
			<h3 class="about_us" id="about_us"> <?php echo $dict["about us"]; ?> </h3>
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