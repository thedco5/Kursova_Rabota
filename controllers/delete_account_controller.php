<!-- TRANSLATE -->
<?php
    include_once "../models/dbconn.php";
    include_once "../models/utils.php";
    include_once "../models/lang.php";
    Utils::session();
    if (isset($_POST["password"]) && isset($_SESSION["id"])) {
        $stmt = $pdo->prepare("SELECT password FROM profiles WHERE id LIKE ?;");
        $stmt->execute([$_SESSION["id"]]);
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($res) != 1)
            echo "<div class='text-danger centered'> ERROR! </div>";
        else {
            if (password_verify($_POST["password"], $res[0]["password"])) {
                $sql = "DELETE FROM profiles WHERE id LIKE " . $_SESSION["id"] . ";";
                $pdo->query($sql);
                Utils::session();
                session_destroy();
                header("Location: home.php$lang_code");
            } else echo "<div class='text-danger centered'> Wrong password! </div>";
        }
    }
?>