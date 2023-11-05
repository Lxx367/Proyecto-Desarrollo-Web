<?php
require_once(dirname(__FILE__) . '\..\..\persistence\DAO\creatureDAO.php');
require_once(dirname(__FILE__) . '\..\models\creature.php');
//Compruebo que recibo el parámetro
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $creatureDAO = new creatureDAO();
    $creature = $creatureDAO->selectById($id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Artean</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <style>
        .card {
            margin: 20px;
            max-width: 400px;
        }
        .description {
            margin-top: 10px;
        }
        .btn-group {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <img src="./../.<?php echo (isset($_GET["id"]) ? ($creature->getAvatar()) : ""); ?>" class="card-img-top" alt="Creature Image">
                    <div class="card-body">
                        <h2 class="card-title">Name: <?php echo (isset($_GET["id"]) ? $creature->getName() : ""); ?></h2>
                        <i class="card-text description">Description: <?php echo (isset($_GET["id"]) ? $creature->getDescription() : ""); ?></i>
                        <p class="card-text description">Attack Power: <?php echo (isset($_GET["id"]) ? $creature->getAttackPower() : ""); ?></p>
                        <p class="card-text description">Life Level: <?php echo (isset($_GET["id"]) ? $creature->getLifeLevel() : ""); ?></p>
                        <p class="card-text description">Weapon: <?php echo (isset($_GET["id"]) ? $creature->getWeapon() : ""); ?></p>
                    </div>
                    <div class="btn-group card-footer" role="group">
                        <a type="button" class="btn btn-success" href="editarCriatura.php?id=<?php echo (isset($_GET["id"]) ? $creature->getIdCreature() : ""); ?>">Modificar</a>
                        <a type="button" class="btn btn-danger" href="../controllers/deleteController.php?id=<?php echo (isset($_GET["id"]) ? $creature->getIdCreature() : ""); ?>">Borrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    <!-- JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>
</html>

