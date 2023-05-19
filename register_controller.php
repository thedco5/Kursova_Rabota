<!-- TRANSLATE -->
<?php
    include_once "../dbconn.php";
    include_once "../models/utils.php";
    if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"])) {
        $stmt = $pdo->prepare("SELECT id, username, role FROM profiles WHERE username LIKE ? OR email LIKE ?;");
        $stmt->execute([$_POST["username"], $_POST["email"]]);
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!(strlen($_POST["username"]) > 0 && strlen($_POST["password"]) > 0 && strlen($_POST["confirm"]) > 0))
            echo "<div class='text-danger'> " . $dict["fill all fields"] . " </div>";
        else if (count($res) != 0)
            echo "<div class='text-danger'> " . $dict["already exists"] . " </div>";
        else if(!(preg_match("/[a-zA-Z0-9_]+/", $_POST["username"])))
            echo "<div class='text-danger'> " . $dict["invalid username"] . " </div>";
        else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
            echo "<div class='text-danger'> " . $dict["invalid email"] . " </div>";
        else if(!(preg_match("/.{8,}/", $_POST["password"])))
            echo "<div class='text-danger'> " . $dict["invalid password"] . " </div>";
        else if ($_POST["password"] != $_POST["confirm"])
            echo "<div class='text-danger'> " . $dict["invalid confirmation"] . " </div>";
        else {
            $stmt = $pdo->prepare("INSERT INTO profiles (username, email, password) VALUES (?,?,?);");
            $stmt->execute([$_POST["username"], $_POST["email"], password_hash($_POST["password"], PASSWORD_DEFAULT)]);
            Utils::session();
            header("Location: login.php");
        }
    } 
?>