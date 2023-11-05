<?php

class Creature {
    
    private $idCreature;
    private $name;
    private $description;
    private $avatar;
    private $attackPower;
    private $lifeLevel;
    private $weapon;
    
    public function __construct() {}
    
    public function getIdCreature(){
        return $this->idCreature;
    }
    
    public function setIdCreature($idCreature) {
        $this->idCreature = $idCreature;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getDescription(){
        return $this->description;
    }
        
    public function setDescription($description) {
        $this->description = $description;
    }
    
    public function getAvatar(){
        return $this->avatar;
    }
    
    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }
    
    public function getAttackPower(){
        return $this->attackPower;
    }
    
    public function setAttackPower($attackPower) {
        $this->attackPower= $attackPower;
    }
    
    public function getLifeLevel(){
        return $this->lifeLevel;
    }
    
    public function setLifeLevel($lifeLevel) {
        $this->lifeLevel = $lifeLevel;
    }
    
    public function getWeapon(){
        return $this->weapon;
    }
    
    public function setWeapon($weapon) {
        $this->weapon = $weapon;
    }
    
    function printCreature(){
        $result = '<div class="row">';
        $result .= '<div class="card col-9">';
        $result .= '<img src="' . $this->getAvatar() . '" class="card-img-top" alt="card-group-image">';
        $result .= '<div class="card-body">';
        $result .= '<h2 class="card-title">' . $this->getName() . '</h2>';
        $result .= '<p class="card-text">' . $this->getDescription() . '</p>';
        $result .= '</div';
        $result .= '<div class="card-footer">';
        $result .= '<a type="button" class="btn btn-primary" href="app/view/detalles.php?id=' . $this->getIdCreature() . '">Detalles</a>';
        $result .= '<a type="button" class="btn btn-warning" href="app/view/editarCriatura.php?id=' . $this->getIdCreature() . '">Editar</a>';
        $result .= '<a type="button" class="btn btn-danger" href="app/controllers/deleteController.php?id=' . $this->getIdCreature() . '">Eliminar</a>';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '</div>';
        return $result;
    }
    
}

