<!DOCTYPE html>
<html lang="bg">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Регистрация</title>
    </head>
    <body>
        <div class="registration">
            <?php
                include "../utils.php";
                $reregister = false;
                if ($_POST) {
                    $dbinfo = json_decode(file_get_contents("../info.json"), true)["db"];
                    $dsn = "mysql:host=" . $dbinfo["host"] . ";dbname=" . $dbinfo["dbname"];
                    try {
                        $pdo = new PDO($dsn, $dbinfo["username"], $dbinfo["password"]);
                        // if the username already exists don't make new one
                        $res = Utils::get_user($pdo, $_POST["username"]);
                        if (count($res) > 0) {
                            if (password_verify($_POST["password"], $res[0]["password"])) {
                                Utils::set_user($_POST["username"], "../index.php");
                            } else {
                                $reregister = true;
                                echo "<span class='user-exists'>Потребителското име вече съществува!</span> <br>";
                            }
                        } else {
                            // inserting the new profile
                            Utils::add_user($pdo, $_POST["username"], $_POST["password"]);
                            Utils::set_user($_POST["username"], "../index.php");
                        }
                    } catch (Exception $e) { Utils::error_message(1); }
                }
            ?>
            <h3>Регистрация</h3>
            <form action="register.php" method="post">
                <span class="allowed-symbols">* допустими символи са A-Z, a-z, 0-9 и _</span> <br>
                <input type="text" name="username" <?php
                    if ($reregister) echo "value='" . $_POST["username"] . "'";
                    else echo "placeholder='Потребителско име'";
                ?> pattern="^[A-Za-z0-9_]{4,15}$" required> <br>
                <input type="password" name="password" placeholder="Парола" pattern="^[A-Za-z0-9_]{4,8}$" required> <br>
                <button type="submit">Регистрирайте се <?php
                    if ($_POST) echo "отново";
                ?></button>
            </form>
        </div>
    </body>
</html>
