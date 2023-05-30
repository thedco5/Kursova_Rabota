<?php
    $DBINFO = json_decode(file_get_contents("../models/info.json"), true)["db"];
    $DSN = "mysql:host=" . $DBINFO["host"] . ";dbname=" . $DBINFO["dbname"];
    $pdo = new PDO($DSN, $DBINFO["username"], $DBINFO["password"]);
?>