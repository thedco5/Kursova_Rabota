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
        <title> <?php echo $dict["about us"]; ?> </title>
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

        <!-- MAIN -->
        <main>
            <div class="image-aboutus"></div>

            <div class="container mt-5 mb-5">

                <div>
                    <h2 class="text-center"><?php echo $dict["our team"]; ?></h2>
                    <div class="border mb-5"></div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="team-img border">
                            <img src="../img/teodor.jpg" alt="">
                            <div class="team-content">
                                <h4><?php echo $dict["teodor"]; ?></h4>
                                <div class="border mb-3"></div>
                                <div class="icons">
                                    <a href="https://www.facebook.com/tedkosp" target="_blank"><i id="social-fb" class="fa fa-facebook"></i></a>
                                    <a href="https://github.com/thedco5" target="_blank"><i class="fa fa-github"></i></a>
                                    <a href="https://www.instagram.com/tedkop/" target="_blank"><i id="social-in" class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-img border">
                            <img src="../img/tsvetina.jpg" alt="">
                            <div class="team-content">
                                <h4><?php echo $dict["tsvetina"]; ?></h4>
                                <div class="border mb-3"></div>
                                <div class="icons">
                                    <a href="https://www.facebook.com/profile.php?id=100009300818488" target="_blank"><i id="social-fb" class="fa fa-facebook"></i></a>
                                    <a href="https://github.com/ttsvety" target="_blank"><i class="fa fa-github"></i></a>
                                    <a href="https://www.instagram.com/ttsvety05/" target="_blank"><i id="social-in" class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-img border">
                            <img src="../img/petur.jpg" alt="">
                            <div class="team-content">
                                <h4><?php echo $dict["petur"]; ?></h4>
                                <div class="border mb-3"></div>
                                <div class="icons">
                                    <a href="https://www.facebook.com/petyo.nik" target="_blank"><i id="social-fb" class="fa fa-facebook"></i></a>
                                    <a href="https://github.com/PetarNikolaev22" target="_blank"><i class="fa fa-github"></i></a>
                                    <a href="https://www.instagram.com/p_nikolaev_/" target="_blank"><i id="social-in" class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-img border">
                            <img src="../img/teodora.jpg" alt="">
                            <div class="team-content">
                                <h4><?php echo $dict["teodora"]; ?></h4>
                                <div class="border mb-3"></div>
                                <div class="icons">
                                    <a href="https://www.facebook.com/profile.php?id=100057294525660" target="_blank"><i id="social-fb" class="fa fa-facebook"></i></a>
                                    <a href="https://github.com/tedinn" target="_blank"><i class="fa fa-github"></i></a>
                                    <a href="https://www.instagram.com/teodoranikolaeva05/" target="_blank"><i id="social-in" class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border mt-5"></div>
            </div>
        </main>

        <!-- FOOTER -->
        <?php
        include_once "footer.php"; ?>
    </body>
</html>