<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign up</title>
    </head>
    <body>
        <div class="sign_up">
            <?php
                include "../../../utils.php";
                $reregister = false;
                if ($_POST) {
                    $dbinfo = json_decode(file_get_contents("../../../dbinfo.json"), true)["basic"];
                    $dsn = "mysql:host=" . $dbinfo["host"] . ";dbname=" . $dbinfo["dbname"];
                    try {
                        $pdo = new PDO($dsn, $dbinfo["username"], $dbinfo["password"]);
                        // if the username already exists don't make new one
                        if (Utils::user_exists($pdo, $_POST["username"])) {
                            $reregister = true;
                            echo "<span class='user_exists'>Username already exists!</span> <br>";
                        } else {
                            // inserting the new profile
                            Utils::add_user($pdo, $_POST["username"], $_POST["password"]);
                            echo "<span class='user_added'>Successfully added new user!</span> <br>";
                        }
                        echo "<a href='sign_in.php'>To log in?</a><br>";
                    } catch (Exception $e) { Utils::error_message(); }
                }
            ?>
            <h3>Registration</h3>
            <form action="sign_up.php" method="post">
                <span class="allowed_symbols">* allowed characters are A-Z, a-z, 0-9 and _</span> <br>
                <input type="text" name="username" <?php
                    if ($reregister) echo "value='" . $_POST["username"] . "'";
                    else echo "placeholder='Username'";
                ?> pattern="^[A-Za-z0-9_]{4,15}$" required> <br>
                <input type="password" name="password" placeholder="Password" pattern="^[A-Za-z0-9_]{4,8}$" required> <br>
                <button type="submit">Sign up <?php
                    if ($_POST) echo "again";
                ?></button>
            </form>
        </div>
    </body>
</html>
