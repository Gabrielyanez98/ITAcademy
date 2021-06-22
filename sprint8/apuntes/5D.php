<?php

/*
    class Pokedex  {
        private $pokemons = [];
        private $api;

        function __construct($pokemons){
            $this->pokemons = $pokemons;
            $this->api = new ApiPokemon;
        }

        function getInfo() {
            foreach ($this-> pokemons as $pokemon){
                echo $this->api->getInfo($pokemon). "<br><br>";
            }
        }
    }

    class ApiPokemon {
        function getInfo($pokemon) {
            $ch = curl_init();
            if(!$ch){
                die("Coldn't initialize");
            }

            $ret = curl_setopt($ch, CURLOPT_URL, "mi url/$pokemon");

            $ret = curl_exec($ch);

            if(empty($ret)){
                die(curl_error($ch));
                curl_close($ch);
            } else {
                $info = curl_getinfo($ch);
                curl_close($ch);
            }
        }
    }

$list = ["Charizar", "Eevee", "Pikachu"];

$pokedex = new Pokedex($list);

$pokedex -> getInfo();
*/

class Pokedex  {
    private $pokemons = [];
    private $dependency;

    function __construct($pokemons,$dependency){
        $this->pokemons = $pokemons;
        $this->dependency = $dependency;
    }

    function getInfo() {
        foreach ($this-> pokemons as $pokemon){
            echo $this->dependency->getInfo($pokemon). "<br><br>";
        }
    }
}

class ApiPokemonJSON {
    function getInfo($pokemon) {
        $ch = curl_init();
        if(!$ch){
            die("Coldn't initialize");
        }

        $ret = curl_setopt($ch, CURLOPT_URL, "mi url/$pokemon");

        $ret = curl_exec($ch);

        if(empty($ret)){
            die(curl_error($ch));
            curl_close($ch);
        } else {
            $info = curl_getinfo($ch);
            curl_close($ch);
        }
    }
}


class ApiPokemonHTML {
    function getInfo($pokemon) {
    return "Otra lógica";
    }
}

$list = ["Charizar", "Eevee", "Pikachu"];


$html = new ApiPokemonHTML;
$json = new ApiPokemonJSON;
$pokedex = new Pokedex($list, $json);
$pokedex -> getInfo();

?>

