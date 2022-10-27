<?php

trait Test {
    function Hello() {
        return "Hello World";
    }
}

trait Test2 {
    function World() {
        return "World Hello";
    }
}

class Weapon {
    use Test, Test2;
}

class Spear {
    use Test;
}

$weapon = new Weapon();
echo $weapon->World();
// $spear = new Spear();
// echo $spear->Hello();

?>