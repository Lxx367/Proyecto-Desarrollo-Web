<?php

require_once(dirname(__FILE__) . '\..\conf\PersistentManager.php');


class creatureDAO {
    const CREATURE_TABLE = 'creature';
    //Conexión con la base de datos
    private $conn = null;

    public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }
    public function selectAll() {
        $query = "SELECT * FROM " . creatureDAO::CREATURE_TABLE;
        $result = mysqli_query($this->conn, $query);
        $creatures= array();
        while ($creatureBD = mysqli_fetch_array($result)) {

            $creature = new Creature();
            $creature->setIdCreature($creatureBD["idCreature"]);
            $creature->setName($creatureBD["name"]);
            $creature->setDescription($creatureBD["description"]);
            $creature->setAvatar($creatureBD["avatar"]);
            $creature->setLifeLevel($creatureBD["lifeLevel"]);
            $creature->setAttackPower($creatureBD["attackPower"]);
            $creature->setWeapon($creatureBD["weapon"]);
            
            array_push($creatures, $creature);
        }
        return $creatures;
    }
    public function insert($creature) {
        $query = "INSERT INTO " . creatureDAO::CREATURE_TABLE .
                " (name, description, avatar, attackPower, lifeLevel, weapon) VALUES(?,?,?,?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $creature->getName();
        $description = $creature->getDescription();
        $avatar = $creature->getAvatar();
        $attackPower = $creature->getAttackPower();
        $lifeLevel = $creature->getLifeLevel();
        $weapon = $creature->getWeapon();
        
        mysqli_stmt_bind_param($stmt, 'sssiis', $name, $description, $avatar, $attackPower, $lifeLevel, $weapon);
        return $stmt->execute();
    }

    public function selectById($idCreature) {
        $query = "SELECT name, description, avatar, attackPower, lifeLevel, weapon FROM " . creatureDAO::CREATURE_TABLE . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $idCreature);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $name, $description, $avatar, $attackPower, $lifeLevel, $weapon);

        $creature = new Creature();
        while (mysqli_stmt_fetch($stmt)) {
            $creature->setIdCreature($idCreature);
            $creature->setName($name);
            $creature->setDescription($description);
            $creature->setAvatar($avatar);
            $creature->setAttackPower($attackPower);
            $creature->setLifeLevel($lifeLevel);
            $creature->setWeapon($weapon);
       }

        return $creature;
    }

    public function update($creature) {
        $query = "UPDATE " . creatureDAO::CREATURE_TABLE .
                " SET name=?, description=?, avatar=?, attackPower=?, lifeLevel=?, weapon=?"
                . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $creature->getName();
        $description= $creature->getDescription();
        $avatar = $creature->getAvatar();
        $idCreature = $creature->getIdCreature();
        $attackPower = $creature->getAttackPower();
        $lifeLevel = $creature->getLifeLevel();
        $weapon = $creature->getWeapon();
        mysqli_stmt_bind_param($stmt, 'aa', $name, $description, $avatar, $attackPower, $lifeLevel, $weapon, $idCreature);
        return $stmt->execute();
    }
    
    public function delete($idCreature) {
        $query = "DELETE FROM " . creatureDAO::CREATURE_TABLE . " WHERE idCreature =?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $idCreature);
        return $stmt->execute();
    }
}
?>
