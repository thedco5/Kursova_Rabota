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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- BOOTSTRAP -->
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
						<button class="btn btn-outline mr-2"> <a class="text-dark text-decoration-none" href=""> <?php echo $dict["about us"]; ?> </a> </button>
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
			<div class="card">
				<img class="img card-img-top" src="img/home_page.jpg" width="100%" alt="Responsive image">
				<div class="card-img-overlay card-inverse text-center" style="margin-top: 20%;">
					<h1 class="text-stroke text-white  text-capitalize">healthy food recipe</h1>
					<p class="text-stroke text-white  font-italic">With supporting text below as a natural lead-in to additional content.</p>
					<button class="btn btn-success"><a class="text-dark text-decoration-none" href="#">View more</a></button>
				</div>
			</div>

			<!-- CATEGORIES -->
			<main>
				<section class="categories">
					<p>Категории</p>

					<a href="" class="meals text-reset">
						<img src="img/osnovni.png" alt="Основни ястия">
						<div class="iconHold">
							<img src="img/osnovni_icon.png" alt="Основни ястия">
							Основни ястия
						</div>
					</a>

					<a href="" class="meals text-reset">
						<img src="img/supi.png" alt="Супи">
						<div class="iconHold">
							<img src="img/supi_icon.png" alt="Супи">
							Супи
						</div>
					</a>

					<a href="" class="meals text-reset">
						<img src="img/salad.png" alt="Салати">
						<div class="iconHold">
							<img src="img/salad_icon.png" alt="Салати">
							Салати
						</div>
					</a>

					<a href="" class="meals text-reset">
						<img src="img/predqstiq.png" alt="Предястия">
						<div class="iconHold">
							<img src="img/predqstiq_icon.png" alt="Предястия">
							Предястия
						</div>
					</a>

					<a href="" class="meals text-reset">
						<img src="img/desert.png" alt="Десерти">
						<div class="iconHold">
							<img src="img/desert_icon.png" alt="Десерти">
							Десерти
						</div>
					</a>
				</section>
			</main>

			<!-- Footer -->
			<footer>
				<h4 class="about_us text-center pt-4 pb-4"> <?php echo $dict["about us"]; ?> </h4>
				<div class="container text-center">
					<!-- Grid row -->
					<div class="row">

						<!-- Grid column -->

						<!-- Grid column -->
						<div class="col-4">
							<!-- Links -->
							<h6 class="text-uppercase">
								<strong>GUIDE</strong>
							</h6>
							<p>
								<a href="#!" class="text-reset">Home</a>
							</p>
							<p>
								<a href="#!" class="text-reset">Categories</a>
							</p>
							<p>
								<a href="#!" class="text-reset">Recipe</a>
							</p>
							<p>
								<a href="#!" class="text-reset">About us</a>
							</p>
						</div>
						<!-- Grid column -->

						<!-- Grid column -->
						<div class="col-4">
							<!-- Links -->
							<h6 class="text-uppercase">
								<strong>Account</strong>
							</h6>
							<p>
								<a href="#!" class="text-reset">Log in</a>
							</p>
							<p>
								<a href="#!" class="text-reset">Sign up</a>
							</p>
						</div>
						<!-- Grid column -->

						<!-- Grid column -->
						<div class="col-4">
							<!-- Links -->
							<h6 class="text-uppercase"><strong>Contact</strong></h6>
							<p>
								<i class="fa fa-envelope"></i>
								info@example.com
							</p>
						</div>
						<!-- Grid column -->
					</div>
					<!-- Grid row -->
				</div>
				</section>
				<!-- Section: Links  -->

				<!-- Copyright -->
				<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
					<p>&copy;2023 Food4Foodies.com. <?php echo $dict["all rights reserved"]; ?>. </p>
				</div>
				<!-- Copyright -->
			</footer>
			<!-- Footer -->
	</div>
</body>

</html>