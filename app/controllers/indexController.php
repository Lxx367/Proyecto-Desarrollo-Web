<?php
require_once(dirname(__FILE__) . '/../../persistence/DAO/creatureDAO.php');
require_once(dirname(__FILE__) . '/../../app/models/creature.php');

function indexAction() {
    $creatureDAO = new creatureDAO();
    //Con el selectAll recibimos todas las criaturas
    return $creatureDAO->selectAll();
}
?>