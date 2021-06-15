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

  $varInteger = 45;
  $varDouble = 34.98;
  $varString = "Gabri";
  $varBoolen = true;
  $segundaString = "Mi cadena";

  echo "
    <h1> Nivel 1 </h1>
    <section>
    <h1>Ejercicio 1: </h1>";
    echo "<p>Mi variable integer: " . $varInteger . "</p>";

    echo "<p>Mi variable double: " . $varDouble . "</p>";
 
    echo "<p>Mi variable string: " . $varString . "</p>";
  
  
    echo "<p>Mi variable boolean: " . $varBoolen . 
  "</p>
  </section>";
  



  echo "<section>
    <br><br><h1>Ejercicio 2: </h1>";

    echo "<p>La longitud de la variable 'Gabri' es de: " .strlen($varString) ."</p>";
    echo "<p> La longitud de la variable 'Mi cadena' es de: " . strlen($segundaString)."</p>";

    echo "<p>La variable 'Gabri' en orden inverso es: " . strrev($varString)."</p>";
    echo "<p>La variable 'Mi cadena' en orden inverso es: " . strrev($segundaString)."</p>";

    echo "<p> Las dos variables concatenadas: " . $varString . " " . $segundaString . "</p>";
    
  echo "</section>";

  echo "<br><br><section> <h1>Ejercicio 3 </h1> ";
    echo "A continuación mi variable constante: ";
    define("MiNombre", "Me llamo Gabriel");
    echo MiNombre;
  echo "</section>";
?>

<?php

  echo "<br><br><h1>Nivel 2</h1>";
  echo "<section><h1>Ejercicio 2</h1>";
  $arrayCincoInteger = array ("1","2","3","4","5");
  $arrayTresInteger = array ("6","7","8");

  array_push($arrayTresInteger, "9");

  echo "<h1>Ejercicio 3 </h1>";
  $miNuevoArray = array_merge($arrayCincoInteger, $arrayTresInteger);
  echo "La suma del nuevo array es de:  " . count($miNuevoArray);
  
  echo "</section>";
  
  echo "<br><br><h1>Nivel 3 </h1>";

  echo "<h1>Ejercicio 1 </h1>";
  
  for ($i = 0; $i < count($miNuevoArray); ++$i){
    echo "<p>Los valores de mi array son: " . $miNuevoArray[$i] . "</p>";
  }

  echo "<h1>Ejercicio 2 </h1>";

  $X = 10;
  $Y = 5;
  $N = 15.5;
  $M = 20.3;

  echo "<p>El valor de X es: " . $X . "</p>";
  echo "<p>El valor de y es: " . $Y . "</p>";
  echo "<p>La suma de X e Y es: " . ($X + $Y) . "</p>";

  echo "<p>La resta de X e Y es: " . ($X + $Y) . "</p>";
  echo "<p>El producto de X e Y es: " . ($X * $Y) . "</p>";
  echo "<p>La división de X e Y es: " . ($X/ $Y) . "</p>";
  echo "<p>El módulo es: " . ($X%$Y) ."</p>";

  echo "<p>El valor de X es: " . $N . "</p>";
  echo "<p>El valor de y es: " . $M . "</p>";
  echo "<p>La suma de X e Y es: " . ($N + $M) . "</p>";

  echo "<p>La resta de X e Y es: " . ($N + $M) . "</p>";
  echo "<p>El producto de X e Y es: " . ($N * $M) . "</p>";
  echo "<p>La división de X e Y es: " . ($N/ $M) . "</p>";
  echo "<p>El módulo es: " . ($N%$M) . "</p>";

  echo "<p> el doble de: " . $X . "es de: " . ($X*$X) . "</p>";
  echo "<p> el doble de: " . $Y . "es de: " . ($Y*$Y) . "</p>";
  echo "<p> el doble de: " . $M . "es de: " . ($M*$M) . "</p>";
  echo "<p> el doble de: " . $N . "es de: " . ($N*$N) . "</p>";

  echo "<p>La suma de todas las variables es de: " . ($X+$Y+$N+$M) ."</p>";
  
  echo "<p>El producto de todas las variables es de: " . ($X*$Y*$N*$M) ."</p>";

?>




</body>
</html>