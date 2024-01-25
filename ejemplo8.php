<?php
/**
 * estructura repetitiva
 * operadores de incremento y decremento
 * ++$variable  incrementa el valor de la variable en uno antes de evaluar
 * $variable++  incrementa el valor de la variable en uno, evalua y luego incrementa
 * 
 * operadores de decremento 
 * --$variable  decrementa el valor de la variable en uno antes de evaluar
 * $variable--  incrementa el valor de la variable en uno, evalua y luego incrementa
 * 
 * operadores complejos 
 * permite acumular valores de manera sucesiva +-
 * +=   un operador de aumento o de incremento y de acumulacion
 * -=   un operador de decremento y acumulacion
 * *=   un operador que acumula valores en productos 
 * /=   un operador que acumula divisiones
 * 
 * Contadores (dentro de la estructutras repetitivas)
 * permite controlar el conteo de cuantas veces se esta repitiendo 
 * siempre aumenta o disminuye en un valor
 * siempre esta dentro de las estructuras de una estructura repetitiva
 * sintaxis:
 *      $contador=$contador+1 //expresion que ayuda a incrementar en uno ese valor
 *                            // $contador++
 * 
 * Acumulador
 * es similar que un contador se diferencias por lo que acumula
 * sintaxis:
 *      $acumulador=$acumulador+$valor; // $acumulador += $valor
 * 
 * ESTRUCTURA DE REPETICION     WHILE
 * la respeticion es finita 
 * trabaja con una condicion logica / ayuda a controlar la cantidad de respticiones
 * sintaxis
 * 
 *      while (condicion){
 *      condiciones a repetir;
 *      }
 */

    $i= 10;
    while($i>=1){
        echo $i."<br>";
        $i--;
    }

    $n=20;
    $i=1;

    while($i<=$n){
        if($i % 2 == 0){
            echo $i."<br>";
        }
        $i++;
    }
/**listar los  n primeros elemntos de la siguiente serie: 1/2, 3/4, 5/6, ..... */
echo "<br>";
$i=1;
$n = 10;
while ($i <= $n) {
    if ($i%2==0) {
        echo $i." ";
    }
    $i++;}



?>






