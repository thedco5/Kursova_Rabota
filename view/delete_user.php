<?php
    include_once "../models/dbconn.php";
    if (isset($_POST["id"])) {
        $sql = "DELETE FROM profiles WHERE id LIKE " . $_POST["id"] . ";";
        $pdo->query($sql);
    }
    header("Location: admin.php");
?>