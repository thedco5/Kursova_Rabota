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
        <title> <?php echo $dict["Profile"]; ?> </title>
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
            if (isset($_SESSION["username"])) {
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td colspan="2"><?php echo $dict["Basic Info"]; ?></td>
                </tr>
            </thead>
            <tbody>
                <?php if ($_SESSION["role"] == "admin") { ?>
                    <tr>
                        <td><?php echo "ID: "; ?></td>
                        <td><?php echo $_SESSION["id"]; ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td><?php echo $dict["Username"] . ": "; ?></td>
                    <td><?php echo $_SESSION["username"]; ?></td>
                </tr>
                <tr>
                    <td><?php echo $dict["email"] . ": "; ?></td>
                    <td><?php echo ($_SESSION["email"] == "" ? "-" : $_SESSION["email"]); ?></td>
                </tr>
                <tr>
                    <td><?php echo $dict["Role"] . ": "; ?></td>
                    <td><?php echo $_SESSION["role"] == "admin" ? $dict["admin"] : $dict["user"]; ?></td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <button class="btn btn-info" onclick="location.href='edit.php<?php echo $lang_code; ?>'"><?php echo $dict["Edit"]; ?></button>
            <button class="btn btn-danger" onclick="location.href='delete_profile.php<?php echo $lang_code; ?>'"><?php echo $dict["Delete"]; ?></button>
        </div>
        <?php } ?>
    </body>
</html>