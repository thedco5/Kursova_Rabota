<?php
include "models/utils.php";
include "models/lang.php";
include "header.php";
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
		<main>
			<div class="card">
				<img class="img card-img-top" src="img/home_page.jpg" width="100%" alt="Responsive image">
				<div class="card-img-overlay card-inverse text-center" style="margin-top: 20%;">
					<h1 class="text-stroke text-white  text-capitalize">healthy food recipe</h1>
					<p class="text-stroke text-white  font-italic">With supporting text below as a natural lead-in to additional content.</p>
					<button class="btn btn-success"><a class="text-dark text-decoration-none" href="#recepies_id">View more</a></button>
				</div>
			</div>

			<!-- CATEGORIES -->
			
				<section class="categories">
					<p id="categories_id">Категории</p>

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
			<?php
include "footer.php";
?>
	</div>
</body>

</html>