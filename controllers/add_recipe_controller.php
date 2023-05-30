<?php
    include_once "../models/utils.php";
    Utils::session();
    if (isset($_SESSION["id"])) {
        if (isset($_POST["recipe_name"]) && isset($_POST["ingredients"]) && isset($_POST["instructions"]) && isset($_POST["category"])) {
            if (strlen($_POST["recipe_name"]) == 0 || strlen($_POST["ingredients"]) == 0 || strlen($_POST["instructions"]) == 0) {
                echo "<span class='text-danger text-center'> Error, not all fields filled! </span>";
            } else { // IF EVERYTHING IS ALRIGHT :
                // DATABASE PART
                include_once "../models/dbconn.php";
                $stmt = $pdo->prepare("INSERT INTO recipes (name, author, datetime, category) VALUES (?,?,?,?)");
                $cat = $_POST["category"] == "main" ? "main_course" : $_POST["category"];
                $user = $_SESSION["id"];
                $stmt->execute([$_POST["recipe_name"], $user, date('Y-m-d H:i:s', time()), $cat]);
                // FILES PART
                $id = $pdo->query("SELECT id FROM recipes WHERE author LIKE $user ORDER BY id DESC LIMIT 1;")->fetchAll()[0]["id"];
                $file = fopen("../controllers/recipes/r$id.json", "w") or die("!FATAL ERROR!");
                $replace = array("\r\n", "\n", "\r");
                fwrite($file, "{ \"ingredients\" : \"");
                fwrite($file, str_replace("\"", "&quot;", str_replace($replace, "<br>", $_POST["ingredients"])));
                fwrite($file, "\", \"steps\" : \"");
                fwrite($file, str_replace("\"", "&quot;", str_replace($replace, "<br>", $_POST["instructions"])));
                fwrite($file, "\" }");
                $addr = $lang_code == "" ? "?id=$id" : $lang_code . "&id=$id";
                header("Location: ../view/recipes.php$addr");
            }
        }
    } else {
        echo "<span class='text-danger text-center'> FORBIDDEN ACTION. </span>";
    }
?>