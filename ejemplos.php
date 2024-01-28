<?php

$n = 20;
$i = 1;
while ($i <=$n) {
    if ($i % 2 == 0){
        echo $i,"<br>";
    }
}

// listar los n primeros numeros
//listar los n primeros pares
        echo "<br>";
        $i=1;
        $n = 10;
        while ($i <= $n) {
            if ($i%2==0) {
                echo $i." ";
            }
            $i++;
        }
        //Listar los N primeros elementos de la siguiente serie 1/2, 3/4, 5/6 ,..N
        echo "<br>";
        $c = 1;
        $b = 0;
        while ($b <= $n) {

            $b = $b + 2;
            echo $c."/".$b." ";
            $c = $c + 2;
        }

        // los n primero elementos de la siguiete serie: 
        // 1/5, -2/10, 3/15, -4/20..N

        $n = 20;
        $i = 1;
        $num = 1;
        $den = 5;

        while ($i<=$n){
            if ($i % 2 != 0){
                echo $num."/".$den."<br>";     
            } else{
                echo "-",$sum."/".$den."<br>";

            }

            $num+=1;
            $den+=5;
            $i++;
            
        }

        /**
         * ESTRUCTURA REPETITIVA FOR
         * for(inicializacion; condicion; incremento){
         * intruccion a repetir;
         * }
         */

         for ($i=10; $i>=1; $i--){
            echo $i."<br>";
         }


         /**
          * ANIDACION DE ESTRUCTURAS REPETITIVAS 
          */

          $n = 10;
          $i = 1;
          while ($i <= $n){
            $j =1;
            while ($j <= $i){
                echo $i;
                $j++;
            }
            echo "<br>";
          }

        // Mostrar en pamtalla todos los numeros pares comprendidos
        //entre  1 y 100 en la fila de 5 numeros, 10 numeros y 15 numeros

        /**
         * 2,4,6,8,10
         * 12,14,16,18,20,22,24,26,28,30
         * 32,34,36,38,40,42,44,46,48,50,52,54,56,58,60
         */

$n =  ;
$i = ;


?>