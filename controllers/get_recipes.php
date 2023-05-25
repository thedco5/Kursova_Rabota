<?php
    include_once "../models/utils.php";
    function generate_recipe() : void {
        try {
            $recipe = Utils::get_recipe(1000000000);
            print_r( $recipe );
        } catch (Exception $e) { Utils::error_message(15); }
    }
?>
