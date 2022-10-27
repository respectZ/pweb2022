<?php
namespace Weapon;
include "sword.php";

class Spear implements Weapon {
    private $damage = 2;
    public function getDamage() {
        return $this->damage;
    }
    public function setDamage($damage) {
        $this->damage = $damage;
    }
}

?>