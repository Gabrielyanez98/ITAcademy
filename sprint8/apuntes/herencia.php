<?php
    class clasePadre{
        public function metodoPadre(){
            return "Hola desde el padre";
        }

        public function metodo1(){
            return "Este el método padre";
        }
    }

    class claseHijo extends clasePadre{
        public function metodohijo(){
            return parent::metodo1();
        }
        public function metodo1(){
            return "Este es método hijo";
        }
    }

    //$obj = new claseHijo();
    //echo $obj -> metodoPadre();
    echo claseHijo::metodohijo();


?>