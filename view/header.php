<?php include_once "../models/lang.php"; ?>
<header>
	<nav class="navbar navbar-expand-sm navbar-light">
		<div class="container-fluid ">
			<a href="."> <img class="logo-img" src="../img/logo.png" alt="logo"> </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<div class="dropdown">
					<select class="language mr-2" onchange="location=this.value;">
						<option> <?php echo $dict["lang_abbr"]; ?> </option>
						<option value="?lang=<?php
														echo $dict["lang_abbr"] == "БГ" ? "en" : "bg";
														?>">
							<?php echo $dict["lang_abbr"] == "БГ" ? "EN" : "БГ"; ?>
						</option>
					</select>
				</div>
				<button class="btn btn-outline mr-2"> <a class=" text-body text-decoration-none" href="."> <?php echo $dict["start"]; ?> </a> </button>
				<button class="btn btn-outline mr-2"> <a class=" text-body text-decoration-none" href="recipes.php"> <?php echo $dict["recepies"]; ?> </a> </button>
				<button class="btn btn-outline mr-2"> <a class="text-body text-decoration-none" href="about_us.php"> <?php echo $dict["about us"]; ?> </a> </button>
				<button class="btn btn-outline mr-2"> <a class="text-body text-decoration-none" href=
					<?php
						if (Utils::current_user() != null)
							 echo "'../controllers/signout.php" . $lang_code . "'>" . $dict["log out"];
						else echo "'register.php" . $lang_code . "'>" . $dict["sign up"];
					?> </a> </button>
				<button class="btn btn-outline mr-2"> <a class="text-body text-decoration-none" href=
					<?php
						if (Utils::current_user())
							echo "'profile.php" . $lang_code . "'>" . Utils::current_user();
						else echo "'login.php" . $lang_code . "'>" . $dict["log in"];
					?> </a> </button>
				<?php if (isset($_SESSION["id"]) && $_SESSION["role"] == "admin") { ?>
					<button class="btn btn-outline mr-2">
						<a class="text-body text-decoration-none" href="admin.php"> <?php echo $dict["ADMINISTRATION"]; ?> </a>
					</button>
				<?php } ?>
			</div>
		</div>
	</nav>
</header>