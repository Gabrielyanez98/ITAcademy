<?php

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

    function addPokemonToPokedex(){

    }

    function deletePokemonToPokedex(){
        
    }

    function updatePokemonToPokedex(){
        
    }
}

class Pokedex {
    private $pokemons = [];

    function add($pokemon){
        array_push($this->pokemons,$pokemon);
    }

    function delete(){
        
    }

    function update(){
        
    }

    function getPokemons(){
        return $this->pokemons;
    }

}

$pokemon = new Pokemon("Evee", "normal");
$pokemon2 = new Pokemon("Charizar", "fire");
$pokedex = new Pokedex;
$pokedex->add($pokemon);
$pokedex->add($pokemon2);

foreach($pokedex->getPokemons() as $pokemon){
    echo $pokemon->getName() . " " . $pokemon-> getType() .  "<br>";
}

?>