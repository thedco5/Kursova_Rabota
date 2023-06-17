<?php
    include_once "../models/dbconn.php";
    if (isset($_POST["id"])) {
        $sql = "DELETE FROM recipes WHERE id LIKE " . $_POST["id"] . ";";
        $pdo->query($sql);
        $stat = unlink("../controllers/recipes/r" . $_POST["id"] . ".json");
    }
    header("Location: ../view/recipes.php");
?>
