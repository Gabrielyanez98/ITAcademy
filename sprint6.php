<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "<h1>Nivel 1 </h1>";
        echo "<h1>Ejercicio 1 </h1>";

        function miResta ($X, $Y) {
            return ($X-$Y);
        }

        echo "<p> La resta de los valores 6 y 4 en la función 'miResta' es de: " . miResta(6,4) . "</p>";

        echo "<br><h1>Ejercicio 2 - 3 </h1>";

        function numParImpar($X){
            if($X%2 == 0){
                return "El número: " . $X . " es par";
            } else {
                return "El número: " . $X . " es impar";
            }
        }

        echo "<p>" . numParImpar(23) . "</p>";

        echo "<br><h1>Ejercicio 4 </h1>";

        $X = 0;

        while ($X <= 10){
            echo $X . " <br> ";
            $X++;
        }
        
    ?>

    <?php

        echo "<br><br><h1>Nivel 2 </h1>";
        echo "<h1>Ejercicio 1 </h1>";

        function cuentaEscondite(){
            $X = 0;
            while ($X <= 10){
                echo $X . " <br> ";
                $X= $X + 2;
            }
        }
        
        cuentaEscondite();

        echo "<br><h1>Ejercicio 2 y 3 </h1>";

        function cuentaEsconditeConParametro($Y){
            $X = 0;
            while ($X <= $Y){
                echo $X . " <br> ";
                $X= $X + 2;
            }
        }
        
        cuentaEsconditeConParametro(10);

        
        echo "<br><br><h1>Nivel 3 </h1>";
        echo "<h1>Ejercicio 1</h1>";

        function aniosJuegosOlimpicos(){
            $primerAnio = 1960;

            while($primerAnio <= 2016){
                echo $primerAnio . "<br>";
                $primerAnio = $primerAnio + 4;
            }
        }

        aniosJuegosOlimpicos();

        echo "<h1>Ejercicio 2</h1>";

        function chocolate($cantidadChocolate){
            $precioChocolate = 1;
            return $cantidadChocolate + $precioChocolate;
        }

        function chicle($cantidadChicle){
            $precioChicle = 0.5;
            return $precioChicle + $cantidadChicle;
        }

        function caramelo($cantidadCaramelo){
            $precioCaramelo = 1.50;
            return $precioCaramelo + $cantidadCaramelo;
        }

        function sumaTotal(){
            return chocolate(4) + chicle(5) + caramelo(7);
        }

        echo "<br>" . sumaTotal();

        echo "<br><br><h1>Ejercicio 3</h1>";

        function erastotenes($numero){

            $myArray = array();
            $contador = 0;

            while ($contador <= $numero){
                array_push($myArray, $contador);
                $contador++;
            }
            
            
            for($i = 0; $i < count($myArray); $i++){
                if($myArray[$i]%2 !=0 and $myArray[$i]%3 != 0 and $myArray[$i]%5 != 0){

                    echo "<br>" . $myArray[$i];
                }
                
            }   

        }

        erastotenes(50);

    ?>
</body>
</html>