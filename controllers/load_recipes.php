<?php
    include_once "../controllers/get_recipes.php";
    include_once "../models/dbconn.php";

    if (isset($_GET["cat"])) {
        $stmt = $pdo->prepare("SELECT DISTINCT * FROM recipes WHERE category LIKE ? ORDER BY RAND() LIMIT 8;");
        $stmt->execute([$_GET["cat"]]);
        $arr = $stmt->fetchAll();
    } else $arr = $pdo->query("SELECT DISTINCT * FROM recipes ORDER BY RAND() LIMIT 8;")->fetchAll();

    foreach ($arr as $el) generate_recipe($el["id"]);
?>