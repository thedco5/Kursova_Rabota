<!-- TRANSLATE -->
<?php
	include_once "../models/utils.php";
	include_once "../models/lang.php";
	$lang_code = "";
	if (isset($_GET["lang"]))
		$lang_code = "?lang=" . $_GET["lang"];
?>
<!DOCTYPE html>
<html lang="<?php echo $dict["lang_code"]; ?>">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
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
			<!-- HEADER -->
			<?php include_once "header.php"; ?>
			<!-- HEADER -->
			<main>
			<section>
			<div class="card">
				<img class="img card-img-top" src="../img/home_page.jpg" width="100%" alt="Responsive image">
				<div class="card-img-overlay card-inverse text-center" style="margin-top: 20%;">
					<h1 class="text-stroke text-white  text-capitalize"><?php echo $dict["healthy food recipe"];?></h1>
					<h5 class="text-stroke text-white  font-italic"><?php echo $dict["What should I cook today?"];?></h5>
					<button class="btn btn-success"><a class="text-dark text-decoration-none" href="#categories_id"><?php echo $dict["View more"];?></a></button>
				</div>
			</div>
			</section>
			<!-- CATEGORIES -->
			
				<section class="categories">
					<p id="categories_id"><?php echo $dict["categories"];?></p>

					<a href="recipes.php?cat=main_course" class="meals text-reset">
						<img src="../img/osnovni.png" alt="Основни ястия">
						<div class="iconHold">
							<img src="../img/osnovni_icon.png" alt="Основни ястия">
							<?php echo $dict["main dishes"];?>
						</div>
					</a>

					<a href="recipes.php?cat=soup" class="meals text-reset">
						<img src="../img/supi.png" alt="Супи">
						<div class="iconHold">
							<img src="../img/supi_icon.png" alt="Супи">
							<?php echo $dict["soups"];?>
						</div>
					</a>

					<a href="recipes.php?cat=salad" class="meals text-reset">
						<img src="../img/salad.png" alt="Салати">
						<div class="iconHold">
							<img src="../img/salad_icon.png" alt="Салати">
							<?php echo $dict["salads"];?>
						</div>
					</a>

					<a href="recipes.php?cat=starter" class="meals text-reset">
						<img src="../img/predqstiq.png" alt="Предястия">
						<div class="iconHold">
							<img src="../img/predqstiq_icon.png" alt="Предястия">
							<?php echo $dict["starters"];?>
						</div>
					</a>

					<a href="recipes.php?cat=dessert" class="meals text-reset">
						<img src="../img/desert.png" alt="Десерти">
						<div class="iconHold">
							<img src="../img/desert_icon.png" alt="Десерти">
							<?php echo $dict["desserts"];?>
						</div>
					</a>
				</section>
			</main>

			<!-- Footer -->
			<?php include "footer.php"; ?>
			<!-- Footer -->
		</div>
	</body>
</html>
