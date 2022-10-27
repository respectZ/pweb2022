<?php

namespace Weapon;
// Abstract
// abstract class Weapon {
//     // Field
//     public $damage;

//     // Method
//     abstract public function getDamage();
// }

// class Sword extends Weapon {
//     public $damage = 0;
//     public function getDamage() {
//         return $this->damage;
//     }
// }

// Interface
interface Weapon {
    public function getDamage();
    public function setDamage($damage);
}

class Sword implements Weapon {
    public $damage = 0;
    public function getDamage() {
        return $this->damage;
    }
    public function setDamage($damage) {
        $this->damage = $damage;
    }
}

// $sword_1 = new Sword();
// echo $sword_1->getDamage() . "<br>";
// $sword_1->setDamage(10);
// echo $sword_1->getDamage();
?>