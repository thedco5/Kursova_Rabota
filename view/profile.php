<?php 
    include_once "../models/lang.php";

?>
<!DOCTYPE html>
<html lang="bg">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Профил</title>
    </head>
    <body>
        Profile page <br>
        <pre> <?php
            include_once "../models/utils.php";
            Utils::session();
            var_dump($_SESSION);
        ?> </pre>
    </body>
</html>
