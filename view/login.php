<?php
	include_once "../models/lang.php";
	$lang_code = "";
	if (isset($_GET["lang"]))
		$lang_code = "?lang=" . $_GET["lang"];
?>
<!DOCTYPE html>
<html lang="<?php echo $dict["lang_code"]; ?>">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $dict["Log in"]; ?></title>
		<link rel="stylesheet" href="../css/login.css">
		<link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
	<body>
		<!-- LANGUAGE CHOICE -->
		<select class="language mr-2"style="background: none; border: none;" onchange="location=this.value;">
			<option> <?php echo $dict["lang_abbr"]; ?> </option>
			<option value="?lang=<?php
									echo $dict["lang_abbr"] == "БГ" ? "en" : "bg";
								?>">
				<?php echo $dict["lang_abbr"] == "БГ" ? "EN" : "БГ"; ?>
			</option>
		</select>
		<!-- MAIN FORM -->
		<div class="center">
			<h2> <?php echo $dict["Login"]; ?> </h2>
			<form action="#" method="post">
				<!-- PHP CONTROLLER -->
                <?php include_once "../controllers/login_controller.php"; ?>
                <!-- PHP CONTROLLER -->
				<br>
				<button id="swapper" class="btn btn-success" onclick="swap()"><?php echo $dict["email"]; ?>?</button>
				<div class="txt_field" id="username-div">
					<input type="text" class="form-control" name="username" placeholder="<?php echo $dict["Username"]; ?>">
					<span></span>
				</div>
				<div class="txt_field" id="email-div" style="display: none">
					<input type="email" class="form-control" name="email" placeholder="<?php echo $dict["email"]; ?>">
					<span></span>
				</div>
				<div class="txt_field">
					<input type="password" class="form-control" name="password" placeholder="<?php echo $dict["Password"]; ?>" required>
					<span></span>
				</div>
				<!--<a href="forgotten_password.php"> <?php echo $dict["Forgot password?"]; ?> </a><br><br>-->
				<input type="submit" name="submit" value="<?php echo $dict["Log in"]; ?>">
				<div class="signup_link">
					<?php echo $dict["Not a member yet?"]; ?> 
					<a href="register.php"> <?php echo $dict["Register"] . "?"; ?> </a> <br>
                    <a href="home.php"><?php echo $dict["Back to Start"]; ?></a>
				</div>
			</form>
		</div>
		<script>
			let button = document.getElementById("swapper")
            var withEmail = false
            let username_div = document.getElementById("username-div")
			let email_div = document.getElementById("email-div")
            function swap() {
                withEmail = !withEmail
				// VAZHNO PREVOD!!!
                button.innerHTML = withEmail ? "<?php echo $dict["Username"]; ?>?" : "<?php echo $dict["email"]; ?>?"
                username_div.style.display = withEmail ? "none" : "block"
				email_div.style.display = withEmail ? "block" : "none"
            }
		</script>
	</body>
</html>