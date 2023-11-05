<?php
require_once(dirname(__FILE__) . '/../../persistence/DAO/creatureDAO.php');
require_once(dirname(__FILE__) . '/../models/creature.php');

$creatureDAO = new creatureDAO();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    deleteAction();
}

function deleteAction() {
    $idCreature = $_GET["id"];
    $creatureDAO = new creatureDAO();
    //Aquí eliminamos la criatura
    $creatureDAO->delete($idCreature);
    header('Location: ../../index.php');
}
?>

