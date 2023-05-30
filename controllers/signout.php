<?php
    include_once "../models/utils.php";
    include_once "../models/lang.php";
    Utils::session();
    session_destroy();
    header("Location: ..");
?>