<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log in</title>
    </head>
    <body>
        <div class="sign_in">
            <?php
                include "../../../utils.php";
                $relog = false;
                if ($_POST) {
                    $dbinfo = json_decode(file_get_contents("../../../dbinfo.json"), true)["basic"];
                    $dsn = "mysql:host=" . $dbinfo["host"] . ";dbname=" . $dbinfo["dbname"];
                    try {
                        $pdo = new PDO($dsn, $dbinfo["username"], $dbinfo["password"]);
                        // if the username already exists don't make new one
                        $res = Utils::get_user($pdo, $_POST["username"]);
                        if ($res) {
                            if (password_verify($_POST["password"], $res[0]["password"])) {
                                // echo "<span class='password_right'>Успешно „влизане“ като " . $_POST["username"] . "!</span> <br>";
                                setcookie("username", $_POST["username"], time() + 10, "/");
                                header("Location: ../temp_prof.html");
                            }  
                            else echo "<span class='password_wrong'>Wrong password!</span> <br>";
                        } else {
                            $relog = true;
                            echo "<span class='no_such_user'>Username does not exist!</span> <br>";
                            echo "<a href='sign_up.php'>To registration?</a><br>";
                        }
                    } catch (Exception $e) { Utils::error_message(); }
                }
            ?>
            <h3>Log in</h3>
            <form action="sign_in.php" method="post">
                <span class="allowed_symbols">* allowed characters are A-Z, a-z, 0-9 and _</span> <br>
                <input type="text" name="username" <?php
                    if ($relog) echo "value='" . $_POST["username"] . "'";
                    else echo "placeholder='Username'";
                ?> pattern="^[A-Za-z0-9_]{4,15}$" required> <br>
                <input type="password" name="password" placeholder="Password" pattern="^[A-Za-z0-9_]{4,8}$" required> <br>
                <button type="submit">Log in <?php
                    if ($_POST) echo "again";
                ?></button>
            </form>
        </div>
    </body>
</html>
