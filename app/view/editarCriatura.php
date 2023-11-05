<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '\..\..\persistence\DAO\creatureDAO.php');
require_once(dirname(__FILE__) . '\..\models\Creature.php');
//Compruebo que me llega por GET el parámetro
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $creatureDAO = new creatureDAO();
    $creature = $creatureDAO->selectById($id);
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>rolegame</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>

        <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../../index.php">JUEGO DE ROL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="container">

            <form method="POST" action="../controllers/editController.php" name="formEdit">

                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName" name="inputName" value="<?php echo $creature->getName(); ?>">
                <label for="inputDescription" class="form-label">Description</label>
                <input type="text" class="form-control" id="inputDescription" name="inputDescription" value="<?php echo $creature->getDescription();?>">
                <label for="inputAvatar" class="form-label">Avatar</label>
                <input type="text" class="form-control" id="inputAvatar" name="inputAvatar" value="<?php echo $creature->getAvatar(); ?>">
                <label for="inputAttackPower" class="form-label">Attack Power</label>
                <input type="text" class="form-control" name="inputAttackPower" value="<?php echo $creature->getAttackPower(); ?>">
                <label for="inputLifeLevel" class="form-label">Life Level</label>
                <input type="text" class="form-control" name="inputLifeLevel" value="<?php echo $creature->getLifeLevel(); ?>">
                <label for="inputWeapon" class="form-label">Weapon</label>
                <input type="text" class="form-control" name="inputWeapon" value="<?php echo $creature->getWeapon() ?>">
                <input type="hidden" name="idCreature" value="<?php echo $creature->getIdCreature(); ?>">
                <input type="submit" id="btnEdit">

            </form>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>

