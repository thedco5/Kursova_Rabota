<header>
	<nav class="navbar navbar-expand-sm navbar-light">
		<div class="container-fluid ">
			<a href="index.php"> <img class="logo-img" src="../img/logo.png" alt="logo"> </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</butto
			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<div class="dropdown
					<select class="language mr-2" onchange="location=this.value;">
						<option> <?php echo $dict["lang_abbr"]; ?> </option>
						<option value="?lang=<?php
														echo $dict["lang_abbr"] == "БГ" ? "en" : "bg";
														?>">
							<?php echo $dict["lang_abbr"] == "БГ" ? "EN" : "БГ"; ?>
						</option>
					</select>
				</div>
				<button class="btn btn-outline mr-2"> <a class=" text-dark text-decoration-none" href="index.php"> <?php echo $dict["start"]; ?> </a> </button>
				<button class="btn btn-outline mr-2"> <a class=" text-dark text-decoration-none" href="#categories_id"> <?php echo $dict["categories"]; ?> </a> </button>
				<button class="btn btn-outline mr-2"> <a class=" text-dark text-decoration-none" href="recipes.php"> <?php echo $dict["recepies"]; ?> </a> </button>
				<button class="btn btn-outline mr-2"> <a class="text-dark text-decoration-none" href="#about_us"> <?php echo $dict["about us"]; ?> </a> </button>
				<button class="btn btn-outline mr-2"> <a class="text-dark text-decoration-none" href=
					<?php
						if (Utils::current_user())
							echo "'profile.php" . $lang_code . "'>" . Utils::current_user();
						else echo "'login.php" . $lang_code . "'>" . $dict["log in"];
					?> </a> </button>
				<button class="btn btn-outline mr-2"> <a class="text-dark text-decoration-none" href=
					<?php
						if (Utils::current_user() != null)
							 echo "'forms/signout.php" . $lang_code . "'>" . $dict["log out"];
						else echo "'register.php" . $lang_code . "'>" . $dict["sign up"];
					?> </a> </button>
			</div>
		</div>
	</nav>
</header>