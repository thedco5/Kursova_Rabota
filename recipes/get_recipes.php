<?php
    include "../utils.php";
    $dbinfo = json_decode(file_get_contents("../info.json"), true)["db"];
    $dsn = "mysql:host=" . $dbinfo["host"] . ";dbname=" . $dbinfo["dbname"];
    try {
        $pdo = new PDO($dsn, $dbinfo["username"], $dbinfo["password"]);
        $recipe = Utils::get_recipe($pdo, 1);
        echo $recipe->id;
        print_r( $recipe );
        } catch (Exception $e) { Utils::error_message(); }
?>