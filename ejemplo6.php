<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de constantes</title>
</head>
<body>

<header>

<h3>Manejo de Constantes</h3>
  
</header>
<section>

<?php

define("PI",3,1416);
define("IGV",0.18);

$radio = 12;
$valorventa = 250.50;

$area = PI *$radio *$radio;
$impuesto = $velorventa * IGV;

echo "<br> El area del circulo con radio $radio es $area";
echo "<br> El impuesto a la venta de $valorventa es $impuesto";

?>
</section>
  
</body>
</html>