<?php
    include_once "../models/dbconn.php";
    include_once "../models/utils.php";

    $stmt = $pdo->prepare("SELECT id FROM profiles WHERE id LIKE ?;");
    $stmt->execute([$_SESSION["id"]]);
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($res) != 1) 
        echo "<div class='text-danger centered'> Error! </div>";
    else {
        $flag = true;
        $show = false;
        if (isset($_POST["username"])) {
            if(!(preg_match("/[a-zA-Z0-9_]+/", $_POST["username"]))) {
                echo "<div class='text-danger'> " . $dict["invalid username"] . " </div>";
                $flag = false;
            } else {
                $stmt = $pdo->prepare("UPDATE profiles SET username = ? WHERE id = ?;");
                $stmt->execute([$_POST["username"], $_SESSION["id"]]);
                $_SESSION["username"] = $_POST["username"];
            }
            $show = true;
        }
        if (isset($_POST["email"]) && strlen($_POST["email"]) != 0) {
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                echo "<div class='text-danger'> " . $dict["invalid email"] . " </div>";
                $flag = false;
            } else {
                $stmt = $pdo->prepare("UPDATE profiles SET email = ? WHERE id = ?;");
                $stmt->execute([$_POST["email"], $_SESSION["id"]]);
                $_SESSION["email"] = $_POST["email"];
            }
            $show = true;
        }
        if (isset($_POST["password"])) {
            if(!(preg_match("/.{8,}/", $_POST["password"]))) {
                echo "<div class='text-danger'> " . $dict["invalid password"] . " </div>";
                $flag = false;
            } else {
                $stmt = $pdo->prepare("UPDATE profiles SET password = ? WHERE id = ?;");
                $stmt->execute([password_hash($_POST["password"], PASSWORD_DEFAULT), $_SESSION["id"]]);
            }
            $show = true;
        }
        if ($flag && $show) echo "<div class='text-success'> " . $dict["Successfully saved!"] . " </div>";
    }
?>