<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login Form</title>
		<link rel="stylesheet" href="../css/login.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Вход</button>
				<button type="button" class="toggle-btn" onclick="register()">Регистрация</button>
			</div>

			<form id="login" action="." method="get" class="input-group">
				<input type="text" class="input-field" placeholder="Потребителско име" required>
				<input type="password" class="input-field" placeholder=" &#xf084;  Парола" style="font-family:sans-serif, FontAwesome;" required>
				<input type="checkbox" class="check-box"><span>Запомни парола</span>
				<button type="submit" class="submit-btn">Вход</button>
			</form>
		
			<form id="register" action="." method="get" class="input-group">
				<input type="text" class="input-field" placeholder="Потребителско име" required>
				<input type="email" class="input-field" placeholder="&#xf003;  Имейл" style="font-family:sans-serif, FontAwesome;" required>
				<input type="password" class="input-field" placeholder=" &#xf084;  Парола" style="font-family:sans-serif, FontAwesome;" required>
				<input type="checkbox" class="check-box" ><span>I agree to terms & conditions</span>
				<button type="submit" class="submit-btn">Регистрация</button>
			</form>

		</div>  

		<script>
			var x = document.getElementById('login');
			var y = document.getElementById('register');
			var z = document.getElementById('btn');

			function register(){
				x.style.left = "-450px";
				y.style.left = "50px";
				z.style.left = "110px";
			} 

			function login(){
				x.style.left = "50px";
				y.style.left = "450px";
				z.style.left = "0";
			} 
		</script>
    </body>
</html>