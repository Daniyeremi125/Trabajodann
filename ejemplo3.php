<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liatado de casos</title>
</head>
<body>
    <h3>Listado de casos a desarrollasr en PHP </h3>
</header>
<section>
<?php
for ($i=1; $i <= 7 ; $i++){
    ?>
    <p>Caso <?php echo $i; ?></p>
    <?php
}

/* $variable = Literal
Entero 10 100 230-123
Reales 20.50 o.0052 - 23.35
Boleanos true  false
Caracter 'a' "c"
Cadena 'Jefe'  "Administrador"

*/

/*

Operadores:
+ Suma                      $a = $b + $c
- Resta                     $a = $b - $c
* Multiplicasion            $a = $b * $c
/ Division entera           $a = $b / $c
% Resto de la division      $a = $b % $c

*/

/* Operadores de cadena de caractres:

. Punto (Sirve para unir o concatenar cadena de caracteres)


 */

 $a= 15;
 $cadena = $a . "nota final del curso";

 echo $cadena;

 printf("<br>La nota final del curso es %.2f",$a);
?>

</body>
</html>