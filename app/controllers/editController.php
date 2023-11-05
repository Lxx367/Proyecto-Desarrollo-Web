<?php
require_once(dirname(__FILE__) . '/../../persistence/DAO/creatureDAO.php');
require_once(dirname(__FILE__) . '/../models/creature.php');
editAction();
function editAction() {
    $idCreature = $_POST["idCreature"];
    $name = $_POST["inputName"];
    $description = $_POST["inputDescription"];
    $avatar = $_POST["inputAvatar"];
    $attackPower = $_POST["inputAttackPower"];
    $lifeLevel = $_POST["inputLifeLevel"];
    $weapon = $_POST["inputWeapon"];
    
    $creature = new Creature();
    $creature->setName($name);
    $creature->setIdCreature($idCreature);
    $creature->setDescription($description);
    $creature->setAvatar($avatar);
    $creature->setAttackPower($attackPower);
    $creature->setLifeLevel($lifeLevel);
    $creature->setWeapon($weapon);
    
    //Usamos el siguiente objeto para la base de datos
    $creatureDAO = new creatureDAO();
    $creatureDAO->update($creature);
    header('Location: ../../index.php');
}

?>

