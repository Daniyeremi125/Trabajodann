<?php 
/**
 * Estructuras repetitivas
 * - Operadores de incrememto y decremento
 * ++$variable  incremeta el valor de la varaible en uno antes de evaluar 
 * $variable++  incrementa el valor de la varibale en uno, evalua y luego incrementa
 * --$variable  disminuye el valor de la vcariable en uno antes de evaluar la 
 * $variable--  disminuye el valpr de la varibe en uno, evalua y luego incrementa 
 * 
 * Operadores complejos 
 * +=  un operador de aumento y acumulacion
 * -=  un operador de disminucion y acumulacion 
 * *=  un operador que acumula valor en productos 
 * /=  un operador que acumula divisiones 
 * 
 * * contadore
 * $contador = $contador +1;// $contaodor++
 * 
 * * acumuladores 
 * $acumulador = $acumulador + $valor; // $acumulador += $valor
 * 
 * ESTRUCTURA REPETITIVA WHILE
 * 
 * while(condicion){
 * instrucciones a repetir;
 * }
 */

 $i =10;
while ($i >= 10){
echo $i."<br";
$i--;
}

// listar los n primeros pares 

$n = 20;
$i = 1;
while ($i <=$n) {
    if ($i % 2 == 0){
        echo $i,"<br>";
    }
}

?> 