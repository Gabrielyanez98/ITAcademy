<?php

class Pokemon {
    private $name;
    private $type;
    private $attack;

    function __construct($name, $type, Attack $attack){
        $this-> name = $name;
        $this-> type = $type;
        $this-> attack = $attack;
    }

    function getName(){
        return $this -> name;
    }

    function getType(){
        return $this-> type;
    }

    function getAttack(){
        return $this-> attack->display();
    }
}

class PokemonFly extends Pokemon {
    function canFly(){
        return "Puedo volar";
    }
}

class PokemonSwim extends Pokemon{
    function canSwim(){
        return "Puedo  nadar";
    }
}

interface Attack {
    public function display();
}

class ElectricAttack implements Attack {
    function display(){
        return "Impactrueno";
    }
}

class FireAttack implements Attack {
    function display(){
        return "Lanzallamas";
    }
}

class WaterAttack implements Attack {
    function display(){
        return "Ataque de agua";
    }
}


class Charizar extends PokemonFly{
   
}

class Charmander extends Pokemon {
 

}

class Squirtle extends PokemonSwim {
    
}



$electricAttack = new ElectricAttack;
$fireAttack = new FireAttack;
$waterAttack = new WaterAttack;

$pokemon1 = new Charizar("Charizar", "fire", $fireAttack);
$pokemon2 = new Charmander('Charmander', 'electric', $fireAttack);
$pokemon3 = new Squirtle('Squirtle', 'water', $waterAttack);


echo "{$pokemon1->getName()} - {$pokemon1->canFly()} - <br>";
echo "{$pokemon2->getName()} <br>";
echo "{$pokemon3->getName()} - {$pokemon3->canSwim()}<br>";


?>