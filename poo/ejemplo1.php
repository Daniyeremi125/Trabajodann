<?php 
class Automovil {

public $marca;
public $modelo;
public $placa;
public $color;
public $llantas;
public $motor;
public $puertas;
public $combustible;

}

$Automovil1 = new Automovil;
$Automovil2= new Automovil; 
$Automovil3= new Automovil;
$Automovil4= new Automovil;

$Automovil1->marca = "ford";
$Automovil1->modelo = "raptor";
$Automovil1->placa ="2c585w4";
$Automovil1->color ="amarillo";
$Automovil1->llantas =4;
$Automovil1->motor =1.5;
$Automovil1->puertas =4;
$Automovil1->combustible ="Gasolina";

$Automovil2->marca = "Chevrolet";
$Automovil2->modelo = "Camaro";
$Automovil2->placa ="a258b84";
$Automovil2->color ="Blanco";
$Automovil2->llantas =4;
$Automovil2->motor =1.5;
$Automovil2->puertas =2;
$Automovil2->combustible ="Gasolina";

$Automovil3->marca = "audi";
$Automovil3->modelo = "r8";
$Automovil3->placa ="28f6d4";
$Automovil3->color ="Negro";
$Automovil3->llantas =4;
$Automovil3->motor =1.5;
$Automovil3->puertas =2;
$Automovil3->combustible ="Gasolina";

echo $Automovil1->marca. " modelo".$Automovil1->modelo ." placa.".$Automovil1->placa ." color." .$Automovil1->color." llamtas." .$Automovil1->llantas ." color."  ;
echo "<br>";
?>