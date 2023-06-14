<?php
    include_once "../models/dbconn.php";
    include_once "../models/utils.php";
    include_once "../models/lang.php";
    $stmt = $pdo->prepare("SELECT * FROM recipes WHERE id LIKE ?;");
    $stmt->execute([$_GET["id"]]);
    $arr = $stmt->fetchAll();
    if (count($arr) == 1) {
        $recipe = Utils::get_recipe($_GET["id"]);
        $score = $recipe->score + 1;
        $id = $_GET["id"];
        $pdo->query("UPDATE recipes SET score = $score WHERE id = $id;");
        Utils::session();
?>

<!DOCTYPE html>
    <html lang="<?php echo $dict["lang_code"]; ?>">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $dict["about us"]; ?></title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/display_recipe.css">
        <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="container m-5">

            <div class="row">

                <div class="col-md-6">
                    <div class="recipe-img">
                        <img src="../img/recepie_details.png" alt="" width="100%" height="auto">
                    </div>
                </div>

                <div class="col-md-6">
                    <h3 class="recipe-name"><?php echo $recipe->name ?></h3>

                    <div class="recipes-details">
                        <ul class="list-group">
                            <li class="list-group-item mb-0"><?php echo $dict['Author'] . ": " . $recipe->author ?></li>
                            <li class="list-group-item  mb-0"><?php echo $dict['Score'] . ": " . $recipe->score ?></li>
                            <li class="list-group-item  mb-0    "><?php echo $dict['Category'] . ": " . $dict[$recipe->category]; ?></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row mt-5">

                    <div class="col-md-6 mb-5">
                        <h3><?php echo $dict['Ingredients'] . ": "; ?></h3>
                        <ul class="list-group">
                                <li class=" list-group-item"><?php echo $recipe->ingredients; ?></li>

                            </ul>
                    </div>

                    <div class="col-md-6">
                        <h3><?php echo $dict['Instructions'] . ": "; ?></h3>
                        <ul class="list-group">
                                <li class=" list-group-item"><?php echo $recipe->steps; ?></li>
                            </ul>
                    </div>

            </div>
        </div>

        <?php
         Utils::session();
         if (@$_SESSION["id"] == $recipe->author_id) {
             echo "<form action='../controllers/delete_recipe.php' method='post'>";
             echo "<input type='text' name='id' value='" . $recipe->id . "' hidden>";
             echo "<div class='text-center'>";
             echo "<input type='submit' value='Delete' class='btn btn-danger text mb-5'>";
             echo "</form>"; 
             echo "</div>";
       }
       ?>

    </body>
    </html>

<?php } ?>