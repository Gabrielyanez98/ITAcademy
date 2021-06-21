<?php


    class clase1{
        private function saludar(){
            return "saludando";
        }

        public function mandaSaludo(){
            return self::saludar();
        }
    }

    $var = new Clase1();
    echo $var -> mandaSaludo();

?>