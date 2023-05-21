<?php 
    include_once "../models/lang.php";

?>
<footer>
	<h4 class="about_us text-center pt-4"><strong><?php echo $dict["about us"]; ?></strong></h4>
	<div class="border border-dark mb-5"></div>
	<div class="container text-center">
		<!-- Grid row -->
		<div class="row">

			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-4">
				<!-- Links -->
				<h6 class="text-uppercase">
					<strong><?php echo $dict["menu"];?></strong>
				</h6>
				<p>
					<a href="home.php" class="text-reset"><?php echo $dict["start"];?></a>
				</p>
				<p>
					<a href="recipies.php" class="text-reset"><?php echo $dict["recepies"];?></a>
				</p>
				<p>
					<a href="#about_us" class="text-reset"><?php echo $dict["about us"];?></a>
				</p>
			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-4">
				<!-- Links -->
				<h6 class="text-uppercase">
					<strong><?php echo $dict["account"];?></strong>
				</h6>
				<p>
					<a href="login.php" class="text-reset"><?php echo $dict["log in"];?></a>
				</p>
				<p>
					<a href="register.php" class="text-reset"><?php echo $dict["sign up"];?></a>
				</p>
			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-4">
				<!-- Links -->
				<h6 class="text-uppercase"><strong><?php echo $dict["contact"];?></strong></h6>
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
