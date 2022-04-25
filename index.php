<?php

$pg = "inicio";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body id="inicio">
    <?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete">
                <a href="proyectos.php"><img src="images/cohete.svg" class="cohete"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                <div class="input-home">
                    <p class="p-1">Bienvenid@ a mi sitio web sobre docencia en sistemas.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.php" class="btn shadow">Conoce mis proyectos</a>
            </div>
        </div>


        <footer class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-3">
                    <i class="fa-brands fa-github"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>
                <div class="col-12 col-sm-3">Sponsor <a href="https://depcsuite.com">DePC Suite</a></div>
                <div class="col-12 col-sm-3"><a href="mailto:axel-3-zg@outlook.com>">axel-3-zg@outlook.com</a>
                </div>
            </div>
        </footer>
        <div class="whatsapp pt-3 pb-4 px-3">
            <a href="https://api.whatsapp.com/send?phone=541124521832">
                <i class="fa-brands fa-whatsapp"></i></a>
        </div>
</body>

</html>