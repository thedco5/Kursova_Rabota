<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
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
								<a href="index.php" class="text-reset">Home</a>
							</p>
							<p>
								<a href="#categories_id" class="text-reset">Categories</a>
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
								<a href="login.php" class="text-reset">Log in</a>
							</p>
							<p>
								<a href="register.php" class="text-reset">Sign up</a>
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
				<div class="text-center p-1	" style="background-color: rgba(0, 0, 0, 0.05);">
					<p class="pt-2">&copy;2023 Food4Foodies.com. <?php echo $dict["all rights reserved"]; ?>. </p>
				</div>
				<!-- Copyright -->
			</footer>
			<!-- Footer -->

</body>
</html>