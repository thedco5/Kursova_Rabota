<?php
    include_once "../models/utils.php";
    include_once "../models/lang.php";
    $lang_code = "";
    if (isset($_GET["lang"]))
        $lang_code = "?lang=" . $_GET["lang"];
?>
<!DOCTYPE html>
<html lang="<?php echo $dict["lang_code"]; ?>">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/recipe_view.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <title><?php echo $dict["Recipes"]; ?></title>
    </head>
    <body>
        <header> <?php include_once "header.php"; ?> </header>
        <?php
            if(isset($_GET["id"])) {
                include_once "../controllers/display_recipe.php";
            } else {
        ?>
        <main>
            <h1 class="text-center mt-2"><?php echo $dict["Recipes"]; ?></h1>
            <div class="border"></div>
            <?php
                Utils::session();
                if (isset($_SESSION["id"])) {
            ?>
            <div class="text-center">
                <button class="btn btn-danger mt-5 mb-3">
                    <a class="text-body text-decoration-none" href=<?php echo "'add_recipe.php" . $lang_code . "'>" . $dict["Upload a recipe"]; ?> </a>
                </button>
                <button class="btn btn-primary mt-5 mb-3">
                    <?php if (@$_GET["cat"] != "personal") { ?>
                        <a class="text-body text-decoration-none" href=<?php echo "'recipes.php" . ($lang_code == "" ? "?cat=personal" : $lang_code . "&cat=personal") . "'>" . $dict["Show my recipes"]; ?> </a>
                    <?php } else { ?>
                        <a class="text-body text-decoration-none" href=<?php echo "'recipes.php" . $lang_code . "'>" . $dict["Show all recipes"]; ?> </a>
                    <?php } ?>
                </button>
            </div>
            <?php } ?>
            <div class="container mb-5">
            <div class="row">
                <!-- PHP CONTROLLER -->
                <?php include_once "../controllers/load_recipes.php"; ?>
                <!-- PHP CONTROLLER -->
            </div>
        </div>
        </main>

        <?php } ?>

        <footer><?php include_once "footer.php"; ?></footer>
    </body>
</html>