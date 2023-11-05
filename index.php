<?php
//Es necesario importar los ficheros creados con anterioridad porque se van a utilizar desde index.
require_once(dirname(__FILE__) . '/app/controllers/indexController.php');
//Recupero de la BD todas las criaturas a través del controlador
$creatures = indexAction();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Rol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">JUEGO DE ROL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a id="create-creature" class="nav-link active" aria-current="page" href="app/view/anadirCriatura.php">Crear criatura</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <!-- CARDS DE CADA UNA DE LAS CRIATURAS -->
        <?php
        for ($i = 0; $i < sizeof($creatures); $i += 3) {
            for ($j = $i; $j < ($i + 3); $j++) {
                if (isset($creatures[$j])) {
                    echo '<div class="col-md-4 mb-4">' . $creatures[$j]->printCreature() . '</div>';
                }
            }
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>



