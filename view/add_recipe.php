<?php
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
        <link rel="stylesheet" href="../css/add_recipe.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <title><?php echo $dict["Upload a recipe"]; ?></title>
    </head>
    <body>
        <?php include_once "../controllers/add_recipe_controller.php"; ?>
        <!-- LANGUAGE CHOICE -->
		<select class="language mr-2"style="background: none; border: none;" onchange="location=this.value;">
			<option> <?php echo $dict["lang_abbr"]; ?> </option>
			<option value="?lang=<?php
									echo $dict["lang_abbr"] == "БГ" ? "en" : "bg";
								?>">
				<?php echo $dict["lang_abbr"] == "БГ" ? "EN" : "БГ"; ?>
			</option>
		</select>
        <div class="container">
            <div class="form-container mb-5 mt-5">
                <h1 class="pb-5 pt-2 text-center"><?php echo $dict["Upload a recipe"]; ?></h1>
                <form action="#" method="post">
                    <!-- PHP CONTROLLER -->
                    <?php include_once "../controllers/add_recipe_controller.php"; ?>
                    <div class="form-group">
                        <label for="recipe_name"><?php echo $dict["Recipe name"] . ":"; ?></label>
                        <input type="text" name="recipe_name" id="recipe_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label><?php echo $dict["Category"] . ":"; ?></label> <br>
                        <input type="radio" name="category" id="main" value="main_course" required>
                        <label for="main"><?php echo $dict["main dishes"]; ?></label>
                        <br>
                        <input type="radio" name="category" id="soups" value="soup" required>
                        <label for="soups"><?php echo $dict["soups"]; ?></label>
                        <br>
                        <input type="radio" name="category" id="salads" value="salad" required>
                        <label for="salads"><?php echo $dict["salads"]; ?></label>
                        <br>
                        <input type="radio" name="category" id="starters" value="starter" required>
                        <label for="starters"><?php echo $dict["starters"]; ?></label>
                        <br>
                        <input type="radio" name="category" id="desserts" value="dessert" required>
                        <label for="desserts"><?php echo $dict["desserts"]; ?></label>
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="ingredients"><?php echo $dict["Ingredients"] . ":"; ?></label>
                        <textarea name="ingredients" id="ingredients" rows="4" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="instructions"><?php echo $dict["Instructions"] . ":"; ?></label>
                        <textarea name="instructions" id="instructions" rows="8" class="form-control" required></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary"><?php echo $dict["Upload the recipe"]; ?></button>
                        <button type="reset" class="btn btn-danger"><?php echo $dict["Reset"]; ?></button>
                        <button type="reset" class="btn btn-warning" onclick="location.href='recipes.php'"><?php echo $dict["Cancel"]; ?></button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>