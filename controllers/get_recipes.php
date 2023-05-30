<?php
    include_once "../models/utils.php";
    function generate_recipe(int $id) : void {
        include_once "../models/lang.php";
        $lang_code = "";
        if (isset($_GET["lang"]))
            $lang_code = "?lang=" . $_GET["lang"];
        try {
            $recipe = Utils::get_recipe($id);
            $image = "";
            switch ($recipe->category) {
                case "dessert":
                    $image = "desert";
                    break;
                case "main_course":
                    $image = "osnovni";
                    break;
                case "starter":
                    $image = "predqstiq";
                    break;
                case "salad":
                    $image = "salad";
                    break;
                default: $image = "supi";
            }
?>
<div class="col-md-3">
    <a class="text-body text-decoration-none" href="<?php echo $lang_code == "" ? "?id=$id" : $lang_code . "&id=$id"; ?>" title="Оризови кюфтета с пилешко месо">
        <div class="recipe-container border mt-5">
            <div class="heading mt-1">
                <div class="title-h2"><?php echo $recipe->name; ?></div>
                <div class="border"></div>
            </div>
            <img src="../img/<?php echo $image; ?>_icon.png" class="p-1" width="100%" alt="">
            <div class="heading mt-1">
                <div class="border"></div>
                <div class="title-h2"><?php echo "Score" . ": " . $recipe->score; ?></div>
            </div>
        </div>
    </a>
</div>
<?php
        } catch (Exception $e) { Utils::error_message(15); }
    }
?>