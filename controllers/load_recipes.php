<?php
    include_once "../controllers/get_recipes.php";
    include_once "../models/dbconn.php";
    include_once "../models/utils.php";

    if (isset($_GET["cat"])) {
        $stmt = null;
        $arr = null;
        if ($_GET["cat"] == "personal") {
            $stmt = $pdo->prepare("SELECT DISTINCT * FROM recipes WHERE author LIKE ? ORDER BY RAND();");
            Utils::session();
            if(isset($_SESSION["id"])) {
                $stmt->execute([$_SESSION["id"]]);
                $arr = $stmt->fetchAll();
            }
        } else { 
            $stmt = $pdo->prepare("SELECT DISTINCT * FROM recipes WHERE category LIKE ? ORDER BY RAND() LIMIT 8;");
            $arr = $stmt->fetchAll();
        }
    } else $arr = $pdo->query("SELECT DISTINCT * FROM recipes ORDER BY RAND() LIMIT 8;")->fetchAll();

    foreach ($arr as $el) generate_recipe($el["id"]);
?>