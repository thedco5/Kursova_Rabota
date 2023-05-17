<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/register.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="center">
            <h2>Sign up</h2>
            <form method="post">
                <div class="txt_field">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <span></span>
                </div>
                <div class="txt_field">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <span></span>
                </div>
                <div class="txt_field">
                    <input type="password" class="form-control" name="Confirm_password" placeholder="Confirm Password" required>
                    <span></span>
                </div>
                <div class="txt_field">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <span></span>
                </div>
                <input type="submit" name="submit" value="Log in">
                <div class="signup_link">
                    You already a member? <a href="login.php">Log in</a>
                </div>
            </form>
        </div>
    </body>
</html>