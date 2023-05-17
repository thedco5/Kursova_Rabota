<!-- TRANSLATE -->
<?php
    include_once "../models/dbconn.php";
    include_once "../models/utils.php";
    if (isset($_POST["password"])) {
        if (isset($_POST["username"])) {
            $stmt = $pdo->prepare("SELECT id, password, role, email FROM profiles WHERE username LIKE ?;");
            $stmt->execute([$_POST["username"]]);
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            if (count($res) != 1)
                echo "<div class='text-danger centered'> Such account does not exist! </div>";
            else {
                if (password_verify($_POST["password"], $res[0]["password"])) { // hash it!
                    Utils::session();
                    $_SESSION["id"] = $res[0]["id"];
                    $_SESSION["username"] = $_POST["username"];
                    $_SESSION["role"] = $res[0]["role"];
                    $_SESSION["email"] = $res[0]["email"];
                    header("Location: home.php");
                } else echo "<div class='text-danger centered'> Wrong password! </div>";
            }
        } else if (isset($_POST["email"])) {
            $stmt = $pdo->prepare("SELECT id, username, password, role FROM profiles WHERE email LIKE ?;");
            $stmt->execute([$_POST["email"]]);
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            if (count($res) != 1)
                echo "<div class='text-danger centered'> Such email does not exist! </div>";
            else {
                if (password_verify($_POST["password"], $res[0]["password"])) { // hash it!
                    Utils::session();
                    $_SESSION["id"] = $res[0]["id"];
                    $_SESSION["username"] = $res[0]["username"];
                    $_SESSION["role"] = $res[0]["role"];
                    $_SESSION["email"] = $_POST["email"];
                    header("Location: home.php");
                } else echo "<div class='text-danger centered'> Wrong password! </div>";
            }
        }
    }
?>
