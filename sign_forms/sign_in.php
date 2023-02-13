<!DOCTYPE html>
<html lang="bg">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Влизане</title>
    </head>
    <body>
        <div class="sign_in">
            <?php
                include "../utils.php";
                $relog = false;
                if ($_POST) {
                    $dbinfo = json_decode(file_get_contents("../dbinfo.json"), true)["basic"];
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
                            else echo "<span class='password_wrong'>Грешна парола!</span> <br>";
                        } else {
                            $relog = true;
                            echo "<span class='no_such_user'>Потребителят не съществува!</span> <br>";
                            echo "<a href='sign_up.php'>Към регистриране?</a><br>";
                        }
                    } catch (Exception $e) {
                        echo "<span class='error'>Има грешка!</span>";
                    }
                }
            ?>
            <h3>Вход</h3>
            <form action="sign_in.php" method="post">
                <span class="allowed_symbols">* допустими символи са A-Z, a-z, 0-9 и _</span> <br>
                <input type="text" name="username" <?php
                    if ($relog) echo "value='" . $_POST["username"] . "'";
                    else echo "placeholder='Потребителско име'";
                ?> pattern="^[A-Za-z0-9_]{4,15}$" required> <br>
                <input type="password" name="password" placeholder="Парола" pattern="^[A-Za-z0-9_]{4,8}$" required> <br>
                <button type="submit">Влезте <?php
                    if ($_POST) echo "отново";
                ?></button>
            </form>
        </div>
    </body>
</html>
