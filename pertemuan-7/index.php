<?php
use Weapon as H;
// namespace Weapon;
// include "sword.php";
include "spear.php";

trait Test {
    function Hello() {
        return "Hello World";
    }
}

$sword = new H\Spear();
echo $sword->getDamage();
?>