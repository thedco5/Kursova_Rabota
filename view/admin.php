<?php
    include_once "../models/lang.php";
    include_once "../models/utils.php";
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
        <title> <?php echo $dict["Administration"]; ?> </title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/about_us.css">
        <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- HEADER -->
		<?php include_once "header.php"; ?>
		<!-- HEADER -->
        <?php
            Utils::session();
            if (isset($_SESSION["id"]) && $_SESSION["role"] == "admin") {
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td colspan="6"><?php echo $dict["Profiles"]; ?></td>
                </tr>
            </thead>
            <?php
                include_once "../models/dbconn.php";
                $array = $pdo->query("SELECT id, username, email, recipes_count, password, role FROM profiles LEFT JOIN (SELECT COUNT(id) as recipes_count, author FROM recipes GROUP BY author HAVING COUNT(id) > 0) AS t ON t.author LIKE profiles.id;")->fetchAll(PDO::FETCH_ASSOC);
                if (count($array) != 0) {
                    echo "<thead> <tr>";
                    foreach ($array[0] as $key=>$val)
                        echo "<th scope='col' class='text-center'>" . $key . "</th>";
                    echo "<th scope='col'></th>";
                    echo "</tr> </thead> <tbody>";
                    foreach ($array as $el) {
                        echo "<tr>";
                        foreach ($el as $key=>$val)
                            echo "<td>" . $val . "</td>";
                        if ($el["role"] != "admin") {
                            echo "<form action='../controllers/delete_user.php' method='post'>";
                            echo "<input type='text' name='id' value='" . $el["id"] . "' hidden>";
                            echo "<td> <input type='submit' value='Delete' class='btn btn-danger'></td>";
                            echo "</form>";
                        } else echo "<td> <button class='btn btn-danger' disabled> Delete </button> </td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                }
            ?>
        </table>
        <?php } else echo "<div class='text-danger'> FORBIDDEN ACTION </div>"; ?>
    </body>
</html>
