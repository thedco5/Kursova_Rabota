<?php
    include_once "../models/utils.php";
    Utils::session();
    session_destroy();
    header("Location: ..");
?>
