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
?>

<b> <?php echo $dict["Author"] . ": "; ?> </b>
<?php echo $recipe->author; ?> 
<br>
<b> <?php echo "Score: "; ?> </b>
<?php echo $score; ?> 
<br>
<b> <?php echo $dict["Recipe name"] . ": "; ?> </b>
<?php echo $recipe->name; ?> 
<br>
<b> <?php echo $dict["Category"] . ": "; ?> </b>
<?php echo $dict[$recipe->category]; ?>
<br>
<b> <?php echo $dict["Ingredients"] . ": "; ?> <br> </b>
<?php echo $recipe->ingredients; ?>
<br>
<b> <?php echo $dict["Instructions"] . ": "; ?> <br> </b>
<?php echo $recipe->steps; ?>

<?php } ?>