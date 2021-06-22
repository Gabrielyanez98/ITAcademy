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

    class PokemonFly extends Pokemon {
        function canFly(){
            return "puedo volar";
        }
    }

    class Charizar extends PokemonFly{

    }

    class Charmander extends Pokemon {
        

    }
    
    $waterAttack = new WaterAttack;
    
    $electricAttack = new ElectricAttack;
    $fireAttack = new FireAttack;
    
    $pokemon1 = new Charizar("charizar", "fire", $fireAttack);
    $pokemon2 = new Charmander('Charmander', 'electric', $fireAttack);
    
    
    echo "{$pokemon1->getName()} - {$pokemon1->canFly()} <br>";
    echo "{$pokemon2->getName()} -  <br>";
    
?>