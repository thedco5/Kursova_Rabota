<?php
    include_once "../models/dbconn.php";
    if (isset($_POST["id"])) {
        $sql = "DELETE FROM recipes WHERE id LIKE " . $_POST["id"] . ";";
        $pdo->query($sql);
    }
    header("Location: ../view/recipes.php");
?>