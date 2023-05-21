<?php include_once "../models/lang.php";
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
		
		<!-- MAIN FORM -->
		<div class="center">
			<h2> <?php echo $dict["Login"]; ?> </h2>
			<form method="post" action="#">
				<!-- PHP CONTROLLER -->
				<?php include_once "../controllers/login_controller.php"; ?>
                <!-- PHP CONTROLLER -->
				<div class="txt_field">
					<input type="text" class="form-control" name="username" placeholder="<?php echo $dict["Username"]; ?>" required>
					<span></span>
				</div>
				<div class="txt_field">
					<input type="password" class="form-control" name="password" placeholder="<?php echo $dict["Password"]; ?>" required>
					<span></span>
				</div>
				<a href="newPassword.php"> <?php echo $dict["Forgot password?"]; ?> </a><br><br>
				<input type="submit" name="submit" value="<?php echo $dict["Log in"]; ?>">
				<div class="signup_link">
					<?php echo $dict["Not a member yet?"]; ?> <a href=<?php echo "'register.php" . $lang_code . "'>" . $dict["Register"];?> </a> <br>
					<a href=<?php echo "'home.php" . $lang_code . "'>" . $dict["start"];?> </a>
				</div>
			</form>
		</div>
	</body>
</html>