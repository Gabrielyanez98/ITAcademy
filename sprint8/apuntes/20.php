<?php

/*
class Pokemon {
    private $name;
    private $type;

    function __construct($name, $type){
        $this-> name = $name;
        $this-> type = $type;
    }

    function getName(){
        return $this -> name;
    }

    function getType(){
        return $this->type;
    }
}

class Attack {
    function displayPokemonAttack($pokemon){
        $attack = '';
        switch($pokemon->getType()){
            case 'electric':
                $attack = "Impactrueno";
                break;
            case "fire":
                $attack = "Lanzallamas";
                break;
            case "water":
                $attack = "Hidrobomba";
                break;
            default:
                 $attack = "Combate";
            break;
        }
        echo "{$pokemon->getName()} attacks with $attack" . "<br>";
    }
}

$pokemon1 = new Pokemon("Evee", "normal");
$pokemon2 = new Pokemon("Charizar", "fire");
$attack = new Attack;
$attack -> displayPokemonAttack($pokemon1);
$attack -> displayPokemonAttack($pokemon2);
*/

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

$waterAttack = new WaterAttack;

$electricAttack = new ElectricAttack;
$fireAttack = new FireAttack;

$pokemon1 = new Pokemon("charizar", "fire", $fireAttack);
$pokemon2 = new Pokemon('Pikachu', 'electric', $electricAttack);
$pokemon3 = new Pokemon('Pikachu', 'electric', $waterAttack);

echo "{$pokemon1->getName()} - {$pokemon1->getAttack()} <br>";
echo "{$pokemon2->getName()} - {$pokemon2->getAttack()} <br>";
echo "{$pokemon3->getName()} - {$pokemon3->getAttack()} <br>";


?>