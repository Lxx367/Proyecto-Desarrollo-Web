<?php
require_once '../models/creature.php';
require_once '../../persistence/DAO/creatureDAO.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   createAction();
}
function createAction() {
    $name = $_POST["inputName"];
    $description = $_POST["inputDescription"];
    $avatar = $_POST["inputAvatar"];
    $attackPower = $_POST["inputAttackPower"];
    $lifeLevel = $_POST["inputLifeLevel"];
    $weapon = $_POST["inputWeapon"];
       
    $creature = new Creature();
    $creature->setName($name);
    $creature->setDescription($description);
    $creature->setAttackPower($attackPower);
    $creature->setAvatar($avatar);
    $creature->setLifeLevel($lifeLevel);
    $creature->setWeapon($weapon);
   
    $creatureDAO = new creatureDAO();
    $creatureDAO->insert($creature);
 
    header('Location: ../../index.php');
}